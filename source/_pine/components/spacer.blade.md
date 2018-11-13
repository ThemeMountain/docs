---
title: Spacer
description: Consistent vertical spacing for HTML emails
tags: spacer, gap, margin
path: pine/components
page_order: 25
navigation:
  group: Components
---

# A reliable and flexible component for all your vertical spacing needs

Vertical spacing in emails can be tricky, because of inconsistent support for margins, padding, and `<br>` tags. 
The Spacer component in Pine helps create consistent vertical spacing between and inside Wrappers and Rows, and inside Columns.

There are 3 types of Spacers:

- Universal
- Table
- Row

---

## Universal

This is the most flexible Spacer component. Being a `<div>`, it can be used anywhere such an element is allowed. 
    In our case: before/after tables, inside `<td>` / `<th>`, or inside other `<div>` elements.

The height of an Universal Spacer is defined by the `line-height` value from the inline CSS.

On mobile, Universal Spacers are reset to 0 height, to allow for greater customisation flexibility. 
As can be seen in the examples, we can use inline `height:` CSS to keep the desktop height, 
or we can use [mobile spacing utility classes](/pine/utilities/spacing) to define a different height for the Spacer on mobile.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#spacer-universal-preview">Preview</a></li>
        <li><a href="#spacer-universal-code">Code</a></li>
    </ul>    
    <div id="spacer-universal-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/pine/includes/components/spacer-universal.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 500px;"></iframe>
        </div>
    </div>
    <div id="spacer-universal-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<div class="spacer py-sm-20" style="line-height: 40px;">&zwnj;</div>
```
Note: Parsedown Extra currently has issues displaying code properly. That div should have a zero-width non-joiner inside - [see it on GitHub ↗](https://github.com/ThemeMountain/pine/blob/master/components/spacer/universal-spacer.html)
    </div>
</div>

## Table

The Table Spacer is a simple table with an empty cell that has a height set. 
Since CSS styling support for `<td>`s is pretty solid across the board, we can do 
further customisations such as adding background colour, paddings, or borders on the table/cell.

```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="spacer py-sm-20" height="40"></td>
  </tr>
</table>
```

Just as with Universal Spacers, these can also be customised with either inline CSS `height:`, or through mobile spacing utility classes.

## Row

The Table Row Spacer is meant to be used inside a `<table>`. 
We frequently use it to add vertical spacing above or below the Row that holds the Columns - you can see it in several of Pine's components.

```html
<tr>
  <td class="spacer py-sm-20" height="40"></td>
</tr>
```

Height is defined with a `height=""` attribute, and you can of course customise mobile height just like for the other Spacers.

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">Warning</p>
  <div class="-mb-4 text-md text-orange-dark" markdown="1">If using an Table Row Spacer inside a table that has 2 or more columns, you need to add the `colspan=""` attribute on the spacer's `<td>` element, and make it equal to the maximum number of columns used in any given row inside that table.</div>
</div>
