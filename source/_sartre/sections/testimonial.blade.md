---
title: Testimonial
description: Testimonial Sections in Sartre Email
tags: reference, recommendation, endorsement
page_order: 22
navigation:
  group: Sections
---

# Need to show a user review or quote someone?

Easily add quotes or user reviews to your emails.

We've included the following variations:

- Twitter-style
- Left With Quote
- Split With Border
- 2 Columns Boxed
- Centered With Avatar

---

## Twitter-style

Quote a user from Twitter with this testimonial section that closely resembles the tweet card design.

![Testimonial Twitter](/img/email/sartre/sections/testimonial-twitter.png)

## Left With Quote

Simple, left-aligned single column testimonial, with a quote icon and author name.

![Testimonial Left With Quote](/img/email/sartre/sections/testimonial-left-quote.png)

## Split With Border

A simple, typography focused and left aligned testimonial, with user name, a separating border, and a quote image that you can customise to suit your needs. The border is removed on mobile through the `borderless-sm` class.

![Testimonial Split With Border](/img/email/sartre/sections/testimonial-split-border.png)

## 2 Columns Boxed

Add a couple of user reviews, with a two column layout. Each box has its own user avatar image and background colour, which you can of course customise. On mobile, the columns will stack.

![Testimonial 2 Columns Boxed](/img/email/sartre/sections/testimonial-2-col-boxed.jpg)

## Centered With Avatar

Single column, centered quote with user avatar and user name at the bottom.

![Testimonial Centered With Avatar](/img/email/sartre/sections/testimonial-centered-avatar.png)

---

## Customisation

### Text

Font size, colour, weight, spacing, all can be changed through inline CSS.

### Images

Simply change the `src=""` and `width=""` of each image. If you want use retina images, make sure your own image is twice the pixel size of the placeholder.

### Top & Bottom Spacing

Change the `line-height:` value on the `<div class="spacer"`: 

```html
<div class="spacer line-height-sm-0 py-sm-8" style="line-height: 24px;">&zwnj;</div>
```

For spacing on mobile, we generally use the `py-sm-8` class, that sets the spacer to be 16px high. You can change it to one of the other mobile spacing classes in Acorn. Learn more about [spacers in Acorn](https://thememountain.github.io/documentation/acorn/utilities/spacing.html).
