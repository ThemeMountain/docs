<?php

use Dotenv\Dotenv;
use App\Listeners\GenerateNavigation;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */
/** @var $jigsaw \TightenCo\Jigsaw\Jigsaw */

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

$events->afterCollections(GenerateNavigation::class);


