<?php

/**
 * Laravel Mix mix() wrapper
 *
 * @return string Correct asset path based on build environment
 */
$bladeCompiler->directive('mix', function($expression) {
    return '<?php echo $page->getAssetPath('.$expression.') . mix('.$expression.'); ?>';
});

/**
 * Get the contents of a file
 *
 * Example:
 * @fileContents(source/img/icons/logo.svg)
 *
 * @return  string  File contents
 */
$bladeCompiler->directive('fileContents', function($expression) {
    return '<?php
        $file = '.$expression.';
        echo file_exists($file) ? file_get_contents($file) : ""; ?>';
});
