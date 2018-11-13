---
title: Interactive
description: Interactive Sections in Kant Email
tags: interactive, accordion
page_order: 10
navigation:
  group: Sections
---

# Make your emails interactive

Kant Email includes interactive sections that will help you create unique, immersive emails.

---

## Accordion

Accordions can be useful to reduce the height of your email on mobile. In supporting email clients, 
the content area is collapsed and can be expanded by clicking on the title.

![Accordion](/img/email/kant/sections/thumbs/accordion.jpg)

On mobile, it works just like you're used to: clicking an accordion title reveals the content inside it.
The interaction is handled with `:hover`, just like with the hamburger menu. Therefore, it doesn't 
close when you click the title again - it doesn't work like a toggle:

![Accordion on Mobile](/img/email/kant/sections/thumbs/accordion.gif)

In most mobile email clients (except iOS Mail) you can touch outside to close it, or touch another title to close 
the current one and open that instead. For desktop email clients, the accordion items are always expanded.

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert" id="accordion-mailchimp">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">MailChimp Note</p>
  <p class="m-0 text-md text-orange-dark">The accordion is not currently supported by MailChimp, because their system strips out any form tags, and our accordion needs to use <code>&lt;button&gt;</code> tags. Therefore, our MailChimp-integrated templates do not include the Accordion section.</p>
</div>

---

## Customisation

Text can be styled with inline CSS.

### Title Background

Background of the title can be changed in the `background-color` inline CSS of the 
`<button class="toggle-trigger">` button, and on the `<table>` right inside it.

### Top & Bottom Spacing

Accordions use both Universal and Row spacers from Pine, so you need to look for and adjust the values in both lines like this:

```html
<div class="spacer" style="font-size: 30px; line-height: 30px; mso-line-height-rule: exactly;">&nbsp;</div>
```

... and like this:

```html
<tr>
    <td class="spacer" height="40" style="font-size: 40px; line-height: 40px; mso-line-height-rule: exactly;">&nbsp;</td>
</tr>
```

On mobile, these spacers are reset to be 30px high. You can change that in the embedded CSS:

```css
.spacer {height: 30px; line-height: 100% !important; font-size: 100% !important;}
```
