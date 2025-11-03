#!/usr/bin/env php
<?php
/**
 * Migration script to convert Doctrine annotations to PHP 8 attributes
 *
 * Usage: php migrate-to-attributes.php [file or directory]
 *
 * This script converts:
 * - @Salesforce\AnnotationObject to #[SalesforceObject]
 * - @Salesforce\Field to #[Field]
 * - @Salesforce\Relation to #[Relation]
 */

if ($argc < 2) {
    echo "Usage: php migrate-to-attributes.php [file or directory]\n";
    echo "Example: php migrate-to-attributes.php Model/\n";
    exit(1);
}

$target = $argv[1];

if (is_file($target)) {
    $files = [$target];
} elseif (is_dir($target)) {
    $files = glob(rtrim($target, '/') . '/*.php');
} else {
    echo "Error: $target is not a valid file or directory\n";
    exit(1);
}

foreach ($files as $file) {
    echo "Processing: $file\n";
    convertFile($file);
}

echo "Done!\n";

function convertFile($filepath)
{
    $content = file_get_contents($filepath);
    $original = $content;

    // Replace namespace import
    $content = preg_replace(
        '/use Ddeboer\\\\Salesforce\\\\MapperBundle\\\\Annotation as Salesforce;/',
        "use Ddeboer\\Salesforce\\MapperBundle\\Attribute\\SalesforceObject;\nuse Ddeboer\\Salesforce\\MapperBundle\\Attribute\\Field;\nuse Ddeboer\\Salesforce\\MapperBundle\\Attribute\\Relation;",
        $content
    );

    // Convert @Salesforce\AnnotationObject class annotations
    $content = preg_replace(
        '/\/\*\*\s*\*\s*@Salesforce\\\\AnnotationObject\(name="([^"]+)"\)\s*\*\/\s*\nclass/m',
        "#[SalesforceObject(name: \"$1\")]\nclass",
        $content
    );

    // Convert @Salesforce\Field property annotations (simple one-line)
    $content = preg_replace(
        '/\/\*\*[^*]*\*\s*@Salesforce\\\\Field\(name="([^"]+)"\)\s*\*\//m',
        "#[Field(name: \"$1\")]",
        $content
    );

    // Convert @Salesforce\Relation property annotations
    $content = preg_replace_callback(
        '/\/\*\*[^@]*@Salesforce\\\\Relation\(([^)]+)\)\s*\*\//ms',
        function($matches) {
            $params = $matches[1];

            // Extract parameters
            preg_match('/field="([^"]+)"/', $params, $field);
            preg_match('/name="([^"]+)"/', $params, $name);
            preg_match('/class="([^"]+)"/', $params, $class);

            $parts = [];
            if (isset($class[1])) {
                // Convert class string to ::class syntax
                $className = $class[1];
                $shortName = substr($className, strrpos($className, '\\') + 1);
                $parts[] = "class: $shortName::class";
            }
            if (isset($field[1])) {
                $parts[] = "field: \"{$field[1]}\"";
            }
            if (isset($name[1])) {
                $parts[] = "name: \"{$name[1]}\"";
            }

            return "#[Relation(\n        " . implode(",\n        ", $parts) . "\n    )]";
        },
        $content
    );

    // Only write if changes were made
    if ($content !== $original) {
        file_put_contents($filepath, $content);
        echo "  ✓ Converted annotations to attributes\n";
    } else {
        echo "  - No changes needed\n";
    }
}
