---
extends: _layouts.default.page
title: Call To Action
description: CTA Sections in Sartre Email
tags: button, action, gradient
order: 6
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

## With AppStore Buttons

## With Background Image

---

## Customisation

### Button

Text and buttons can be customised with inline CSS.

### Background image

Change all instances of the dummy image with a URL to your hosted image. There are 2 places you need to do this in: the `background-image` inline CSS, and the `src=""` of the `<v:image />` element, for Outlook 2007 - 2016.

### Background gradient

The AppStore CTA sections use a CSS/VML background gradient image. Simply edit the colours in the inline CSS and in the `color=""` attributes from the `<v:fill />` VML tag.

### Top/bottom spacing

Change the `line-height:` value on the `<div class="spacer"`. For mobile spacer customisation, learn more about [spacers in Acorn](https://thememountain.github.io/acorn/utilities/spacing.html).

