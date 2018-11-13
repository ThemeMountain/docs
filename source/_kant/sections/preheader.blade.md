---
title: Preheader
description: Preheader Sections in Kant Email
tags: preheader, basic, social
page_order: 13
navigation:
  group: Sections
---

# Add useful information above your header

Preheader sections come in two types:

- Basic
- Social

They can be used to add aside information above the fold. The text inside will also 
show up in the email preview, so you can use them as attention grabbers.

---

## Basic

The Basic Preheader is made up of two columns with text links inside. If you want, you can replace 
the two columns with just one (1-column.html from the grid folder), and use only text.

![Preheader Basic](/img/email/kant/sections/thumbs/preheader-basic.jpg)

## Social

The Social Preheader is similar to the Basic one, only that it is more suited for social interaction. 
It uses contact information links and social media icons, and you can use it to push your social 
links and contact info above the fold.

![Preheader Social](/img/email/kant/sections/thumbs/preheader-social.jpg)

---

## Customisation

### Links

Change the HEX colour from the link's inline CSS.

### Icons

Use icons that contrast with your preheader's background colour. Retina icons supported.

Kant Email comes with a variety of social icons which you can use in the Preheader section. 
If using different icons, make sure that their size is the same as the ones we provide.

### Background Colour

Change the HEX colour inside `bgcolor=""` on the row table wrapper:

```html
<table class="row" align="center" bgcolor="#1F2225" cellpadding="0" cellspacing="0">
    ...
</table>
```

### Top & Bottom Spacing

Change the `height`, `font-size`, and `line-height:` values on the `<td class="spacer">`:

```html
<tr>
  <td class="spacer" height="10" colspan="2" style="font-size: 10px; line-height: 10px; height: 10px; mso-line-height-rule: exactly;">&nbsp;</td>
</tr>
```

You'll notice that, unlike other sections, the Preheader spacers are forced to 10px height on mobile through the `height: 10px` inline CSS.
