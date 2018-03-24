<?php

$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */
/** @var $jigsaw \TightenCo\Jigsaw\Jigsaw */

$events->afterCollections(function ($jigsaw) {

    $env = getenv('NODE_ENV');
    $collections = $jigsaw->getCollections();

    $collections->each(function ($item, $key) use ($jigsaw, $env) {
        $menu = [
            'categories' => [],
            'uncategorized' => []
        ];

        foreach ($item as $page => $data) {

            if ($data->has('navigation')) {

                $path = $env == 'offline' ? '../' . $data->_meta->collection . '/' . $data->_meta->filename . '.html' : $data->_meta->path->first();

                if (isset($data->navigation['group'])) {
                    $menu['categories'][$data->navigation['group']][] = [
                        'title' => $data->title,
                        'path' => $path,
                        'order' => isset($data->navigation['order']) && is_numeric($data->navigation['order']) ? $data->navigation['order'] : 2e10,
                    ];
                    usort($menu['categories'][$data->navigation['group']], create_function('$a, $b', '
                            $a = $a["order"];
                            $b = $b["order"];
                            if ($a == $b) return 0;
                            return ($a < $b) ? -1 : 1;
                        '));
                } else {
                    $menu['uncategorized'][] = [
                        'title' => $data->title,
                        'path' => $path,
                        'order' => isset($data->navigation['order']) && is_numeric($data->navigation['order']) ? $data->navigation['order'] : 2e10,
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


