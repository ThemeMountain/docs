<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites
    |--------------------------------------------------------------------------
    |
    | Here you can customize each documentation site in particular, by simply
    | overriding DocsFlow's defaults.
    |
    | Each 'site' is a folder that contains Blade/Markdown files, from your
    | 'source' directory. A site can also have any number of subfolders,
    | each of those being a site on its own.
    |
    */

    'sites' => [

        'support' => 'external',

        'email' => [
            'theme' => 'green',

            'sartre' => [
                'theme' => 'purple'
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Pretty URLs (permalinks)       http://jigsaw.tighten.co/docs/pretty-urls/
    |--------------------------------------------------------------------------
    |
    | When set to 'true', each Blade/Markdown file will be compiled to an
    | index.html file and placed in its own folder, named after the
    | original file. Set to false to disable and have DocsFlow
    | preserve the original file names and folders.
    |
    */

    'pretty' => true,

    /*
    |--------------------------------------------------------------------------
    | Social
    |--------------------------------------------------------------------------
    |
    | Here is where you can specify the URLs to your social profiles.
    | DocsFlow uses these in headers and footers, but you can use
    | them anywhere in layouts or pages.
    |
    */

    'social' => [
        'envato' => 'https://themeforest.net/user/thememountain/portfolio?ref=thememountain',
        'github' => 'https://github.com/ThemeMountain',
        'twitter' => 'https://twitter.com/thememountainco',
    ],

    /*
    |--------------------------------------------------------------------------
    | Support
    |--------------------------------------------------------------------------
    |
    | Define your support channels. By default, the 'email' support channel
    | will be used, unless you override it in the 'sites' config.
    |
    */

    'support' => [
        'email' => 'mailto:info@thememountain.com',
        'external' => 'https://thememountain.ticksy.com',
    ],

    'collections' => [],

    /*
    |--------------------------------------------------------------------------
    | Search Drivers
    |--------------------------------------------------------------------------
    |
    | Configure defaults for the search drivers DocsFlow supports.
    | Defaults to 'js' for all sites, unless overriden.
    |
    | "js":         Path to file containing JavaScript variable.
    |               Client-side, works offline.
    |
    | "json":       Path to JSON file. AJAX-based, only works online.
    |
    | "algolia":    For open source docs that use Algolia's DocSearch.
    |
    */

    'search' => [
        'js' => 'data/search-index.js',
        'json' => 'data/search-index.json',
        'algolia' => [
            'apiKey' => '',
            'indexName' => '',
            'inputSelector' => '#docsearch',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Google Analytics
    |--------------------------------------------------------------------------
    |
    | Configure defaults for the analytics services DocsFlow supports.
    |
    */

    'analytics' => [
        'ga' => [
            'tracking_id' => ''
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Internals
    |--------------------------------------------------------------------------
    |
    | Leave these settings alone, unless you really know what you're doing.
    |
    */

    'baseUrl' => '',
    'production' => false,
];
