---
extends: _layouts.default.page
title: Intro
description: Intro Sections in Sartre Email
tags: intro, accordion, star, rating
order: 14
navigation:
  group: Sections
---

# Great for newsletters and... well, intros!

Intro sections are simple but useful content areas with call to action, that can be used to highlight a product, or describe something in detail. They go great at the near-top of an email (after a HERO), but can be used anywhere you need them.

Sartre currently comes with 3 types of Intro sections:

- With Stats
- Basic with Button
- With Content Left/Right

---

## With Stats

Two half columns, with centered text and big headlines. Great for displaying a set of features.

## Basic With Button

One column, full width text, followed by a button component to be used as a call to action.

## With Content Left/Right

Two half columns, one with text and a link, the other with an image. They stack on mobile, and the one with the image on the right uses the awesome mobile [reverse stack](https://thememountain.github.io/acorn/utilities/reverse-stack.html) techinque from our framework.

---

## Customisation

### Text & Links

Text and link can be customised with inline CSS.

### Images

Simply change the `src=""` and `width=""` of each image. If you want use retina images, make sure your own image is twice the pixel size of the placeholder.

### Button

For button customisation, checkout our email framework's [Button component](https://thememountain.github.io/acorn/components/buttons.html).

### Top/bottom spacing

Change the `line-height:` value on the `<div class="spacer"`. For mobile spacer customisation, learn more about [spacers in Acorn](https://thememountain.github.io/acorn/utilities/spacing.html).


