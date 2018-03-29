<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class DumpJigsawSettings
{
    public function handle(Jigsaw $jigsaw)
    {

        $jigsaw->writeSourceFile('_config.json', $jigsaw->getConfig());
        $jigsaw->writeSourceFile('_collections.json', $jigsaw->getCollections());

    }
}
