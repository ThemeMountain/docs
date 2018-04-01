<?php

namespace App;

use Highlight\Highlighter;
use ParsedownExtra as BaseParsedown;

class CustomParsedown extends BaseParsedown
{
    /**
     * @var  \Highlight\Highlighter
     */
    protected $highlighter;

    /**
     * Parsedown constructor.
     *
     * Prepare a fresh instance of the syntax highlighter.
     */
    public function __construct()
    {
        $this->highlighter = new Highlighter();
    }

    /**
     * Add syntax highlighting to a fenced code block.
     * Enable once Parsedown fixes raw HTML output in extensions issue.
     *
     * @param  array $Block
     * @return  array
     */
    protected function blockFencedCodeComplete($Block)
    {
        try {
            if ($class = array_get($Block, 'element.text.attributes.class', false)) {
                if (starts_with($class, 'language-')) {

                    $code = array_get($Block, 'element.text.text', '');
                    $code = $this->highlighter->highlight(str_after($class, 'language-'), $code)->value;
                    array_set($Block, 'element.text.text', $code);
                    $Block['element']['text']['attributes']['class'] = "hljs {$class}";

                } else {
                    $Block = parent::blockFencedCodeComplete($Block);
                }
            }

        } catch (\Exception $e) {
           $Block = parent::blockFencedCodeComplete($Block);
        }

        return $Block;
    }

    /**
     * Add ID and anchor links to headings
     * @param  array $Line
     * @return array
     */
    /*protected function blockHeader($Line)
    {
        $Block = parent::blockHeader($Line);

        $h = $Block['element']['name'];

        $text = $Block['element']['text'];
        $slug = str_slug($text);

        if (! isset($Block['element']['attributes']['id'])) {
            $Block['element']['attributes'] = [
                'id' => $slug,
            ];
        }

        $anchor = '<a href="#'.$Block['element']['attributes']['id'].'" class="anchor-link"></a>';

        $Block['element']['text'] = $anchor . $Block['element']['text'];

        return $Block;
    }*/

    /**
     * Example of changing <img> markup.
     * Could be used to wrap images in HTML required by stuff like lightboxes.
     * @param  array $Excerpt
     * @return array
     */
    /*protected function inlineImage($Excerpt)
    {
        $Inline = parent::inlineImage($Excerpt);
        if ( ! isset($Inline))
        {
            return null;
        }
        $Inline['element']['attributes']['class'] = 'test';
        return $Inline;
    }*/
}
