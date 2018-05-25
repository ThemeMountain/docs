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

![Coupon 1](/img/email/sartre/sections/coupon-1.png)

## Coupon 2

Similar to Coupon 1, but with content layed out differently. On very small mobile devices, the coupon value (numbers) stack vertically.

![Coupon 2](/img/email/sartre/sections/coupon-2.png)

## Coupon 3

Two column coupon that provides a compact layout for when you need to add an image to your offers, but don't want to use a background image. On mobile, the columns will stack.

![Coupon 3](/img/email/sartre/sections/coupon-3.jpg)

## Coupon 4

Similar to Coupon 2, but with an image below and an immersive background image. The background image works in almost all email clients, including all Outlook versions and Windows 10 Mail.

![Coupon 4](/img/email/sartre/sections/coupon-4.jpg)

---

## Customisation

### Button

Text and buttons can be customised with inline CSS. Checkout the [button component](https://docs.thememountain.com/acorn/components/button) in our email framework.

### Images

Replace the dummy images with your own. Make sure to use retina images like we did, so that they look sharp on mobile.

### Background Colour

Change the HEX colour inside `bgcolor=""` on the `<td>`'s:

```html
<td class="px-sm-16" align="center" bgcolor="#EEEEEE">
    <table class="container" cellpadding="0" cellspacing="0" role="presentation" width="600">
        <tr>
            <td class="p-sm-16" bgcolor="#232323" style="padding: 32px;">
                ...
            </td>
        </tr>
    </table>
</td>
```

Throughout the template, we use #EEEEEE for the 'outside' colour (basically, the email body), and #FFFFFF or #232323 for the inside of a section. When using the integrated versions, such as MailChimp or StampReady, you need not worry about this: controls for changing them are provided through their UI.

### Top & Bottom Spacing

Change the `line-height:` value on the `<div class="spacer"`: 

```html
<div class="spacer line-height-sm-0 py-sm-8" style="line-height: 24px;">&zwnj;</div>
```

The `py-sm-8` class sets the spacer height on mobile. You can change it to one of the other mobile spacing classes in Acorn. Learn more about [spacers in Acorn](https://docs.thememountain.com/acorn/utilities/spacing).

Coupons have more complex markup, so they rely mostly on layout padding for spacing. But they also use Acorn spacers. Basic HTML and CSS knowledge is required to customise the layout.

