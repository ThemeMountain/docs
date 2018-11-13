---
title: Call To Action
description: CTA Sections in Kant Email
tags: button, action, gradient
page_order: 5
navigation:
  group: Sections
---

# Trigger a response from your users

Use CTA sections to encourage your users to click through your emails. The product includes the following call to action sections:

- Basic
- With Background Image

Both include these layout variations:

- Button & Content Centered
- Button Left / Content Right
- Button Right / Content Left

---

## Basic

The Basic call to action section only includes a left/right/center aligned button and content, 
inside a full width column. You can adjust the background colour with with the `bgcolor=""` 
attribute on the parent row table.

![CTA Basic](/img/email/kant/sections/thumbs/cta-basic-button-center.jpg)

## With Background Image

Similar to the Basic one, but with an image background. Coded with background image support for Outlook and Windows 10 Mail, too.

![CTA With Background](/img/email/kant/sections/thumbs/cta-bg-button-centered.jpg)

---

## Customisation

### Button

Text and buttons can be customised with inline CSS. Checkout the [button component](https://docs.thememountain.com/pine/components/button) in our email framework.

### Background image

Change all instances of the dummy image with a URL to your hosted image. There are 2 places you need to do this in: 
the `background=""` attribute, and the `src=""` of the `<v:image />` element (the latter for Outlook 2007 - 2016).

### Top & Bottom Spacing

Change the `font-size` and `line-height:` values on the `<div class="spacer">`: 

```html
<div class="spacer" style="font-size: 50px; line-height: 50px; mso-line-height-rule: exactly;">&nbsp;</div>
```

## Limitations & Other Notes

### Background Images

MailChimp's editor doesn't update the VML code that Outlook uses to show background images. You need to do this 
manually by editing the template code, as they don't provide any way of doing it with their online builder.

