---
title: Accordion
description: Interactive accordion for email
tags: accordion, toggle, interactive
path: acorn/components
page_order: 16
navigation:
  group: Components
---

# Make room in your emails with a familiar component

Accordions in Acorn are meant for mobile devices, and they work similar to their website counterparts. For desktop and web email clients, the accordion content will be visible.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#accordion-preview">Preview</a></li>
        <li><a href="#accordion-code">Code</a></li>
    </ul>    
    <div id="accordion-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/accordion.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 800px;"></iframe>
        </div>
    </div>    
    <div id="accordion-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 0 24px;">
      <div class="spacer py-sm-16" style="line-height: 32px;">&zwnj;</div>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col" width="100%" style="padding: 0 8px;">
            <div style="margin-bottom: 24px;">
              <a class="toggle-trigger" style="text-decoration: none;">
                <button class="toggle-trigger" style="background-color: #EEEEEE; margin: 0; padding: 0; display: block; width: 100%; text-align: left; border: none; outline: none; font-size: 13px;">
                  <table bgcolor="#EEEEEE" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                    <tr>
                      <td style="padding: 16px;">Panel title</td>
                    </tr>
                  </table>
                </button>
              </a>
              <div class="toggle-content">
                <table cellpadding="0" cellspacing="0" role="presentation" width="100%" style="border: 1px solid #EEEEEE;">
                  <tr>
                    <td style="padding: 16px;">
                      <h2 style="font-size: 26px;">Lorem ipsum dolor</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
            <div>
              <a class="toggle-trigger" style="text-decoration: none;">
                <button class="toggle-trigger" style="background-color: #EEEEEE; margin: 0; padding: 0; display: block; width: 100%; text-align: left; border: none; outline: none; font-size: 13px;">
                  <table bgcolor="#EEEEEE" cellpadding="0" cellspacing="0" role="presentation" width="100%">
                    <tr>
                      <td style="padding: 16px;">Panel title</td>
                    </tr>
                  </table>
                </button>
              </a>
              <div class="toggle-content">
                <table cellpadding="0" cellspacing="0" width="100%" role="presentation" style="border: 1px solid #EEEEEE;">
                  <tr>
                    <td style="padding: 16px;">
                      <h2 style="font-size: 26px;">Lorem ipsum dolor</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </td>
                  </tr>
                </table>
              </div>
            </div>
          </td>
        </tr>
      </table>
      <div class="spacer py-sm-16" style="line-height: 32px;">&zwnj;</div>
    </td>
  </tr>
</table>
```
    </div>
</div>

## Shared Styles

Accordions need some CSS for mobile, which is included in Acorn's boilerplate. This CSS is shared with [hamburger menus](../components/navigation/#hamburger), so if you don't use accordions and hamburger menus at all in your email you can safely delete the following associated styles:

```css
.toggle-content {
  max-height: 0;
  overflow: auto;
  transition: max-height .4s linear;
  -webkit-transition: max-height .4s linear;
}
.toggle-trigger:hover + .toggle-content,
.toggle-content:hover {max-height: 999px!important;}
```

## Compatibility

Accordions in Acorn use a `<button>` tags and CSS `:hover` combination, to provide decent client support while not having you worry about unique checkbox IDs and repeated styles.

However, do note that [only a few email clients support `:hover`](https://www.campaignmonitor.com/css/selectors/hover/). In addition to that, some email service providers, like MailChimp, do not allow form elements (which is what buttons are), so remember to always test.
