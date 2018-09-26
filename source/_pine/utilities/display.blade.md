---
title: Display Utilities
description: Utilities for showing and hiding elements in responsive emails
tags: utility, display, hide, show
page_order: 13
path: pine/utilities
navigation:
  group: Utilities
  order: 3
  title: Display
---

# Hide and Seek, if you're an #emailgeek

Pine includes responsive utilities that make it easy to show or hide elements on mobile. 
Use these classes on any elements you want hidden in your email on mobile:

```css
.show-sm {
  display: inherit!important;
  font-size: inherit!important;
  line-height: inherit!important;
  max-height: none!important;
}
.hide-sm {display: none!important;}
```

You can add them to any element you need aligned differently on mobile. Keep in mind that, depending on your layout, 
the left/right alignment classes might cause issues, as they are using float, which takes the element out of the normal document flow.

## Hiding On Desktop

Hiding email content from desktop email clients is tricky. Besides inconsistent support for `display: none;` 
we also have to put up with Outlook, which needs special attention as always.

`style="display: none; font-size: 0; line-height: 0;"` is enough to hide content in the majority of email clients. 
When adding the `show-sm` class, all three properties are reset and the element becomes visible on mobile.

## Outlook 2007-2016 {#hiding-in-outlook}

The above CSS won't be enough for Outlook's Word-based rendering engine, though: nested tables in particular won't be hidden if you use it. 
We need to wrap the content we want hidden inside Microsoft Outlook-specific comments, like this:

```html

<!--[if !mso 9]><!-->
<table style="display: none; font-size: 0; line-height: 0;">
    <tr>
        <td style="display: none; font-size: 0; line-height: 0;">
          <p>
            This will be hidden in all email clients.
          </p>
          <table>
            <tr>
                <td>
                  <p>
                    This too, except in Yahoo!
                    Need to add inline CSS to this cell, too.
                  </p>
                </td>
            </tr>
        </table>
      </td>
    </tr>
</table>
<!--<![endif]-->
```

As you can see, Yahoo! Mail requires us to be very specific about what we want to hide. The CSS properties used to hide the main table 
won't have any effect on the table cell(s) in this email client, so we need to add them to each cell as well.

## Email Preheaders

A practical use for hiding content on desktop is the [preheader ↗](https://litmus.com/blog/the-ultimate-guide-to-preview-text-support). 
Here is the minimum viable code for an email preheader:

```html
<div style="display: none; font-size: 0; line-height: 0;">Preheader text</div>
```
