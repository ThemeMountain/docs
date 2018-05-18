---
title: Accessibility
description: Accessibility features in the Acorn Email Framework
tags: components, contents, examples
page_order: 4
navigation:
  group: Getting Started
  order: 4
---

# An overview of Acorn's email accessibility features

Acorn comes with some accessibility features out of the box, to help you create emails that perform well when read with assistive technologies. When adding your own markup, please always do so with accessibility in mind.

---

## Language

Acorn sets the `lang=""` HTML attribute to `en` by default. This helps screen reader software use the correct pronunciation. When coding emails in a language other than English, make sure to update this attribute ([language code reference](https://www.w3schools.com/TagS/ref_language_codes.asp)).

## Document Title

The `<title>` tag is included in order to give screen reader users some context. It also helps when viewing the email in a browser (i.e. your email's online version), by setting the title on the browser's tab.

## Character Encoding

Character encoding is set to UTF-8 by default. This prevents breaking reading patterns by ensuring proper character rendering, both on-screen and with screen readers.

## Typography

Acorn uses the golden ratio for typography, in order to help you create emails that are easy to read.

For desktops and tablets, body font size is set to 16px, with a line height of 25px. On mobile, the line height is reduced to 23px. In both cases, the ideal ratio for the maximum available content width is used.

## Images

Your images should always include an informative `alt=""` attribute, to help screen readers describe them. This is also useful in email clients that block images by default, as your alternative text will be shown instead.

In order to hide images from assistive software, add the `aria-hidden="true"` attribute, like we did for the icon in the [hamburger navigation component](../acorn/navigation/#hamburger).

## Tables

Tables were meant for displaying tabular data, not for defining the structure of a design. Unfortunately, they are (still) a requirement for coding HTML email layouts, and this misuse can be a real issue for people using screen readers to read your emails.

The solution is to use the `role="presentation"` attribute on all your tables that are used for design purposes, as it makes it easier for screen readers to read your content. Acorn does this by default, so make sure you don't forget to add it to your custom-coded tables.

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="m-0 text-md text-blue-dark">Although rarely a necessity in email, if you need to display tabular data do not include this attribute.</p>
</div>
