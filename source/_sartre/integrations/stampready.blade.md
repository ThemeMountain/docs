---
extends: _layouts.default.page
title: StampReady
description: StampReady Integration in Sartre Email
tags: stampready, esp, integration
path: email/sartre/integrations/
order: 28
navigation:
  group: Integrations
---

# StampReady Integration

Sartre Email is integrated with StampReady, so you can use it in their modern email builder.

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert" id="prerequisite">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Prerequisite</p>
  <p class="m-0 text-md text-blue-dark">In order to use StampReady's builder, you need to first <a href="https://www.stampready.net/" target="_blank" rel="noopener">sign up for a free account &nearr;</a> on their site. Once you have an account, you can proceed to <a href="#uploading">upload &darr;</a> and start using our product with their platform.</p>
</div>

---

## Structure

The StampReady-integrated files can be found in the `Files/stampready` folder from your download.

This folder has the same structure as the `Files/html` folder, only that all files inside it are editable or ready to use with StampReady:

- `/all-in-one` - all-in-one template .zip file
- `/components` - buttons, navigation, dividers, and spacers
- `/grid` - the grid system
- `/layout` - the boilerplate layout file
- `/sections` - all the template sections

Only the all-in-one template .zip file from the `Files/stampready/all-in-one` folder can be uploaded directly to StampReady in order to be used in a campaign. All others are just for creating a StampReady-compatible template yourself, which you then upload to their service.

If you're planning on creating a StampReady template yourself, please first take a look at [their developer documentation ](https://www.stampready.net/developer/index.php), and then at our own templates to understand how to do it.

## Uploading

Inside the `Files/stampready/all-in-one/` folder, you'll find the .zip file that you need to upload to StampReady.

1. In StampReady, go to *Campaigns &rarr; New Campaign*.
2. Click *"Import Template"* on the top right, and select *"ZIP FILE"* from the dropdown.
3. Browse for our StampReady .zip file as described above, select to upload it, and you're done: StampReady will show you a preview of the template you are about to import. Simply confirm and start using their editor.

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
  <p class="m-0 text-md text-blue-dark">Again, the file for StampReady contains all sections, so don't worry if you see a very long template with lots and lots of sections when you see the preview confirmation after uploading. That's how StampReady works, and you will be creating the exact layout you need (starting from a blank canvas) in their builder, once you confirm the import.</p>
</div>

## Supported Attributes

The following StampReady attributes are supported in Sartre Email:

### Template Attributes

- `data-repeatable` - Editor 3.0 feature. Allows repeating content inside a section. Selected modules only.
- `data-group` - Editor 3.0 feature. Organises section draggable thumbnails into named groups.
- `data-crop` - set to false, it disables the cropping pop-up when uploading an image
- `data-module` - allows dragging and dropping modules to build your layout
- `data-border-color` - change border colour for sections that have borders
- `data-height` - Editor 3.0 feature. Allows adjusting spacer height.
- `data-bgcolor` - allows changing background colours
- `data-thumb` - draggable thumbnail previews
- `data-bg` - for background images
- `data-color` - text colour
- `data-size` - font sizing

### Personalization Variables

- `sr_view_online` - optional "view in browser" URL
- `sr_unsubscribe` - mandatory unsubscribe tag

For reference, please see [StampReady's Developer Guide](https://www.stampready.net/developer/index.php).

---

## Customisation

StampReady has one of the best email template builders around, at the moment. It offers great flexibility and it even allows exporting the HTML to desktop, so you can then import it ready-customized in other services that have less capable builders, such as MailChimp or Campaign Monitor.

### HERO With Video

Currently, StampReady's editor doesn't support editing HTML5 video in emails. It doesn't provide options for you to change the video source or poster image. Unfortunately, it even changes the HTML of this section, so you will need to add some attributes back.

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">Warning</p>
  <p class="m-0 text-md text-orange-dark">Don't try to play the video in StampReady's builder, it will mess up with the HTML and you will need to start over. If you need to preview, select Preview from the menu on the left.</p>
</div>

Hover the HERO With Video section in the builder, and click on the <kbd></></kbd> button on the right. In StampReady's current editor, you will see the code editing window slide down under the section:

(TODO: add image)

As you can see, the `<video>` and `<source>` tags are missing the `<poster="">` and `<src="">` attributes, respectively. The former is also missing the controls attribute, needed so users can actually play the video. We need to add those back in!

#### 1. Edit the `<video>` tag:
Add the missing attributes to this tag, so that it looks like this:

```html
<video class="column video" width="700" height="394" controls poster="URL TO YOUR POSTER IMAGE">
```

#### 2. Edit the `<source>` tag:

Same as with the `<video>` tag, change this one so it looks like this:

```html
<source src="URL TO YOUR VIDEO FILE" type="video/mp4">
```

Of course, depending on your video file format, adjust the `<type="video/mp4">` attribute.

Once done, hit the <kbd>↑</kbd> button on the top right of the editor, to apply changes. Again, *do not try to play the video in the editor, as you will lose your edits. Always test with from the Preview left menu, or by sending yourself an actual test email (Send &rarr; Send Test Email).*

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
  <p class="m-0 text-md text-blue-dark">StampReady's Editor 3.0 (Beta) provides a better code editing interface and doesn't remove attributes from the <code>&lt;video&gt;</code> and <code>&lt;source&gt;</code> tags. If you see it at the bottom of your Account/Settings page, we encourage you to enable it.</p>
</div>

---

## Limitations & Other Notes

Although StampReady's builder is quite advanced and flexible, it still has its drawbacks, at least for now.

### Conflicting Browser Plugins

The [Grammarly](https://www.grammarly.com/) browser plugin severely affects online email editors, including MailChimp. By injecting itself into the page, it corrupts email HTML, resulting in a broken template.

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">Warning</p>
  <p class="m-0 text-md text-orange-dark">Please disable any plugins such as <em>Grammarly</em> or <em>AdBlock</em> when using an online email builder. As a rule of thumb, we recommend disabling any plugins that manipulate content on a web page when using any of the integrations provided with our email templates.</p>
</div>

### Hamburger Menu Icon

The hamburger menu icon is visible only on the mobile breakpoint, so it can't be edited with MailChimp's visual editor. Instead, you need to edit it manually in the HTML:

(TODO: add image)

### Elements changed/removed

When exporting from StampReady, some required elements are changed or completely removed from our original template.

For example, the `<!DOCTYPE html>` and `<html>` tags are being replaced with their own tags, which can break background images in Outlook or lead to unexpected behavior in various email clients.

We're covering the Outlook background images issue for you (our Outlook VML code has the `xmlns=""` attribute set inline), but to ensure nothing else is impacted and that you use the template as we intended, you will need to add our original tags back.

Replace the doctype and html tags from what you've exported from StampReady:

```html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html>
```

With this:

```html
<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
```

### Outlook Styles

StampReady currently has limited support for what it allows in the `<head>` area.

Sartre Email uses Acorn's Outlook-targeted style block, which defines typography and layout resets just for this email client. Additionally, it also keeps rendering consistent on hi-DPI screens.

Currently, StampReady removes this in the final email, so you need to add it back yourself. If you don't, Outlook rendering will be off and the font will fallback to Times New Roman.

This is the code you need to add just before `<style type="text/css">`, in the `<head>` area:

```html
<!--[if mso]>
  <xml>
    <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
    </o:OfficeDocumentSettings>
  </xml>
  <style>
    table {border-collapse: collapse;}
    .spacer,.divider {mso-line-height-rule:exactly;}
    td,th,div,p,a {font-size: 13px; line-height: 22px;}
    td,th,div,p,a,h1,h2,h3,h4,h5,h6 {font-family:"Segoe UI",Helvetica,Arial,sans-serif;}
  </style>
<![endif]-->
```

### Code bloat

It looks like, at least for now, StampReady's Builder does not clean up after itself when you export the HTML.

We've noticed that all their editor `data-` attributes aren't removed from the exported HTML (this adds up to the email size), and there are sometimes even leftovers from the builder itself (like wrapper divs, inline styles, unnecessary extra code indentation).

With these in mind, we highly advise manually cleaning up the HTML, for optimal results.

As always, test before you send!
