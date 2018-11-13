---
title: Stats
description: Show number statistics in HTML email
tags: count, followers, numbers
path: pine/components
page_order: 26
navigation:
  group: Components
---

# Countless countable things

The Stats component can be used to display various countable things, like a followers count or projects completed.

---

## Basic Text Left

Basic Text Left Stats is a 3-column module that has columns separated with a vertical border, 
and text aligned to the left. On mobile, the columns stack by default, and the borders are removed.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#stats-basic-left-preview">Preview</a></li>
        <li><a href="#stats-basic-left-code">Code</a></li>
    </ul>    
    <div id="stats-basic-left-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/pine/includes/components/stats-basic-left.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 380px;"></iframe>
        </div>
    </div>
    <div id="stats-basic-left-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 0 10px;">
      <div class="spacer py-sm-10" style="line-height: 30px;">&zwnj;</div>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col pb-sm-30" width="184" style="padding: 0 20px;">
            <h4 style="margin: 0 0 10px;">New Clients '14</h4>
            <div style="font-size: 45px; line-height: 100%;">2,200+</div>
          </td>
          <td class="col pb-sm-30 borderless-sm" width="190" style="border-left: 1px solid #EEEEEE; padding: 0 20px;">
            <h4 style="margin: 0 0 10px;">Accounts Since '10</h4>
            <div style="font-size: 45px; line-height: 100%;">4,000+</div>
          </td>
          <td class="col borderless-sm" width="184" style="border-left: 1px solid #EEEEEE; padding: 0 20px;">
            <h4 style="margin: 0 0 10px;">Awards Earned</h4>
            <div style="font-size: 45px; line-height: 100%;">860+</div>
          </td>
        </tr>
      </table>
      <div class="spacer py-sm-10" style="line-height: 30px;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>

## Basic Text Centered

Similar to the previous one, but with center-aligned text for both desktop and mobile.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#stats-basic-centered-preview">Preview</a></li>
        <li><a href="#stats-basic-centered-code">Code</a></li>
    </ul>    
    <div id="stats-basic-centered-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/pine/includes/components/stats-basic-centered.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 380px;"></iframe>
        </div>
    </div>
    <div id="stats-basic-centered-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 0 30px;">
      <div class="spacer py-sm-10" style="line-height: 30px;">&zwnj;</div>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col pb-sm-30" align="center" width="200">
            <h4 style="margin: 0 0 10px;">New Clients '14</h4>
            <div style="font-size: 45px; line-height: 100%;">2,200+</div>
          </td>
          <td class="col pb-sm-30 borderless-sm" align="center" width="199" style="padding: 0 20px; border-left: 1px solid #EEEEEE;">
            <h4 style="margin: 0 0 10px;">Accounts Since '10</h4>
            <div style="font-size: 45px; line-height: 100%;">4,000+</div>
          </td>
          <td class="col borderless-sm" align="center" width="199" style="border-left: 1px solid #EEEEEE;">
            <h4 style="margin: 0 0 10px;">Awards Earned</h4>
            <div style="font-size: 45px; line-height: 100%;">860+</div>
          </td>
        </tr>
      </table>
      <div class="spacer py-sm-10" style="line-height: 30px;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>

## Basic Background Image

This variation includes a background image that works in all Outlook versions, and Windows 10 Mail. 
In order to have the image go full width, we are removing the side padding on the Row table cell.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#stats-basic-bkg-image-preview">Preview</a></li>
        <li><a href="#stats-basic-bkg-image-code">Code</a></li>
    </ul>    
    <div id="stats-basic-bkg-image-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/pine/includes/components/stats-basic-bkg-image.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 380px;"></iframe>
        </div>
    </div>
    <div id="stats-basic-bkg-image-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td align="center" class="px-sm-30" bgcolor="#DA4437" background="https://picsum.photos/700/140?image=859" style="background-image: url('https://picsum.photos/700/140?image=859'); background-repeat: no-repeat; background-position: center; background-size: cover;">
      <!--[if gte mso 9]>
      <v:image src="https://picsum.photos/700/140?image=859" xmlns:v="urn:schemas-microsoft-com:vml" style="width:700px;height:140px;" />
      <v:rect fill="false" stroke="false" style="position:absolute;width:700px;height:140px;">
      <![endif]-->
      <div class="spacer pb-sm-30" style="line-height: 30px;">&zwnj;</div>
      <table class="full-width-sm" align="center" cellpadding="0" cellspacing="0" role="presentation" width="640">
        <tr>
          <td class="col pb-sm-30" align="center" width="200" style="color: #FFFFFF;">
            <h4 style="margin: 0 0 10px;">New Clients '14</h4>
            <p style="font-size: 45px; line-height: 100%; margin: 0;">2,200+</p>
          </td>
          <td class="col pb-sm-30 borderless-sm" align="center" width="200" style="padding: 0 20px; border-left: 1px solid #EEEEEE; color: #FFFFFF;">
            <h4 style="margin: 0 0 10px;">Accounts Since '10</h4>
            <p style="font-size: 45px; line-height: 100%; margin: 0;">4,000+</p>
          </td>
          <td class="col borderless-sm" align="center" width="200" style="border-left: 1px solid #EEEEEE; color: #FFFFFF;">
            <h4 style="margin: 0 0 10px;">Awards Earned</h4>
            <p style="font-size: 45px; line-height: 100%; margin: 0;">860+</p>
          </td>
        </tr>
      </table>
      <div class="spacer pb-sm-30" style="line-height: 30px;">&zwnj;</div>
      <!--[if gte mso 9]></v:rect><![endif]-->
    </td>
  </tr>
</table>
```
    </div>
</div>

## Boxed Background Colour

This variation highlights the columns with a background colour, for an added effect.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#stats-boxed-bg-color-preview">Preview</a></li>
        <li><a href="#stats-boxed-bg-color-code">Code</a></li>
    </ul>    
    <div id="stats-boxed-bg-color-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/pine/includes/components/stats-boxed-bg-color.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 300px;"></iframe>
        </div>
    </div>
    <div id="stats-boxed-bg-color-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="spacer py-sm-20" height="40">&zwnj;</td>
  </tr>
  <tr>
    <td style="padding: 0 20px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col pb-sm-30" width="310" style="padding: 0 10px;">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td class="p-sm-2" align="center" bgcolor="#000000" style="color: #FFFFFF; line-height: normal; padding: 30px;">
                  <h3 style="font-size: 36px; font-weight: 400; margin: 0;">1,556 Houses</h3>
                  <p style="font-size: 12px; margin: 0;">SINCE JANUARY '13</p>
                </td>
              </tr>
            </table>
          </td>
          <td class="col" width="310" style="padding: 0 10px;">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td class="p-sm-30" align="center" bgcolor="#000000" style="color: #FFFFFF; line-height: normal; padding: 30px;">
                  <h3 style="font-size: 36px; font-weight: 400; margin: 0;">643 Clients</h3>
                  <p style="font-size: 12px; margin: 0;">SINCE AUGUST '10</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class="spacer py-sm-20" height="40">&zwnj;</td>
  </tr>
</table>
```
    </div>
</div>

## Boxed Background Image

Of course, Boxed Stats also come with a background image variation:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#stats-boxed-bg-image-preview">Preview</a></li>
        <li><a href="#stats-boxed-bg-image-code">Code</a></li>
    </ul>    
    <div id="stats-boxed-bg-image-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/pine/includes/components/stats-boxed-bg-image.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 340px;"></iframe>
        </div>
    </div>
    <div id="stats-boxed-bg-image-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td background="https://picsum.photos/700/180?image=1033" style="background-image: url('https://picsum.photos/700/180?image=1033'); background-repeat: no-repeat; background-position: center; background-size: cover;">
      <!--[if gte mso 9]>
      <v:image src="https://picsum.photos/700/180?image=1033" xmlns:v="urn:schemas-microsoft-com:vml" style="width:700px;height:180px;" />
      <v:rect fill="false" stroke="false" style="position:absolute;width:700px;height:180px;">
      <![endif]-->
      <div class="spacer py-sm-10" style="line-height: 30px;">&zwnj;</div>
      <table class="full-width-sm" align="center" cellpadding="0" cellspacing="0" role="presentation" width="640">
        <tr>
          <td class="col pb-sm-30" width="310">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td align="center" bgcolor="#000000" style="color: #FFFFFF; background: #000000; background: rgba(0,0,0,0.6); line-height: normal; padding: 30px;">
                  <h3 style="font-size: 32px; font-weight: 400; margin: 0;">1,556 Houses</h3>
                  <p style="font-size: 12px; margin: 0;">SINCE JANUARY '13</p>
                </td>
              </tr>
            </table>
          </td>
          <td class="hide-sm" width="20">&zwnj;</td>
          <td class="col" width="310">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td align="center" bgcolor="#000000" style="color: #FFFFFF; background: #000000; background: rgba(0,0,0,0.6); line-height: normal; padding: 30px;">
                  <h3 style="font-size: 32px; font-weight: 400; margin: 0;">643 Clients</h3>
                  <p style="font-size: 12px; margin: 0;">SINCE AUGUST '13</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <div class="spacer py-sm-10" style="line-height: 30px;">&zwnj;</div>
      <!--[if gte mso 9]></v:rect><![endif]-->
    </td>
  </tr>
</table>
```
    </div>
</div>
