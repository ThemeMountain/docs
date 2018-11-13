---
title: Labels
description: Background color highlight text in HTML emails
tags: highlight, mark, outline
path: pine/components
page_order: 22
navigation:
  group: Components
---

# Visually organize key aspects of content in your emails

A very simple way to highlight key text information

Labels in Pine are simple `<span>` elements, styled with a background colour and some padding. 
Like buttons, they come in predefined <span class="px-2 bg-green-light text-white text-xs rounded">filled</span> and <span class="px-2 border border-green-light text-green-light text-xs rounded">outlined</span> styles. 
They have been tested to work consistently, and even though they are extremely simple, we think you may find them useful.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#labels-preview">Preview</a></li>
        <li><a href="#labels-code">Code</a></li>
    </ul>    
    <div id="labels-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/pine/includes/components/labels.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 150px;"></iframe>
        </div>
    </div>
    <div id="labels-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
This text contains a <span style="display: inline-block; padding: 1px 5px; background-color: #2C3E51; border-radius: 3px; color: #FFFFFF; font-size: 90%;">filled label</span>,
as well as an <span style="display: inline-block; padding: 1px 5px; border: 1px solid #1BB05D; border-radius: 3px; color: #1BB05D; font-size: 90%;">outlined label</span>.
```
    </div>
</div>
