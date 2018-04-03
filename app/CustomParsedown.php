<?php

namespace App;

use App\JigsawConfig;
use Highlight\Highlighter;
use ParsedownExtra as BaseParsedown;

class CustomParsedown extends BaseParsedown
{
    /**
     * @var  \Highlight\Highlighter
     */
    protected $highlighter;

    protected $config;

    /**
     * Parsedown constructor.
     *
     * Prepare a fresh instance of the syntax highlighter.
     */
    public function __construct()
    {
        $this->highlighter = new Highlighter();

        $jigsawConfig = new JigsawConfig();
        $this->config = $jigsawConfig->get();
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
     * Extra link handling
     * @param  array $Excerpt
     * @return array
     */
    protected function inlineLink($Excerpt)
    {
        $Link = parent::inlineLink($Excerpt);
        if ( ! isset($Link))
        {
            return null;
        }

        $href = $Link['element']['attributes']['href'];

        // 1. Add target and rel to external links
        if ($this->isExternalUrl($href)) {
            $Link['element']['attributes']['target'] = '_blank';
            $Link['element']['attributes']['rel'] = 'noopener';

            return $Link;
        }

        else {

            // 2. Add scroll-to class to anchor links
            if (preg_match('/#([A-Za-z0-9\-\_]+)/', $href, $matches)) {
                $Link['element']['attributes']['class'] = 'scroll-to';
            }

            // 3. Correct relative paths based on build environment
            if (! $this->config->pretty) {
                $Link['element']['attributes']['href'] = basename($href) . '.html';
                
                return $Link;
            }
    
            $Link['element']['attributes']['href'] = '../' . basename($href);
        }

        return $Link;
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

    /**
     * Check if a URL is internal or external
     * @param string $url
     * @param null $internalHostName
     * @return bool
     */
    protected function isExternalUrl($url, $internalHostName = null) {
        $components = parse_url($url);
        $internalHostName = !$internalHostName && isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : $internalHostName;
        // we will treat url like '/relative.php' as relative
        if (empty($components['host'])) {
            return false;
        }
        // url host looks exactly like the local host
        if (strcasecmp($components['host'], $internalHostName) === 0) {
            return false;
        }

        $isNotSubdomain = strrpos(strtolower($components['host']), '.'.$internalHostName) !== strlen($components['host']) - strlen('.'.$internalHostName);

        return $isNotSubdomain;
    }
}
