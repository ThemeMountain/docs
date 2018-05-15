---
title: Stats
description: Stats Sections in Sartre Email
tags: stats, counter
page_order: 21
navigation:
  group: Sections
---

# Countless countable things for your emails

Stats are two or three-column layouts that you can use to display short pieces of information, like achievements, the number of projects, clients, or follower count.

In Sartre Email, they come in 3 shapes:

- Basic
- Boxed
- With Background Image

---

## Basic

Basic Stats are made up of three columns separated by a subtle border. You can customise the text and background styles. On mobile, the columns stack vertically, and the `borderless-sm` class hides the separators.

![Stats 1](/img/email/sartre/sections/stats-basic.png)

Because having centered text in a Stats section requires more work than just centering text (paddings, widths), we also provide a stand-alone variation for that (stats-2.html). It might not look very different at a first glance, but if you want centered stats, this variation will save you some headaches.

![Stats 2 - Centered](/img/email/sartre/sections/stats-basic-centered.png)

## Boxed

Two column Stats section, with a background colour on each column.

![Stats 4 - Boxed](/img/email/sartre/sections/stats-boxed.png)

We've also included a variation (stats-5.html) that uses a background image and a semi-transparent background colour for the actual boxes.

**Note**: Although the background image is supported in Outlook and Windows 10 Mail, the semi-transparent box background colour is coded with `rgba` in CSS, and will fallback to a solid colour [where it is not supported](https://www.campaignmonitor.com/css/color-background/rgba-colors/).

![Stats 5](/img/email/sartre/sections/stats-boxed-bg-image.jpg)

## With Background Image

Same 3-column layout with separators, but with a background image instead of a solid colour. Of course, the background image works in all versions of Outlook, as well as in Windows 10 Mail.

![Stats 3](/img/email/sartre/sections/stats-bg-image.jpg)

---

## Customisation

### Text

Font size, colour, weight, spacing, all can be changed through the inline CSS.

### Background Colour

Change the HEX colour inside `bgcolor=""` on the `<td>` wrapping the container table, as well as on the inner `<td>`:

```html
<td class="px-sm-16" align="center" bgcolor="#EEEEEE">
    <table class="container" cellpadding="0" cellspacing="0" role="presentation" width="600">
        <td class="px-sm-8" align="left" bgcolor="#FFFFFF" style="padding: 0 32px;">
            ...
        </td>
    </table>
</td>
```

For the semi-transparent overlayed boxes, change the `rgba` values in the inline CSS.

### Background Image

Change the image path in the inline `background-image` CSS property, and in the `src=""` of the `<v:image />` tag, for Outlook & Windows 10 Mail.

```html
<td class="px-sm-16" align="center" bgcolor="#0CBACF" style="background-image: url('https://dummyimage.com/1200x388/0CBACF'); ...">
    <!--[if gte mso 9]>
    <v:image src="https://dummyimage.com/1200x388/0CBACF" ... style="width:600px;height:194px;" />
    [...]
</td>
```

### Top & Bottom Spacing

Change the `line-height:` value on the `<div class="spacer"`: 

```html
<div class="spacer line-height-sm-0 py-sm-8" style="line-height: 24px;">&zwnj;</div>
```

For spacing on mobile, we generally use the `py-sm-8` class, that sets the spacer to be 16px high. You can change it to one of the other mobile spacing classes in Acorn. Learn more about [spacers in Acorn](https://thememountain.github.io/documentation/acorn/utilities/spacing.html).
