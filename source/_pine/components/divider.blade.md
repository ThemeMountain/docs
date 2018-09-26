---
title: Divider
description: HTML email hairline dividers and separators
tags: divider, line, separator
path: acorn/components
page_order: 20
navigation:
  group: Components
---

# Vertical email spacing, with a dash of colour

Similar to [Spacers](/acorn/components/spacer), Dividers provide consistent vertical spacing while allowing to visually separate your content. 

A Divider has a thin horizontal line in the middle, which you can style to suit your needs. Being 100% wide, it can be used anywhere a table is allowed: before/after other tables, or inside table cells or divs.

The spacing above and below the divider line is defined by adjusting the vertical padding of the inner `<td>` element, through inline shorthand CSS. 

Unlike Spacers, Divider height is not reset on mobile. Instead, you can adjust it by adding [padding utility classes](/acorn/utilities/spacing) to the `<td class="divider">`.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#divider-preview">Preview</a></li>
        <li><a href="#divider-code">Code</a></li>
    </ul>    
    <div id="divider-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/divider.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 370px;"></iframe>
        </div>
    </div>    
    <div id="divider-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<!-- Same height on mobile -->
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="divider" style="padding: 24px 16px;">
      <div style="background: #EEEEEE; height: 1px; line-height: 1px;">&zwnj;</div>
    </td>
  </tr>
</table>

<!-- Different height on mobile -->
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="divider py-sm-24" style="padding: 16px;">
      <div style="background: #EEEEEE; height: 1px; line-height: 1px;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>

_Note: in the example above, a background colour was set on the `<td class="divider"`, so that the height differences are noticeable._
