---
title: File Structure
description: How the template is organised
tags: files, structure, organization
page_order: 2
navigation:
  group: Getting Started
  order: 2
---

# How the template is organised

The product has the following folder structure:

@filetree
- Documentation
- [Files](#)
    - [campaign-monitor](#)
        - all-in-one
        - components
        - grid
        - layout
        - sections
    - [html](#)
        - components
        - grid
        - layout
        - [templates](#)
            - marketing
            - notifications
    - images
    - [mailchimp](#)
        - all-in-one
        - components
        - grid
        - layout
    - shopify
    - [stampready](#)
        - all-in-one
        - components
        - grid
        - layout
        - sections
    - [mailster](#)
        - all-in-one
        - components
        - grid
        - layout
        - sections
- PSD
@endfiletree

Notes:

<div class="-ml-6" markdown="1">
1. HTML version doesn't have an all-in-one, pre-built layouts are provided instead.
3. The `shopify` folder contains only the pre-built, Shopify-integrated templates.
</div>
---

## Boilerplate

If you're into coding, the product offers a boilerplate layout file inside the `layout` folder, 
which you can use as a base for your custom email templates, by copying sections from the `sections` folder, one on top of each other.

This file contains meta tags and CSS in the `<head>`. Much of it is needed, but some parts (like menu styles) are optional. 
If you want to remove certain styles because you're not using the sections they're meant for, 
or if you want to customise them further, we recommend using [EmailComb](https://emailcomb.com/) to clean up unused CSS. 
If you're unsure of what a specific CSS rule does, please refer to the [framework documentation](https://docs.thememountain.com/pine/).

## Pre-built Templates

This product includes pre-built templates for the HTML version:

**Marketing** templates are for your regular marketing/promotional/newsletter campaign.

**Notifications** are transactional email templates. They are used in user-initiated scenarios, like a password reset or purchase confirmation. 
You can use them with [SparkPost](https://www.sparkpost.com/) or [MailGun](http://www.mailgun.com/).

## Sections

Sections are individual, stackable blocks of content that you can use to create an email. 
The product includes 50+ sections, most of them being email counterparts to the ones in our Kant HTML and WordPress products.

You can customize the text, buttons, images, and colours in all sections.

Just like the HTML version, <abbr title="Email Service Provider">ESP</abbr>-integrated versions of the product also include 
individual section files in their `sections` folder, which you can copy/paste to the boilerplate file in a text editor, 
in order to build your own custom templates for that provider<sup>[1]</sup>.

<small><sup>[1]</sup> With the exception of the Shopify integration.</small>

## Components

We've also included a small set of useful components from our [Pine Email Framework](https://docs.thememountain.com/pine/). 
These are provided as a convenience, for you to quickly copy/paste a button or a spacer in an email that you're custom coding based off of the product.

## The Grid

Also as a convenience, the product includes grid examples from our framework. 
If you want to learn more about using the grid, please refer to the [framework documentation](https://docs.thememountain.com/pine/grid).
