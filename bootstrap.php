<?php

use Illuminate\Filesystem\Filesystem;

$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */
/** @var $jigsaw \TightenCo\Jigsaw\Jigsaw */

$events->afterCollections(function ($jigsaw) {

    $file = new Filesystem();
    $env = getenv('NODE_ENV');
    $config = $jigsaw->getConfig();
    $collections = $config->collections;

    $collections->each(function ($item, $key) use ($jigsaw, $file, $env) {
        $site = $jigsaw->getCollection($key);

        $menu = [
            'categories' => [],
            'uncategorized' => []
        ];

        foreach ($site as $s) {
            if ($s->has('navigation')) {

                $path = $env == 'offline' ? '../' . $s->_meta->collection . '/' . $s->_meta->filename . '.html' : $s->_meta->path->first();

                if (isset($s->navigation['group'])) {
                    $menu['categories'][$s->navigation['group']][] = [
                        'title' => $s->title,
                        'path' => $path,
                        'order' => isset($s->navigation['order']) && is_numeric($s->navigation['order']) ? $s->navigation['order'] : 2e10,
                    ];
                    usort($menu['categories'][$s->navigation['group']], create_function('$a, $b', '
                            $a = $a["order"];
                            $b = $b["order"];
                            if ($a == $b) return 0;
                            return ($a < $b) ? -1 : 1;
                        '));
                } else {
                    $menu['uncategorized'][] = [
                        'title' => $s->title,
                        'path' => $path,
                        'order' => isset($s->navigation['order']) && is_numeric($s->navigation['order']) ? $s->navigation['order'] : 2e10,
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

        if (! $file->exists('tmp')) {
            $file->makeDirectory('tmp');
        }
        $file->put(__DIR__ . '/tmp/' . $key . '-nav.json', json_encode($menu));
    });
});


