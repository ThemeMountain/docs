---
title: Coupon
description: Add discounts to your emails
tags: coupon, discount
page_order: 7
navigation:
  group: Sections
---

# Everyone loves a good discount

Run promos or offer discounts for your products or services, with the coupon sections in Sartre Email.

---

## Coupon 1

Coupon 1 has centered text and CTA button, framed with a border and filled with a solid colour. You can adjust the background color in the `bgcolor=""` attribute on the first table cell inside the `container` table, as well as the border colour and style, on its inner column cell.

![Coupon 1](/img/email/sartre/sections/coupon-1.jpg)

## Coupon 2

Similar to Coupon 1, but with content layed out differently. On very small mobile devices, the coupon value (numbers) stack vertically.

![Coupon 2](/img/email/sartre/sections/coupon-2.jpg)

## Coupon 3

Two column coupon that provides a compact layout for when you need to add an image to your offers, but don't want to use a background image. On mobile, the columns will stack.

![Coupon 3](/img/email/sartre/sections/coupon-3.jpg)

## Coupon 4

Similar to Coupon 2, but with an image below and an immersive background image. The background image works in almost all email clients, including all Outlook versions and Windows 10 Mail.

![Coupon 4](/img/email/sartre/sections/coupon-4.jpg)

---

## Customisation

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

