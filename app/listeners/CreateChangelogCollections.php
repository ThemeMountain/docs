<?php

namespace App\Listeners;

use Mni\FrontYAML\Parser;
use App\ParsedownParser;
use TightenCo\Jigsaw\Jigsaw;

class CreateChangelogCollections
{
    public function handle(Jigsaw $jigsaw)
    {
        $collections = $jigsaw->getCollections();
        $parser = new Parser(null, new ParsedownParser());

        $collections->each(function ($key) use ($jigsaw, $parser) {

            $items = [];

            if (file_exists('source/_' . $key . '/changelog')) {

                foreach(glob('source/_' . $key . '/changelog/*') as $file) {
                    $md = file_get_contents($file);

                    $document = $parser->parse($md);

                    $yaml = $document->getYAML();
                    $html = $document->getContent();

                    $items[] = [
                        'version' => $yaml['version'] ?? '',
                        'date' => $yaml['date'] ?? '',
                        'content' => $html,
                    ];
                }

            }

            $jigsaw->setConfig('collections.'.$key.'.changelog', $items);
        });

    }
}
