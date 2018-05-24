<?php

use Dotenv\Dotenv;
use App\ParsedownParser;
use App\Listeners\AfterBuild;
use App\Listeners\BeforeBuild;
use App\Listeners\AfterCollections;
use Mni\FrontYAML\Markdown\MarkdownParser;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */
/** @var $jigsaw \TightenCo\Jigsaw\Jigsaw */

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

$container->bind(MarkdownParser::class, ParsedownParser::class);

$events->beforeBuild(BeforeBuild::class);

$events->afterCollections(AfterCollections::class);

$events->afterBuild(AfterBuild::class);

