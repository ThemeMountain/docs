<?php

namespace App;

use App\CustomParsedown;
use Mni\FrontYAML\Markdown\MarkdownParser;

class ParsedownParser implements MarkdownParser
{

    /**
     * ParsedownParser constructor.
     */
    public function __construct()
    {
        $this->parser = new CustomParsedown();
    }

    /**
     * @param  string $markdown
     * @return  string
     */
    public function parse($markdown)
    {
        return $this->parser->text($markdown);
    }
}
