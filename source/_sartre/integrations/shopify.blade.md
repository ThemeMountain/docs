---
title: Shopify
description: Shopify Integration in Sartre Email
tags: shopify, esp, ecommerce, notifications, transactional, cart
page_order: 30
navigation:
  group: Integrations
---

# Shopify Integration

Sartre Email includes a Shopify integration, which you can use for custom designed email notifications for your Shopify store.

We have included templates for *all 17 Shopify notification emails*.

### Required software

Because Shopify only allows editing notification templates by pasting in your email's HTML code, you will need a text editor first. We recommend [Sublime Text](https://www.sublimetext.com/) or [Atom](https://atom.io/).

---
## Uploading to Shopify

Inside the `Files/shopify/` folder, you'll find HTML files for all Shopify notification emails. Read more about them [below &darr;](#structure) {.scroll-to}

1. In your Shopify admin, click Settings on the bottom left.
2. On the next page, select "Notifications" :

   ![Shopify Admin Notifications Section](/img/email/sartre/integrations/shopify/shopify-admin-edit-notifications-settings.jpg)

Next, you will be presented with a list of all types of notification emails Shopify sends.

3. To edit a Notification, click its name in the list on the right-hand side:

   ![Shopify Admin Edit a Notification](/img/email/sartre/integrations/shopify/shopify-click-to-edit-notification-template.png)

You will then see a form where you can set the Email Subject and, what we're after here, the Email body (HTML).

4. Now open the corresponding HTML file from our template in the text editor of your choice.
5. Select all code with <kbd>Ctrl</kbd> + <kbd>A</kbd> (Windows) or <kbd>Cmd</kbd> + <kbd>A</kbd> (Mac). Copy it to clipboard with <kbd>Ctrl</kbd> + <kbd>C</kbd> / <kbd>Cmd</kbd> + <kbd>C</kbd>
6. Go back to your Shopify admin, and paste the code you just copied, in the Email body (HTML) area.
7. Finally, click Save on the bottom right.

The new template will now be used for emails of that type that Shopify sends for your store. If you want, you can test the template with real data from your store, by clicking "Send test email" or "Preview" at the top of this template editing page.

---

## Supported Tags

Our templates use all the tags and contain all the information that the default Shopify templates offer. In some cases, even more. There are many Liquid tags being used, so it's not practical to list them here. Instead, please have a look at the screenshots on the product's landing page.

Related: see the [Liquid language reference](https://help.shopify.com/themes/liquid).

---

## Customisation

There are several types of customisations you'll want to do. Let's go through each one.

### Global notification styling

Shopify has a few settings for your notification emails. You can:

- set an email logo image
    - define the width of this image
- set an email accent colour

Our templates support all of these settings:

![Shopify Notification Email Customization Options](/img/email/sartre/integrations/shopify/shopify-global-notification-styling.png)

### Text Editing

This involves only customising the wording in the notification templates. Maybe you don't like our default text, or maybe you need it translated for your business.

At the very top of the code for almost all emails, you will see some Liquid tags wrapping some text. [Liquid](https://help.shopify.com/themes/liquid) is Shopify's templating language, and it is used to integrate custom websites and, well, email templates with their platform. While text editing is straightforward, the Liquid tags require a basic understanding of this language (or at least some basic experience with programming, as it uses universal concepts).

![Shopify Email Notification text editing](/img/email/sartre/integrations/shopify/shopify-edit-captures-text.png)

We have tried providing some defaults in this location, so that you can see them immediately and change them there without scrolling down and hunting for text in the HTML. However, this isn't possible with all components, so you will need to edit wording inside the HTML, too. Which brings us to:

### HTML / Liquid editing

Since Shopify doesn't provide a visual editor for editing your notification templates, you will need to edit the source code of our templates, in order to do advanced customisations.

We recommend using a text editor capable of syntax highlighting for doing this (both Sublime and Atom have it), as it will be easier for you to find what you're looking for. Shopify doesn't provide such editing capabilities.

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
  <p class="m-0 text-md text-blue-dark">Editing the HTML source code is currently needed for some parts of the template, such as call to action button labels. Simply do a search (<kbd>Ctrl</kbd>/<kbd>Cmd</kbd> + <kbd>F</kbd>) for the text string you're looking to change, and the text editor will jump to it and highlight it.</p>
</div>

If you want to change what product information is being pulled into the template from your store, you must have experience with Shopify's Liquid language.

### Google Fonts editing

While our default font pairing looks good, you might want to use different Google Fonts for your brand.

Unfortunately, because Shopify requires a complex workaround to enable web fonts in notification emails, changing them is not as easy as it is with the template's other versions. You'll need to go through a few steps.

1. In [Google Fonts](https://fonts.google.com/), search for the font that you'd like to use
2. Select it, and a small black bar will appear at the bottom of the screen. Click the bar to open it:

   ![Google Fonts Selection](/img/email/sartre/integrations/shopify/google-fonts-selection.jpg)

3. Copy the web font URL ( as highlighted above), open a new tab in your browser, paste the URL in and hit Enter. You'll most likely see a list of many @font-face declarations, each looking something like this:

   ![Google Fonts Font URL](/img/email/sartre/integrations/shopify/google-fonts-font-url-css.jpg)

Now, if you take a closer look, you'll notice that this block is very similar to what we have in the template. Each `@font-face` block imports a specific font version, and its name is defined in that `font-family: ''` code.

4. Copy the @font-face block you need - there will most likely be many of them, for different character encodings. Only choose one encoding - the one that you need - as the more you use, the more it impacts the email load time.
5. Open up the notification template you want to change the fonts for, in your preferred text editor
6. Immediately inside the `<style>` tag, you'll see something like:

    ```css
    @media only screen and (min-width: 1px) {
      @font-face {
        ...
      }

      @font-face {
        ...
      }

      ...
    }
    ```
7. Replace the @font-face block that corresponds in font-weight with the one you just copied, by deleting it and pasting from clipboard. Do this for all weights of the same font that you need.
8. Finally, after the last @font-face, you will see this:

    ```css
    .col, td, th, div, p {font-family: "Open Sans",-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI","Roboto","Helvetica Neue",Arial,sans-serif;}
    .webfont {font-family: "Lato",-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI","Roboto","Helvetica Neue",Arial,sans-serif;}
    ```

Change the first font name in `font-family: ''`, by using the same name that is defined in the `@font-face` block.

Do not change the `webfont` class name, as this is used throughout the template.

That's it! All that's needed now is to replace the template in you Shopify Notifications settings as explained [above &uarr;](#uploading-to-shopify) {.scroll-to}.

Make sure to test the email in the Shopify admin, in order to make sure your changes have been correctly applied.

---

## Structure

Shopify templates can be found in the `Files/shopify` folder. There are 17 HTML files in total, each named exactly after the corresponding notification template in Shopify. The following tables list the templates in the same order listed in your Shopify Notifications Settings.

### Customer notifications

These notifications are automatically sent out to the customer.

<table class="rounded text-left border text-grey-dark mt-8 mb-4 w-full text-sm" cellpadding="16" cellspacing="0">
    <tr>
        <td colspan="2" class="bg-grey-dark py-2 px-4">
            <h3 class="p-0 text-base font-normal text-white">Orders</h3>
        </td>
    </tr>
    <tr>
        <td>order_confirmation.html</td>
        <td>Sent automatically to the customer after they place their order.</td>
    </tr>
    <tr>
        <td>order_cancelled.html</td>    
        <td>Sent automatically to the customer if their order is canceled (if you select this option).</td>
    </tr>    
    <tr>
        <td>order_refund.html</td>   
        <td>Sent automatically to the customer if their order is refunded (if you select this option).</td>
    </tr>    
    <tr>
        <td>draft_order_invoice.html</td>    
        <td>Sent to the customer when a draft order invoice is created. You can edit this email invoice before you send it.</td>
    </tr>    
    <tr>
        <td>buy_online_for_Shopify_POS.html</td> 
        <td>Sent to the customer when their order will be completed without the help of store staff. You can email a draft order to the customer using Shopify POS for iPad.</td>
    </tr>    
    <tr>
        <td>abandoned_checkout.html</td>  
        <td>Sent to the customer if they leave checkout before they buy the items in their cart. Configure options in checkout settings.</td>
    </tr>
    <tr>
        <td colspan="2" class="bg-grey-dark py-2 px-4">
            <h3 class="p-0 text-base font-normal text-white">Shipping</h3>
        </td>
    </tr>
    <tr>
        <td>fulfillment_request.html</td>
        <td>Sent automatically to a third-party fulfillment service provider when order items are fulfilled.</td>
    </tr>
    <tr>
        <td>shipping_confirmation.html</td>
        <td>Sent automatically to the customer when their order is fulfilled (if you select this option).</td>
    </tr>
    <tr>
        <td>shipping_update.html</td>
        <td>Sent automatically to the customer if their fulfilled order’s tracking number is updated (if you select this option).</td>
    </tr>
    <tr>
        <td>shipment_out_for_delivery.html</td>
        <td>Sent automatically to the customer after the status of their fulfillment changes to out for delivery.</td>
    </tr>
    <tr>
        <td>shipment_delivered.html</td>
        <td>Sent automatically to the customer after the status of their fulfillment changes to delivered.</td>
    </tr>
    <tr>
        <td colspan="2" class="bg-grey-dark py-2 px-4">
            <h3 class="p-0 text-base font-normal text-white">Customer</h3>
        </td>
    </tr>
    <tr>
        <td>customer_account_invite.html</td>
        <td>Sent to the customer with account activation instructions. You can edit this email before you send it.</td>
    </tr>
    <tr>
        <td>customer_account_welcome.html</td>
        <td>Sent automatically to the customer when they complete their account activation.</td>
    </tr>
    <tr>
        <td>customer_account_password_reset.html</td>
        <td>Sent automatically to the customer when they ask to reset their accounts password.</td>
    </tr>
    <tr>
        <td>contact_customer.html</td>
        <td>Sent to the customer when you contact them from the orders or customers page. You can edit this email before you send it.</td>
    </tr>
</table>

### Order notifications

These notifications are sent to order notification subscribers (i.e. shop owner) whenever a new order comes in.

<table class="rounded text-left border text-grey-dark mt-8 mb-4 w-full text-sm" cellpadding="16" cellspacing="0">
    <tr>
        <td class="bg-grey-dark py-2 px-4">
            <h3 class="p-0 text-base font-normal text-white">Template</h3>
        </td>
        <td class="bg-grey-dark py-2 px-4">
            <h3 class="p-0 text-base font-normal text-white">Description</h3>
        </td>
    </tr>
    <tr>
        <td>new_order.html</td>
        <td>Sent to order notification subscribers when a customer places an order.</td>
    </tr>
    <tr>
        <td>new_order_mobile.html</td>
        <td>Sent to mobile notification subscribers when a customer places an order.</td>
    </tr>
</table>
