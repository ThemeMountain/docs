<?php

use Illuminate\Filesystem\Filesystem;

$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */
/** @var $jigsaw \TightenCo\Jigsaw\Jigsaw */

$events->afterCollections(function ($jigsaw) {

    $file = new Filesystem();
    $config = $jigsaw->getConfig();
    $collections = $config->collections;

    $collections->each(function ($item, $key) use ($jigsaw, $file) {
        $site = $jigsaw->getCollection($key);

        $menu = [];
        foreach ($site as $s) {
            if ($s->has('navigation')) {
                if (isset($s->navigation['group'])) {
                    $menu['categories'][$s->navigation['group']][] = [
                        'title' => $s->title,
                        'path' => $s->_meta->path->first(),
                    ];
                } else {
                $menu['uncategorized'][] = [
                    'title' => $s->title,
                    'path' => $s->_meta->path->first(),
                ];
                }
            }
        }

        if (! $file->exists('tmp')) {
            $file->makeDirectory('tmp');
        }
        $file->put('tmp/' . $key . '-nav.json', json_encode($menu));
    });
});


