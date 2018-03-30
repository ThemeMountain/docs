---
title: Footer
description: Footer Sections in Sartre Email
tags: feature, showcase
page_order: 9
navigation:
  group: Sections
---

# Because all good things must come to a great end

The template comes with several footers, designed for a wide varitey of use cases. They all include common things like a logo, address, social icons, and, of course, legal text/unsubscribe links.

Footers also use a [Divider component from Acorn](https://thememountain.github.io/acorn/components/divider.html), which you can customise just like a spacer.

---

## Footer 1

## Footer 2

## Footer 3

## Footer 4

## Footer 5

### With AppStore Buttons

## Footer 6 Logo Left

## Footer 6 Logo Right

---

## Customisation

### Links & Text

Links and text styles can be changed via inline CSS.

### Logo & Images

Simply change the `src=""` and `width=""`. For retina images, keep the `width=""` defined by the template, and use an image that is double the width and height of the placeholder image.

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

