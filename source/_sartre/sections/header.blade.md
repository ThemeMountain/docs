---
title: Header
description: Header Sections in Sartre Email
tags: header, logo, menu, top
page_order: 10
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

The Centered Header shows a center-aligned logo, on both desktop and mobile.

The one with the Hamburger menu component contains an image that is visible only on mobile, and works like a dropdown menu - find out more in the [framework Navigation docs](https://thememountain.github.io/documentation/acorn/components/navigation.html#hamburger).

### With Basic Menu {#header-centered-basic-menu}

![Header Centered With Basic Menu](/img/email/sartre/sections/header-centered.jpg)

### With Split Menu {#header-centered-split-menu}

This type of Header allows adding menu links on both sides of a centered logo.

![Header Centered With Split Menu](/img/email/sartre/sections/header-centered-split-menu.jpg)

## Header Left/Right

The Left or Right Aligned Headers show the logo on the left or right, and a navigation component or simple headings on the opposite side. Like the Centered one, it comes with both a Basic and a Hamburger menu.

On mobile, the logo image and menu will stack and align to center.

### With Basic Menu {#header-left-right-basic-menu}

![Header Left With Basic Menu](/img/email/sartre/sections/header-left.jpg)

### With Title {#header-left-right-title}

![Header Left With Title](/img/email/sartre/sections/header-with-title.jpg)

---

## Customisation

### Menu Items

Menu items are simple links that can be styled with inline CSS. Learn more about the [email navigation component in Acorn](https://thememountain.github.io/documentation/acorn/components/navigation.html).

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

Change the `line-height:` value on the `<div class="spacer"`. For mobile spacer customisation, learn more about [spacers in Acorn](https://thememountain.github.io/documentation/acorn/utilities/spacing.html).

