<?php

use Dotenv\Dotenv;
use App\ParsedownParser;
use App\Listeners\AfterBuild;
use App\Listeners\JigsawConfig;
use App\Listeners\JigsawCollections;
use App\Listeners\GenerateNavigation;
use Mni\FrontYAML\Markdown\MarkdownParser;
use App\Listeners\CreateChangelogCollections;

/** @var $container \Illuminate\Container\Container */
/** @var $events \TightenCo\Jigsaw\Events\EventBus */
/** @var $jigsaw \TightenCo\Jigsaw\Jigsaw */

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

$container->bind(MarkdownParser::class, ParsedownParser::class);

$events->beforeBuild([JigsawConfig::class, CreateChangelogCollections::class]);

$events->afterCollections([JigsawCollections::class, GenerateNavigation::class]);

$events->afterBuild(AfterBuild::class);

