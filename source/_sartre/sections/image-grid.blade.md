---
extends: _layouts.default.page
title: Image Grid
description: Image Grid Sections in Sartre Email
tags: image, grid
order: 12
navigation:
  group: Sections
---

# Large & bold. Bulletproof background images.

A HERO section is a great way to draw attention to key information, an image or a product, by using bold imagery that works in almost any email client. Sartre comes with several variations:

- With Video New
- With Background Image
- Split Content

---

## Customisation

You can easily change the looks of a HERO by changing its background, text, spacing, and buttons/images.

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

### Background Image

Change the image path in the inline `background-image` CSS property, and in the `src=""` of the `<v:image />` tag, for Outlook & Windows 10 Mail.

```html
<td style="background-image: url('https://dummyimage.com/1200x1000/0cbacf/000000'); ...">
    <!--[if gte mso 9]>
    <v:image src="https://dummyimage.com/1200x1000/0CBACF/000000" ... />
    [...]
</td>
```

### Top & Bottom Spacing

Change the `line-height:` value on the `<div class="spacer"`. For mobile spacer customisation, learn more about [spacers in Acorn](https://thememountain.github.io/acorn/utilities/spacing.html).
