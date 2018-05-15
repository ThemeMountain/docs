---
title: Mailster
description: Mailster Integration in Sartre Email
tags: mailster, esp, integration, wordpress
page_order: 29
navigation:
  group: Integrations
---

# Mailster Integration

Sartre Email is integrated with the [Mailster WordPress Plugin](https://codecanyon.net/item/mailster-email-newsletter-plugin-for-wordpress/3078294?ref=thememountain), which you can use to send email campaigns directly from your WordPress-powered site using services such as SendGrid, Mailgun, SparkPost, or Amazon SES.

---

## Structure

The Mailster-integrated files can be found in the `Files/mailster` folder from your download.

This folder has the same structure as the `Files/html` folder, only that all files inside it are editable or ready to use with Mailster:

- `/all-in-one` - all-in-one template .zip file
- `/components` - buttons, navigation, dividers, and spacers
- `/grid` - the grid system
- `/layout` - the boilerplate layout file
- `/sections` - all the template sections

Only the all-in-one template .zip file from the `Files/mailster/all-in-one` folder can be imported in Mailster. All others are just for creating a Mailster-compatible template yourself.

If you're planning on creating a Mailster template yourself, please first take a look at their [documentation](https://docs.revaxarts.com/mailstertemplates/), and then at our own templates to understand how to do it.

## Uploading to WordPress

Inside the `Files/mailster/all-in-one/` folder, you'll find the .zip file.

This file is what you need to upload under *Newsletter &rarr; Templates*, in WordPress. It the Base and Notification all-in-one templates, which you can use to quickly create layouts just like in our demos.


<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Pro Tip</p>
  <p class="m-0 text-md text-blue-dark">Our Mailster integration comes with automatic download via Envato. Once you've purchased the product, you can simply go to <em>Mailster &rarr; Templates &rarr; More Templates</em>, and click the Download button for the product. This feature requires that you are logged in on Envato with the account that you used to purchase our product.</p>
</div>

## Supported Tags

The following Mailster tags and variables are supported in Sartre Email:

### General Functionality

- Support for the "Auto" feature (magic wand)
- Background image support - just click a background image to change it

### Template Tags & Classes

- `<module>`
- `<single>`
- `<multi>`
- `textbutton` (class for table-based HTML buttons)

### Personalization Variables

- `{webversionlink}`
- `{unsublink}`
- `{notification}`
- `{copyright}`
- `{can-spam}`

Mailster supports many more variables, which are too specific to each WordPress installation for us to include in our email template. Please have a look at [their documentation](https://kb.mailster.co/tags-in-mailster/), to learn more about using variables in Mailster campaigns.

---

## Customisation

Mailster offers a solid and easy-to-use email builder, accessible right from your WordPress dashboard. Text and images can be customised in a way similar to how you edit your posts and pages, and sections can be ordered with drag and drop.

For advanced users, it also offers the possibility to edit the HTML source code of each section.

### HERO With Video

There is currently no way to visually edit the HERO With Video in Mailster, so you will need to edit it entirely through code. To bring up the code editing window, click the <kbd></></kbd> button on the right, when hovering the section:

![Edit HERO With Video in Mailster](/img/email/sartre/integrations/mailster/hero-video-codeview-btn.jpg)

You'll need to edit both the HTML5 video settings and the fallback HTML as well. Please see the [HERO With Video editing section](../sartre/hero/#video-hero-editing).

When finished, hit Save to apply your changes.

### Background Images

To edit the background image of a section in Mailster, simply click it and you will be presented with the image library modal, where you can choose what image to use.

Mailster will update the image path in all places required, so that background images will render as intended.

---

## Limitations & Other Notes

Although Mailster's builder is quite flexible and works well, it still has a few drawbacks, at least for now.

### Conflicting Browser Plugins

The [Grammarly](https://www.grammarly.com/) browser plugin severely affects online email editors, including MailChimp. By injecting itself into the page, it corrupts email HTML, resulting in a broken template.

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">Warning</p>
  <p class="m-0 text-md text-orange-dark">Please disable any plugins such as <em>Grammarly</em> or <em>AdBlock</em> when using an online email builder. As a rule of thumb, we recommend disabling any plugins that manipulate content on a web page when using any of the integrations provided with our email templates.</p>
</div>

### Hamburger Menu Icon

To edit the hamburger menu icon, you need to click the <kbd></></kbd> button next to the module in the builder, to bring up the HTML code editor, as mentioned above for the HERO With Video.

In the code editor that shows up, you then simply replace the image `src=""` URL with the new one that you want to use. This is because the hamburger menu icon is only visible on screens smaller than 600px.

### Auto content feature

Please keep in mind that this Mailster feature is still in its early stages. It currently cannot correctly fill in multi-column layouts (you can see this with the default Mailster template, too). Until further notice, use it only with single column sections.

As always, test before you send!
