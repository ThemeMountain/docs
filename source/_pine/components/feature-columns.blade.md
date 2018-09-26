---
title: Feature Columns
description: 50-50 stackable email module layout
tags: feature, highlight, box
path: acorn/components
page_order: 21
navigation:
  group: Components
---

# Visually organize key aspects of content in your emails

You can use Feature Columns to create content blocks that describe product features or services in your email.

A simple 2-2 column layout with centered text and images. On mobile, columns will stack, but you can use [mobile column width classes](../grid#column-widths-on-mobile) to play around with the layout. Background colours can be added to the columns, for an extra touch.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#feature-columns-preview">Preview</a></li>
        <li><a href="#feature-columns-code">Code</a></li>
    </ul>    
    <div id="feature-columns-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/feature-columns.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 470px;"></iframe>
        </div>
    </div>    
    <div id="feature-columns-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col" align="center" width="236" style="padding: 32px;">
            <img src="https://i.imgur.com/XqzhK67.png" width="36" alt="Download">
            <h3>Download our app</h3>
            <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
          </td>
          <td class="col" align="center" bgcolor="#7E57C2" width="236" style="padding: 32px;">
            <img src="https://i.imgur.com/BuBHL3w.png" width="36" alt="Download">
            <h3 style="color: #FFFFFF;">Take control</h3>
            <div style="color: #FFFFFF;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```
    </div>
</div>
