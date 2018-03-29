<?php

use Dotenv\Dotenv;
// use App\ParsedownParser;
use App\Listeners\GenerateNavigation;
use App\Listeners\DumpJigsawSettings;
// use Mni\FrontYAML\Markdown\MarkdownParser;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */
/** @var $jigsaw \TightenCo\Jigsaw\Jigsaw */

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

// $container->bind(MarkdownParser::class, ParsedownParser::class);

$events->afterCollections([GenerateNavigation::class, DumpJigsawSettings::class]);


