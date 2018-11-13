---
title: Hero
description: HERO Sections in Kant Email
tags: hero, background, play, video
page_order: 9
navigation:
  group: Sections
  title: HERO
---

# Large & bold. Bulletproof background images.

A HERO section is a great way to draw attention to key information, an image or a product, by using 
bold imagery that works in almost any email client. Kant Email comes with several variations:

- With Background Image
- Split Content
- With Video

---

## With Background Image

This HERO section has a full width background image, overlayed with centered, editable content.

It has background image support for most email clients (including Outlook and Windows Mail), 
and includes a background colour fallback for cases when the image might not be loaded. 
See more in [Customisation](#customisation).

![HERO With Background Image](/img/email/kant/sections/thumbs/hero-1.jpg)

## With Split Content

The Split HERO separates text and images into two columns that switch to a stacked layout on mobile.

It comes in several types:

- Content Left/Right
    - With Background Image
- Content Top Left/Right
- Content Left/Right Overlayed

It also has Outlook & Windows Mail background image support, but just for the main image: 
these email clients only support a colour fallback for the semi-transparent overlay, 
which you can control with the `bgcolor=""` attribute.

![HERO Split](/img/email/kant/sections/thumbs/hero-split-content-left.jpg)
<div markdown="1"><a href="../sections-reference/#hero-split">See all variations of the HERO Split section &rarr;</a></div>

## With Video

<img src="/img/email/kant/sections/thumbs/kant-video-hero-iphone.jpg" alt="HERO With Video on iPhone" width="300" class="table mx-auto md:float-right mb-4 md:ml-4 md:p-4">

The HERO With Video allows you to use HTML5 video in your email campaigns, all while 
providing a very solid fallback for clients that do not support video in email.

In our tests, the following clients have played the video:

- iPhone (iOS Mail)
- iPad (iOS Mail)
- Apple Mail
- Outlook on Mac
- Thunderbird
- Android Default Email Client (in most cases)

In supporting email clients, the video will show a play button.

When you play the video, most of these clients will automatically start playing the video in fullscreen. 
Although there is a `playsinline` attribute that you can add to the `<video>` tag, iPhone for example 
ignores it and still goes fullscreen.

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4 md:mt-12" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
  <p class="m-0 text-md text-blue-dark">Currently, no online email builder provides a visual way of editing HTML5 video sections. You will need to edit HTML in order to customise it, so please read on.</p>
</div>

### How it works

The HERO With Video contains a `<video>` tag, inside which we add a `<source>` tag for defining the source of the video. 
    The `<video>` tag also has a `poster=""` attribute that defines what image is shown before playing the video.

Then, whatever HTML we use after the `<source>` tag, will be our fallback content that will show up in email clients that 
do not support HTML5 video. In Sartre Email, we use a regular HERO With Background Image as the fallback, so you 
still get to see rich, editable content that users can interact with (for example, editable text and a "Play" 
button that can be linked to a YouTube video).

Since all our HERO sections have support for background images in Outlook and Windows Mail, you can use this fallback to 
show the same poster image, or a different image in email clients that can't play the video. In fact, you could even 
take it a step further, and use an animated GIF as the fallback background image (maybe a few frames from the 
beginning of your video?).

![HERO With Video Fallback Content](/img/email/kant/sections/thumbs/hero-4.jpg)

<div markdown="1">_Above: example fallback content for HERO With Video, that will be shown in clients such as Outlook or Gmail_.</div>

### Video HERO Editing

Since no email builder can do it for you, you will need to edit the HTML yourself.

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert" id="mailchimp-video-support">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">MailChimp and Video Emails</p>
  <p class="m-0 text-md text-orange-dark">MailChimp currently does not support HTML5 video, it completely strips out the necessary tags when you import the template. Because of this, our MailChimp integration does not include the HERO With Video that uses HTML5 video (note: StampReady → MailChimp will not work either). Instead, the Video Agency template provides a regular HERO. 

  If you want to send an email with HTML5 video, don't plan on using MailChimp, as it is not currently possible.</p>
</div>

For Campaign Monitor, you will need to edit the all-in-one HTML file before uploading it, 
as their editor provides no way of editing the template's HTML code.

If you're going to edit HTML files directly, here's a simple step-by-step guide:

#### 1. Poster image - check your video's dimensions

Most videos nowadays are widescreen: 1280x720, 1920x1080, etc. - but what we need to know is the video's height when resized.

> If your video were to be *proportionally* resized to be 600px wide, what would its height be?

Short answer: use this [calculator](http://scriptygoddess.com/resources/proportioncalc.htm), add your video's dimensions, 
type 600 in the New Width field and don't fill in the New Height field. What you get in the New Height field is what 
we're after (we recommend usually rounding it up).

Formula:

`posterImageHeight = (videoHeight / videoWidth) x 600`

The idea is to get the ratio of your video, and then multiply it by 600, which is the width of our template. 
With videos in common widescreen resolutions like those mentioned above, you'll usually get 337.5. 
Our own HERO With Video example rounds that up to 338px - we use `600x338px` images for both 
the poster and the fallback background image.

#### 2. Video Source

The `<source>` tag has a `src=""` attribute that defines where the video should load from. This must be 
a URL pointing to the video file that you have hosted somewhere. For example:

```html
<source src="https://s3.envato.com/h264-video-previews/8c15056c-f771-47e6-a6b6-45e90bccdd26/1749392.mp4" type="video/mp4">
```

You can use multiple `<source>` tags one right after the other, to specify different types of media.

MP4 videos will work in most of the supporting email clients, but if you want, you can add a second 
`<source>` tag with the video in OGG format, to support Mozilla Thunderbird and Firefox:

```html
<source src="http://techslides.com/demos/sample-videos/small.ogv" type="video/ogg">
```

<small>Note that while the video type/format is OGG, the file extension is .ogv</small>

### Other video settings

As you may know, there are [many other attributes](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/video#Attributes) 
that you can use on the `<video>` tag. Our own products include the `controls` attribute, which shows player controls 
(don't remove this, as users will have no means of playing the video).

While you're free to experiment with them, we would generally advise against using the `autoplay` - most supporting 
email clients ignore it anyway, because it's bad user experience.

Once you're done setting up the video, you can [customise the fallback](#customisation) 
just as you would customise a regular HERO With Background Image.

---

## Customisation

### Inline Images

Simply change the `src=""` and `width=""` of each image. If you want use retina images, 
make sure your own image is twice the pixel size of the placeholder.

### Background Colour

Change the HEX colour inside `bgcolor=""` on the `<td>`'s:

```html
<th class="column mobile-12" width="700" bgcolor="#3FB58B" background="https://dummyimage.com/700x500/3FB58B/000" style="background-repeat: no-repeat; background-position: center; background-size: cover;">
  ...
</th>
```

When using the integrated versions, such as MailChimp or StampReady, you need not worry about this: controls for changing them are provided through their UI.

### Background Image

Change the image path in the `background=""` HTML attribute, and in the `src=""` of the `<v:image />` tag, for Outlook & Windows 10 Mail.

```html
<th class="column mobile-12" width="700" bgcolor="#3FB58B" background="https://dummyimage.com/700x500/3FB58B/000" style="background-repeat: no-repeat; background-position: center; background-size: cover;">
  <!--[if gte mso 9]>
  <v:image src="https://dummyimage.com/700x500/3FB58B/000" style="width:700px;height:500px;" />
  <v:rect fill="true" stroke="false" style="position:absolute;width:700px;height:500px;">
  <v:fill opacity="0">
  <div>
  <![endif]-->
  ...
  <!--[if gte mso 9]></div></v:fill></v:rect><![endif]-->
</th>
```

### Top & Bottom Spacing

Change the `font-size` and `line-height:` value on the `<div class="spacer">`. For example, here's the one in HERO 1:

```html
<div class="spacer" style="font-size: 143px; line-height: 143px; mso-line-height-rule: exactly;">&nbsp;</div>
```

On mobile, these spacers are reset to be 30px high. You can change that in the embedded CSS:

```css
.spacer {height: 30px; line-height: 100% !important; font-size: 100% !important;}
```

The top and bottom spacers for HEROs are very important, as they control the height of the section. 
If this height is bigger than your background image's height, the image will try to cover it, 
resulting in a lower quality and parts of it not showing. This doesn't affect Outlook though, 
as this client will use the value in the `height` styles set on the VML tags.

---

## Limitations & Other Notes

### HERO Split Semi-transparent Overlay

Split HEROs with Overlayed content have an `overlay-bg` class on the column with the "play" button. 
This allows for adding a semi-transparent background image on it, for mobile. 

If you want this to be something else than the default, you need to edit it manually in the CSS from the `<head>`, 
and point it to an image URL of your choosing:

```html
.overlay-bg {background-image: url('../../images/overlay-dark.png');}
```

### Outlook Background Images

When using background images in Outlook, there are a few caveats that you need to be aware of.

#### Image Sizes {#outlook-bg-image-size}

For sections that support background images, it is *recommended* that you use a background image that has 
the dimensions of the dummy image the template provides, or double (for retina).

For retina images, make sure that they are exactly double the size in comparison to those that the template 
provides. For example, if a HERO uses a 700x500 image, you should use a 1400x1000 one for retina, 
since it's exactly two times larger.

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-orange-dark">Important</p>
  <p class="m-0 text-md text-orange-dark">If you don't stick to the recommended aspect ratio, Outlook will crop or stretch your background image and may leave you with important parts of your visual message not showing up, or show a distorted image. If precision is important, we recommend sticking to the sizes of the placeholder images.</p>
</div>

#### Content Height {#outlook-bg-image-content-height}

If you add content that increases the height of a section, note that Outlook will not increase the sections' height for you automatically. 
You will need to do this manually, by changing the CSS height on both the `<v:image />` and the `<v:rect>` VML tags. 
Outlook treats this height as fixed, so no matter the amount of content inside, this will be your HERO's height:

```html
<th class="column mobile-12" width="700" bgcolor="#3FB58B" background="https://dummyimage.com/700x500/3FB58B/000" style="background-repeat: no-repeat; background-position: center; background-size: cover;">
  <!--[if gte mso 9]>
  <v:image src="https://dummyimage.com/700x500/3FB58B/000" style="width:700px;height:500px;" />
  <v:rect fill="true" stroke="false" style="position:absolute;width:700px;height:500px;">
  <v:fill opacity="0">
  <div>
  <![endif]-->
```

<div class="bg-blue-lightest text-blue-dark border-l-4 border-blue p-4 mt-8" role="alert" id="vml-notes">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Heads Up!</p>
  <div class="mt-4 text-md pl-4 -ml-6" markdown="1">
  - Don't change the <code>&lt;v:image /&gt;</code> or <code>&lt;v:rect&gt;</code> width style - it will break the template in Outlook.
  - Don't remove the <code>&lt;v:image /&gt;</code> or <code>&lt;v:rect&gt;</code> height - it will collapse and squash the section.
  - Don't remove other styles/attributes/tags - the section will very likely stop rendering properly.
  - Except for Mailster and StampReady, the online builders for which we provide an integrated version do not update the VML code for Outlook background images when using their visual editors. In such cases, you will need to manually adjust the HTML code and add the URL to your image inside the <code>&lt;v:image src="..." /&gt;</code>. Alternatively, simply use StampReady to build your layout, export it, and then import it to your provider.
  </div>
</div>

