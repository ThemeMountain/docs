<?php

namespace App;

class JigsawConfig {

    public function get()
    {
        $config = file_get_contents('source/_config.json');

        if ($config) {
            return json_decode($config);
        }

        return false;
    }

}