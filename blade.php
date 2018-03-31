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

/**
 * YouTube Video Embed
 *
 * Example:
 * @youtube('123456')
 *
 * @return  string  HTML Markup for embedding a YouTube video.
 */
$bladeCompiler->directive('youtube', function($expression) {
    return '<?php
        $id = str_replace("\'", "", ' . $expression . ');

        echo "<div class=\"relative aspect-ratio-16/9\"><iframe class=\"absolute w-full h-full pin-t\" src=\"https://www.youtube.com/embed/$id?rel=0\" frameborder=\"0\" allowfullscreen></iframe></div>"; ?>';
});
