---
title: Other ESPs
description: Using other Email Service Providers with Sartre Email
tags: campaign monitor, esp, integration
page_order: 31
navigation:
  group: Integrations
---

# Other ESPs Compatibility Notes

Our templates work with most email service providers, even though a dedicated integration isn't included.
The reason we don't provide an integration for them is mainly because these services don't provide a templating language that we can use to integrate our templates with their editors.

You can, however, *upload the standard HTML version to these ESPs*, altough in some cases you will not be able to edit the content in a WYSIWYG editor, as it the case with the dedicated integrations we provide.

The following is a compatibility table that lists any issues we've encountered while testing, with advice on how to handle them.

---

## Generic

We have encountered the following issues in several email service providers that don't provide template integration capabilities, or a template editor.

<table class="rounded text-left border text-grey-dark mt-8 mb-4 w-full" cellpadding="16" cellspacing="0">
    <thead class="bg-grey-lighter text-black text-base">
        <tr>
            <th class="py-2 px-4">Issue</th>
            <th class="py-2 px-4">Solution</th>
        </tr>
    </thead>
    <tbody class="align-top">
        <tr>
            <td class="text-sm font-bold w-1/4">Images not showing</td>
            <td class="text-sm">Many ESPs allow you to import your custom HTML, without offering a visual template builder or at least an option to upload images along with the HTML. To have images show up, always make sure you have used absolute URLs for your images - i.e. images need to be hosted somewhere and linked to from your HTML.
            <br><br>
            If your ESP allows editing the template after import (either in code or visual editor), you can simply upload the standard HTML version as it is, and change the image paths afterwards.</td>
        </tr>
        <tr>
            <td class="text-sm font-bold w-1/4">Background images are not editable</td>
            <td class="text-sm">Just as with Campaign Monitor, you need to manually edit the URL of the background image (before uploading, or in their code editor, if the service provides one). <a href="../campaign-monitor/#background-images" class="text-sm underline">See how →</a></td>
        </tr>
    </tbody>
</table>
