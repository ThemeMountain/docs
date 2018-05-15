---
title: Transactional
description: Transactional Templates in Sartre Email
tags: templates, transactional, notification
page_order: 26
navigation:
  group: Templates
---

# Transactional email templates for your business

Sartre Email comes with several pre-built transactional email templates, also known as notification templates:

- Confirm Email
- Password Reset
- Abandoned Cart Reminder
- Order Confirmation
- Order Rating
- \+ all notification emails for Shopify

These are meant to be used with transactional email providers, such as [Mailgun](https://www.mailgun.com/), [SendGrid](https://sendgrid.com/), or [SparkPost](https://www.sparkpost.com/). For Shopify, please refer to our [Shopify documentation](../../integrations/shopify).

### File structure

- HTML version: `Files/html/templates/notifications`
- MailChimp version: `Files/mailchimp/templates/notifications`
- Mailster: choose the "Notification" layout from the template selection dropdown.
- Campaign Monitor and StampReady: these versions each come with an all-in-one template .zip file, that can be found in `Files/name/all-in-one/`, which also includes the notification sections. You can use this template in these services' builders to create your own notification templates.
- Shopify: the `Files/shopify` folder contains pre-built notification templates for all Shopify notifications

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Pro Tip</p>
  <p class="m-0 text-md text-blue-dark">Remove any CSS that you don't need in your notification layout, either manually or with <a href="https://emailcomb.com/" target="_blank" rel="noopener">EmailComb</a>. We provide all the base styles by default, but if you're not using, for example, headers with menus, you can very well remove the CSS for them and make your notifications lighter and faster-loading. Don't forget to always test after making customisations!</p>
</div>
