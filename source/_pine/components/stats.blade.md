---
title: Stats
description: Show number statistics in HTML email
tags: count, followers, numbers
path: acorn/components
page_order: 26
navigation:
  group: Components
---

# Countless countable things

The Stats component can be used to display various countable things, like a followers count or projects completed.

---

## Basic Text Left

Basic Text Left Stats is a 3-column module that has columns separated with a vertical border, and text aligned to the left. On mobile, the columns stack by default, and the borders are removed.

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
            <iframe src="/acorn/includes/components/stats-basic-left.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 380px;"></iframe>
        </div>
    </div>
    <div id="stats-basic-left-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 0 8px;">
      <div class="spacer py-sm-16" style="line-height: 32px;">&zwnj;</div>
      <table class="text-sm-center" cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col pb-sm-16" width="146" style="padding: 0 24px;">
            <h4 style="margin: 0 0 8px;">New Clients '14</h4>
            <div style="font-size: 42px; line-height: 100%;">2,200+</div>
          </td>
          <td class="col pb-sm-16 pt-sm-16 borderless-sm" width="146" style="border-left: 1px solid #EEEEEE; padding: 0 24px;">
            <h4 style="margin: 0 0 8px;">Accounts Since '10</h4>
            <div style="font-size: 42px; line-height: 100%;">4,000+</div>
          </td>
          <td class="col pt-sm-16 borderless-sm" width="146" style="border-left: 1px solid #EEEEEE; padding: 0 24px;">
            <h4 style="margin: 0 0 8px;">Awards Earned</h4>
            <div style="font-size: 42px; line-height: 100%;">860+</div>
          </td>
        </tr>
      </table>
      <div class="spacer py-sm-16" style="line-height: 32px;">&zwnj;</div>
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
            <iframe src="/acorn/includes/components/stats-basic-centered.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 380px;"></iframe>
        </div>
    </div>
    <div id="stats-basic-centered-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 0 32px;">
      <div class="spacer py-sm-16" style="line-height: 32px;">&zwnj;</div>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col pb-sm-16" align="center" width="168">
            <h4 style="margin: 0 0 8px;">New Clients '14</h4>
            <div style="font-size: 42px; line-height: 100%;">2,200+</div>
          </td>
          <td class="col pb-sm-16 borderless-sm" align="center" width="168" style="padding: 0 16px; border-left: 1px solid #EEEEEE;">
            <h4 style="margin: 0 0 8px;">Accounts Since '10</h4>
            <div style="font-size: 42px; line-height: 100%;">4,000+</div>
          </td>
          <td class="col borderless-sm" align="center" width="168" style="border-left: 1px solid #EEEEEE;">
            <h4 style="margin: 0 0 8px;">Awards Earned</h4>
            <div style="font-size: 42px; line-height: 100%;">860+</div>
          </td>
        </tr>
      </table>
      <div class="spacer py-sm-16" style="line-height: 32px;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>

## Basic Background Image

This variation includes a background image that works in all Outlook versions, and Windows 10 Mail. In order to have the image go full width, we are removing the side padding on the Row table cell.

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
            <iframe src="/acorn/includes/components/stats-basic-bkg-image.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 380px;"></iframe>
        </div>
    </div>
    <div id="stats-basic-bkg-image-code" class="tab-panel" markdown="1" aria-expanded="false">
Parsedown Extra currently has some issues displaying Outlook-targeted comments and VML code. 

[See the source on GitHub ↗](https://github.com/ThemeMountain/acorn/blob/master/components/stats/boxed-bkg-colour.html)</div>
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
            <iframe src="/acorn/includes/components/stats-boxed-bg-color.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 300px;"></iframe>
        </div>
    </div>
    <div id="stats-boxed-bg-color-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="spacer py-sm-16" height="32"></td>
  </tr>
  <tr>
    <td style="padding: 0 24px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col pb-sm-16" width="260" style="padding: 0 8px;">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td class="p-sm-16" align="center" bgcolor="#000000" style="color: #FFFFFF; line-height: normal; padding: 24px;">
                  <div style="font-size: 34px;">1,556 Houses</div>
                  <div style="font-size: 13px;">SINCE JANUARY '13</div>
                </td>
              </tr>
            </table>
          </td>
          <td class="col" width="260" style="padding: 0 8px;">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td class="p-sm-16" align="center" bgcolor="#000000" style="color: #FFFFFF; line-height: normal; padding: 24px;">
                  <div style="font-size: 34px;">643 Clients</div>
                  <div style="font-size: 13px;">SINCE AUGUST '10</div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class="spacer py-sm-16" height="32"></td>
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
            <iframe src="/acorn/includes/components/stats-boxed-bg-image.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 340px;"></iframe>
        </div>
    </div>
    <div id="stats-boxed-bg-image-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="px-sm-16" background="https://picsum.photos/1200/360?image=1033" style="background-image: url('https://picsum.photos/1200/360?image=1033'); background-repeat: no-repeat; background-position: center; background-size: cover;">
      <!--[if gte mso 9]>
      <v:image src="https://picsum.photos/1200/360?image=1033" xmlns:v="urn:schemas-microsoft-com:vml" style="width:600px;height:180px;" />
      <v:rect fill="false" stroke="false" style="position:absolute;width:600px;height:180px;">
      <div><![endif]-->
      <div class="spacer py-sm-16" style="line-height: 32px;">&zwnj;</div>
      <table class="full-width-sm" align="center" cellpadding="0" cellspacing="0" role="presentation" width="536" style="margin: 0 auto;">
        <tr>
          <td class="col pb-sm-16 px-sm-8" width="260">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td align="center" bgcolor="#000000" style="color: #FFFFFF; background: #000000; background: rgba(0,0,0,0.6); line-height: normal; padding: 24px;">
                  <div style="font-size: 34px;">1,556 Houses</div>
                  <div style="font-size: 13px;">SINCE JANUARY '13</div>
                </td>
              </tr>
            </table>
          </td>
          <td class="hide-sm" width="16">&nbsp;</td>
          <td class="col px-sm-8" width="260">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td align="center" bgcolor="#000000" style="color: #FFFFFF; background: #000000; background: rgba(0,0,0,0.6); line-height: normal; padding: 24px;">
                  <div style="font-size: 34px;">643 Clients</div>
                  <div style="font-size: 13px;">SINCE AUGUST '13</div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <div class="spacer py-sm-16" style="line-height: 32px;">&zwnj;</div>
      <!--[if gte mso 9]></div></v:rect><![endif]-->
    </td>
  </tr>
</table>
```
    </div>
</div>
