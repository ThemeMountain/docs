<?php

namespace App\Listeners;

use TightenCo\Jigsaw\Jigsaw;

class AfterBuild
{
    public function handle(Jigsaw $jigsaw)
    {
        if($jigsaw->getEnvironment() == 'production') {

            $config = $jigsaw->getConfig();
            $url = parse_url($config->baseUrl);

            if (! empty($url['host'])) {
                $jigsaw->writeOutputFile('CNAME', $url['host']);
            }
        }
    }
}
