---
title: Call To Action
description: CTA Sections in Sartre Email
tags: button, action, gradient
page_order: 6
navigation:
  group: Sections
---

# Trigger a response from your users

Use CTA sections to encourage your users to click through your emails. The template includes the following call to action sections:

- Basic
- With AppStore Buttons
- With Background Image

*Basic* and *With Background Image* include these layout variations:

- Button & Content Centered
- Button Left / Content Right
- Button Right / Content Left

---

## Basic

The Basic call to action section only includes a left/right/center aligned button and content, inside a full width column. You can adjust the background gradient with inline CSS + VML code, and the fallback color with the `bgcolor=""` attribute on the parent row table.

![CTA Basic](/img/email/sartre/sections/cta-basic.png)

## With AppStore Buttons

This one uses image buttons instead of text, so you can ask your subscribers to download your app. The product comes with icons for App Store, Google Play, and Amazon included.

![CTA With Appstore Buttons](/img/email/sartre/sections/cta-appstore.png)

## With Background Image

Similar to the Basic one, but with an image background. Coded with background image support for Outlook and Windows 10 Mail, too.

![CTA With Background](/img/email/sartre/sections/cta-background.jpg)

---

## Customisation

### Button

Text and buttons can be customised with inline CSS. Checkout the [button component](https://docs.thememountain.com/acorn/components/button) in our email framework.

For the image buttons, simply replace the images with your own. Make sure to use retina images like we did, so that they look sharp on mobile.

### Background image

Change all instances of the dummy image with a URL to your hosted image. There are 2 places you need to do this in: the `background-image` inline CSS, and the `src=""` of the `<v:image />` element, for Outlook 2007 - 2016.

### Background gradient

The AppStore CTA sections use a CSS/VML background gradient image. Simply edit the colours in the inline CSS and in the `color=""` attributes from the `<v:fill />` VML tag.

### Top & Bottom Spacing

Change the `line-height:` value on the `<div class="spacer"`: 

```html
<div class="spacer line-height-sm-0 py-sm-24" style="line-height: 32px;">&zwnj;</div>
```

The `py-sm-24` class sets the spacer to be 48px high on mobile. You can change it to one of the other mobile spacing classes in Acorn. Learn more about [spacers in Acorn](https://docs.thememountain.com/acorn/utilities/spacing).

## Limitations & Other Notes

### Background Images

MailChimp's editor doesn't update the VML code that Outlook uses to show background images. You need to do this manually by editing the template code, as they don't provide any way of doing it with their online builder.

### Background Gradients

Currently, no online email builder supports point-and-click changing of CSS gradients. As a result, you will need to do this in code.

For most email clients, simply change the two HEX values in `background: linear-gradient(to right, #6A3093, #A044FF);"`

For Outlook, you need to change the two `color=""` attributes, and keep in mind that the direction is reversed as compared to the CSS one:

```html
<v:fill type="gradient" color="#A044FF" color2="#6A3093" angle="90" />
```

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">Warning</p>
  <p class="m-0 text-md text-orange-dark" markdown="1">StampReady currently removes `color2=""` from the VML. Until they fix it, you need to add it back manually after exporting.</p>
</div>

