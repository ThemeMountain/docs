---
title: Grid
description: Pine's responsive email grid system
tags: grid, columns, rows, gutters, offsets
page_order: 6
navigation:
  group: Layout
  order: 6
---

# A solid, 12 column responsive grid for emails

Pine's twelve-column responsive grid system gives you the flexibility to create layouts of all shapes and sizes, for both desktop and mobile. 
Create solid desktop emails and adapt them to specific mobile requirements with our utility classes.

![Pine 12 column email grid](/img/pine/pine-12-col-grid.png) {#grid-image}

The grey columns in the image above show available content area width.

You could remove the column gutters and have more space - here's the same grid depicting column widths with gutters included:

![Pine 12 column email grid with gutters included](/img/pine/pine-12-col-grid-with-gutters.png)

---

## Row

Rows are 100% wide, center-aligned stackable tables that go inside a container and house your column tables. 
Their maximum width is constrained by the container, so we can take advantage of that and use `width="100%"` on them. 
This way, we don't need to worry about resetting widths through CSS when nesting rows:

```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 0 20px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col" width="640" style="padding: 0 10px;">
            
            Add your content here

          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert" id="row-bg-colour">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Background Colour</p>
  <p class="m-0 text-md text-blue-dark">Row tables don't have one, they inherit the Container's background colour in order to avoid a box model bug in some email clients, that creates unwanted hairlines at the bottom. If you do need different background colours on individual rows, make sure to test and check if this hairline is acceptable in your case.</p>
</div>

Row tables have 30px padding set on both sides of their table cell. 
This creates the impression that the container has padding (in fact, it does not), all while giving us opt-in flexibility: 
the goal here is to give content some breathing room in the container, by creating whitespace.

However, we now have the freedom to choose whether we use this whitespace or not. 
For example, in case we need an image to stick to the side, we can remove row padding along with the column's padding for that side:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#custom-container-padding-preview">Preview</a></li>
        <li><a href="#custom-container-padding-code">Code</a></li>
    </ul>    
    <div id="custom-container-padding-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="../examples/grid/custom-container-padding.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 630px;"></iframe>
        </div>
    </div>    
    <div id="custom-container-padding-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 0 20px 0 0;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col col-sm-8 pt-sm-20" width="340" style="padding: 0 10px 0 0; vertical-align: middle;">
            <img src="https://picsum.photos/340/480?image=1011" alt="My image" width="292">
          </td>
          <td class="col col-sm-9 col-sm-push-3 py-sm-20" width="310" style="padding: 0 10px; vertical-align: middle;">
            <h2 style="font-weight: 400; margin: 0;">Article title</h2>
            <p style="color: #999999; font-size: 12px; margin: 0;">NOV 12<sup>th</sup>, 2017</p>
            <p style="color: #666666;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed pharetra
              neque, at interdum dolor.</p>
            <p class="hide-sm" style="color: #999999; font-size: 13px; margin-bottom: 24px;">Nulla quis nunc lacus.
              Integer fringilla blandit mi, id pharetra nisl. Etiam molestie orci mi, non commodo mauris dapibus sed.</p>
            <table cellpadding="0" cellspacing="0" role="presentation">
              <tr>
                <th bgcolor="#34BF49" style="border-radius: 3px; mso-padding-alt: 6px 42px 12px;">
                  <a href="http://thememountain.com" style="color: #FFFFFF; display: inline-block; font-size: 13px; line-height: 100%; padding: 12px 42px; text-decoration: none;">Read
                    more &rarr;</a>
                </th>
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

### Apparent Container Padding {#apparent-padding}

Inside the Row table, Pine nests another table that contains the grid Columns. 
As you can see in the example above, this nesting allows us to set container padding and column gutters independently, 
so that we don't always need to remember to set different paddings on the outer edges of the first and last columns in the grid.

Together, this Row padding combined with Column gutters create an _apparent container padding_ of 30px, resulting in a nice 'boxed' layout on both mobile and desktop.

Of course, you can use any of the mobile spacing helpers on the row table cell, or on each grid column, to fine tune mobile spacing to your requirements.

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert" id="column-count-note">
  <p class="m-0 text-md text-orange-dark">The grid is designed to work with up to 12 columns in a Row table. If you add more than 12, the Container will expand and Column width will become unpredictable.</p>
</div>

---

## Column

Columns are the `<td>` tags inside the nested table of a Row table:

```html
<td class="col" width="310" style="padding: 0 10px;">1</td>
<td class="col" width="310" style="padding: 0 10px;">2</td>
```

Each column has a fixed width defined through the `width=""` attribute, for desktop and tablets. 
This fixed width is set at 35px in the 12-column grid, but will be different depending on the amount of columns used.

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <div class="-mb-4 text-md text-blue-dark" markdown="1">See grid column width reference in the [grid image above ↑](#grid-image) and in the [examples from the /grid folder ↗](https://github.com/ThemeMountain/pine/tree/master/grid)</div>
</div>

Columns in Pine have 10px gutters, defined through inline shorthand-CSS padding for each side.

### Columns on Mobile

Columns are required to use a `col` class, needed for normalization on mobile. 
This class will set the column width to 100%, and will also adjust content line-height to a smaller value, more suitable for mobile devices:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#col-stacking-mobile-preview">Preview</a></li>
        <li><a href="#col-stacking-mobile-code">Code</a></li>
    </ul>    
    <div id="col-stacking-mobile-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="../examples/grid/col-stacking-mobile.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 345px;"></iframe>
        </div>
    </div>    
    <div id="col-stacking-mobile-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 30px 20px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col" width="310" style="padding: 0 10px;">
            <h2 style="font-weight: 500; margin: 0;">First column</h2>
            <p style="color: #999999; font-size: 12px; margin: 0;">Full width on mobile</p>
            <p>These columns use the required <code>.col</code> class.</p>
          </td>
          <td class="col" width="310" style="padding: 0 10px;">
            <h2 style="font-weight: 500; margin: 0;">Second column</h2>
            <p style="color: #999999; font-size: 12px; margin: 0;">Also full width on mobile</p>
            <p>On mobile, this makes them 100% wide, so they stack.</p>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```
    </div>
</div>

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert">
  <div class="-mb-4 text-md text-orange-dark" markdown="1">Because we're using `<td>` and resetting it to `display: inline-block;` for mobile, column stacking cannot work properly in the Android 4.4 native email client. There are no plans to support this client.</div>
</div>

### Column Widths On Mobile

If you don't want columns to stack on mobile, you can use custom column mobile width classes:

The class names follow the familiar Bootstrap 4 naming convention:

- `col` - as in 'column'
- `-sm` - indicates it will apply on small screens only
- `-X` - number from 1 to 11: the equivalent amount of desktop columns to span

```css
.col {
  box-sizing: border-box;
  display: inline-block!important;
  line-height: 23px;
  width: 100%!important;
}

.col-sm-1  {max-width: 8.33333%;}
.col-sm-2  {max-width: 16.66667%;}
.col-sm-3  {max-width: 25%;}
.col-sm-4  {max-width: 33.33333%;}
.col-sm-5  {max-width: 41.66667%;}
.col-sm-6  {max-width: 50%;}
.col-sm-7  {max-width: 58.33333%;}
.col-sm-8  {max-width: 66.66667%;}
.col-sm-9  {max-width: 75%;}
.col-sm-10 {max-width: 83.33333%;}
.col-sm-11 {max-width: 91.66667%;}
```

These classes use percentage-based `max-width`, instead of `width`. 
This way, we only _constrain_ the mobile width, instead of overriding it with `!important`. Being able to write less code is always a win :)

You can use any combination of the mobile width classes. 
If their sum exceeds the equivalent of 12 columns, the first column that won't be able to fit in the same row will break onto the next one:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#max-4-columns-mobile-preview">Preview</a></li>
        <li><a href="#max-4-columns-mobile-code">Code</a></li>
    </ul>    
    <div id="max-4-columns-mobile-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="../examples/grid/max-4-columns-mobile.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 370px;"></iframe>
        </div>
    </div>    
    <div id="max-4-columns-mobile-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 0 20px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col col-sm-6" width="200" style="padding: 0 10px;">
            <p>Half on mobile <br><em style="color: #999999;">class="col col-sm-6"</em></p>
          </td>
          <td class="col col-sm-6" width="200" style="padding: 0 10px;">
            <p>Half on mobile <br><em style="color: #999999;">class="col col-sm-6"</em></p>
          </td>
          <td class="col col-sm-5" width="200" style="padding: 0 10px;">
            <p>This column breaks on the next line, becaues it exceeds the total allowed number of columns in a Row: <em style="color: #999999;">class="col col-sm-5"</em></p>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```
    </div>
</div>

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Remember</p>
  <div class="-mb-4 text-md text-blue-dark" markdown="1">Columns that only have the `col` class will be 100% wide and break on to their own line on mobile.</div>
</div>

### Column Offsets On Mobile

You can use offset classes to push columns to the right on mobile. These use the CSS `margin-left` property.

Just like mobile widths, the naming convention follows the Bootstrap 4 pattern:

- `col` - as in 'column'
- `-sm` - indicates it will apply on small screens only
- `-push` - indicates it will push the column
- `-X` - number from 1 to 11: the equivalent amount of desktop columns to span

```css
.col-sm-push-1  {margin-left: 8.33333%;}
.col-sm-push-2  {margin-left: 16.66667%;}
.col-sm-push-3  {margin-left: 25%;}
.col-sm-push-4  {margin-left: 33.33333%;}
.col-sm-push-5  {margin-left: 41.66667%;}
.col-sm-push-6  {margin-left: 50%;}
.col-sm-push-7  {margin-left: 58.33333%;}
.col-sm-push-8  {margin-left: 66.66667%;}
.col-sm-push-9  {margin-left: 75%;}
.col-sm-push-10 {margin-left: 83.33333%;}
.col-sm-push-11 {margin-left: 91.66667%;}
```

You can use these classes to fine tune and adapt your layouts for mobile devices. 
For example, let's create a 3-column desktop layout that changes to 2+1 columns on mobile, 
and aligns the third column (price) with the second one (description) on mobile:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#custom-mobile-column-offset-preview">Preview</a></li>
        <li><a href="#custom-mobile-column-offset-code">Code</a></li>
    </ul>    
    <div id="custom-mobile-column-offset-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="../examples/grid/custom-mobile-column-offset.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 290px;"></iframe>
        </div>
    </div>    
    <div id="custom-mobile-column-offset-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 30px 20px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col col-sm-6" width="200" style="padding: 0 10px;">
            <img src="https://picsum.photos/400?image=1059" alt="Product Title" width="200">
          </td>
          <td class="col col-sm-6" width="350" style="padding: 0 10px; vertical-align: middle;">
            <h4 style="margin: 0;">Product title</h4>
            <p style="color: #999999; margin: 0;">Short product description text here</p>
          </td>
          <td class="col col-sm-6 col-sm-push-6" width="50" style="padding: 0 10px; vertical-align: middle;">
            <h4 style="margin: 0;">Price</h4>
            <p style="color: #999999; margin: 0;">$49</p>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```
    </div>
</div>

---

## Responsive breakpoints

Pine is desktop-first. 

The fixed-width container and columns are overridden for mobile devices through the use CSS media queries.

### Large breakpoint

For large-ish screen sizes (i.e. landscape view), Pine resets Wrapper and Container widths to 100%, but the desktop column widths are still being used. 
This affects all devices with a screen size between 700px and 730px:

```css
@media only screen and (max-width: 730px) {
  .wrapper img {max-width: 100%;}
  u ~ div .wrapper {min-width: 100vw;}
  .container {width: 100%!important; -webkit-text-size-adjust: 100%;}
}
```

### Small breakpoint

This is where the fun starts. This media query applies to most devices, up to 699px screen width:

```css
@media only screen and (max-width: 699px) {
    ...
}
```


