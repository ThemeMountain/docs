---
title: Team
description: Team Sections in Kant Email
tags: team, members, organization, company
page_order: 15
navigation:
  group: Sections
---

# Highlight your team members

A Team section is a great way to show the members that make up your team.

Kant Email includes the following:

- Team 1 — full width, with button
- Team 2 — two column layout, with social links

---

## Team 1

This section focuses on the whole team, by providing a large full width image and a call to action button 
that you can use to link to your About Us page, for example.

![Team 1](/img/email/kant/sections/thumbs/team-1.jpg)

## Team 2

Team 2 provides a two column layout that you can use to highlight a couple of your team members. It includes 
a short text, as well as social media icons, to link to their profiles.

On mobile, the two columns will stack on top of each other.

![Team 2](/img/email/kant/sections/thumbs/team-2.jpg)

---

## Customisation

### Text

Font size, colour, weight, spacing, all can be changed through inline CSS.

### Images

Simply change the `src=""` and `width=""` of each image. If you want use retina images, make sure your own 
image is twice the pixel size of the placeholder.

### Top & Bottom Spacing

Team sections use both Universal and Row spacers from Pine, so you need to look for and adjust the values in both lines like this:

```html
<div class="spacer" style="font-size: 30px; line-height: 30px; mso-line-height-rule: exactly;">&nbsp;</div>
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
