---
title: Reverse Stack
description: Show email content in a different order on mobile
tags: reverse, stack, switch
page_order: 15
path: acorn/utilities
navigation:
  group: Utilities
  order: 5
  title: Reverse Stack
---

# Custom stacking order for columns on mobile

With email on mobile, you sometimes need to reverse the order in which stacked columns appear. You may even need to set a custom stacking order for layouts with 3+ columns. Acorn comes with pre-built layout examples that will help you achieve this.

We have included two examples:

1. Reverse a 2-column layout
2. Custom stacking order for a 3-column layout

---

## Reverse a 2-column layout {#2-col}

It's often the case when you have text on the left and an image on the right. That's fine for desktop, since it's visible right away. But wouldn't it be nice if that image were shown first, on mobile devices?

Step by step:

1. Add the `full-width-sm` class to the `<tr>` tag that contains the columns
2. Use the `stack-sm-last` class on the first column, and `stack-sm-first` on the last column
3. Finally, add the px-sm responsive spacing utility class on the first `<td>` in your Row table

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#reverse-2-col-preview">Preview</a></li>
        <li><a href="#reverse-2-col-code">Code</a></li>
    </ul>    
    <div id="reverse-2-col-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/utilities/reverse-2-col.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 520px;"></iframe>
        </div>
    </div>    
    <div id="reverse-2-col-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="px-sm-16" style="padding: 0 24px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr class="full-width-sm">
          <td class="col stack-sm-last" width="260" style="padding: 0 8px;">
            <h2 style="font-weight: 300;">Last on Mobile</h2>
          </td>
          <td class="col stack-sm-first" width="260" style="padding: 0 8px;">
            <h2 style="font-weight: 300;">First on mobile</h2>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```
    </div>
</div>

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-6" role="alert">
    <p class="font-sans font-bold m-0 text-md text-blue-dark">Tip</p>
    <div class="-mb-4 text-md text-blue-dark" markdown="1">Padding doesn't work on columns with `stack-sm-first` or `stack-sm-last`, due to the nature of the `display` CSS property being used to reverse them. In order to preserve the apparent container padding on mobile, we're setting the `px-sm` class on their parent `<td>`. If you need padding on mobile for these columns, wrap your content inside a <code>&lt;div&gt;</code> and use any of the responsive spacing utility classes on that, instead.
    </div>
</div>

## Custom stacking order for a 3-column layout {#3-col}

We can use the same technique to define a custom stacking order for mobile in a 3 or more columns email.

Step by step:

1. Add the `full-width-sm` class to the `<tr>` tag that contains the columns
2. Use the `stack-sm-top` class on the column(s) you want to show first
3. Use the `stack-sm-first` class on the column(s) you want to show after the first column(s)
4. Use the `stack-sm-last` class on the column(s) you want to show last
5. Just like before, add the `px-sm` responsive spacing utility class on the first `<td>` in your Row table

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#custom-order-3-col-preview">Preview</a></li>
        <li><a href="#custom-order-3-col-code">Code</a></li>
    </ul>    
    <div id="custom-order-3-col-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/utilities/custom-order-3-col.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 220px;"></iframe>
        </div>
    </div>    
    <div id="custom-order-3-col-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="px-sm-16" style="padding: 0 24px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr class="full-width-sm">
          <td class="col stack-sm-last" width="168" style="padding: 0 8px;">
            <h3 style="font-weight: 300;">Last on Mobile</h3>
          </td>
          <td class="col stack-sm-first" width="168" style="padding: 0 8px;">
            <h3 style="font-weight: 300;">Second on Mobile</h3>
          </td>
          <td class="col stack-sm-top" width="168" style="padding: 0 8px;">
            <h3 style="font-weight: 300;">First on Mobile</h3>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```
    </div>
</div>

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-6" role="alert">
    <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
    <div class="-mb-4 text-md text-blue-dark" markdown="1">Columns using the same `stack-sm-` class will appear on mobile in the order defined in your HTML.</div>
</div>
