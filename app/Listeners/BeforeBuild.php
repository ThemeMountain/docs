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

        $this->writeConfigFile();
    }

    private function writeConfigFile()
    {
        $this->jigsaw->writeSourceFile('_assets/data/config.json', $this->jigsaw->getConfig());
    }
}
