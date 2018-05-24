---
title: Alert
description: Highlight sections of your email with an alert
tags: alert, banner, call to action
path: acorn/components
page_order: 17
navigation:
  group: Components
---

# Effective attention grabbers

Alerts in Acorn are useful for drawing attention, and they go great together with [buttons](/acorn/components/button).

---

## Filled

A simple Row table with background colour and some padding on the cell inside. Since we're not using the Grid, we don't even need to add a `col` class on the cell.

To align text inside, simply use the `align=""` attribute on the cell that has the background colour defined.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#alert-filled-preview">Preview</a></li>
        <li><a href="#alert-filled-code">Code</a></li>
    </ul>    
    <div id="alert-filled-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/alert-filled.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 150px;"></iframe>
        </div>
    </div>    
    <div id="alert-filled-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td bgcolor="#0099E5" style="color: #FFFFFF; padding: 16px 32px;">
      This is an alert with background colour
    </td>
  </tr>
</table>
```
    </div>
</div>

## Outlined

We've also included an outlined alert, that has a 2px border added on the Row table. There's no background colour set (it's inherited from the Container), but you can add one for further customisation.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#alert-outlined-preview">Preview</a></li>
        <li><a href="#alert-outlined-code">Code</a></li>
    </ul>    
    <div id="alert-outlined-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/alert-outlined.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 150px;"></iframe>
        </div>
    </div>    
    <div id="alert-outlined-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%" style="border: 2px solid #0099E5;">
  <tr>
    <td style="color: #0099E5; padding: 16px 32px;">
      This is an alert with an outline border
    </td>
  </tr>
</table>
```
    </div>
</div>

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-6" role="alert">
    <p class="font-sans font-bold m-0 text-md text-blue-dark">Tip</p>
    <div class="-mb-4 text-md text-blue-dark" markdown="1">Always specify your HEX colours in 6 digits. That means `#RRGGBB` instead of `#RGB`. Some email clients won't like it if you use, for example, `#FC0` instead of `#FFCC00`.</div>
</div>
