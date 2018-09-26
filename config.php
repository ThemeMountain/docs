<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Sites                          http://jigsaw.tighten.co/docs/collections/
    |--------------------------------------------------------------------------
    |
    | Here is where you define your DocsFlow sites.
    |
    | Each site is a Jigsaw collection item, and can define any number of
    | key-value pairs of settings that can be used in layouts and pages.
    |
    | Sites inherit all other settings defined in this configuration
    | file, but you can override them for each site in particular.
    |
    */

    'collections' => [

        'sartre' => [
            'color' => 'purple',
            'name' => 'Sartre Email',
            'version' => '1.0.0',
            'root' => 'email/sartre',
            'path' => 'email/sartre/{-filename}',
            'thumbnail' => 'https://s3.envato.com/files/247447963/thumb.png',
            'sort' => 'page_order',
            'search' => [
                'algolia' => [
                    'appID' => 'CT7QSO9C70',
                    'appSecret' => '4bd1ce3d67eae6d7467ba6c2ed908e28',
                    'searchKey' => '0595b891776917fca3d49302cfe7c3e1',
                    'indexName' => 'sartre_email_docs',
                ],
            ],
        ],

        'acorn' => [
            'color' => 'green',
            'name' => 'Acorn Email Framework',
            'version' => '1.0.1',
            'root' => 'acorn',
            'path' => 'acorn/{-filename}',
            'thumbnail' => '/img/acorn/acorn-logo.png',
            'sort' => 'page_order',
            'search' => [
                'algolia' => [
                    'appID' => '3LWQAP7M66',
                    'appSecret' => 'b49dfae3e51221a18a787bf08cd5c9ac',
                    'searchKey' => '31f8a4aaf91c407a5b341ebf24d9a6ec',
                    'indexName' => 'acorn_docs',
                ],
            ],
            'social' => [
                'github' => 'https://github.com/ThemeMountain/acorn',
                'twitter' => 'https://twitter.com/thememountainco',
                'envato' => 'https://themeforest.net/user/thememountain/portfolio?ref=thememountain',
            ],
        ],

        'wordpress' => [
            'color' => 'blue',
            'name' => 'WordPress',
            'version' => '1.0.0',
            'path' => 'wordpress/{-filename}',
            'search' => [
                'algolia' => [
                    'appID' => 'GTXXW9109G',
                    'appSecret' => '7120ac0458467cda5b77ae142c1a847f',
                    'searchKey' => '9a2cb68a1f7b96bef2975c7369b19f55',
                    'indexName' => 'wordpress_docs',
                ],
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Company Name
    |--------------------------------------------------------------------------
    |
    | The company name is used in the <title> tag of your pages.
    |
    */

    'company' => 'ThemeMountain',

    /*
    |--------------------------------------------------------------------------
    | Company Website
    |--------------------------------------------------------------------------
    |
    | The company website URL.
    |
    */

    'company_url' => 'https://thememountain.com',

    /*
    |--------------------------------------------------------------------------
    | Path                     http://jigsaw.tighten.co/docs/collections-paths/
    |--------------------------------------------------------------------------
    |
    | Here you can specify how DocsFlow should organize sites in the build
    | folders. This uses Jigsaw collection paths, and you can override
    | it for each site in particular.
    |
    | With this default setting, if we add 'group' => 'open-source' to the
    | config of a site collection named 'jigsaw', DocsFlow will output
    | that site at: build_{env}/partners/blog
    |
    | So you can basically group collection items (sites) into a folder.
    |
    |
    */

    // 'path' => '{group}/{collection}/{-filename}',

    /*
    |--------------------------------------------------------------------------
    | Pretty URLs (permalinks)       http://jigsaw.tighten.co/docs/pretty-urls/
    |--------------------------------------------------------------------------
    |
    | When set to 'true', each Blade/Markdown file will be compiled to an
    | index.html file and placed in its own folder, named after the
    | original file. Set to false to disable and have DocsFlow
    | preserve the original file names.
    |
    */

    'pretty' => true,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here you can choose the theme that your documentation pages will use.
    | This will be applied globally to all pages you create, but you
    | can override it with the 'extends' FrontMatter variable.
    |
    */

    'extends' => '_layouts.default.page',

    /*
    |--------------------------------------------------------------------------
    | Accent Color
    |--------------------------------------------------------------------------
    |
    | Set the default accent color.
    |
    | DocsFlow will use this together with the literal color class names from
    | your Tailwind CSS config. You can override it for each site.
    |
    */

    'color' => 'blue',

    /*
    |--------------------------------------------------------------------------
    | Social
    |--------------------------------------------------------------------------
    |
    | Here is where you can specify the URLs to your social profiles.
    | DocsFlow uses these in headers and footers by default, but
    | you can use them anywhere in layouts or pages.
    |
    */

    'social' => [
        'support' => 'https://thememountain.ticksy.com',
        'twitter' => 'https://twitter.com/thememountainco',
        'github' => 'https://github.com/ThemeMountain',
        'envato' => 'https://themeforest.net/user/thememountain/portfolio?ref=thememountain',
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
    | "offline":    Default. An offline JS search engine will be used.
    |               Data is stored in a global variable set in a
    |               .js file. Use this only for small sites.
    |
    | "algolia":    Gets the default Algolia credentials defined
    |               in the .env file.
    |
    | "docsearch":  Gets the search key and index name for docs
    |               that use Algolia's DocSearch.
    |
    */

    // KEEPING THIS FOR REF ONLY, WILL DOCUMENT AND REMOVE IT
    'search' => 'offline',

    // 'search' => [
    //     'offline',
    //     'algolia' => [
    //         'appID' => getenv('ALGOLIA_APP_ID'),
    //         'appSecret' => getenv('ALGOLIA_SECRET'),
    //         'searchKey' => getenv('ALGOLIA_SEARCH'),
    //     ],
    //     'docsearch' => [
    //         'searchKey' => getenv('ALGOLIA_DOCSEARCH'),
    //         'indexName' => getenv('ALGOLIA_DOCSEARCH_INDEX'),
    //     ],
    // ],

    /*
    |--------------------------------------------------------------------------
    | Google Analytics
    |--------------------------------------------------------------------------
    |
    | Configure defaults for the analytics services DocsFlow supports.
    | Applies globally unless overridden.
    |
    | 'google': Google Analytics tracking id
    |
    */

    'analytics' => [
        'google' => [
            'tracking_id' => ''
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Tunnel                 https://browsersync.io/docs/options#option-tunnel
    |--------------------------------------------------------------------------
    |
    | DocsFlow allows you to expose your localhost to the web when developing,
    | by creating a localhost tunnel with BrowserSync and localtunnel.me.
    |
    | This means you can share a live preview URL of what you're working on
    | with anyone in the world. Works only when using 'npm run watch'.
    |
    | Set to `true` to get a random subdomain, or a valid subdomain string,
    | to have BrowserSync try and use a custom subdomain name.
    |
    */

    'tunnel' => false,

    /*
    |--------------------------------------------------------------------------
    | Helper Functions
    |
    | http://jigsaw.tighten.co/docs/collections-variables-and-functions/
    |--------------------------------------------------------------------------
    |
    | Some helper functions that DocsFlow uses. You can add your own
    | here, and even override them for each site in particular.
    |
    */

    'getEnv' => function($page) {
        return getenv('NODE_ENV');
    },
    'getAssetPath' => function ($page, $assetPath) {
        $env = getenv('NODE_ENV');

        if ($env == 'offline') {
            $path = $page->getPath();
            $path_parts = pathinfo($path);
            $dir = $path_parts['dirname'];
            $relativePath = preg_replace('/\b([a-zA-Z0-9]*-?[a-zA-Z0-9]*)\w+\b/', '..', $dir);
            return ltrim($relativePath, '/');
        }

        return '';
    },
    'getNavigation' => function($page) {
        $site = $page->collections[$page->getCollection()];
        return $site->nav;
    },
    'getSVG' => function($name) {
        return __DIR__ . '/source/img/icons/'.$name.'.svg';
    },
    'active' => function ($page, $path) {
        $pages = collect(array_wrap($page));
        $env = getenv('NODE_ENV');

        return $pages->contains(function ($page) use ($path, $env) {
            if ($env == 'offline') {
                return str_contains($path['path'], $page->getFilename());
            }
            return str_is($page->getPath(), $path['path']);
        });
    },
    'hasChildrenActive' => function ($page, $children) {
        $children = collect($children);
        $env = getenv('NODE_ENV');

        return $children->contains(function ($link) use ($page, $env) {
            if ($env == 'offline') {
                return str_contains($page->getPath(), basename($link['path']));
            }
            return $page->getPath() == $link['path'];
        });
    },

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
    'build' => [
        'source' => 'source',
        'destination' => 'build_local',
    ],
];
