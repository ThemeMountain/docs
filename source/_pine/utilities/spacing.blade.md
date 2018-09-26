---
title: Spacing Utilities
description: Utilities for custom spacing on mobile
tags: utility, space, height
page_order: 12
path: pine/utilities
navigation:
  group: Utilities
  order: 2
  title: Spacing
---

# Utilities for custom mobile email spacing

Pine includes padding-based responsive utility classes for fine-tuned control over spacing on mobile. 
Following Bootstrap 4 naming conventions, the classes are named using the format `p{sides}-sm-{size}`:

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
- `10` - for classes that set padding to one fourth of container apparent padding (8px default)
- `20` - for classes that set padding equal to half of container apparent padding (16px default)
- `30` - for classes that set padding equal to half of container apparent padding (24px default)

```css
.p-sm-0 {padding: 0!important;}
.p-sm-10 {padding: 10px!important;}
.p-sm-20 {padding: 20px!important;}
.p-sm-30 {padding: 30px!important;}
.pt-sm-0 {padding-top: 0!important;}
.pt-sm-10 {padding-top: 10px!important;}
.pt-sm-20 {padding-top: 20px!important;}
.pt-sm-30 {padding-top: 30px!important;}
.pr-sm-0 {padding-right: 0!important;}
.pr-sm-10 {padding-right: 10px!important;}
.pr-sm-20 {padding-right: 20px!important;}
.pr-sm-30 {padding-right: 30px!important;}
.pb-sm-0 {padding-bottom: 0!important;}
.pb-sm-10 {padding-bottom: 10px!important;}
.pb-sm-20 {padding-bottom: 20px!important;}
.pb-sm-30 {padding-bottom: 30px!important;}
.pl-sm-0 {padding-left: 0!important;}
.pl-sm-10 {padding-left: 10px!important;}
.pl-sm-20 {padding-left: 20px!important;}
.pl-sm-30 {padding-left: 30px!important;}
.px-sm-0 {padding-right: 0!important; padding-left: 0!important;}
.px-sm-10 {padding-right: 10px!important; padding-left: 10px!important;}
.px-sm-20 {padding-right: 20px!important; padding-left: 20px!important;}
.px-sm-30 {padding-right: 30px!important; padding-left: 30px!important;}
.py-sm-0 {padding-top: 0!important; padding-bottom: 0!important;}
.py-sm-10 {padding-top: 10px!important; padding-bottom: 10px!important;}
.py-sm-20 {padding-top: 20px!important; padding-bottom: 20px!important;}
.py-sm-30 {padding-top: 30px!important; padding-bottom: 30px!important;}
```

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Tip</p>
  <div class="-mb-4 text-md text-blue-dark" markdown="1">You will almost never need all these classes in your production emails. Remove any classes that you don't use either manually, or with the help of a tool like [emailcomb.com ↗](https://emailcomb.com/)</div>
</div>
