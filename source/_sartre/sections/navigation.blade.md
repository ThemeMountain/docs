---
title: Navigation
description: Navigation Sections in Sartre Email
tags: menu, breadcrumbs
page_order: 15
navigation:
  group: Sections
---

# Responsive menus for your emails

Sartre Email comes with Navigation sections that make it easy to add HTML menus to your emails.

There are two types:

- Basic
- Hamburger

Each with the following variations:

- Centered
- Left Aligned
- Right Aligned

---

## Basic

Simple table structure, where each menu item is a table cell that contains an anchor tag.

![Navigation Basic Centered](/img/email/sartre/sections/navigation-centered.png)

## Hamburger

The Hamburger Navigation looks similar to the Basic one on desktop, but on mobile its items are hidden and a menu icon is shown instead. Touching the icon reveals the menu items.

![Navigation Hamburger Centered](/img/email/sartre/sections/thumbs/nav-hamburger-center.gif)

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
  <p class="m-0 text-md text-blue-dark">Gmail doesn't support the hamburger navigation. Sarte Email forces the Hamburger navigation to a Basic navigation, for this email client.</p>
</div>

---

## Customisation

### Text & Links

Text and link can be customised with inline CSS:

```html
<a href="http://example.com" style="color: #000000; font-size: 12px;">Menu item</a>
```

### Spacing

Each `nav-item` uses horizontal padding. For mobile, the [mobile spacing helpers in Acorn](https://thememountain.github.io/documentation/acorn/utilities/spacing.html) are being used:

```html
<td class="nav-item webfont px-sm-8" style="padding-right: 24px; display: inline-block;">
    [...]
</td>
```

Navigation sections don't use top and bottom spacing. You can add a [Spacing section](../spacing) above and below them.


