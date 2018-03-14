<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Theme
    |--------------------------------------------------------------------------
    |
    | Set the default theme colour. Can be overridden at a Site level.
    |
    */

    'theme' => 'blue',

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
    | Sites
    |--------------------------------------------------------------------------
    |
    | Here you can customize each documentation site in particular, by simply
    | overriding DocsFlow's defaults.
    |
    | Each 'site' is a folder that contains Blade/Markdown files, from
    | your 'source' directory. A site can also have any number of
    | subfolders, each of those being a site on its own.
    |
    */

    'docs' => [

        'email' => [

            'sartre' => [
                'version' => '1.0.0',
                'title' => 'Sartre',
                'description' => 'Documentation for our latest email template.',
                'theme' => 'purple',
                'search' => [
                    'driver' => 'algolia',
                    'indexName' => 'sartre_email'
                ],
            ],

            'marquez' => [
                'version' => '2.0.2',
                'title' => 'Marquez',
                'description' => 'Marquez, the email for creative agencies.',
                'theme' => 'red',
            ],

            'kant' => [
                'version' => '2.4.0',
                'title' => 'Kant',
                'description' => 'Kant, the email toolkit for startups.',
                'theme' => 'green',
            ],

        ],

        'wordpress' => [
            'version' => '1.0.0',
            'title' => 'WordPress Docs',
            'description' => 'Documentation for our WordPress themes.',
            'theme' => 'blue',
            'search' => [
                'driver' => 'algolia',
                'indexName' => 'sartre_wordpress'
            ],
        ],

    ],

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
    | Support URL
    |--------------------------------------------------------------------------
    |
    | Define your support channel. This is used by DocsFlow in different
    | areas of the site. You can also use a mailto: link, if you want
    | visitors to email you directly (not recommended).
    |
    */

    'support_url' => 'https://thememountain.ticksy.com',

    /*
    |--------------------------------------------------------------------------
    | Search Drivers
    |--------------------------------------------------------------------------
    |
    | Configure defaults for the search 'drivers' DocsFlow supports.
    | Defaults to 'offline' for all sites, unless overriden.
    |
    | "offline":    Name of file containing JavaScript variable.
    |               Client-side, works offline.
    |
    | "online":     Name of JSON file. Client-side AJAX.
    |               Only works online in Chrome.
    |
    | "algolia":    For open source docs that use Algolia's DocSearch.
    |
    */

    'search' => [

        'algolia' => [
            'appID' => getenv('ALGOLIA_APP_ID'),
            'apiKey' => getenv('ALGOLIA_API_KEY'),
            'docsearchIndexName' => getenv('ALGOLIA_DOCSEARCH_INDEX_NAME'),
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Google Analytics
    |--------------------------------------------------------------------------
    |
    | Configure defaults for the analytics services DocsFlow supports.
    | Applies globally unless overridden.
    |
    | 'ga': Google Analytics tracking id
    |
    */

    'analytics' => [
        'ga' => [
            'tracking_id' => ''
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Jigsaw Internals
    |--------------------------------------------------------------------------
    |
    | Leave these settings alone, unless you really know what you're doing.
    |
    */

    'baseUrl' => '',
    'production' => false,
    'collections' => [],
];
