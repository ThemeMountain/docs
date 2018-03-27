---
extends: _layouts.default.page
title: Preheader
description: Add useful information above your header
tags: preheader, basic, social
order: 6000
navigation:
  group: Sections
---

# Add useful information above your header

Preheader sections come in two types:

- Basic
- Social

They can be used to add aside information above the fold. The text inside will also show up in the email preview, so you can use them as attention grabbers.

---

## Basic Preheader

The Basic Preheader is made up of two columns with text links inside. If you want, you can replace the two columns with just one (1-column.html from the grid folder), and use only text.

## Social Preheader

The Social Preheader is similar to the Basic one, only that it is more suited for social interaction. It uses contact information links and social media icons, and you can use it to push your social links and contact info above the fold.

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

Change the `line-height:` value on the `<div class="spacer"`.
