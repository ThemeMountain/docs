---
title: Footer
description: Footer Sections in Sartre Email
tags: feature, showcase
page_order: 9
navigation:
  group: Sections
---

# Because all good things must come to a great end

The template comes with several footers, designed for a wide varitey of use cases. They all include common things like a logo, address, social icons, and, of course, legal text/unsubscribe links.

Footers also use a [Divider component from Acorn](https://thememountain.github.io/documentation/acorn/components/divider.html), which you can customise just like a spacer.

---

## Footer 1

Logo and social icons come first, separated with a divider from the legal text.

![Footer 1](/img/email/sartre/sections/footer-1.png)

## Footer 2

Logo and address or legal text come first, followed by the social icons and copyright text.

![Footer 2](/img/email/sartre/sections/footer-2.png)

## Footer 3

A balanced, centered mix of the first two footers.

![Footer 3](/img/email/sartre/sections/footer-3.png)

## Footer 4

Add more text to your footer, and also provide a call to action button.

![Footer 4](/img/email/sartre/sections/footer-4.png)

## Footer 5

Short, centered, straight to the point.

![Footer 5](/img/email/sartre/sections/footer-5.png)

### With AppStore Buttons

This variation includes App Store buttons, if you need to remind subscribers to download your mobile apps.

![Footer 5 Appstore](/img/email/sartre/sections/footer-5-appstore.png)

## Footer 6 Logo Left/Right

A two column version of Footer 5, with the logo to the left or right.

![Footer 6](/img/email/sartre/sections/footer-6-left.png)

---

## Customisation

### Links & Text

Links and text styles can be changed via inline CSS.

Talking about links, Unsubscribe in the ESP-integrated versions uses the platform's special unsub link code, so you're covered out of the box. However, if you're using StampReady to build a layout for some other platform, remember to add your provider's code as the URL.

### Logo & Images

Simply change the `src=""` and `width=""`. For retina images, keep the `width=""` defined by the template, and use an image that is double the width and height of the placeholder image.

### Background Colour

Change the HEX colour inside `bgcolor=""` on the `<td>`'s:

```html
<td class="px-sm-16" align="center" bgcolor="#EEEEEE">
    <table class="container" cellpadding="0" cellspacing="0" role="presentation" width="600">
        <tr>
            <td class="px-sm-8" align="left" bgcolor="#232323" style="padding: 0 24px;">
                ...
            </td>
        </tr>
    </table>
</td>
```

Footers use #EEEEEE for the 'outside' colour (basically, the email body), and #232323 or #FFFFFF for the inside of a section. When using the integrated versions, such as MailChimp or StampReady, you need not worry about this: controls for changing them are provided through their UI.

### Top & Bottom Spacing

Change the `line-height:` value on the `<div class="spacer"`: 

```html
<div class="spacer line-height-sm-0 py-sm-8" style="line-height: 24px;">&zwnj;</div>
```

For spacing on mobile, we generally use the `py-sm-8` class, that sets the spacer to be 16px high. You can change it to one of the other mobile spacing classes in Acorn. Learn more about [spacers in Acorn](https://thememountain.github.io/documentation/acorn/utilities/spacing.html).

