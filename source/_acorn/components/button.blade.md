---
title: Button
description: HTML email buttons with graceful fallback for Outlook
tags: button, link, call to action
path: acorn/components
page_order: 18
navigation:
  group: Components
---

# People need things to click on

Buttons in Acorn are simple table structures with an anchor inside. 

For modern email clients, CSS padding is used to make the entire button clickable. In Outlook, since CSS padding isn't supported on anchor tags, `mso-padding-alt` is used on the table cell in order to preserve the aspect - however, this means that only the text itself will be clickable.

This makes customisation easy while still looking great across email clients. But if you want fully-clickable buttons in Outlook for Windows, we highly recommend Campaign Monitor's [bulletproof email buttons ↗](https://buttons.cm/)

---

## Filled

Your regular table-based button for email. Background colour is defined through the `bgcolor=""` attribute, and a `border-radius` is set inline on the table cell, for rounded button corners in email clients that support it.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#button-filled-preview">Preview</a></li>
        <li><a href="#button-filled-code">Code</a></li>
    </ul>    
    <div id="button-filled-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/button-filled.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 150px;"></iframe>
        </div>
    </div>    
    <div id="button-filled-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<!-- Default -->
<table cellpadding="0" cellspacing="0" role="presentation">
  <tr>
    <th bgcolor="#34BF49" style="border-radius: 3px; mso-padding-alt: 6px 42px 12px;">
      <a href="http://thememountain.com" style="color: #FFFFFF; display: inline-block; font-size: 13px; line-height: 100%; padding: 12px 42px; text-decoration: none;">Button label</a>
    </th>
  </tr>
</table>

<!-- Custom: center-aligned on mobile only -->
<table class="align-sm-center" cellpadding="0" cellspacing="0" role="presentation">
  <tr>
    <th bgcolor="#34BF49" style="border-radius: 3px; mso-padding-alt: 6px 42px 12px;">
      <a href="http://thememountain.com" style="color: #FFFFFF; display: inline-block; font-size: 13px; line-height: 100%; padding: 12px 42px; text-decoration: none;">Button label</a>
    </th>
  </tr>
</table>
```
    </div>
</div>

## Outlined

Outlined buttons don't have background colour, so they'll inherit their container's background. A 2px solid border is used to highlight the element instead.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#button-outlined-preview">Preview</a></li>
        <li><a href="#button-outlined-code">Code</a></li>
    </ul>    
    <div id="button-outlined-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/button-outlined.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 150px;"></iframe>
        </div>
    </div>    
    <div id="button-outlined-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<!-- Default -->
<table cellpadding="0" cellspacing="0" role="presentation">
  <tr>
    <th style="border: 2px solid #34BF49; border-radius: 3px; mso-padding-alt: 6px 42px 12px;">
      <a href="http://thememountain.com" style="color: #34BF49; display: inline-block; font-size: 13px; line-height: 100%; padding: 12px 42px; text-decoration: none;">Button label</a>
    </th>
  </tr>
</table>

<!-- Custom: Full width on mobile -->
<table class="full-width-sm" cellpadding="0" cellspacing="0" role="presentation">
  <tr>
    <th style="border: 2px solid #34BF49; border-radius: 3px; mso-padding-alt: 6px 42px 12px;">
      <a href="http://thememountain.com" class="col" style="color: #34BF49; display: inline-block; font-size: 13px; line-height: 100%; padding: 12px 42px; text-decoration: none;">Button label</a>
    </th>
  </tr>
</table>
```
    </div>
</div>

## Pill

Simply increase the `border-radius` on a Filled Button, to get a Pill Button.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#button-pill-preview">Preview</a></li>
        <li><a href="#button-pill-code">Code</a></li>
    </ul>    
    <div id="button-pill-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/button-pill.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 150px;"></iframe>
        </div>
    </div>    
    <div id="button-pill-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table align="center" cellpadding="0" cellspacing="0" role="presentation" style="margin: 0 auto;">
  <tr>
    <th bgcolor="#34BF49" style="border-radius: 50px; mso-padding-alt: 6px 42px 12px;">
      <a href="http://thememountain.com" style="color: #FFFFFF; display: inline-block; font-size: 13px; line-height: 100%; padding: 12px 42px; text-decoration: none;">Button label</a>
    </th>
  </tr>
</table>
```
    </div>
</div>

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-6" role="alert">
    <p class="font-sans font-bold m-0 text-md text-blue-dark">Tip</p>
    <div class="-mb-4 text-md text-blue-dark" markdown="1">Remove the background colour and add a border on a Pill Button `<th>`, to get an Outlined Pill Button.</div>
</div>

## Alignment

### Mobile

In order to custom align a button for mobile-only, simply add one of the `align-sm-` classes on the button `<table>` tag. Check the [Filled Button example ↑](#filled), it center-aligns the button only on mobile.

### Desktop

You can custom-align a button for desktops and tablets through the use of the `align=""` attribute on the `<table>` tag. For centering, you will also need the `margin: 0 auto;` inline CSS. Of course, you can combine these with one of the mobile alignment classes:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#buttons-alignment-preview">Preview</a></li>
        <li><a href="#buttons-alignment-code">Code</a></li>
    </ul>    
    <div id="buttons-alignment-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/buttons-alignment.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 600px;"></iframe>
        </div>
    </div>    
    <div id="buttons-alignment-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table align="center" cellpadding="0" cellspacing="0" role="presentation" style="margin: 0 auto;">
  <tr>
    <th bgcolor="#34BF49" style="border-radius: 50px; mso-padding-alt: 6px 42px 12px;">
      <a href="http://thememountain.com" style="color: #FFFFFF; display: inline-block; font-size: 13px; line-height: 100%; padding: 12px 42px; text-decoration: none;">Button label</a>
    </th>
  </tr>
</table>
```
    </div>
</div>

## Full Width On Mobile

Need a button to go full width on mobile? Simply add the `full-width-sm` class on the button `<table>`, and the `col` class on the anchor tag. Check the [Outlined Button example ↑](#outlined)

## Other Notes

We're using `mso-padding-alt` on the table cell - this keeps the button looking the same in Outlook. 

You might have noticed that it's not using the same pixel values as the padding on the anchor. If it were, Outlook would add too much space above the anchor text. So, with shorthand CSS, we just use half the original top padding value: in our example, 12px becomes 6px top padding for Outlook-only.

Another thing is that `<th>` is used instead of `<td>`. This is for the _sole purpose_ of writing less markup for bold text. If you don't need bold text, no need to add inline `font-weight` CSS: simply use `<td>` instead.
