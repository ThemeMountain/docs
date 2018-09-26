---
title: Typography
description: HTML email typography with system and web fonts, in Pine
tags: fonts, typography, type
page_order: 8
navigation:
  group: Content
  order: 2
---

# Beautiful typography, extendable with web fonts

Pine uses the golden ratio for both desktop and mobile, in order to deliver content width-tailored typography 
that looks great and is easy to read. Just like you're used to from reading a book.

---

## Golden ratio

Font size and line height are based on the maximum content width achievable with one column: `700px`

Following the golden ratio formula for typography, we reset body text to a `16px` font size, with a `26px` line height. 
For mobile devices, the line height is reduced to `23px`.

## Native Font Stack

Pine uses the same beautiful system font stack that you're used to from Bootstrap 4. 
Even in the absence of web fonts support, this helps create beautiful emails across the board, by taking advantage of the operating system's fonts.

In order to avoid unnecessary font-family automatic CSS inlining with most <abbr class="cursor-default" title="Email Service Provider">ESP</abbr>s, 
Pine takes advantage of conditional comments for Outlook, as well as `@media` queries, to cleverly define fonts so that your HTML is kept clean 
(and away from Gmails clipping limit) even after your ESP inlines the framework styles.

For Outlook & Windows 10 Mail:

```html
<!--[if mso]>
...
<style>
  ...
  td,th,div,p,a,h1,h2,h3,h4,h5,h6 {font-family:"Segoe UI",Helvetica,Arial,sans-serif;}
</style>
<![endif]-->
```

For any [email client that supports `@media` queries](https://www.campaignmonitor.com/css/media-queries/media/):

```css
@media only screen {
  .col, td, th, div, p {font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI","Roboto","Helvetica Neue",Arial,sans-serif;}
}
```

## Google Fonts

For email clients that support web fonts, you can customise Pine further with our Google Fonts technique.

In order to avoid [Outlook's TNR bug ↗](https://litmus.com/community/discussions/982-outlook-overrides-font-to-times-new-roman) 
and still keep our code short and clean, we import the web fonts in an `@media` query, and apply them after the native font stack reset. 
All clients that support web fonts also support media queries, but Outlook will just ignore it.

In this example, we import one webfont: a display font called 'Bangers', that we apply with the `.display-font` class. 
The rest of the text will use the native font stack, but the paragraph on the lower right will use the system's monospace font: being defined inline, 
it overrides the default font family:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#google-fonts-preview">Preview</a></li>
        <li><a href="#google-fonts-code">Code</a></li>
    </ul>    
    <div id="google-fonts-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="../examples/typography/google-fonts.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 500px;"></iframe>
        </div>
    </div>    
    <div id="google-fonts-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 0 20px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td align="center" class="col" width="640" style="padding: 0 10px;">
            <h1 class="display-font" style="color: #3FB58B; margin-bottom: 10px; line-height: 100%;">My two natures had memory in common</h1>
            <span style="color: #666666; font-size: 14px;">- the heading above is using a display font from Google Fonts -</span>
          </td>
        </tr>
      </table>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="divider" style="padding: 30px 15px;">
            <div style="background: #EEEEEE; height: 1px; line-height: 1px;">&zwnj;</div>
          </td>
        </tr>
      </table>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
          <tr>
          <td class="col col-sm-6" width="310" style="padding: 0 10px;">
              <h2 style="font-weight: 500; margin: 0;">Native font</h2>
              <p style="color: #555555;">The heading above uses your computer's pre-installed fonts. Just like this text.</p>
          </td>
          <td class="col col-sm-6" width="310" style="padding: 0 10px;">
              <h2 style="font-weight: 300; margin: 0;">A light heading</h2>
              <p style="color: #555555; font-family: monospace;">Override the default font stack with inline CSS. Used here: font-family: monospace;</p>
          </td>
          </tr>
      </table>
    </td>
  </tr>
</table>
```
    </div>
</div>

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Tip</p>
  <div class="-mb-4 text-md text-blue-dark" markdown="1">Use an integer value for defining font weights, i.e. `font-weight: 700;` for bold. It's shorter, you can easily cross-check with what you imported from Google Fonts, and it allows for more granular control instead of relying on keywords that are relative to the parent element.</div>
</div>
