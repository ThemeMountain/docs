---
title: Navigation
description: Responsive and interactive HTML email navigation menus
tags: menu, links, breadcrumbs
path: acorn/components
page_order: 23
navigation:
  group: Components
---

# Menus for HTML email

Acorn comes with navigation components that make it easy to add menus to your emails.

---

## Basic

A simple table structure, where each menu item is a table cell that contains an anchor tag.

All menu items except the last one have 24px right padding. Depending on where you place the menu, you might need to adjust this in order to accomodate (more) menu items.

Menus can also be centered by using the `align-sm-center` class on the main table. In this example, we are creating an email header module by using a logo in the left column, and floating the menu to the right, for desktops and tablets. On mobile, everything gets centered:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#nav-basic-preview">Preview</a></li>
        <li><a href="#nav-basic-code">Code</a></li>
    </ul>    
    <div id="nav-basic-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/nav-basic.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 200px;"></iframe>
        </div>
    </div>
    <div id="nav-basic-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 24px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col text-sm-center pb-sm-16" width="122" style="padding: 0 8px;">
            <img src="https://picsum.photos/160/160/?image=538" alt="Logo" width="80" style="border-radius: 50%;">
          </td>
          <td class="col" align="right" width="398" style="padding: 0 8px; vertical-align: middle;">
            <table class="nav align-sm-center" cellpadding="0" cellspacing="0" role="presentation">
              <tr>
                <td class="nav-item px-sm-8" style="padding-right: 24px; display: inline-block;">
                  <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">News</a>
                </td>
                <td class="nav-item px-sm-8" style="padding-right: 24px; display: inline-block;">
                    <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">Services</a>
                </td>
                <td class="nav-item px-sm-8" style="padding-right: 24px; display: inline-block;">
                  <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">Work</a>
                </td>
                <td class="nav-item px-sm-8" style="display: inline-block;">
                  <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">Store</a>
                </td>
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

## Hamburger

Acorn also includes an awesome interactive menu, usually referred to as a _hamburger menu_.

It looks the same as the Basic Nav on desktop and tablets, but for mobile the nav items are hidden and you can reveal them by tapping on a menu icon. The menu icon is a [fluid retina image](../images/#fluid-retina) that is hidden for desktop clients and shown on mobile with a [responsive display utility](/acorn/utilities/display) class.

The hamburger navigation uses a `:hover` technique, no inputs. So you can safely use it with email service providers that don't allow form elements in your emails. Like MailChimp.

In desktop email clients that support media queries and have a narrow-enough viewport in order to trigger the responsive layout, hovering the menu icon will also reveal the menu items.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#nav-hamburger-preview">Preview</a></li>
        <li><a href="#nav-hamburger-code">Code</a></li>
    </ul>    
    <div id="nav-hamburger-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/nav-hamburger.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 340px;"></iframe>
        </div>
    </div>
    <div id="nav-hamburger-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 24px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
            <td class="col text-sm-center pb-sm-16" width="122" style="padding: 0 8px;">
                <img src="https://picsum.photos/160/160/?image=538" alt="Logo" width="80" style="border-radius: 50%;">
            </td>
            <td class="col" align="right" width="398" style="padding: 0 8px; vertical-align: middle;">
                <div>
                  <!--[if !mso 9]><!-->
                  <img src="https://i.imgur.com/RIRjWm6.png" class="toggle-trigger align-sm-center show-sm p-sm-8" aria-hidden="true" width="20" style="display: none; max-height: 0;">
                  <!--<![endif]-->
                  <div class="toggle-content">
                    <table class="nav nav-sm-vertical align-sm-center text-sm-center" cellpadding="0" cellspacing="0" role="presentation">
                      <tr>
                        <td class="nav-item px-sm-8" style="padding-right: 24px; display: inline-block;">
                          <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">News</a>
                        </td>
                        <td class="nav-item px-sm-8" style="padding-right: 24px; display: inline-block;">
                          <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">Services</a>
                        </td>
                        <td class="nav-item px-sm-8" style="padding-right: 24px; display: inline-block;">
                          <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">Work</a>
                        </td>
                        <td class="nav-item px-sm-8" style="display: inline-block;">
                          <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">Store</a>
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
            </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
```
    </div>
</div>

## Reverse Menu Items

You can use the [Reverse Stack](/acorn/utilities/reverse-stack) responsive utilities to define a custom menu item order. In the following example, we are reversing the menu items order on mobile, for a vertical mobile menu:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#nav-basic-vertical-reversed-preview">Preview</a></li>
        <li><a href="#nav-basic-vertical-reversed-code">Code</a></li>
    </ul>    
    <div id="nav-basic-vertical-reversed-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/nav-basic-vertical-reversed.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 340px;"></iframe>
        </div>
    </div>
    <div id="nav-basic-vertical-reversed-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 24px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
            <td class="col text-sm-center pb-sm-16" width="122" style="padding: 0 8px;">
                <img src="https://picsum.photos/160/160/?image=538" alt="Logo" width="80" style="border-radius: 50%;">
            </td>
            <td class="col" align="right" width="398" style="padding: 0 8px; vertical-align: middle;">
                <table class="nav nav-sm-vertical align-sm-center text-sm-center full-width-sm" cellpadding="0" cellspacing="0" role="presentation">
                  <tr class="full-width-sm">
                    <td class="nav-item px-sm-8 stack-sm-last" style="padding-right: 24px; display: inline-block;">
                      <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">News</a>
                    </td>
                    <td class="nav-item px-sm-8 stack-sm-last" style="padding-right: 24px; display: inline-block;">
                      <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">Services</a>
                    </td>
                    <td class="nav-item px-sm-8 stack-sm-first" style="padding-right: 24px; display: inline-block;">
                      <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">Work</a>
                    </td>
                    <td class="nav-item px-sm-8 stack-sm-top" style="display: inline-block;">
                      <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">Store</a>
                    </td>
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

If you need a reversed _horizontal_ menu instead, simply use the [responsive alignment utilities](/acorn/utilities/alignment) on the nav items. In this example, we also remove the `full-width-sm` classes, in order to better center the menu:

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#nav-basic-horizontal-reversed-preview">Preview</a></li>
        <li><a href="#nav-basic-horizontal-reversed-code">Code</a></li>
    </ul>    
    <div id="nav-basic-horizontal-reversed-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/nav-basic-horizontal-reversed.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 340px;"></iframe>
        </div>
    </div>
    <div id="nav-basic-horizontal-reversed-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 24px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
            <td class="col text-sm-center pb-sm-16" width="122" style="padding: 0 8px;">
                <img src="https://picsum.photos/160/160/?image=538" alt="Logo" width="80" style="border-radius: 50%;">
            </td>
            <td class="col" align="right" width="398" style="padding: 0 8px; vertical-align: middle;">
                <table class="nav nav-sm-vertical align-sm-center text-sm-center" cellpadding="0" cellspacing="0" role="presentation">
                  <tr>
                    <td class="nav-item px-sm-8 stack-sm-last align-sm-right" style="padding-right: 24px; display: inline-block;">
                      <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">News</a>
                    </td>
                    <td class="nav-item px-sm-8 stack-sm-last align-sm-right" style="padding-right: 24px; display: inline-block;">
                      <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">Services</a>
                    </td>
                    <td class="nav-item px-sm-8 stack-sm-first align-sm-right" style="padding-right: 24px; display: inline-block;">
                      <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">Work</a>
                    </td>
                    <td class="nav-item px-sm-8 stack-sm-top align-sm-right" style="display: inline-block;">
                      <a href="http://example.com" style="color: #7E95A7; font-size: 16px; text-decoration: none;">Store</a>
                    </td>
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

## CSS Reset

The `nav-sm-vertical` class may be used on the main table in order to stack menu items, instead of displaying them inline one after the other. Here is the CSS that is applied to vertical navs on mobile:

```css
.nav-sm-vertical .nav-item {display: block;}
.nav-sm-vertical .nav-item a {display: inline-block; padding: 4px 0!important;}
```

## Shared Styles

Navigation shares interactivity-related CSS with the [Accordion](../accordion). If you're not using any of these components in your emails, you can safely remove the styles that start with `.toggle-`, from the CSS inside the `@media` query:

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

## Hamburger in Gmail Apps

The Hamburger Navigation doesn't work in Gmail iOS, and in some edge cases with Gmail on Android. 

You can use the following CSS after the [navigation CSS ↑](#css-reset) in order to "reset" it to a Basic navigation only for Gmail Apps:

```css
u ~ div .toggle-trigger {display: none!important;}
u ~ div .toggle-content {max-height: none;}
u ~ div .nav-item {display: inline-block!important; padding: 0 10px!important;}
u ~ div .nav-sm-vertical .nav-item {display: block!important;}
```

<div class="bg-orange-lightest border-l-4 border-orange p-4 mb-4" role="alert">
  <div class="-mb-4 text-md text-orange-dark" markdown="1">Do keep in mind that this will reset it in _all_ Gmail apps, even where the Hamburger navigation might work.</div>
</div>


