---
title: Feature
description: Feature Sections in Sartre Email
tags: feature, showcase
page_order: 8
navigation:
  group: Sections
---

# Showcase a feature of your product or work

A feature section is an elegant way to showcase a particular feature or product. Sartre Email comes with several feature sections:

- Feature Product
- Feature Columns
- Feature Stats
- Content Left/Right (+Boxed)
- Feature Text With Button

---

## Feature Product

## Feature Columns

Two rows with two columns each. Columns have a centered image at the top, followed by text. On mobile, the columns go full width and stack.

![Feature Columns](/img/email/sartre/sections/feature-columns.jpg)

## Feature Stats

Two half columns, with centered text and big headlines. Great for displaying a set of features.

![Feature Stats](/img/email/sartre/sections/intro-stats.jpg)

## Content Left/Right

Two columns, one with a header, text and a link, the other with an image that sticks to the edge of the email container. They stack on mobile, and the one with the image on the right uses the awesome [reverse stack techinque](https://thememountain.github.io/documentation/acorn/utilities/reverse-stack.html) from our framework, for consistent hierarchy.

![Feature Content Left](/img/email/sartre/sections/feature-content-left.jpg)

### Content Left/Right Boxed

Similar to the above, but with container gutters so that the image doesn't stick to the edge.

![Feature Content Left Boxed](/img/email/sartre/sections/intro-content-left.jpg)

## Feature Text With Button

One column, full width text, followed by a call to action button. Works well with HEROs.

![Feature Text With Button](/img/email/sartre/sections/intro-basic.jpg)

---

## Customisation

### Links

Links can be styled with inline CSS.

### Images

Simply change the `src=""` and `width=""`. For retina images, keep the `width=""` defined by the template, and use an image that is double the width and height of the placeholder image.

### Top & Bottom Spacing

Change the `line-height:` value on the `<div class="spacer"`. For mobile spacer customisation, learn more about [spacers in Acorn](https://thememountain.github.io/documentation/acorn/utilities/spacing.html).

