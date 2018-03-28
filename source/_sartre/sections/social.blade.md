---
extends: _layouts.default.page
title: Social
description: Social Sections in Sartre Email
tags: social, facebook, twitter, instagram, youtube
order: 19
navigation:
  group: Sections
---

# Connect with your audience

Social sections are great way to connect with your email audience. You can use the social icons provided in the template, or replace them with your own.

Sartre Email currently ships with two types of social sections:

- Social 1
- Social 2

---

## Social 1

Simple and clean, with centered icons and a title above.

## Social 2

Four-column layout with edge-to-edge background. Includes icon and text, as well as a background colour to match the social network branding. Don't know the HEX code for a specific brand colour? Checkout [BrandColors](https://brandcolors.net/).

On mobile, the columns go full-width and stack.

---

## Customisation

### Icons

Use icons that contrast with the sections's background colour. Retina icons supported.

Sartre Email comes with a variety of social icons which you can use in the Preheader section. If using different icons, make sure that their size is the same as the ones we provide.

### Text

Change the HEX colour from the inline CSS.

### Background colour

Change the HEX colour inside `bgcolor=""` on the `<td>` wrapping the container table:

```html
<td class="px-sm-16" align="center" bgcolor="#EEEEEE">
    <table class="container" cellpadding="0" cellspacing="0" role="presentation" width="600">
        ...
    </table>
</td>
```

For Social 2, change the `bgcolor=""` on each `<td class="col"`:

```html
<td class="col" align="center" bgcolor="#3A579B" width="150" style="padding: 24px 0;">
  ...
</td>
```

### Spacing

Social 1: change the `line-height:` value on the `<div class="spacer"`. For mobile spacer customisation, learn more about [spacers in Acorn](https://thememountain.github.io/acorn/utilities/spacing.html).

Social 2 doesn't have top/bottom spacing. Instead, each column has its own vertical padding, as you can see in the code above.
