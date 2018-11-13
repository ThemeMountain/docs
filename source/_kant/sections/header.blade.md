---
title: Header
description: Header Sections in Kant Email
tags: header, logo, menu
page_order: 8
navigation:
  group: Sections
---

# The place for brand logos and menus

Kant Email includes multiple Header sections:

- Centered 
    - With Logo
    - With Menu
- Left/Right Aligned 
    - With Basic Menu
    - With Hamburger Menu (interactive)

---

## Centered

### With Logo

The Centered Logo Header simply shows a center-aligned logo. You can use a background colour to give it a boxed or full width aspect.

![Header Centered](/img/email/kant/sections/thumbs/header-centered.jpg)

### With Basic or Hamburger Menu {#header-centered-with-menu}

A centered logo followed by a centered navigation component.

In supported mobile email clients, the variation with the hamburger menu hides the menu items and shows a menu icon instead. Here's an animated example:

![Header Centered With Basic Menu](/img/email/kant/sections/thumbs/header-centered-hamburger-menu.gif)

## Left/Right

The Left or Right Aligned Headers show the logo on the left or right, and a navigation component or simple 
headings on the opposite side. Like the Centered one, it comes with both a Basic and a Hamburger menu.

On mobile, the logo image and menu will stack and align to center, just like the menu icon does in this animation:

![Header Left With Hamburger Menu on mobile](/img/email/kant/sections/thumbs/header-left-hamburger-menu.gif)

---

## Customisation

### Menu Items

Menu items are simple links that can be styled with inline CSS. Learn more about the [email navigation component in Pine](https://docs.thememountain.com/pine/components/navigation).

### Logo & Images

Simply change the `src=""` and `width=""` of the logo. If you use a retina logo image, make sure your `width=""` is half of what the original image size is in pixels.

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
  <p class="m-0 text-md text-blue-dark">The Hamburger menu icon currently cannot be made editable in any of the template integrations we provide. If you want to customize the icon, make sure you do that manually in the code.</p>
</div>

### Background Colour

Change the HEX colour code inside `bgcolor=""` on the row table wrapper:

```html
<table class="row" align="center" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0">
    ...
</table>
```

### Top & Bottom Spacing

Change the `height`, `font-size`, and `line-height:` values on the `<td class="spacer">`:

```html
<tr>
  <td class="spacer" height="40" style="font-size: 40px; line-height: 40px; mso-line-height-rule: exactly;">&nbsp;</td>
</tr>
```

On mobile, these spacers are reset to be 30px high. You can change that in the embedded CSS:

```css
.spacer {height: 30px; line-height: 100% !important; font-size: 100% !important;}
```

## Limitations & Other Notes

### Hamburger menu client support

The interactive hamburger menu has limited support on mobile, because it needs CSS `:hover` and this isn't supported everywhere. 
The good news is that Apple Mail and Outlook support it, and the former is one of the most used mobile email clients.

As far as Gmail on mobile goes, Google have removed support for `:hover`. Our template targets Gmail apps directly and makes 
the hamburger menu fall back to a basic menu instead, so your subscribers can actually use the menu.

### Email builders and menu items

Because navigation menus for email can be coded in so many different ways, currently no email builder provides an easy way to add 
extra menu items (or sometimes even remove them). Such customisations will need to be done in code.

