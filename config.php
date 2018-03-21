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
            'version' => '1.0.0',
            'title' => 'Sartre',
            'theme' => 'purple',
            'group' => 'email',
            'path' => '{group}/{collection}/{-filename}',
            'search' => [
                'algolia' => [
                    'appID' => getenv('SARTRE_EMAIL_ALGOLIA_APP_ID'),
                    'appSecret' => getenv('SARTRE_EMAIL_ALGOLIA_SECRET'),
                    'searchKey' => getenv('SARTRE_EMAIL_ALGOLIA_SEARCH'),
                    'indexName' => 'sartre_email_docs',
                    'syncOnBuild' => true, // set to false or omit it, to disable. Remove this shit, we should always sync to Algolia when building for production
                ],
            ],
        ],

        'wordpress' => [
            'version' => '1.0.0',
            'title' => 'WordPress Documentation',
            'theme' => 'red',
            'path' => '{collection}/{-filename}',
            'search' => [
                'algolia' => [
                    'indexName' => 'wordpress_docs',
                    'syncOnBuild' => true, // set to false or omit it, to disable
                ],
            ],
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Theme
    |--------------------------------------------------------------------------
    |
    | Set the default theme color.
    |
    | DocsFlow will use this together with the literal color class names from
    | your Tailwind CSS config. You can override it for each site.
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
    | preserve the original file names.
    |
    */

    'pretty' => true,

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

    'search' => [
        'offline',
        'algolia' => [
            'appID' => getenv('ALGOLIA_APP_ID'),
            'appSecret' => getenv('ALGOLIA_SECRET'),
            'searchKey' => getenv('ALGOLIA_SEARCH'),
        ],
        'docsearch' => [
            'searchKey' => getenv('ALGOLIA_DOCSEARCH'),
            'indexName' => getenv('ALGOLIA_DOCSEARCH_INDEX'),
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
    | Broadcast
    |--------------------------------------------------------------------------
    |
    | DocsFlow allows you to expose your localhost to the web when developing,
    | by creating a http-https-tcp tunnel with ngrok.io.
    |
    | This means you can share a live preview URL of what you're working on
    | with anyone in the world. Works only when using 'npm run watch'.
    |
    */

    'broadcast' => true,

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

    'getAsset' => function ($page, $assetPath) {
        $env = getenv('NODE_ENV');

        if ($env == 'offline') {
            $path = $page->getPath();
            $path_parts = pathinfo($path);
            $dir = $path_parts['dirname'];
            $relativePath = preg_replace('/\b([a-zA-Z0-9]*-?[a-zA-Z0-9]*)\w+\b/', '..', $dir);
            return ltrim($relativePath, '/') . mix($assetPath);
        }

        return mix($assetPath);
    },

    'getNavigation' => function($page) {
        $collection = $page->getCollection();
        $file = __DIR__ . '/source/_assets/json/' . $collection . '-navigation.json';
        return collect(json_decode(file_get_contents($file), true));
    },

    'active' => function ($page, $path) {
        $pages = collect(array_wrap($page));
        return $pages->contains(function ($page) use ($path) {
            return str_contains($page->getPath(), $path);
        });
    },

    'hasChildrenActive' => function ($page, $children) {
        $children = collect($children);
        return $children->contains(function ($link) use ($page) {
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
];
