<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Theme
    |--------------------------------------------------------------------------
    |
    | Set the default theme colour. You can override it at a Site level.
    | This works together with classes from your Tailwind CSS config.
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
    | You can also create site groups, like we did with 'email' below.
    | More documentation on that will be coming soon.
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
                    'appID' => getenv('SARTRE_EMAIL_ALGOLIA_APP_ID'),
                    'appSecret' => getenv('SARTRE_EMAIL_ALGOLIA_SECRET'),
                    'searchKey' => getenv('SARTRE_EMAIL_ALGOLIA_SEARCH'),
                    'indexName' => 'sartre_email',
                    'syncOnBuild' => true, // set to false or omit it, to disable
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
                'indexName' => 'sartre_wordpress',
                'syncOnBuild' => true,
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
    | Configure the third-party search drivers DocsFlow supports. Currently,
    | DocsFlow ships with an Algolia driver. These credentials are pulled
    | from your .env file, and will be used as the defaults for any
    | site that specifies it uses Algolia Search.
    |
    | However, since Algolia allows creating multiple accounts under the same
    | username, you can override these defaults at a site level. This way,
    | you can use one Community plan per site instead of sharing limits
    | across all your sites.
    |
    | Finally, DocsFlow also supports Algolia's DocSearch. If you want
    | to use that for your documentation, make sure to fill in the
    | API search key and index name in your .env file.
    |
    | "algolia":            Gets the default Algolia credentials defined
    |                       in the .env file.
    |
    | "algolia-docsearch":  Gets the search key and index name for docs
    |                       that use Algolia's DocSearch.
    |
    */

    'search' => [

        'algolia' => [
            'appID' => getenv('ALGOLIA_APP_ID'),
            'appSecret' => getenv('ALGOLIA_SECRET'),
            'searchKey' => getenv('ALGOLIA_SEARCH'),
        ],

        'algolia-docsearch' => [
            'searchKey' => getenv('ALGOLIA_DOCSEARCH'),
            'indexName' => getenv('ALGOLIA_DOCSEARCH_INDEX'),
        ]

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
