---
title: Introduction
description: Get started with the Acorn Email Framework
tags: email, introduction, start
page_order: 1
navigation:
  group: Getting Started
  order: 1
---

# Get started with Acorn

Acorn is a golden ratio typography grid, responsive email framework made for email developers. With a focus on clean code, reusability, and utility classes, it is lightweight, easy to learn, and has solid email client compatibility.

## Starter Layout

Acorn comes with a layout file that you can use as the boilerplate for any HTML email you build with it. 
This file includes all the necessary CSS, tags, and attributes that are required for Acorn to render as intended.

```html
<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title>Acorn Email Framework</title>
    <!--[if mso]>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <style>
      table {border-collapse: collapse;}
      .spacer,.divider {mso-line-height-rule: exactly;}
      td,th,div,p,a {font-size: 16px; line-height: 25px;}
      td,th,div,p,a,h1,h2,h3,h4,h5,h6 {font-family:"Segoe UI",Helvetica,Arial,sans-serif;}
    </style>
    <![endif]-->

    <style type="text/css">

      /* Framework CSS - Removed for demo purposes */

    </style>
  </head>
  <body style="box-sizing:border-box;margin:0;padding:0;width:100%;word-break:break-word;-webkit-font-smoothing:antialiased;">

    <div style="display:none;font-size:0;line-height:0;"><!-- Add your preheader text here --></div>

    <table class="wrapper" bgcolor="#EEEEEE" cellpadding="16" cellspacing="0" role="presentation" width="100%">
      <tr>
        <td align="center">
          <table class="container" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" role="presentation" width="600">
            <tr>
              <td align="left">

                <!-- ADD ROWS HERE -->

              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>

  </body>
</html>
```

In addition to the minimum viable CSS, the starter template also includes all mobile helper classes by default. They're included to help you quickly get started, but you will most likely not need all of them in every email. We strongly suggest keeping only the necessary CSS in your production emails, in order to keep the file size as small as possible. A quick way of removing unused CSS from your HTML emails is [EmailComb ↗](https://emailcomb.com).

---

## HTML5 doctype

Acorn uses the HTML5 doctype. It's easy to remember, and enough to trigger standards mode in the majority of email clients.

The `<html>` tag also includes some `xmlns:` attributes: these are required for enabling background images and for preventing zoom issues at high DPI, in Outlook.

```html
<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  ...
</html>
```

---

## Meta tags

Acorn uses several meta tags, in order to:

1. Set the document encoding
2. Ensure proper rendering and touch zooming for all devices
3. Prevent iOS email clients from 'zooming-out' the layout
4. Tell Internet Explorer to display content with the highest rendering engine available

The `<!--[if mso]>` commented XML block prevents zoom issues in Outlook when high DPI display settings are used. It also allows for using PNG as an image format.

```html
<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title>Acorn Email Framework</title>
    <!--[if mso]>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <style>
      table {border-collapse: collapse;}
      .spacer,.divider {mso-line-height-rule: exactly;}
      td,th,div,p,a {font-size: 16px; line-height: 25px;}
      td,th,div,p,a,h1,h2,h3,h4,h5,h6 {font-family:"Segoe UI",Helvetica,Arial,sans-serif;}
    </style>
    <![endif]-->

    ...
    
    </head>

    ...

</html>
```

---

## Email Body

The base HTML of Acorn is made up of two nested tables:

- the `wrapper` allows us to set a background colour for the email, and adds a bit of padding to the viewport. The `class="wrapper"` is used to force the viewport to 100% width in Gmail on iOS.
- the `container` is where we add rows and columns for our content.

```html
<body style="box-sizing:border-box;margin:0;padding:0;width:100%;word-break:break-word;-webkit-font-smoothing:antialiased;">

  <div style="display:none;font-size:0;line-height:0;"><!-- Add your preheader text here --></div>

  <table class="wrapper" bgcolor="#EEEEEE" cellpadding="16" cellspacing="0" role="presentation" width="100%">
    <tr>
      <td align="center">
        <table class="container" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" role="presentation" width="600">
          <tr>
            <td align="left">

              <!-- ADD ROWS HERE -->

            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>

</body>
```

The `<body>` tag includes some inlined CSS resets. Since these properties still work if declared only once, it's better to keep them on this tag instead of having them in a table or td selector from the embedded CSS (not only will some clients be unable to read that, but most ESPs will unnecessarily inline them on every table and table cell).

The `<div>` you noticed before the wrapper table is provided as a convenience for you to add your hidden preheader text. We've seen many ways of hiding preheaders, some using excessively redundant CSS, so we've included the shortest possible preheader code we could come up with.
