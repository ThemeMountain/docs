---
extends: _layouts.default.changelog
title: Changelog
description: Changelog for the Kant Email Template
tags: changelog, releases, versions
page_order: 1000
exclude_pagenav: true
---

## v2.4.0

Release date: January 29th, 2018

#### ADDED

- Shopify notification templates. All 17 Shopify notification emails are included
- MailChimp section: "Cart Product Row - No Divider"
- MailChimp option for editing footer divider colour

#### FIXED

- StampReady editor export issue causing inconsistent text line spacing
- Editing last project image in "Project with Captions", in MailChimp
- Fixed hamburger menu item display in fallback for Gmail mobile apps
- MailChimp button editing - MailChimp editor had started breaking buttons again
- MailChimp - Footer 3 Rewards badge centering

#### UPDATED

- MailChimp notification sections now use e-commerce automation merge tags
- Mailster and MailChimp preview text

---

## v2.3.1

Release date: December 25th, 2017

#### FIXED

- Button editing in MailChimp
- Module background colours in Outlook when edited from MailChimp

#### ADDED

- Support for preview text in MailChimp

---

## v2.3.0

Release date: November 15th, 2017

#### FIXED

- Various layout and framework improvements
- Fixed Call To Action background editing in MailChimp
- Notifications: fixed notification header side padding.
- Mailster: fix Web App template modules not showing up by default
- Fixed vertical menu aligment for headers with menu on the right, in Outlook 2013-2016
- Fixed a Samsung default email client bug with CSS background images

#### UPDATED

- Updated CSS selectors for `.menu-item`
- StampReady: prevent forced image cropping
- Mailster: autocomplete social network URLs
- Moved positioning to embedded CSS for all hamburger menus
- Mailster: use `{homepage}` as default header and footer logo links

---

## v2.2.0

Release date: October 17th, 2017

This maintenance update includes a hotfix for Mailster, that will prevent our template from being impacted when the
plugin strips tags from our HTML. We continue to investigate this together with Mailster, but until further notice
please upgrade to this version right away.

#### FIXED

- Hotfix for Mailster's issue with "save as new template". Layouts will not blow up when saving as a new template, even
if Mailster continues to randomly remove our CSS classes from modules
- Fix columns vertical top alignment in Blog Grid.

---

## v2.1.0

Release date: October 16th, 2017

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
    <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
    <p class="m-0 text-md text-blue-dark">The HERO With Video section requires editing HTML, because no online builder facilitates it at this time. Please carefully <a href="../hero/#video-hero-editing">read the documentation</a> first.</p>
</div>

#### ADDED

- New section: Video HERO
- New pre-built template: Halloween

#### FIXED

- Fixed emails displaying zoomed out in iOS Mail due to a iOS 11 bug

#### UPDATED

- all-in-one templates: simplify and have a single file/zip for importing, that includes all modules

---

## v2.0.0

Release date: October 10th, 2017

Kant 2.0.0 is a complete rewrite of the template, with lots of new features, fixes, and improvements.

#### ADDED

- New section: Full Width Image
- Support for fluid retina images
- Background image support for Windows Mail
- Added a mobile helper class to float elements to the left
- Added a few classes to control heading sizes for mobile clients
- Mailster: auto content support (magic wand)
- Mailster: enabled automatic download of your Kant purchase directly from WordPress, via Envato authentication
- MailChimp: lots of styling options, grouped by module type
- StampReady: integrate the grid examples with the editor
- StampReady Editor 3.0 (Beta) ready:
- modules grouped by type
- spacer height adjustment
- repeatable rows (available for selected modules)

#### FIXED

- Mailster: fixed content formatting issues
- StampReady: fixed extra spacing between modules in some cases
- Fixed desktop menu spacing in some clients, particularly Outlook
- Force desktop view in mobile clients that do not support responsive
- Allow long words to break on next line for mobile, so they don't blow up the layout
- Fix default body text line-height in some clients - particularly Gmail, since it dropped support for tag selectors
- Force hamburger menu to display basic menu in Gmail apps (:hover is not supported in Gmail on some devices, thus
rendering the hamburger menu useless)

#### UPDATED

- Updated documentation
- Improved mobile menu spacing
- Mailster: improved menu item editing
- Smaller spacer and divider component code footprint
- Spacer and divider height is now more consistent across email clients
- MailChimp: change more background images in visual editor
- Updated Call To Action Button Centered to include text above button
- MailChimp: notifications all-in-one now includes all marketing sections
- Campaign Monitor: notifications all-in-one now includes all marketing sections
- Update all HTML: less code => smaller file size => faster loading emails. Also, long emails are now even less likely
to get cut-off in Gmail.
- StampReady: animated header module thumbnails, so you can differentiate between headers with basic and hamburger menu

#### REMOVED

- All placeholder images, except for icons and logos. Now using a placeholder image service, so our own images no
longer get in your way and no longer pollute your media library when you're importing the template to one of the
supported third party services. Also, this will speed up the process of importing a template.
- Prebuilt templates from the Campaign Monitor, MailChimp, and StampReady integrated versions. These were either
redundant, or, as is the case with MailChimp, created confusion in the email editor. If you are using one of these
integrations and want a layout just like in our demos, you can quickly build it yourself from the all-in-one templates
we provide.

---

## v1.0.1

Release date: Feburary 2nd, 2017

#### ADDED

- New Template: Valentine's Day

#### FIXED

- Fixed the `.mobile-collapsed` responsive helper class, so that it actually works
- Fixed some preheader spacers that had line-height: 0; and were causing rendering issues in Outlook 2016

#### UPDATED

- MailChimp, MyMail, and StampReady integration documentation, to reflect the new folder/files structure

#### REMOVED

- `mailchimp/templates/html` - you have the same thing in the .zip file(s), so this was redundant. Simply unzip if you
need to view/edit those files.
- `mymail/templates/html` - also redundant
- `stampready/templates/html` - also redundant
