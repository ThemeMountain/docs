<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class JigsawCollections
{
    public function handle(Jigsaw $jigsaw)
    {

        $jigsaw->writeSourceFile('_assets/data/collections.json', $jigsaw->getCollections());

    }
}
