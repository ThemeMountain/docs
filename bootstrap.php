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

        $menu = [];
        foreach ($site as $s) {
            if ($s->has('navgroup')) {
                $menu['categories'][$s->navgroup][] = [
                    'title' => $s->title,
                    'url' => $s->_meta->url->first(),
                ];
            } else {
                $menu['uncategorized'][] = [
                    'title' => $s->title,
                    'url' => $s->_meta->url->first(),
                ];
            }
        }

        // var_dump($menu);

        // nici nu trebuie JSON encode, pur si simplu $jigsaw->setConfig($key, $menu) - vezi cum setezi $key, testeaza cu getKey() mai intai. Dot notation!!! Poti folosi $jigsaw->setConfig('collections.'$key, $menu)
        $jigsaw->setConfig('collections.' . $key . '.navigation', $menu);
        $jigsaw->writeSourceFile('_'.$key.'.json', json_encode($menu));
        var_dump($jigsaw->getConfig('collections.' . $key . '.navigation'));
    });


});


