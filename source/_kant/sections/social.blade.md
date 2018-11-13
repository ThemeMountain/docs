---
title: Social
description: Social Sections in Kant Email
tags: social, facebook, twitter, instagram, youtube
page_order: 14
navigation:
  group: Sections
---

# Connect with your audience

Social sections are great way to connect with your email audience. You can use the social icons provided in the template, or replace them with your own.

Kant Email currently ships with two types of social sections:

- Social 1
- Social 2

---

## Social 1

Simple and clean, with centered icons and a title above.

![Social 1](/img/email/kant/sections/thumbs/social-1.jpg)

## Social 2

Four-column layout with edge-to-edge background. Includes icon and text, as well as a 
background colour to match the social network branding. Don't know the HEX code for 
a specific brand colour? Checkout [BrandColors](https://brandcolors.net/).

On mobile, the columns go full-width and stack.

![Social 2](/img/email/kant/sections/thumbs/social-2.jpg)

---

## Customisation

### Icons

Use icons that contrast with the sections's background colour. Retina icons supported.

Kant Email comes with a variety of social icons which you can use in the Preheader section. 
If using different icons, make sure that their size is the same as the ones we provide.

### Text

Change the HEX colour from the inline CSS.

### Background colour

Change the HEX colour inside `bgcolor=""` on the `<td>`'s:

```html
<table class="row" align="center" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0">
  ...
</table>
```

For Social 2, change the `bgcolor=""` on each `<th class="column">`:

```html
<th class="column mobile-6" width="175" bgcolor="#3A579B" style="padding: 30px 0;">
  ...
</td>
```

### Spacing

Social 1 uses both Universal and Row spacers from Pine, so you need to look for and adjust the values in both lines like this:

```html
<div class="spacer" style="font-size: 15px; line-height: 15px; mso-line-height-rule: exactly;">&nbsp;</div>
```

... and like this:

```html
<tr>
    <td class="spacer" height="80" style="font-size: 80px; line-height: 80px; mso-line-height-rule: exactly;">&nbsp;</td>
</tr>
```

On mobile, these spacers are reset to be 30px high. You can change that in the embedded CSS:

```css
.spacer {height: 30px; line-height: 100% !important; font-size: 100% !important;}
```
Social 2 doesn't have top/bottom spacing. Instead, each column has its own vertical padding:

```html
<th class="column mobile-6" width="175" bgcolor="#3A579B" style="padding: 30px 0;">
```

For mobile spacer customisation, learn more about [spacers in Pine](https://docs.thememountain.com/pine/utilities/spacing).
