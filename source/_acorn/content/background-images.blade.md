---
title: Background Images
description: Responsive and retina images for HTML email
tags: background, image, VML
page_order: 10
navigation:
  group: Content
  order: 4
---

# Background images that work everywhere, including Outlook

Background images are a hard thing to get right in emails, mainly because of Microsoft's Word-based rendering engine for Outlook and Windows 10 Mail, which does not support CSS background images. Acorn makes it a breeze to get them working across the board.

---

## CSS Background Images {#with-css}

With the exception of Outlook and Windows Mail, the majority of email clients supports CSS background images. In addition to this inline style, we also include the `background=""` attribute, for Lotus Notes and a couple international clients (of course, if you don't need to support the latter ones, you can remove this).

We simply add these on the Column cell inside the row table:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#css-bg-images-preview">Preview</a></li>
        <li><a href="#css-bg-images-code">Code</a></li>
    </ul>    
    <div id="css-bg-images-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="../includes/images/css-bg-images.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 450px;"></iframe>
        </div>
    </div>    
    <div id="css-bg-images-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="col p-sm-16" align="center" bgcolor="#1F2225" width="100%" background="https://picsum.photos/600/400?image=842" style="background-image: url('https://picsum.photos/600/400?image=842'); background-repeat: no-repeat; background-position: center; background-size: cover;">
      <div class="spacer" style="line-height: 162px; height: 162px;">&zwnj;</div>
      <h1 style="color: #FFFFFF; font-size: 40px; font-weight: 300; line-height: 40px; margin: 0 0 10px;">Overlayed Text</h1>
      <p style="color: #FFFFFF;">CAN BE ANY HTML YOU NEED</p>
      <div class="spacer" style="line-height: 162px; height: 162px;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>

Make sure you also specify a fallback background colour that constrasts well with your text, in case the image doesn't load for some reason. Simply add the `bgcolor=""` attribute on the column cell, as shown above.

We can take it a step further and even use retina background images in email, with `background-size: cover`:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#css-retina-bg-images-preview">Preview</a></li>
        <li><a href="#css-retina-bg-images-code">Code</a></li>
    </ul>    
    <div id="css-retina-bg-images-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="../includes/images/css-retina-bg-images.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 480px;"></iframe>
        </div>
    </div>    
    <div id="css-retina-bg-images-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="col p-sm-16" align="center" bgcolor="#1F2225" width="100%" background="https://picsum.photos/1200/800?image=837" style="background-image: url('https://picsum.photos/1200/800?image=837'); background-repeat: no-repeat; background-position: center; background-size: cover;">
      <div class="spacer" style="line-height: 162px; height: 162px;">&zwnj;</div>
      <h1 style="color: #FFFFFF; font-size: 46px; line-height: 40px; margin: 0 0 10px;">x2</h1>
      <p style="color: #FFFFFF;">This uses a retina background image</p>
      <div class="spacer" style="line-height: 162px; height: 162px;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>

In a perfect world, that's all there is to it. In the real world though, there is also...

## Microsoft Outlook {#with-VML}

Since 2007, Outlook does not support CSS or HTML background images. The same applies to Windows 10 Mail. Instead, we need to learn (and cope with the caveats of) <abbr class="cursor-default" title="Vector Markup Language">VML</abbr>, which Outlook's Word rendering engine uses.

Immediately inside the cell to which we applied the HTML/CSS background image, we add an Outlook-specific HTML comment that contains the necessary VML code. As you can see, the tags of this code are closed in a separate comment block, which allows us to add our content in between:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#outlook-bg-images-preview">Preview</a></li>
        <li><a href="#outlook-bg-images-code">Code</a></li>
    </ul>    
    <div id="outlook-bg-images-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="../includes/images/outlook-bg-images.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 480px;"></iframe>
        </div>
    </div>    
    <div id="outlook-bg-images-code" class="tab-panel" markdown="1" aria-expanded="false">
Parsedown Extra currently has some issues with Outlook VML background image markup.

[View code on GitHub &rarr;](https://github.com/ThemeMountain/acorn/blob/master/examples/bkg-image.html)
    </div>
</div>

### Caveats {#VML-gotchas}

This VML code enables background images even in Windows 10 Mail, through the use of the `<v:image>` tag instead of the [traditional `<v:fill>`](https://en.wikipedia.org/wiki/Vector_Markup_Language#Tiled_full_width_table_cell_background_images). However, it does come at a cost:

- The height you set in the VML will be the exact height of your table cell in Outlook, no matter if the content is higher.
- You cannot have tiled or repeatable images with this technique. The `<v:fill>` approach can do that, but it doesn't work in Windows Mail. Choose your poison.

---

## VML Body Background Images for Outlook {#body-VML}

Add the VML code right after `<td>` of the Wrapper table (or, just before the container table), and remove `bgcolor=""` attribute on the Wrapper. It will add a background image to the entire email, in Outlook. Of course, you can mix it with the HTML/CSS background like we did, for the rest of the email clients. However, do note that this will not work in Windows Mail:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#outlook-body-vml-bg-images-preview">Preview</a></li>
        <li><a href="#outlook-body-vml-bg-images-code">Code</a></li>
    </ul>    
    <div id="outlook-body-vml-bg-images-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="../includes/images/outlook-body-vml-bg-images.html" frameborder="0" width="100%" class="block py-4 mx-auto transition-all" style="min-height: 450px;"></iframe>
        </div>
    </div>    
    <div id="outlook-body-vml-bg-images-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table class="wrapper" cellpadding="16" cellspacing="0" role="presentation" width="100%" background="halftone-yellow.png" style="background-image: url('halftone-yellow.png'); background-repeat: repeat; background-position: center;">
  <tr>
    <td align="center">
      <!--[if gte mso 9]>
        <v:background xmlns:v="urn:schemas-microsoft-com:vml" fill="t">
          <v:fill type="tile" src="halftone-yellow.png" />
        </v:background>
      <![endif]-->
      <table class="container" cellpadding="0" cellspacing="0" role="presentation" width="600">
        <tr>
          <td align="left">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td style="padding: 0 24px;">
                  <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
                    <tr>
                        <td class="col" align="center" bgcolor="#1F2225" width="100%" style="padding: 0 8px;">
                          <div class="spacer py-sm-24" style="line-height: 120px;">&zwnj;</div>
                          <h1 style="color: #FFFFFF; font-size: 40px; font-weight: 300; line-height: 40px; margin: 0 0 10px;">Email Body Background</h1>
                          <div class="spacer py-sm-24" style="line-height: 120px;">&zwnj;</div>
                        </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```
    </div>
</div>

The code above sets the email body background image to tile, but you can change it to `type="frame"` if have a large enough image.

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">Warning</p>
  <div class="-mb-4 text-md text-orange-dark" markdown="1">Drag and drop editors, such as Campaign Monitors' or MailChimp's, currently don't update the image path and dimensions for the VML code when using their visual editors. Some services, such as [Taxi for Email](http://taxiforemail.com/), [StampReady](https://www.stampready.net/) or [Mailster](https://mailster.co/) will do it for you, but with most other email builders you will need to set it in code yourself.</div>
</div>
