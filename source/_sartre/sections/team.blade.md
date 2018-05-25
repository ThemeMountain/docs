---
title: Team
description: Team Sections in Sartre Email
tags: team, members
page_order: 21
navigation:
  group: Sections
---

# Highlight your team members

A Team section is a great way to show the members that make up your team.

Sartre Email includes the following:

- Team 1
- Team 2 (Boxed)
- Team 2 (Full Width)

---

## Team 1

This section focuses on the whole team, by providing a large full width image and a call to action button that you can use to link to your About Us page, for example.

![Team 1](/img/email/sartre/sections/team-1.jpg)

## Team 2 (Boxed)

Team 2 provides a two column layout that you can use to highlight a couple of your team members. It includes a short text, as well as social media icons, to link to their profiles.

On mobile, the two columns will stack on top of each other.

![Team 2](/img/email/sartre/sections/team-2-boxed.jpg)

## Team 2 (Full Width)

Similar to its sibling, but with more space for your content.

![Team 2](/img/email/sartre/sections/team-2-full.jpg)

---

## Customisation

### Text

Font size, colour, weight, spacing, all can be changed through inline CSS.

### Images

Simply change the `src=""` and `width=""` of each image. If you want use retina images, make sure your own image is twice the pixel size of the placeholder.

### Top & Bottom Spacing

Change the `line-height:` value on the `<div class="spacer"`: 

```html
<div class="spacer line-height-sm-0 py-sm-8" style="line-height: 24px;">&zwnj;</div>
```

For spacing on mobile, we generally use the `py-sm-8` class, that sets the spacer to be 16px high. You can change it to one of the other mobile spacing classes in Acorn. Learn more about [spacers in Acorn](https://docs.thememountain.com/acorn/utilities/spacing).
