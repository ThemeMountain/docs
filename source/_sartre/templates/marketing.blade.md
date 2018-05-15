---
title: Marketing
description: Marketing Templates in Sartre Email
tags: templates, marketing, promotional, sale, offer
page_order: 25
navigation:
  group: Templates
---

# A.K.A. Promotional Email Templates

Each of our products includes pre-built marketing templates. These are designed according to industry needs and can help you quickly create an email campaign for your business.

### File structure:

- HTML version: `Files/html/templates/marketing`
- MailChimp version: `Files/mailchimp/templates/marketing`
- Mailster: you can choose a prebuilt layout from the template selection dropdown.
- Mailster, StampReady, and Campaign Monitor: these versions each come with an all-in-one template that can be found in `Files/name/all-in-one/`, which includes all template modules.

    When using the editor in one of these services, you always start from a blank canvas, so pre-built layouts with all-in-one templates are not possible. These integrations come with an all-in-one layout file that includes all template modules for you to pick and build your layout.

The embedded CSS is the mostly the same from the `layout/boilerplate.html` file. This is to make it easier for you to add other sections to these templates, and not have to worry about missing CSS for some type of mobile width, or menu component.

---

## MailChimp Templates

Unlike our other email templates, the MailChimp version of Sarte Email does not come with an all-in-one template.

Sartre has 120+ modules, which is way too much for MailChimp's third-party email editor to handle. We actually tested this out, and we can confirm that their editor crashes the browser if used with an all-in-one template containing so many modules.

Therefore, we have provided pre-built templates for MailChimp instead. 

As a bonus, not having to deal with lots of modules in each template, this also means we are able to provide more fine-tuned styling controls.

On the downside, if one of the Sartre Email modules you'd like to use isn't present in the pre-built templates, you'll need to edit the template and copy/paste it in from the `Files/mailchimp/sections` folder.

Another alternative would be to use the [StampReady integration](../stampready) that Sartre comes with: having hit MailChimp's module count limitations, we've now made it so that Sartre for StampReady also includes some basic MailChimp editing integrations. So you'll be able to edit your text in MailChimp, even if using a layout exported from StampReady.
