<?php

namespace App;

use Mni\FrontYAML\Markdown\MarkdownParser;
use ParsedownExtra;

class ParsedownParser implements MarkdownParser
{

    /**
     * ParsedownParser constructor.
     */
    public function __construct(Parsedown $parsedown = null)
    {
        $this->parser = $parsedown ?: new ParsedownExtra();
    }

    /**
     * @param  string $markdown
     * @return  string
     */
    public function parse($markdown)
    {
        return $this->parser->parse($markdown);
    }
}
