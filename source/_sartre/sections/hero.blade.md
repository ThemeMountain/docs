---
title: HERO
description: HERO Sections in Sartre Email
tags: hero, background, play, video
page_order: 11
navigation:
  group: Sections
---

# Large & bold. Bulletproof background images.

A HERO section is a great way to draw attention to key information, an image or a product, by using bold imagery that works in almost any email client. Sartre comes with several variations:

- With Video
- With Background Image
- Split Content

---

## With Video
<img src="/img/email/sartre/sections/kant-video-hero-iphone.jpg" alt="HERO With Video on iPhone" width="300" class="float-right ml-4 p-4">

The HERO With Video allows you to use HTML5 video in your email campaigns, all while providing a very solid fallback for clients that do not support video in email.

In our tests, the following email clients have played the video:

- iPhone
- iPad
- Apple Mail
- Outlook on Mac
- Thunderbird
- Android Default Email Client (in most cases)

In supporting email clients, the video will show a play button.

When you play the video, most of these clients will automatically start playing the video in fullscreen. Although there is a `playsinline` attribute that you can add to the `<video>` tag, iPhone for example ignores it and still goes fullscreen.

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
  <p class="m-0 text-md text-blue-dark">Currently none of the online builders provide a visual way of editing HTML5 video sections. You will need to edit HTML in order to customise it, so please read on.</p>
</div>

### How it works

The HERO With Video contains a `<video>` tag, inside which we add a `<source>` tag for defining the source of the video. The `<video>` tag also has a `poster=""` attribute that defines what image is shown before playing the video.

Then, whatever HTML we use after the `<source>` tag, will be our fallback content that will show up in email clients that do not support HTML5 video. In our products, we use a regular HERO With Background Image as the fallback, so you still get to see rich, editable content that users can interact with (for example, editable text and a "Play" button that can be linked to a YouTube video).

Since all our HERO sections have support for background images in Outlook and Windows Mail, you can use this fallback to show the same poster image, or a different image in email clients that can't play the video. In fact, you could even take it a step further, and use an animated GIF as the fallback background image (maybe a few frames from the beginning of your video?).

![HERO With Video Fallback](/img/email/sartre/sections/kant-video-hero-fallback.jpg)

### Video HERO Editing

Since no email builder can do it for you, you will need to edit the HTML yourself.

Editing in one of the integrated versions:

- in **[Mailster](../mailster/#video-hero)**
- in **[StampReady's builder](../stampready/#video-hero)**

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert" id="mailchimp-video-support">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">MailChimp and Video Emails</p>
  <p class="m-0 text-md text-orange-dark">MailChimp currently does not support HTML5 video, it completely strips out the necessary tags when you import the template. Because of this, our MailChimp integration does not include the HERO With Video (note: StampReady → MailChimp will not work either). Therefore, if you want to send an email with HTML5 video, don't use MailChimp, as it is not currently possible.</p>
</div>

For Campaign Monitor, you will need to edit the all-in-one HTML file before uploading it, as their editor provides no way of editing the template's HTML code.

If you're going to edit HTML files directly, here's a simple step-by-step guide:

#### 1. Poster image - check your video's dimensions

Most videos nowadays are widescreen: 1280x720, 1920x1080, etc. - but what we need to know is the video's height when resized.

> If your video were to be *proportionally* resized to be 600px wide, what would its height be?

Short answer: use this [calculator](http://scriptygoddess.com/resources/proportioncalc.htm), add your video's dimensions, type 600 in the New Width field and don't fill in the New Height field. What you get in the New Height field is what we're after (we recommend usually rounding it up).

Formula:

`posterImageHeight = (videoHeight / videoWidth) x 600`

The idea is to get the ratio of your video, and then multiply it by 600, which is the width of our template. With videos in common widescreen resolutions like those mentioned above, you'll usually get 337.5. Our own HERO With Video example rounds that up to 338px - we use `600x338px` images for both the poster and the fallback background image.

#### 2. Video Source

The `<source>` tag has a `src=""` attribute that defines where the video should load from. This must be a URL pointing to the video file that you have hosted somewhere. For example:

```html
<source src="https://s3.envato.com/h264-video-previews/3a8522bd-5af4-4cbe-85a4-2b133676a05f/18148741.mp4" type="video/mp4">
```

You can use multiple `<source>` tags one right after the other, to specify different types of media.

MP4 videos will work in most of the supporting email clients, but if you want, you can add a second `<source>` tag with the video in OGG format, to support Mozilla Thunderbird and Firefox:

```html
<source src="http://techslides.com/demos/sample-videos/small.ogv" type="video/ogg">
```

<small>Note that while the video type/format is OGG, the file extension is .ogv</small>

### Other video settings

As you may know, there are [many other attributes](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video#Attributes) that you can use on the `<video>` tag. Our own products include the `controls` attribute, which shows player controls (don't remove this, as users will have no means of playing the video).

While you're free to experiment with them, we would generally advise against using the `autoplay` - most supporting email clients ignore it anyway, because it's bad user experience.

Once you're done setting up the video, you can [customise the fallback](#customisation) just as you would customise a regular HERO With Background Image.

## With Split Content

The Split HERO separates text and images into two columns.

It comes in several types:

- content left/right
    - with inline image
    - with background image
- content top left/right
- content left/right overlayed

It also has Outlook & Windows Mail background image support, but just for the main image: these email clients only support a colour fallback for the semi-transparent overlay, which you can control with the `bgcolor=""` attribute.

![HERO Split](/img/email/sartre/sections/hero-split.jpg)

## With Background Image

The 'regular' HERO section has a full width background image, overlayed with centered content.

It has background image support for most email clients (including Outlook and Windows Mail), and includes a background colour fallback for cases when the image might not be loaded. See more in [Customisation](#customisation).

![HERO With Background Image](/img/email/sartre/sections/hero-regular.jpg)

---

## Outlook Background Image Notes

### Image Sizes

For sections that support background images, it is *recommended* that you use a background image that has the dimensions of the dummy image the template provides, or double (for retina).

For retina images, make sure that they are exactly double the size in comparison to those that the template provides. For example, if a HERO uses a 600x500 image, you should use a 1400x1000 one for retina, since it's exactly two times larger.

**Important**: if you don't stick to the recommended aspect ratio, Outlook will crop your background image and may leave you with important parts of your visual message not showing up. If precision is important, we recommend sticking to the sizes of the placeholder images.

### Content Height

If you add content that increases the height of a section, note that Outlook will not increase the sections's height for you automatically. You will need to do this manually, by changing the CSS height on both the `<v:image />` and the `<v:rect>` VML tags. Outlook treats this height as fixed, so no matter the amount of content inside, this will be your HERO's height:

![HERO image content height for Outlook](/img/email/sartre/vml-height.jpg)

<div class="bg-orange-lightest border-l-4 border-orange p-4" role="alert" id="mailchimp-video-support">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">Heads Up!</p>
  <ul class="mt-4 text-md pl-4">
      <li class="text-orange-dark">Do not change the width - it will break the template in Outlook.</li>
      <li class="text-orange-dark">Do not remove the height - it will collapse and squash the section in Outlook.</li>
      <li class="text-orange-dark">Do not remove other styles/attributes/tags - it will very likely lead to the image not showing in Outlook</li>
      <li class="text-orange-dark">Except for StampReady, the online builders for which we provide an integrated version do not set this Outlook background image when using their visual editors. In such cases, you will need to manually adjust the HTML code and add the URL to your image inside the `<v:image src="..." />`. Alternatively, simply use StampReady to build your layout, export it, and then import it to your provider.</li>
  </ul>
</div>

---

## Customisation

### Inline Images

Simply change the `src=""` and `width=""` of each image. If you want use retina images, make sure your own image is twice the pixel size of the placeholder.

### Background Colour

Change the HEX colour inside `bgcolor=""` on the `<td>` wrapping the container table:

```html
<td class="px-sm-16" align="center" bgcolor="#EEEEEE">
    <table class="container" cellpadding="0" cellspacing="0" role="presentation" width="600">
        ...
    </table>
</td>
```

### Background Image

Change the image path in the inline `background-image` CSS property, and in the `src=""` of the `<v:image />` tag, for Outlook & Windows 10 Mail.

```html
<td style="background-image: url('https://dummyimage.com/1200x1000/0cbacf/000000'); ...">
    <!--[if gte mso 9]>
    <v:image src="https://dummyimage.com/1200x1000/0CBACF/000000" ... />
    [...]
</td>
```

### Top & Bottom Spacing

Change the `line-height:` value on the `<div class="spacer"`. For mobile spacer customisation, learn more about [spacers in Acorn](https://thememountain.github.io/acorn/utilities/spacing.html).

<div class="bg-blue-lightest border-l-4 border-blue p-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
  <p class="m-0 text-md text-blue-dark">Split HEROs with Overlayed content have an <code>overlay-sm-bg</code> class on the column with the background image. This allows for adding a semi-transparent background image on it, for mobile. If using such a HERO section, make sure this image's path is correctly updated in the CSS.</p>
</div>

