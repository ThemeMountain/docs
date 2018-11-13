---
title: Testimonial
description: Testimonial Sections in Kant Email
tags: reference, recommendation, endorsement
page_order: 16
navigation:
  group: Sections
---

# Need to show a user review or quote someone?

Easily add quotes or user reviews to your emails.

We've included the following variations:

- Boxed
- Full Width
- Left With Border

---

## Boxed

Add a couple of user reviews, with a two column layout. Each box has its own user avatar image and background colour,
which you can of course customise. On mobile, the columns will stack.

![Testimonial Boxed](/img/email/kant/sections/thumbs/testimonial-boxed.jpg)

## Full Width

Single column quote with user avatar and user name at the bottom.

![Testimonial Full Width](/img/email/kant/sections/thumbs/testimonial-full-width.jpg)

## Left With Border

A simple, typography focused and left aligned testimonial, with user name, a border, and a quote image that you can
customise to suit your needs. The right column has a left border style which is removed on mobile by the 
`no-border-on-mobile` class.

![Testimonial Left With Border](/img/email/kant/sections/thumbs/testimonial-left-border.jpg)

---

## Customisation

### Text

Font size, colour, weight, spacing, all can be changed through inline CSS.

### Images

Simply change the `src=""` and `width=""` of each image. If you want use retina images, 
make sure your own image is twice the pixel size of the placeholder.

### Top & Bottom Spacing

Change the `height=""`, `font-size`, and `line-height:` value on the `<td class="spacer">`: 

```html
<tr>
  <td class="spacer" height="80" style="font-size: 80px; line-height: 80px; mso-line-height-rule: exactly;">&nbsp;</td>
</tr>
```
