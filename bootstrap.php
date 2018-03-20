<?php

$dotenv = new \Dotenv\Dotenv(__DIR__);
$dotenv->load();

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */
/** @var $jigsaw \TightenCo\Jigsaw\Jigsaw */

$events->afterCollections(function ($jigsaw) {

    $config = $jigsaw->getConfig();

    $collections = $config->collections;

    $collections->each(function ($item, $key) use ($jigsaw) {
        $site = $jigsaw->getCollection($key);

        // var_dump($site);
        // $jigsaw->writeSourceFile('_'.$key.'-config.json', json_encode($site));

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

        $jigsaw->writeSourceFile('_tmp/' . $key . '-nav.json', json_encode($menu));
    });
});


