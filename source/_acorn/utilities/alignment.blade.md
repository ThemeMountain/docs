---
title: Alignment Utilities
description: Utility classes for custom element alignment on mobile
tags: utility, align, float
page_order: 11
navigation:
  group: Utilities
  order: 1
  title: Alignment
---

# Custom align elements on mobile

It often happens that you need to align elements differently for mobile in your emails. For example, maybe you have a left-aligned logo image that you want centered on mobile. Acorn's alignment responsive utilities make it easy to do so.

The following classes are available inside Acorn's `@media` query:

```css
.align-sm-center {
  display: table!important;
  float: none;
  margin-left: auto!important;
  margin-right: auto!important;
}
.align-sm-left {float: left;}
.align-sm-right {float: right;}
```
You can add them to any element you need aligned differently on mobile. Keep in mind that, depending on your layout, the left/right alignment classes might cause issues, as they are using float, which takes the element out of the normal flow.

Check out the [Navigation component](../acorn/components/navigation): the logo image and the menu table are using the `align-sm-center` utility class.
