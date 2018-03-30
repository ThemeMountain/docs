<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class GenerateNavigation
{
    public function handle(Jigsaw $jigsaw)
    {
        $env = $jigsaw->getEnvironment();
        $collections = $jigsaw->getCollections();

        $collections->each(function ($item, $key) use ($jigsaw, $env) {

            $menu = [
                'categories' => [],
                'uncategorized' => []
            ];

            foreach ($item as $page => $data) {

                if ($data->has('navigation')) {

                    $path = $env == 'offline' ? '../' . $data->_meta->collection . '/' . $data->_meta->filename . '.html' : $data->_meta->path->first();

                    $order = isset($data->navigation['order']) && is_numeric($data->navigation['order']) ? $data->navigation['order'] : $data->title;

                    if (isset($data->navigation['group'])) {
                        $menu['categories'][$data->navigation['group']][] = [
                            'title' => $data->title,
                            'path' => $path,
                            'order' => $order,
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
                            'order' => $order,
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

            $jigsaw->setConfig('collections.'.$key.'.nav', $menu);
        });
    }
}
