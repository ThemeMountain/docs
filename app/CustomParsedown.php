<?php

namespace App;

// use Highlight\Highlighter;
use ParsedownExtra as BaseParsedown;

class CustomParsedown extends BaseParsedown
{
    /**
     * @var  \Highlight\Highlighter
     */
    // protected $highlighter;

    /**
     * Parsedown constructor.
     *
     * Prepare a fresh instance of the syntax highlighter.
     */
    // public function __construct()
    // {
    //     $this->highlighter = new Highlighter;
    // }

    /**
     * Add syntax highlighting to a fenced code block.
     * Enable once Parsedown fixes raw HTML output in extensions issue.
     *
     * @param  array $Block
     * @return  array
     */
    // protected function blockFencedCodeComplete($block)
    // {
    //     // var_dump($block['element']['element']['attributes']);
    //     try {
    //         $el = $block['element']['element'];
    //         if ($el && isset($el['attributes']))
    //         {
    //             $code = $el['text'];
    //             $attributes = $el['attributes'];
    //             $languageClass = $attributes['class'];
    //             $language = explode('-', $languageClass);
    //             $highlighted = $this->highlighter->highlight($language[1], $code);
    //             $block['element']['element']['attributes']['class'] = vsprintf('%s hljs %s', [
    //                 $languageClass,
    //                 $highlighted->language,
    //             ]);
    //             $block['element']['element']['rawHtml'] = $highlighted->value;
    //             unset($block['element']['element']['text']);
    //         }
    //     } catch (DomainException $e) {
    //         //
    //     }
    //     return $block;
    // }

    /**
     * Extra link handling
     * @param  array $Excerpt
     * @return array
     */
    protected function inlineLink($Excerpt)
    {
        $Link = parent::inlineLink($Excerpt);
        if (! isset($Link)) {
            return null;
        }

        $isAnchorLink = false;
        $href = $Link['element']['attributes']['href'];
        $ext = strtolower(pathinfo($href, PATHINFO_EXTENSION));
        $isImage = in_array($ext, ['gif', 'jpg', 'jpeg', 'png', 'svg']);

        // 1. Add target and rel to external links
        if ($this->isExternalUrl($href) && ! $isImage) {
            $Link['element']['attributes']['target'] = '_blank';
            $Link['element']['attributes']['rel'] = 'noopener';
        }

        else {

            // 2. Add scroll-to class to anchor links
            if (preg_match('/#(.+)/', $href, $matches)) {
                $Link['element']['attributes']['class'] = 'scroll-to';
                $isAnchorLink = true;
            }

            // 3. Set href depending on whether it's a link to some-other-page/#anchor or just an in-page #anchor
            // CAN REMOVE THIS, Maizzle doesn't use it!
            if (! $isImage) {
                if (preg_match('/^(.+)?(?=#)/', $href, $hits)) {
                    $href = $hits[0] ? '../' . $href : $href;
                }
                $Link['element']['attributes']['href'] =  $href;
            }

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
