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

        $menu = [];
        foreach ($site as $s) {
            if ($s->has('navigation')) {

                $path = $env == 'offline' ? '../' . $s->_meta->collection . '/' . $s->_meta->filename . '.html' : $s->_meta->path->first();

                if (isset($s->navigation['group'])) {
                    $menu['categories'][$s->navigation['group']][] = [
                        'title' => $s->title,
                        'path' => $path,
                    ];
                } else {
                $menu['uncategorized'][] = [
                    'title' => $s->title,
                    'path' => $path,
                ];
                }

            }
        }

        if (! $file->exists('tmp')) {
            $file->makeDirectory('tmp');
        }
        $file->put(__DIR__ . '/tmp/' . $key . '-nav.json', json_encode($menu));
    });
});


