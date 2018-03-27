---
extends: _layouts.default.page
title: Header
description: Header Sections in Sartre Email
tags: header, logo, menu, top
order: 10
navigation:
  group: Sections
---

# The place for brand logos and menus

The template includes multiple Header sections:

- Centered Logo
- Centered With Split Menu
- Left/Right Aligned with Menu
- Left/Right Aligned With Title

Most of them include variations with navigation components:

- with Basic Menu
- with Hamburger Menu (interactive)

<div class="bg-blue-lightest border-l-4 border-blue p-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
  <p class="m-0 text-md text-blue-dark">The Hamburger menu icon currently cannot be made editable in any of the template integrations we provide. If you want to customize the icon, make sure you do that manually in the code.</p>
</div>

---

## Header Centered

### With Basic Menu

### With Hamburger Menu

### With Split Menu

## Header Left

### With Basic Menu

### With Hamburger Menu

### With Title

## Header Right

### With Basic Menu

### With Hamburger Menu

### With Title

---

## Customisation

You can easily change the looks of a header by changing its background, menu items, spacing, and logo image.

### Menu Items

Menu items are simple links that can be styled with inline CSS. Learn more about the [email navigation component in Acorn](https://thememountain.github.io/acorn/components/navigation.html).

### Logo & Images

Simply change the `src=""` and `width=""` of the logo. If you use a retina logo image, make sure your `width=""` is half of what the original image size is in pixels.

### Background Colour

Change the HEX colour inside `bgcolor=""` on the `<td>` wrapping the container table:

```html
<td class="px-sm-16" align="center" bgcolor="#EEEEEE">
    <table class="container" cellpadding="0" cellspacing="0" role="presentation" width="600">
        ...
    </table>
</td>
```

### Top & Bottom Spacing

Change the `line-height:` value on the `<div class="spacer"`. For mobile spacer customisation, learn more about [spacers in Acorn](https://thememountain.github.io/acorn/utilities/spacing.html).

