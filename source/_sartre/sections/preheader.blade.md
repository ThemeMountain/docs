---
title: Preheader
description: Preheader Sections in Sartre Email
tags: preheader, basic, social
page_order: 17
navigation:
  group: Sections
---

# Add useful information above your header

Preheader sections come in two types:

- Basic
- Social

They can be used to add aside information above the fold. The text inside will also show up in the email preview, so you can use them as attention grabbers.

---

## Basic

The Basic Preheader is made up of two columns with text links inside. If you want, you can replace the two columns with just one (1-column.html from the grid folder), and use only text.

![Preheader Basic](/img/email/sartre/sections/preheader-basic.png)

## Social

The Social Preheader is similar to the Basic one, only that it is more suited for social interaction. It uses contact information links and social media icons, and you can use it to push your social links and contact info above the fold.

![Preheader Social](/img/email/sartre/sections/preheader-social.png)

---

## Customisation

### Links

Change the HEX colour from the link's inline CSS.

### Icons

Use icons that contrast with your preheader's background colour. Retina icons supported.

Sartre Email comes with a variety of social icons which you can use in the Preheader section. If using different icons, make sure that their size is the same as the ones we provide.

### Background Colour

Change the HEX colour inside `bgcolor=""` on the `<td>`'s:

```html
<td class="px-sm-16" align="center" bgcolor="#EEEEEE">
    <table class="container" cellpadding="0" cellspacing="0" role="presentation" width="600">
        <tr>
            <td class="px-sm-8" align="left" bgcolor="#FFFFFF" style="padding: 0 24px;">
                ...
            </td>
        </tr>
    </table>
</td>
```

Preheaders by default use #EEEEEE for the 'outside' colour (basically, the email body), and #FFFFFF for the inside of a section. When using the integrated versions, such as MailChimp or StampReady, you need not worry about this: controls for changing them are provided through their UI.

### Top & Bottom Spacing

Change the `line-height:` value on the `<div class="spacer"`: 

```html
<div class="spacer" style="line-height: 8px;">&zwnj;</div>
```

You'll notice that, unlike other sections, the Preheaders don't use a mobile spacing utility, since their spacing is quite short. But if you want, you can change it to one of the other mobile spacing classes in Acorn. Learn more about [spacers in Acorn](https://thememountain.github.io/documentation/acorn/utilities/spacing.html).
