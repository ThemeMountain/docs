---
title: Interactive
description: "Interactive Sections in Sartre Email: Purchase Rating or Review, and Accordion"
tags: interactive, accordion, star, rating
page_order: 13
navigation:
  group: Sections
---

# Make your emails interactive

Sartre Email includes interactive sections that will help you create unique, immersive emails.

---

## Accordion

Accordions can be useful to reduce the height of your email on mobile. In supporting email clients, the content area is collapsed and can be expanded by clicking on the title.

![Accordion](/img/email/sartre/sections/accordion.jpg)

On mobile, it works just like you're used to: clicking an accordion title reveals the content inside it.
The interaction is handled with `:hover`, just like with the hamburger menu. Therefore, it doesn't close when you click the title again - it doesn't work like a toggle.

In most mobile email clients (except iOS Mail) you can touch outside to close it, or touch another title to close the current one and open that instead. For desktop email clients, the accordion items are always expanded.

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert" id="accordion-mailchimp">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">MailChimp Note</p>
  <p class="m-0 text-md text-orange-dark">The accordion is not currently supported by MailChimp, because their system strips out any form tags, and our accordion needs to use <code>&lt;button&gt;</code> tags. Therefore, our MailChimp-integrated templates do not include the Accordion section.</p>
</div>

## Star Rating

Need to ask your subscribers for a rating? The Star Rating section offers a 5-star rating scale, that highlights the selected number of stars when the user hovers them. Just like you're used to on a website:

![Star Rating](/img/email/sartre/sections/thumbs/star-rating.gif)

Because of the poor support in email clients, this section does not use forms. Instead, each star is wrapped in an anchor tag that must be linked to an endpoint (URL) that will record the user's rating.

For example:

```html
<a href="http://example.com/product/rate/5" style="color: #DDDDDD; display: block; font-size: 38px; text-decoration: none;">★</a>
```

You need to set the proper rating URL inside `href=""`, for each star in particular.

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert" id="star-rating-item-order">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
  <p class="m-0 text-md text-blue-dark">Stars in the email are shown in reverse when compared to the actual order in the HTML code. This is for the hover effect to work, so always remember: the first star you see on page is actually the last one in the code.</p>
</div>

### Star Rating Email Client Support

Currently, the Star Rating hover effect works in the following email clients:

- iOS Mail
- Gmail Web
- Apple Mail
- Outlook iOS
- Outlook Mac
- Outlook Android
- Gmail Android 6, 7
- Some Android 6 and 7 Native Clients

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert" id="mailchimp-star-rating">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">MailChimp...</p>
  <p class="m-0 text-md text-orange-dark">Currently, MailChimp removes the <code>unicode-bidi: bidi-override;</code> inline CSS that is needed to enable the hover effect. This means that only the star being hovered will change color, if you're using this section in MailChimp.</p>
</div>

---

## Customisation

### Accordion

Text can be styled with inline CSS.

Background of the title can be changed in the `bgcolor=""` attribute on the `<button class="toggle-trigger">` button, and on the `<td>` wrapping the title text.

Top and bottom spacing: change the `line-height:` value on the `<div class="spacer"` tags, found near the top and bottom of the HTML. For mobile spacer customisation, learn more about [spacers in Acorn](https://docs.thememountain.com/acorn/utilities/spacing).

### Star Rating

Top and bottom spacing is done with [Acorn Spacers](https://docs.thememountain.com/acorn/utilities/spacing).

Change the star color on hover in the embedded CSS from the template's `<head>` tag:

```css
.star:hover a, .star:hover ~ .star a {color: #FF4556 !important;}
```

We suggest sticking to 5 stars: although it's OK for desktop, more stars will blow up your layout on mobile.

Star size and color can be changed with inline CSS. It's best that you do not exceed the pre-defined `font-size`, as doing so might blow up the email on smaller mobile screens.
