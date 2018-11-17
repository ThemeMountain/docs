<?php

namespace App\Listeners;

use App\ParsedownParser;
use Mni\FrontYAML\Parser;
use TightenCo\Jigsaw\Jigsaw;

class BeforeBuild
{
    protected $jigsaw;

    public function handle(Jigsaw $jigsaw)
    {
        $this->jigsaw = $jigsaw;

        $this->setNavKey();
        $this->setChangelogConfig();
        $this->writeConfigFile();
    }

    public function setNavKey()
    {
        $this->jigsaw->setConfig('nav', []);
    }

    public function setChangelogConfig()
    {
        $collections = $this->jigsaw->getCollections();
        $parser = new Parser(null, new ParsedownParser());

        $collections->each(function ($key) use ($parser) {

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

            $this->jigsaw->setConfig('collections.'.$key.'.changelog', $items);
        });
    }

    public function writeConfigFile()
    {
        $this->jigsaw->writeSourceFile('_assets/data/config.json', $this->jigsaw->getConfig());
    }
}
