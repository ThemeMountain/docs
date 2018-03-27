---
extends: _layouts.default.page
title: Blog
description: Blog Sections in Sartre Email
tags: blog, grid, newsletter, content
order: 5
navigation:
  group: Sections
---

# For all your blogging needs

Blog sections are grid layouts that focus on imagery and content. They are perfect for content-focused newsletters.

---

## Blog Columns Boxed

## Blog Columns Cards

## Blog Image Left/Right

## Blog List

## Blog Podcast

---

## Customisation

You can easily change the looks of a preheader by changing its background, text, links, and icons.

### Links

Change the HEX colour from the link's inline CSS.

### Icons

Use icons that contrast with your preheader's background colour. Retina icons supported.

### Background colour

Change the HEX colour inside `bgcolor=""` on the `<td>` wrapping the container table:

```html
<td class="px-sm-16" align="center" bgcolor="#EEEEEE">
    <table class="container" cellpadding="0" cellspacing="0" role="presentation" width="600">
        ...
    </table>
</td>
```

### Top/bottom spacing

Change the `line-height:` value on the `<div class="spacer"`. For mobile spacer customisation, learn more about [spacers in Acorn](https://thememountain.github.io/acorn/utilities/spacing.html).

