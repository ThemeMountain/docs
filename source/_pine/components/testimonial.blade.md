---
title: Testimonial
description: User reviews and quotes for HTML emails
tags: quote, review, cite
path: acorn/components
page_order: 27
navigation:
  group: Components
---

# Add reviews or client testimonials to your emails

The Testimonial in Acorn comes in very handy when you need to add a quote or user message to your emails.

---

## Avatar

Centered, with a user avatar image and some text.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#testimonial-avatar-preview">Preview</a></li>
        <li><a href="#testimonial-avatar-code">Code</a></li>
    </ul>    
    <div id="testimonial-avatar-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/testimonial-avatar.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 350px;"></iframe>
        </div>
    </div>
    <div id="testimonial-avatar-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="px-sm-16" style="padding: 0 100px;">
      <div class="spacer" style="line-height: 40px; height: 40px!important;">&zwnj;</div>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col px-sm-16" align="center" width="100%">
            <img src="https://i.imgur.com/pX1z2AY.png" width="50" alt="Avatar">
            <h3 style="font-weight: 300; font-style: italic;">Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations.</h3>
            <small style="color: #969AA1; text-transform: uppercase;">Steve Jobs</small>
          </td>
        </tr>
      </table>
      <div class="spacer" style="line-height: 40px; height: 40px!important;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>

## Border

Simple, with left-aligned text, and a thin border on the left.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#testimonial-border-preview">Preview</a></li>
        <li><a href="#testimonial-border-code">Code</a></li>
    </ul>    
    <div id="testimonial-border-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/testimonial-border.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 300px;"></iframe>
        </div>
    </div>
    <div id="testimonial-border-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="px-sm-16" style="padding: 0 60px;">
      <div class="spacer" style="line-height: 40px; height: 40px!important;">&zwnj;</div>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col pl-sm-16" width="100%" style="border-left: 1px solid #EEEEEE; padding-left: 30px;">
            <h3 style="font-weight: 500; font-style: italic; margin-top: 0;">Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations.</h3>
            <small style="color: #969AA1; text-transform: uppercase;">Steve Jobs</small>
          </td>
        </tr>
      </table>
      <div class="spacer" style="line-height: 40px; height: 40px!important;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>

## Icon

Similar to the previous one, this Testimonial removes the left border in favour of a quote icon.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#testimonial-icon-preview">Preview</a></li>
        <li><a href="#testimonial-icon-code">Code</a></li>
    </ul>    
    <div id="testimonial-icon-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/testimonial-icon.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 320px;"></iframe>
        </div>
    </div>
    <div id="testimonial-icon-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 0 24px;">
      <div class="spacer" style="line-height: 40px; height: 40px!important;">&zwnj;</div>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col" width="100%" style="padding: 0 8px;">
            <img src="https://i.imgur.com/U1j9njD.png" alt="Quote" width="33">
            <h3 style="font-weight: 500; font-style: italic;">Sometimes when you innovate, you make mistakes. It is best to admit them quickly, and get on with improving your other innovations.</h3>
            <small style="color: #969AA1; text-transform: uppercase;">Steve Jobs</small>
          </td>
        </tr>
      </table>
      <div class="spacer" style="line-height: 40px; height: 40px!important;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>
