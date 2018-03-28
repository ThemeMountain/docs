---
extends: _layouts.default.page
title: Navigation
description: Navigation Sections in Sartre Email
tags: menu, breadcrumbs
order: 15
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

## Hamburger

The Hamburger Navigation looks similar to the Basic one on desktop, but on mobile its items are hidden and a menu icon is shown instead. Touching the icon reveals the menu items.

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
  <p class="m-0 text-md text-blue-dark">Gmail mobile apps doesn't support the hamburger navigation in some cases. You can force the menu items to display, with some extra CSS - <a href="https://thememountain.github.io/acorn/components/navigation.html#hamburger-nav-gmail-apps">see the Acorn documentation</a>.</p>
</div>


---

## Customisation

### Text & Links

Text and link can be customised with inline CSS:

```html
<a href="http://example.com" style="color: #000000; font-size: 12px;">Menu item</a>
```

### Spacing

Each `nav-item` uses horizontal padding. For mobile, the [mobile spacing helpers in Acorn](https://thememountain.github.io/acorn/utilities/spacing.html) are being used:

```html
<td class="nav-item webfont px-sm-8" style="padding-right: 24px; display: inline-block;">
    [...]
</td>
```

Navigation sections don't use top and bottom spacing. Instead, you can add a [Spacer section](../spacer) above and below them.


