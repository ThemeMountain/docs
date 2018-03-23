<?php

$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */
/** @var $jigsaw \TightenCo\Jigsaw\Jigsaw */

$events->afterCollections(function ($jigsaw) {

    $env = getenv('NODE_ENV');
    $config = $jigsaw->getConfig();
    $collections = $config->collections;

    $collections->each(function ($item, $key) use ($jigsaw, $env) {
        $pages = $jigsaw->getCollection($key);

        $menu = [
            'categories' => [],
            'uncategorized' => []
        ];

        foreach ($pages as $page) {
            if ($page->has('navigation')) {

                $path = $env == 'offline' ? '../' . $page->_meta->collection . '/' . $page->_meta->filename . '.html' : $page->_meta->path->first();

                if (isset($page->navigation['group'])) {
                    $menu['categories'][$page->navigation['group']][] = [
                        'title' => $page->title,
                        'path' => $path,
                        'order' => isset($page->navigation['order']) && is_numeric($page->navigation['order']) ? $page->navigation['order'] : 2e10,
                    ];
                    usort($menu['categories'][$page->navigation['group']], create_function('$a, $b', '
                            $a = $a["order"];
                            $b = $b["order"];
                            if ($a == $b) return 0;
                            return ($a < $b) ? -1 : 1;
                        '));
                } else {
                    $menu['uncategorized'][] = [
                        'title' => $page->title,
                        'path' => $path,
                        'order' => isset($page->navigation['order']) && is_numeric($page->navigation['order']) ? $page->navigation['order'] : 2e10,
                    ];
                    usort($menu['uncategorized'], create_function('$a, $b', '
                            $a = $a["order"];
                            $b = $b["order"];
                            if ($a == $b) return 0;
                            return ($a < $b) ? -1 : 1;
                        '));
                }

            }
        }

        $jigsaw->writeSourceFile('_assets/json/' . $key . '-navigation.json' , json_encode($menu));
    });
});


