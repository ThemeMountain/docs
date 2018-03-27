---
extends: _layouts.default.page
title: Feature
description: Feature Sections in Sartre Email
tags: feature, showcase
order: 8
navigation:
  group: Sections
---

# Showcase a feature of your product or work

A feature section is an elegant way to showcase a particular feature or product. Sartre Email comes with several feature sections:

- Feature Product
- Feature Columns
- With Content Left/Right

---

## Feature Product

## Feature Columns

Two rows with two columns each. Columns have a centered image at the top, followed by text. On mobile, the columns go full width and stack.

## With Content Left/Right

Two columns, one with a header, text and a link, the other with an image that sticks to the edge of the email container. They stack on mobile, and the one with the image on the right uses the awesome [reverse stack techinque](https://thememountain.github.io/acorn/utilities/reverse-stack.html) from our framework, for consistent hierarchy.

---

## Customisation

You can easily change the looks by changing text, spacing, and images.

### Links

Links can be styled with inline CSS.

### Images

Simply change the `src=""` and `width=""`. For retina images, keep the `width=""` defined by the template, and use an image that is double the width and height of the placeholder image.

### Top & Bottom Spacing

Change the `line-height:` value on the `<div class="spacer"`. For mobile spacer customisation, learn more about [spacers in Acorn](https://thememountain.github.io/acorn/utilities/spacing.html).

