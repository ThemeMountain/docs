---
title: Layout Overview
description: Overview of the base layout components in the Acorn Email Framework
tags: layout, base, wrapper, container
page_order: 5
navigation:
  group: Layout
  order: 5
  title: Overview
---

# Familiar components for building email layouts

The layout structure in Acorn is built with familiar frontend framework concepts, like wrappers, containers, and columns. All these components use HTML tables for markup, in order to provide consistent rendering across email clients.

---

## Wrapper

The Wrapper in Acorn is a full width table that houses the main container, centering it and allowing for defining a body background colour. It's also used to add some space around the container, so that it doesn't stick to the edges of the email client's viewport:

```html
<table class="wrapper" bgcolor="#EEEEEE" cellpadding="16" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td align="center">

        ...

    </td>
  </tr>
</table>
```

By default, Acorn uses 16px of padding on the wrapper table, through the use of the `cellpadding="16"` attribute. This value is enough to make the container stand out more while making sure the responsive view doesn't lose too much space. 16px is also half of the container's [apparent padding →](../acorn/grid/#apparent-padding)

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert" id="wrapper-gmail-ios-hack">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">Hack alert</p>
  <p class="m-0 text-md text-orange-dark">The <code>u ~ div .wrapper {min-width: 100vw;}</code> CSS is a temporary hack that forces the Gmail iOS app to expand its viewport properly to the right side. This hack will be removed if and when Google fixes the issue.</p>
</div>

---

## Container

This is the most basic component in Acorn, and it's mandatory when using the grid system:

```html
<table class="container" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" role="presentation" width="600">
  <tr>
    <td align="left">

      <!-- ADD ROWS HERE -->

    </td>
  </tr>
</table>
```

This 600px wide, center-aligned table holds the grid rows and columns in place, and defines a fixed width for our emails on desktop and tablets. On mobile, its width is forced to 100% so that our layout doesn't expand horizontally outside the viewport.

---

## Responsive breakpoints

Acorn is desktop-first. 

The fixed-width container and columns are overridden for mobile devices through the use CSS media queries.

### Large breakpoint

For large-ish screen sizes (i.e. landscape view), Acorn resets Wrapper and Container widths to 100%, but the desktop column widths are still being used. This affects all devices with a screen size between 481px and 632px:

```css
@media only screen and (max-width: 632px) {
  .wrapper img {max-width: 100%;}
  u ~ div .wrapper {min-width: 100vw;}
  .container {width: 100%!important; -webkit-text-size-adjust: 100%;}
}
```

### Small breakpoint

This is where the fun starts. This media query applies to most devices, up to 480px screen width:

```css
@media only screen and (max-width: 480px) {
    ...
}
```


