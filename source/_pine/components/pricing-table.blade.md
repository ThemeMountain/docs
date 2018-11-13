---
title: Pricing Tables
description: Responsive pricing table modules for HTML email
tags: plan, pricing, subscription
path: pine/components
page_order: 24
navigation:
  group: Components
  title: Pricing Table
---

# Got plans to display pricing in email?

Although we call them Pricing Tables, you can use this component for lots of things: subscriptions, plans, levels, and so on. 
Pine comes with two and three-column pricing tables, each with a boxed and full-width version.

---

## 2 Columns - Boxed {#two-col-boxed}

When we say 'boxed pricing table', we mean it has 24px apparent padding on each side. 
It comes with call-to-action buttons that are placed outside the pricing tables themselves. On mobile, the columns will stack.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#pricing-2-col-boxed-preview">Preview</a></li>
        <li><a href="#pricing-2-col-boxed-code">Code</a></li>
    </ul>    
    <div id="pricing-2-col-boxed-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/pine/includes/components/pricing-2-col-boxed.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 592px;"></iframe>
        </div>
    </div>
    <div id="pricing-2-col-boxed-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 0 20px;">
      <div class="spacer" style="line-height: 30px;">&zwnj;</div>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col pb-sm-30" align="center" width="310" style="padding: 0 10px;">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td align="center" style="padding: 30px 0; color: #666666; font-size: 14px; line-height: 45px;">
                  <div style="color: #000000; font-size: 15px; font-weight: 700; margin-bottom: 15px;">Free Edition</div>
                  <div style="color: #000000; font-size: 45px; margin-bottom: 15px;"><span style="font-size: 16px; mso-text-raise: 75%; vertical-align: text-top;">$</span>0</div>
                  <div><strong>10GB</strong> Cloud Storage</div>
                  <div><strong>5</strong> Galleries</div>
                  <div><strong>0</strong> Add Ons</div>
                  <div><strong>0</strong> Personalized Domains</div>
                </td>
              </tr>
            </table>
            <div class="spacer py-sm-10" style="line-height: 40px;">&zwnj;</div>
            <table cellpadding="0" cellspacing="0" role="presentation">
              <tr>
                <th style="border: 1px solid #000000; line-height: 100%; mso-padding-alt: 4px 30px 8px;">
                  <a href="http://thememountain.com" style="color: #000000; display: block; font-size: 13px; padding: 8px 30px; text-decoration: none;">Sign Up</a>
                </th>
              </tr>
            </table>
          </td>
          <td class="col" align="center" width="310" style="padding: 0 10px;">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td align="center" bgcolor="#933DED" style="padding: 30px 0; color: #FFFFFF; font-size: 14px; line-height: 45px;">
                  <div style="font-size: 15px; font-weight: 700; margin-bottom: 15px;">Pro Edition</div>
                  <div style="font-size: 45px; margin-bottom: 15px;"><span style="font-size: 16px; mso-text-raise: 75%; vertical-align: text-top;">$</span>6.95</div>
                  <div><strong>20GB</strong> Cloud Storage</div>
                  <div><strong>10</strong> Galleries</div>
                  <div><strong>100</strong> Add Ons</div>
                  <div><strong>1</strong> Personalized Domain</div>
                </td>
              </tr>
            </table>
            <div class="spacer py-sm-10" style="line-height: 40px;">&zwnj;</div>
            <table cellpadding="0" cellspacing="0" role="presentation">
              <tr>
                <th style="border: 1px solid #000000; line-height: 100%; mso-padding-alt: 4px 30px 8px;">
                  <a href="http://thememountain.com" style="color: #000000; display: block; font-size: 13px; padding: 8px 30px; text-decoration: none;">Sign Up</a>
                </th>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <div class="spacer pb-sm-30" style="line-height: 30px;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>

## 3 Columns - Boxed {#three-col-boxed}

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#pricing-3-col-boxed-preview">Preview</a></li>
        <li><a href="#pricing-3-col-boxed-code">Code</a></li>
    </ul>    
    <div id="pricing-3-col-boxed-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/pine/includes/components/pricing-3-col-boxed.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 640px;"></iframe>
        </div>
    </div>
    <div id="pricing-3-col-boxed-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 0 30px;">
      <div class="spacer" style="line-height: 30px;">&zwnj;</div>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col" align="center" width="200">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td align="center" style="padding: 30px 0; color: #666666; font-size: 14px; line-height: 45px;">
                  <div style="color: #000000; font-size: 15px; font-weight: 700; margin-bottom: 15px;">Starter Edition</div>
                  <div style="color: #000000; font-size: 45px;"><span style="font-size: 16px; mso-text-raise: 75%; vertical-align: text-top;">$</span>2.99</div>
                  <div style="color: #CCCCCC; font-size: 15px; line-height: 100%; margin-bottom: 15px;">/MO</div>
                  <div>LowFi Sound Quality</div>
                  <div>Online Listening</div>
                  <div>Advertising</div>
                  <div>-</div>
                  <div>-</div>
                  <div class="spacer py-sm-10" style="line-height: 30px;">&zwnj;</div>
                  <table cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <th style="border: 1px solid #933DED; line-height: 100%; mso-padding-alt: 4px 30px 8px;">
                        <a href="http://thememountain.com" style="color: #933DED; display: block; font-size: 13px; padding: 8px 30px; text-decoration: none;">Sign Up</a>
                      </th>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
          <td class="col" align="center" width="200">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td align="center" bgcolor="#933DED" style="padding: 30px 0; color: #FFFFFF; font-size: 14px; line-height: 45px;">
                  <div style="font-size: 15px; font-weight: 700; margin-bottom: 15px;">Premium Edition</div>
                  <div style="font-size: 45px;"><span style="font-size: 16px; mso-text-raise: 75%; vertical-align: text-top;">$</span>9.99</div>
                  <div style="color: #CCCCCC; font-size: 15px; line-height: 100%; margin-bottom: 15px;">/MO</div>
                  <div>HiFi Sound Quality</div>
                  <div>Online/Offline Listening</div>
                  <div>No Advertising</div>
                  <div>-</div>
                  <div>-</div>
                  <div class="spacer py-sm-10" style="line-height: 30px;">&zwnj;</div>
                  <table cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <th style="border: 1px solid #FFFFFF; line-height: 100%; mso-padding-alt: 4px 30px 8px;">
                        <a href="http://thememountain.com" style="color: #FFFFFF; display: block; font-size: 13px; padding: 8px 30px; text-decoration: none;">Sign Up</a>
                      </th>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
          <td class="col" align="center" width="200">
            <table cellpadding="0" cellspacing="0" role="presentation" style="width: 100%;">
              <tr>
                <td align="center" style="padding: 30px 0; color: #666666; font-size: 14px; line-height: 45px;">
                  <div style="color: #000000; font-size: 15px; font-weight: 700; margin-bottom: 15px;">Pro Edition</div>
                  <div style="color: #000000; font-size: 45px;"><span style="font-size: 16px; mso-text-raise: 75%; vertical-align: text-top;">$</span>19.99</div>
                  <div style="color: #CCCCCC; font-size: 15px; line-height: 100%; margin-bottom: 15px;">/MO</div>
                  <div>HiFi Sound Quality</div>
                  <div>On/Offline Listening</div>
                  <div>No Advertising</div>
                  <div>Infinite Song Plays</div>
                  <div>300K Video Plays</div>
                  <div class="spacer py-sm-10" style="line-height: 30px;">&zwnj;</div>
                  <table cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <th style="border: 1px solid #933DED; line-height: 100%; mso-padding-alt: 4px 30px 8px;">
                        <a href="http://thememountain.com" style="color: #933DED; display: block; font-size: 13px; padding: 8px 30px; text-decoration: none;">Sign Up</a>
                      </th>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <div class="spacer pb-sm-30" style="line-height: 30px;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>

### Full Width Variations {.text-xl}

In case you need more space for content, you can opt for the Full Width variations. These are the same layouts, only that container padding and column gutters are removed, to allow for wider columns.

## 2 Columns - Full Width {#two-col-full-width}

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#pricing-2-col-full-width-preview">Preview</a></li>
        <li><a href="#pricing-2-col-full-width-code">Code</a></li>
    </ul>    
    <div id="pricing-2-col-full-width-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/pine/includes/components/pricing-2-col-full-width.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 592px;"></iframe>
        </div>
    </div>
    <div id="pricing-2-col-full-width-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td>
      <div class="spacer" style="line-height: 30px;">&zwnj;</div>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col pb-sm-30" align="center" width="350">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td align="center" class="pb-sm-0" style="padding: 30px 0; color: #666666; font-size: 14px; line-height: 45px;">
                  <div style="color: #000000; font-size: 15px; font-weight: 700; margin-bottom: 15px;">Free Edition</div>
                  <div style="color: #000000; font-size: 45px; margin-bottom: 15px;"><span style="font-size: 16px; mso-text-raise: 75%; vertical-align: text-top;">$</span>0</div>
                  <div><strong>10GB</strong> Cloud Storage</div>
                  <div><strong>5</strong> Galleries</div>
                  <div><strong>0</strong> Add Ons</div>
                  <div><strong>0</strong> Personalized Domains</div>
                </td>
              </tr>
            </table>
            <div class="spacer py-sm-10" style="line-height: 40px;">&zwnj;</div>
            <table cellpadding="0" cellspacing="0" role="presentation">
              <tr>
                <th style="border: 1px solid #000000; line-height: 100%; mso-padding-alt: 4px 30px 8px;">
                  <a href="http://thememountain.com" style="color: #000000; display: block; font-size: 13px; padding: 8px 30px; text-decoration: none;">Sign Up</a>
                </th>
              </tr>
            </table>
          </td>
          <td class="col" align="center" width="350">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td align="center" bgcolor="#933DED" style="padding: 30px 0; color: #FFFFFF; font-size: 14px; line-height: 45px;">
                  <div style="font-size: 15px; font-weight: 700; margin-bottom: 15px;">Pro Edition</div>
                  <div style="font-size: 45px; margin-bottom: 15px;"><span style="font-size: 16px; mso-text-raise: 75%; vertical-align: text-top;">$</span>6.95</div>
                  <div><strong>20GB</strong> Cloud Storage</div>
                  <div><strong>10</strong> Galleries</div>
                  <div><strong>100</strong> Add Ons</div>
                  <div><strong>1</strong> Personalized Domain</div>
                </td>
              </tr>
            </table>
            <div class="spacer py-sm-10" style="line-height: 40px;">&zwnj;</div>
            <table cellpadding="0" cellspacing="0" role="presentation">
              <tr>
                <th style="border: 1px solid #000000; line-height: 100%; mso-padding-alt: 4px 30px 8px;">
                  <a href="http://thememountain.com" style="color: #000000; display: block; font-size: 13px; padding: 8px 30px; text-decoration: none;">Sign Up</a>
                </th>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <div class="spacer pb-sm-30" style="line-height: 30px;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>

## 3 Columns - Full Width {#three-col-full-width}

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#pricing-3-col-full-width-preview">Preview</a></li>
        <li><a href="#pricing-3-col-full-width-code">Code</a></li>
    </ul>    
    <div id="pricing-3-col-full-width-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/pine/includes/components/pricing-3-col-full-width.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 650px;"></iframe>
        </div>
    </div>
    <div id="pricing-3-col-full-width-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td>
      <div class="spacer" style="line-height: 30px;">&zwnj;</div>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col" align="center" width="220">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td align="center" style="padding: 30px 0; color: #666666; font-size: 14px; line-height: 45px;">
                  <div style="color: #000000; font-size: 15px; font-weight: 700; margin-bottom: 15px;">Starter Edition</div>
                  <div style="color: #000000; font-size: 45px;"><span style="font-size: 16px; mso-text-raise: 75%; vertical-align: text-top;">$</span>2.99</div>
                  <div style="color: #CCCCCC; font-size: 15px; line-height: 100%; margin-bottom: 15px;">/MO</div>
                  <div>LowFi Sound Quality</div>
                  <div>Online Listening</div>
                  <div>Advertising</div>
                  <div>-</div>
                  <div>-</div>
                  <div class="spacer py-sm-10" style="line-height: 30px;">&zwnj;</div>
                  <table cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <th style="border: 1px solid #933DED; line-height: 100%; mso-padding-alt: 4px 30px 8px;">
                        <a href="http://thememountain.com" style="color: #933DED; display: block; font-size: 13px; padding: 8px 30px; text-decoration: none;">Sign Up</a>
                      </th>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
          <td class="col" align="center" width="260">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td align="center" bgcolor="#933DED" style="padding: 30px 0; color: #FFFFFF; font-size: 14px; line-height: 45px;">
                  <div style="font-size: 15px; font-weight: 700; margin-bottom: 15px;">Premium Edition</div>
                  <div style="font-size: 45px;"><span style="font-size: 16px; mso-text-raise: 75%; vertical-align: text-top;">$</span>9.99</div>
                  <div style="color: #CCCCCC; font-size: 15px; line-height: 100%; margin-bottom: 15px;">/MO</div>
                  <div>HiFi Sound Quality</div>
                  <div>Online/Offline Listening</div>
                  <div>No Advertising</div>
                  <div>-</div>
                  <div>-</div>
                  <div class="spacer py-sm-10" style="line-height: 30px;">&zwnj;</div>
                  <table cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <th style="border: 1px solid #FFFFFF; line-height: 100%; mso-padding-alt: 4px 30px 8px;">
                        <a href="http://thememountain.com" style="color: #FFFFFF; display: block; font-size: 13px; padding: 8px 30px; text-decoration: none;">Sign Up</a>
                      </th>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
          <td class="col" align="center" width="220">
            <table cellpadding="0" cellspacing="0" role="presentation" style="width: 100%;">
              <tr>
                <td align="center" style="padding: 30px 0; color: #666666; font-size: 14px; line-height: 45px;">
                  <div style="color: #000000; font-size: 15px; font-weight: 700; margin-bottom: 15px;">Pro Edition</div>
                  <div style="color: #000000; font-size: 45px;"><span style="font-size: 16px; mso-text-raise: 75%; vertical-align: text-top;">$</span>19.99</div>
                  <div style="color: #CCCCCC; font-size: 15px; line-height: 100%; margin-bottom: 15px;">/MO</div>
                  <div>HiFi Sound Quality</div>
                  <div>On/Offline Listening</div>
                  <div>No Advertising</div>
                  <div>Infinite Song Plays</div>
                  <div>300K Video Plays</div>
                  <div class="spacer py-sm-10" style="line-height: 30px;">&zwnj;</div>
                  <table cellpadding="0" cellspacing="0" role="presentation">
                    <tr>
                      <th style="border: 1px solid #933DED; line-height: 100%; mso-padding-alt: 4px 30px 8px;">
                        <a href="http://thememountain.com" style="color: #933DED; display: block; font-size: 13px; padding: 8px 30px; text-decoration: none;">Sign Up</a>
                      </th>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <div class="spacer pb-sm-30" style="line-height: 30px;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>
