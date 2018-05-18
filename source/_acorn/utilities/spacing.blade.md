---
title: Spacing Utilities
description: Utilities for custom spacing on mobile
tags: utility, space, height
page_order: 12
navigation:
  group: Utilities
  order: 2
  title: Spacing
---

# Utilities for custom mobile email spacing

Acorn includes padding-based responsive utility classes for fine-tuned control over spacing on mobile. Following Bootstrap 4 naming conventions, the classes are named using the format `p{sides}-sm-{size}`:

`p` stands for 'padding', use as-is.

`{sides}` is one of:

- `t` - for classes that set padding-top
- `r` - for classes that set padding-right
- `b` - for classes that set padding-bottom
- `l` - for classes that set padding-left
- `x` - for classes that set both padding-left and padding-right
- `y` - for classes that set both padding-top and padding-bottom
- blank - for classes that set padding on all 4 sides of the element

`{size}` is one of:

- `0` - for classes that eliminate padding by setting it to 0
- `8` - for classes that set padding to one fourth of container apparent padding (8px default)
- `16` - for classes that set padding equal to half of container apparent padding (16px default)
- `24` - for classes that set padding equal to half of container apparent padding (24px default)

```css
.p-sm-0 {padding: 0!important;}
.p-sm-8 {padding: 8px!important;}
.p-sm-16 {padding: 16px!important;}
.p-sm-24 {padding: 24px!important;}
.pt-sm-0 {padding-top: 0!important;}
.pt-sm-8 {padding-top: 8px!important;}
.pt-sm-16 {padding-top: 16px!important;}
.pt-sm-24 {padding-top: 24px!important;}
.pr-sm-0 {padding-right: 0!important;}
.pr-sm-8 {padding-right: 8px!important;}
.pr-sm-16 {padding-right: 16px!important;}
.pr-sm-24 {padding-right: 24px!important;}
.pb-sm-0 {padding-bottom: 0!important;}
.pb-sm-8 {padding-bottom: 8px!important;}
.pb-sm-16 {padding-bottom: 16px!important;}
.pb-sm-24 {padding-bottom: 24px!important;}
.pl-sm-0 {padding-left: 0!important;}
.pl-sm-8 {padding-left: 8px!important;}
.pl-sm-16 {padding-left: 16px!important;}
.pl-sm-24 {padding-left: 24px!important;}
.px-sm-0 {padding-right: 0!important; padding-left: 0!important;}
.px-sm-8 {padding-right: 8px!important; padding-left: 8px!important;}
.px-sm-16 {padding-right: 16px!important; padding-left: 16px!important;}
.px-sm-24 {padding-right: 24px!important; padding-left: 24px!important;}
.py-sm-0 {padding-top: 0!important; padding-bottom: 0!important;}
.py-sm-8 {padding-top: 8px!important; padding-bottom: 8px!important;}
.py-sm-16 {padding-top: 16px!important; padding-bottom: 16px!important;}
.py-sm-24 {padding-top: 24px!important; padding-bottom: 24px!important;}
```

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Tip</p>
  <div class="-mb-4 text-md text-blue-dark" markdown="1">You will almost never need all these classes in your production emails. Remove any classes that you don't use either manually, or with the help of a tool like [emailcomb.com ↗](https://emailcomb.com/)</div>
</div>
