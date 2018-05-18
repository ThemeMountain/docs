---
title: Text Utilities
description: Utilities for custom text alignment in responsive emails
tags: utility, text, align
page_order: 14
navigation:
  group: Utilities
  order: 4
  title: Text
---

# Custom text alignment on mobile

Acorn includes three text alignment responsive utilities, for those situations where you want text to align differently on mobile.

The following classes are available inside Acorn's `@media` query:

```css
.text-sm-center {text-align: center!important;}
.text-sm-left {text-align: left!important;}
.text-sm-right {text-align: right!important;}
```

Do note that text alignment will not be inherited by nested cells - you will need to add the class on them, instead of the parent.
