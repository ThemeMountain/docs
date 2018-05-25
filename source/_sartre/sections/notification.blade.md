---
title: Notification
description: Notification Sections in Sartre Email
tags: transactional, reset, confirm, cart
page_order: 16
navigation:
  group: Sections
---

# For beautiful transactional emails

We have extracted each section from the [Notification Templates](../transactional), so that you can easily create your own transactional email templates.

---

## Order Item

For order confirmations or abandoned cart recoveries, use this section to show your customers what they've added to their order.

![Order Item](/img/email/sartre/sections/order-item.jpg)

## Checkout Button

A button that is a section on its own, so you can easily add it in between other notification sections.

![Checkout Button](/img/email/sartre/sections/checkout-button.png)

## Cart Items Headline

Simple, centered headline section that you can use above your order items list.

![Cart Items Headline](/img/email/sartre/sections/cart-items-headline.png)

## Confirm Email / Password Reset

With a confirmation message and a button for your users to confirm their email. Can be used for any 'confirmation' needs. The Password Reset section also has an extra line of text at the bottom:

![Password Reset](/img/email/sartre/sections/password-reset.png)

## Intro Headline

A HERO-like intro for your transactional emails, with a cool gradient background colour that even works in Outlook! Comes with a button variation, as shown below:

![Intro Headline With Button](/img/email/sartre/sections/intro-headline-button.png)

## Order Rating

The Star Rating section, adapted for a transactional email.

![Order Rating](/img/email/sartre/sections/order-rating.png)

## Order Shipping Details

Two column layout that can be used to show shipping and billing address.

![Order Shipping Details](/img/email/sartre/sections/order-shipping.png)

## Order Totals

Your shopping cart emails need to show the user how much they've spent. Use this.

![Order Totals](/img/email/sartre/sections/order-totals.png)

---

## Customisation

### Text & Links

Text and link can be customised with inline CSS.

### Images

Simply change the `src=""` and `width=""` of each image. If you want use retina images, make sure your own image is twice the pixel size of the placeholder.

### Buttons

Buttons can be customised with inline CSS. Read more in our [Button component](https://docs.thememountain.com/acorn/components/button) framework docs.

### Background Gradient

This uses a [CSS gradient](https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Images/Using_CSS_gradients), as well as a [VML gradient](https://docs.microsoft.com/en-us/previous-versions/windows/internet-explorer/ie-developer/platform-apis/bb264135(v=vs.85)#gradient-fill) for Outlook. Simply edit the colours in the inline CSS and in the `color=""` attributes from the `<v:fill />` VML tag.

### Top & bottom spacing

Change the `line-height:` value on the `<div class="spacer"`. For mobile spacer customisation, learn more about [spacers in Acorn](https://docs.thememountain.com/acorn/utilities/spacing).

## Limitations & Other Notes

### Background Gradients

Currently, no online email builder supports point-and-click changing of CSS gradients. As a result, you will need to do this in code.

For most email clients, simply change the two HEX values in `background: linear-gradient(to right, #6A3093, #A044FF);"`

For Outlook, you need to change the two `color=""` attributes, and keep in mind that the direction is reversed as compared to the CSS one:

```html
<v:fill type="gradient" color="#A044FF" color2="#6A3093" angle="90" />
```

