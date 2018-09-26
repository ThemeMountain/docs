<?php

use App\ParsedownParser;
use App\Listeners\AfterBuild;
use App\Listeners\BeforeBuild;
use App\Listeners\AfterCollections;
use Mni\FrontYAML\Markdown\MarkdownParser;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */
/** @var $jigsaw \TightenCo\Jigsaw\Jigsaw */

$container->bind(MarkdownParser::class, ParsedownParser::class);

$events->beforeBuild(BeforeBuild::class);

$events->afterCollections(AfterCollections::class);

$events->afterBuild(AfterBuild::class);

