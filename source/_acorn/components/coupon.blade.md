---
title: Coupon
description: Coupon layouts for HTML email discounts
tags: promo, discount, offer
path: acorn/components
page_order: 19
navigation:
  group: Components
---

# Add discounts to your emails

Coupons are handy, ready-made components that you can use to add discounts to your Acorn-powered emails.

---

## Dashed

Use the Dashed Coupon to show off a discount in big, bold, centered text, with a call to action. The content is surrounded by a dashed border that you can style to suit your needs, and the coupon code is made with the [Label](/acorn/components/label) component.

The discount value is coded so that it breaks vertically on very small screens.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#coupon-dashed-preview">Preview</a></li>
        <li><a href="#coupon-dashed-code">Code</a></li>
    </ul>    
    <div id="coupon-dashed-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/coupon-dashed.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 450px;"></iframe>
        </div>
    </div>    
    <div id="coupon-dashed-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 0 24px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col" align="center" width="100%" style="padding: 0 8px;">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td class="spacer py-sm-16" height="32"></td>
              </tr>
              <tr>
                <td class="px-sm-8" align="center" width="100%" style="padding: 32px; border: 4px dashed #CCCCCC; color: #000000;">
                  <table align="center" cellpadding="0" cellspacing="0" role="presentation" style="margin: 0 auto;">
                    <tr>
                      <th style="font-size: 96px; line-height: 100%; word-break: break-all;">25</th>
                      <th style="vertical-align: middle;">
                        <div style="font-size: 48px; line-height: 48px;">%</div>
                        <div style="font-size: 32px; line-height: 32px; mso-line-height-rule: exactly; mso-text-raise: 2px;">OFF</div>
                      </th>
                    </tr>
                  </table>
                  <div style="color: #999999;">With coupon <span style="border: 1px solid #EA4B35; border-radius: 3px; color: #EA4B35; display: inline-block; font-size: 90%; padding: 1px 5px;">25OFFTODAY</span></div>
                  <div class="spacer py-sm-16" style="line-height: 32px;">&zwnj;</div>
                  <table cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <th bgcolor="#000000" style="mso-padding-alt: 6px 32px 12px;">
                        <a href="http://thememountain.com" style="color: #FFFFFF; display: inline-block; font-size: 13px; line-height: 100%; padding: 12px 32px; text-decoration: none;">REDEEM COUPON &rarr;</a>
                      </th>
                    </tr>
                  </table>
                  <div class="spacer py-sm-8" style="line-height: 16px;">&zwnj;</div>
                </td>
              </tr>
              <tr>
                <td class="spacer py-sm-16" height="32"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```
    </div>
</div>

## Filled

Filled Coupons have a solid background colour, and a 1px border outline. You can customise the background, text, and call to action so that they stand out, like in our example:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#coupon-filled-preview">Preview</a></li>
        <li><a href="#coupon-filled-code">Code</a></li>
    </ul>    
    <div id="coupon-filled-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/coupon-filled.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 400px;"></iframe>
        </div>
    </div>    
    <div id="coupon-filled-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="p-sm-16" bgcolor="#008DF6" width="100%" style="padding: 32px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col p-sm-16" align="center" width="100%" style="padding: 32px; border: 1px solid #FFFFFF; color: #FFFFFF;">
            <div style="font-size: 13px; text-transform: uppercase;">Thanks for signing up!<br>Enjoy</div>
            <div style="font-size: 72px; font-weight: 700; line-height: 100%;">$10 OFF</div>
            <div class="spacer py-sm-8" style="line-height: 16px;">&zwnj;</div>
            <div style="font-size: 20px; letter-spacing: 2px; line-height: 100%; text-transform: uppercase;">Your first order</div>
            <div class="spacer py-sm-16" style="line-height: 32px;">&zwnj;</div>
            <table cellpadding="0" cellspacing="0" role="presentation">
              <tr>
                <th bgcolor="#FFFFFF" style="mso-padding-alt: 6px 32px 12px;">
                  <a href="http://thememountain.com" style="color: #008DF6; display: inline-block; font-size: 13px; line-height: 100%; padding: 12px 32px; text-decoration: none;">SHOP NOW</a>
                </th>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```
    </div>
</div>

## With Image

This variation allows you to include an image next to the coupon itself - maybe this coupon is for a specific product? The image in our example is a [Fluid Retina Image](../../acorn/images/#fluid-retina) that will not expand beyond its natural width.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#coupon-image-preview">Preview</a></li>
        <li><a href="#coupon-image-code">Code</a></li>
    </ul>    
    <div id="coupon-image-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/coupon-image.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 640px;"></iframe>
        </div>
    </div>    
    <div id="coupon-image-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td class="spacer py-sm-16" height="32"></td>
  </tr>
  <tr>
    <td style="padding: 0 24px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col pb-sm-16" width="260" style="padding: 0 8px;">
            <img src="https://picsum.photos/520/520?image=1062" class="align-sm-center" width="260" alt="Coupon Image">
          </td>
          <td class="col pt-sm-16" width="260" style="padding: 0 8px;">
            <table class="full-width-sm align-sm-center" cellpadding="0" cellspacing="0" role="presentation" width="260">
              <tr>
                <td align="center" width="100%" style="padding: 16px 8px; border: 3px dashed #CCCCCC; color: #000000;">
                  <div class="spacer py-sm-16" style="line-height: 32px;">&zwnj;</div>
                  <div style="color: #999999; font-size: 13px; margin-bottom: 10px; line-height: 13px; text-transform: uppercase;">Mondays suck, so</div>
                  <div style="font-size: 32px; font-weight: 700; line-height: 40px;">Get $25 OFF</div>
                  <div style="color: #999999; font-size: 13px; margin-bottom: 30px; text-transform: uppercase;">Your next order</div>
                  <table cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <th bgcolor="#4C4054" style="mso-padding-alt: 4px 24px 8px;">
                        <a href="http://thememountain.com" target="_blank" style="color: #FFFFFF; display: block; font-size: 13px; padding: 8px 24px; text-decoration: none;">REDEEM COUPON &rarr;</a>
                      </th>
                    </tr>
                  </table>
                  <div class="spacer py-sm-16" style="line-height: 32px;">&zwnj;</div>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
  <tr>
    <td class="spacer py-sm-16" height="32"></td>
  </tr>
</table>
```
    </div>
</div>
