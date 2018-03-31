---
title: MailChimp
description: MailChimp Integration in Sartre Email
tags: mailchimp, esp, integration
page_order: 27
navigation:
  group: Integrations
---

# MailChimp Integration

Sartre Email includes a MailChimp-integrated all-in-one template, which you can import and use yo build email layouts with their visual editor.

---

## Structure

The MailChimp-integrated files can be found in the `Files/mailchimp` folder from your download.

This folder has the same structure as the `Files/html` folder, only that all files inside it are editable or ready to use with MailChimp:

- `/all-in-one` - all-in-one template .zip file
- `/components` - buttons, navigation, dividers, and spacers
- `/grid` - the grid system
- `/layout` - the boilerplate layout file
- `/sections` - all the template sections

Only the all-in-one template .zip file from the `Files/mailchimp/all-in-one` folder can be uploaded directly to MailChimp in order to be used in a campaign. All others are just for creating a MailChimp-compatible template yourself, which you then upload to their service.

If you're planning on creating a MailChimp template yourself, please first take a look at [their documentation on importing a custom template](http://kb.mailchimp.com/templates/code/how-to-import-a-custom-html-template), and then at our own templates to understand how to do it.

## Video Tutorial

We've made a video tutorial on working with our email templates in MailChimp. Although it uses our Kant email template, the workflow is identical.

Please watch this first, as it covers the most common questions and issues:

@youtube('S0OpEtxs34s')

## Uploading

Inside the `Files/mailchimp/all-in-one/` folder, you'll find the .zip file that you need to upload to MailChimp.

1. In MailChimp, go to *Templates &rarr; Create Template &rarr; Code your own*.
2. Choose the *"Import zip"* option, name your template, and browse for the .zip file mentioned above.

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">Important</p>
  <p class="m-0 text-md text-orange-dark">Once the import is finished, you will be redirected to the Template edit screen, which shows a preview of your imported template. Do not try to use the "Design" view here, as this is not the place where you build your email layout for your campaign. Instead, as instructed in the video tutorial, just click "Save & Exit" on the bottom right of the screen.</p>
</div>

## MERGE Tags

The following MailChimp tags are supported in Sartre Email:

### Template MERGE Tags

- `mc:edit`
- `mc:repeatable`
- `mc:variant`
- `mc:hideable`

See the MailChimp template tags [reference](http://kb.mailchimp.com/templates/code/create-editable-content-areas-with-mailchimps-template-language).

### Campaign MERGE Tags

- `*|LIST:ADDRESS|*` - inserts company or organization postal mailing address or P.O. Box as plain text
- `*|REWARDS|*` - outputs the MonkeyRewards badge, only if you're on a free MailChimp plan
- `*|MC:SUBJECT|*` - sets the `<title>` tag's content, useful when email is viewed online
- `*|ARCHIVE|*` - URL to view the email in the browser, on your [campaign's page](https://kb.mailchimp.com/campaigns/archives/about-email-campaign-archives-and-pages)
- `*|LIST:COMPANY|*` - shows company info, as defined in your account
- `*|MC_PREVIEW_TEXT|*` - outputs the email [preview](https://kb.mailchimp.com/campaigns/design/edit-your-emails-subject-preview-text-from-name-or-from-email-address#Regular-Campaigns) text
- `*|UNSUB|*` - generates the unsubscribe URL
- `*|DATE:Y|*` - inserts the current year

### Automation MERGE Tags

These MERGE tags are available in the notification sections.

- `*|ABANDONED_CART|*` - loops over items in cart for e-commerce automations
- `*|HTML:ORDER_SHIPPING_ADDRESS|*` - outputs formatted shipping address
- `*|HTML:ORDER_BILLING_ADDRESS|*` - outputs formatted billing address
- `*|PRODUCT:IMAGE_URL|*` - generates URL for a product's image
- `*|PRODUCT:DESCRIPTION|*` - inserts product's description
- `*|CART:URL|*` - generates URL to shopping cart
- `*|ORDER_TOTAL|*` - shows order total amount
- `*|ORDER_TAX_TOTAL|*` - shows order tax total
- `*|ORDER_SUBTOTAL|*` - shows order subtotal
- `*|PRODUCT:TITLE|*` - inserts product's title
- `*|PRODUCT:PRICE|*` - inserts product price
- `*|FNAME|*` - outputs recipient's first name

If you need to customise the product to use other MERGE tags, see [MailChimp's MERGE tags cheat sheet](http://kb.mailchimp.com/merge-tags/all-the-merge-tags-cheat-sheet).

---

## Customisation

The template has many customisation options through MailChimp's interface, organised by section (for an example, see video @ 7:50).

These settings include:

- page background colour
- responsive font settings
- setting the background images and colours of sections
- customising buttons background and text colour

### MailChimp's "Layouts" feature

Our all-in-one template works with MailChimp's "Layouts" feature (explained in the video).

Although needed for an all-in-one template, this feature isn't recommended for cases where you need only a few modules in a template in MailChimp, with no other modules to choose from. This is a common case for freelancers that provide pre-built templates to their clients by building templates manually from the individual sections we provide.

If you're a freelancer using the base layout file and individual sections to build layouts that your clients will only add content/images to, we strongly advise removing the `mc:variant="..."` attribute from all sections that you use. This way, your client will only see the intended layout.

## Limitations & Other Notes

Most visual email builders are limited in functionality, meaning they do not or cannot allow fine-tuned control over the template as if you were to manually edit the HTML code. This is especially relevant to MailChimp's outdated third-party template editor, so please take the following into account.

### Conflicting Browser Plugins

The [Grammarly](https://www.grammarly.com/) browser plugin severely affects online email editors, including MailChimp. By injecting itself into the page, it corrupts email HTML, resulting in a broken template.

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">Warning</p>
  <p class="m-0 text-md text-orange-dark">Please disable any plugins such as <em>Grammarly</em> or <em>AdBlock</em> when using an online email builder. As a rule of thumb, we recommend disabling any plugins that manipulate content on a web page when using any of the integrations provided with our email templates.</p>
</div>

### Hamburger Menu Icon

The hamburger menu icon is visible only on the mobile breakpoint, so it can't be edited with MailChimp's visual editor. Instead, you need to edit it manually in the HTML:

```html
<!--[if !mso 9]><!-->
    <img src="https://gallery.mailchimp.com/[...].jpg" class="toggle-trigger show-sm p-sm-8" aria-hidden="true" width="20" style="display: none; max-height: 0;>
<!--<![endif]-->
<div class="toggle-content">
```

### Background Images

MailChimp's editor is unfortunately *very* limited when it comes to background images, at the moment.

You can set a module's background image in the "Design" tab, by replacing the default dummy image. Other settings such as background size, position, tiling (repeat), and colour are available:

![MailChimp Set Background Image](/img/email/sartre/integrations/mailchimp/set-background-image.jpg)

The downside of this is that it only works by us having to pre-define embedded CSS in the template's `<style>` tag. This means that email clients that don't support embedded CSS *and* CSS background images, will not show the image.

### Outlook Background Images

Same as with the above, MailChimp does *not* fill in the URL for the image in the `<v:image src="..." />` from the VML code. You also need to do this manually, by editing the template HTML code.

<div class="bg-red-lightest border-l-4 border-red p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-red-dark">This is very important!</p>
  <p class="m-0 text-md text-red-dark">Setting a background image just with MailChimp's visual editor does not update this code. Outlook will not show the correct image unless you manually edit the HTML.</p>
</div>

**Tip**: use the StampReady integration we provide, to build your layouts in StampReady's modern builder and then export to use in MailChimp. StampReady's editor properly updates background images.

### Code Bloat

Unfortunately, MailChimp's editor currently duplicates the `@media` CSS query, for every declaration in part.

Consider the following CSS from our template:

```css
@media only screen and (max-width: 600px) {
    u ~ div .wrapper {min-width: 100vw;}
    .container {width: 100%!important; -webkit-text-size-adjust: 100%;}
}
```

MailChimp will transform that into:

```css
@media only screen and (max-width: 600px) {
    u ~ div .wrapper {min-width: 100vw;}
}

@media only screen and (max-width: 600px) {
    .container {width: 100%!important; -webkit-text-size-adjust: 100%;}
}
```

This increases the message size considerably, and can potentially lead to message clipping in Gmail. Increased CSS size can also lead to Gmail not taking the CSS into consideration at all. While we did test and found that Gmail's limit is not reached with our templates, always send yourself a test email to check.

### Slow/buggy interface

Please note that the MailChimp editor is very slow when working with the all-in-one template file. This is a limitation of their template builder, and unfortunately there's currently no way to overcome it for templates with dozens of modules.

### Scrolling issues

MailChimp's builder has a bug that sometimes disables scrolling when you add a new section. We've seen that adding another section, or saving and refreshing, usually takes care of it.

### What happened to my content?

MailChimp has a 'feature' called *Recovered Content*, that tries to be smart and match content from previous campaigns into your layout. Although well intended, this is frustrating when you add a new section and see its layout/formatting broken, because an image was completely replaced with some text, for example (check the video tutorial, it happened to us too).

What usually works is removing and then re-adding the section that got corrupted by this recovered content functionality. Sometimes, you might even need to save and refresh the page.

### Preview looks weird

MailChimp's application styling sometimes overrides our template's styles. This is clearly visible in the visual editor, but can sometimes be seen even when using their preview tool.

Always send yourself an actual test email from MailChimp's preview tool, and check it in a real email client.
