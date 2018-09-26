---
title: Images
description: Responsive and retina images for HTML email
tags: image, retina
page_order: 9
navigation:
  group: Content
  order: 3
---

# Sharp, responsive images that render well on both mobile and desktop

Since pretty much all of today's mobile devices have high pixel density screens, you need to use "retina" images for your media 
to look sharp on any screen. This is done by using images that are usually twice (or even more!) the intended display size.

However, some email clients - specifically Outlook for desktop - don't like images that are larger than their container, 
and will blow up your design if you don't use a fixed width.

Pine uses fluid retina images, so they display well across the board. Even in Outlook.

---

## Fluid Retina Images {#fluid-retina}

Not only does this ensure proper image sizing in all email clients, but your mobile images will not expand beyond their natural width.

Simply use the `width=""` attribute on an `<img>` tag, to set a fixed width that is half the natural image width. 
This is the intended display width, and will work in all email clients, including Outlook.

On mobile, Pine will ensure your image scales proportionally and doesn't exceed its container width:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#fluid-retina-preview">Preview</a></li>
        <li><a href="#fluid-retina-code">Code</a></li>
    </ul>    
    <div id="fluid-retina-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="../examples/images/fluid-retina.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 1322px;"></iframe>
        </div>
    </div>    
    <div id="fluid-retina-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 30px 20px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col" width="640" style="padding: 0 10px;">
            <h2 style="font-weight: 300;">Fluid Retina</h2>
            <img src="https://picsum.photos/1280/1280?image=631" alt="Image 1" width="640">
          </td>
        </tr>
        <tr>
          <td class="col" width="640" style="padding: 0 10px;">
            <h2 style="font-weight: 300;">Fluid Non-Retina</h2>
            <img src="https://picsum.photos/640/640?image=631" alt="Image 2" width="640">
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```
    </div>
</div>

_Note: the example is using a 1280x1280 image for retina, and a 640x640 one for non-retina. 
The difference is best viewed on a high-density display, like on a smartphone._

## Mobile Full Width

Sometimes, you may need to have a retina image expand to 100% of its container width on mobile. 

Since Pine prevents this by default (through `max-width: 100%;`), you can use the `full-width-sm` utility class on the `<img>` tag, to force it to full width on mobile:

```html
<img class="full-width-sm" src="..." alt="..." width="123">
```

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">Caution</p>
  <div class="-mb-4 text-md text-orange-dark" markdown="1">Although it may not be noticeable on large images, keep in mind that this will render non-retina images larger than their natural width, making them look blurry or pixelated.</div>
</div>

## Hiding Images on Desktop {#hiding-on-desktop}

While our `hide-sm` utility class is enough to hide an image in mobile email clients, things get a bit more complicated on desktop. You can hide images on desktop and only show them on mobile just like we do with the [hamburger navigation](components/navigation/#hamburger) icon:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#hide-on-desktop-preview">Preview</a></li>
        <li><a href="#hide-on-desktop-code">Code</a></li>
    </ul>    
    <div id="hide-on-desktop-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="../examples/images/hide-on-desktop.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 320px;"></iframe>
        </div>
    </div>    
    <div id="hide-on-desktop-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<!--[if !mso ]><!-->
  <img class="show-sm" src="https://picsum.photos/640/400?image=1025" width="600" style="display: none; max-height: 0;">
<!--<![endif]-->
```
    </div>
</div>

The inline CSS and Outlook conditional comment will hide the image for desktop email clients, while the `show-sm` class will make it visible on mobile devices.

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Tip</p>
  <div class="-mb-4 text-md text-blue-dark" markdown="1">Always use `aria-hidden="true"` on hidden or UI images - it'll help screen readers skip them.</div>
</div>
