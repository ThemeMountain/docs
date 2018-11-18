<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class AfterCollections
{
    protected $jigsaw;

    public function handle(Jigsaw $jigsaw)
    {
        $this->jigsaw = $jigsaw;

        $this->setNavigationConfig();
        $this->writeCollectionsFile();
    }

    private function setNavigationConfig()
    {
        $collections = $this->jigsaw->getCollections();

        $collections->each(function ($item, $key) {

            $menu = [
                'categories' => [],
                'uncategorized' => []
            ];

            foreach ($item as $page => $data) {

                if ($data->has('navigation')) {

                    $path = $data->_meta->path->first();

                    $order = isset($data->navigation['order']) && is_numeric($data->navigation['order']) ? $data->navigation['order'] : $data->title;

                    if (isset($data->navigation['group'])) {
                        $menu['categories'][$data->navigation['group']][] = [
                            'title' => $data->navigation['title'] ?? $data->title,
                            'path' => $path,
                            'order' => $order,
                        ];
                        usort(
                            $menu['categories'][$data->navigation['group']],
                            function($a, $b) {
                                $a = $a["order"];
                                $b = $b["order"];
                                if ($a == $b) return 0;
                                return ($a < $b) ? -1 : 1;
                            });
                    } else {
                        $menu['uncategorized'][] = [
                            'title' => $data->navigation['title'] ?? $data->title,
                            'path' => $path,
                            'order' => $order,
                        ];
                        usort(
                            $menu['uncategorized'],
                            function($a, $b) {
                                $a = $a["order"];
                                $b = $b["order"];
                                if ($a == $b) return 0;
                                return ($a < $b) ? -1 : 1;
                            });
                    }

                }
            }

            foreach ($item as $page => $data) {
                $data['nav'] = $menu;
            }

        });
    }

    private function writeCollectionsFile()
    {
        $this->jigsaw->writeSourceFile('_assets/data/collections.json', $this->jigsaw->getCollections());
    }
}
