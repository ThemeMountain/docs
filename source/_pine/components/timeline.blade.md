---
title: Timeline
description: Timeline module for HTML emails
tags: quote, review, cite
path: acorn/components
page_order: 28
navigation:
  group: Components
---

# Display a series of events over a period of time

Timeline is a nice way of showing a list of events over time in your emails. The pipe image in the middle column is hidden on mobile, and the columns stack. Timeline also makes use of responsive [display](/acorn/utilities/display) and [spacing](/acorn/utilities/spacing) utilities.

<div class="my-6">
    <ul class="tabs">
        <li class="active"><a href="#timeline-preview">Preview</a></li>
        <li><a href="#timeline-code">Code</a></li>
    </ul>    
    <div id="timeline-preview" class="tab-panel" aria-expanded="true">
        <div class="py-4 bg-grey-lighter">
            <div class="hidden md:flex justify-around bg-grey-lighter pt-4 w-24 mx-auto">
                <button data-preview="mobile" class="text-grey">@fileContents('source/img/icons/mobile.svg')</button>
                <button data-preview="desktop" class="text-grey-darkest">@fileContents('source/img/icons/desktop.svg')</button>
            </div>
            <iframe src="/acorn/includes/components/timeline.html" frameborder="0" width="100%" class="block mx-auto transition-all" style="min-height: 520px;"></iframe>
        </div>
    </div>
    <div id="timeline-code" class="tab-panel" markdown="1" aria-expanded="false">
```html
<table cellpadding="0" cellspacing="0" role="presentation" width="100%">
  <tr>
    <td style="padding: 32px 24px;">
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col" width="96" style="padding: 0 8px;">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td class="pt-sm-0" style="font-size: 14px; padding-top: 32px;">2007 - 2008</td>
              </tr>
            </table>
          </td>
          <td class="hide-sm" align="center" width="48">
            <img src="https://i.imgur.com/evrIM2o.png" alt="" width="35">
          </td>
          <td class="col" width="376" style="padding: 0 8px;">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td class="py-sm-8" style="padding-top: 32px;">
                  <h4 style="margin: 0 0 15px;">Massachusetts Institute of Technology</h4>
                  <p style="margin: 0;">Co-wrote a book on the Semantic Web and Best Practices for Developers.</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col" width="96" style="padding: 0 8px;">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td style="font-size: 14px; padding-top: 32px;">2004 - 2006</td>
              </tr>
            </table>
          </td>
          <td class="hide-sm" align="center" width="48">
            <img src="https://i.imgur.com/evrIM2o.png" alt="" width="35">
          </td>
          <td class="col" width="376" style="padding: 0 8px;">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td class="py-sm-8" style="padding-top: 32px;">
                  <h4 style="margin: 0 0 15px;">Parsons School of Design</h4>
                  <p style="margin: 0;">Awarded Best Designer of the Year voted by student and teacher body.</p>
                </td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
        <tr>
          <td class="col" width="96" style="padding: 0 8px;">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td style="font-size: 14px; padding-top: 32px;">2002 - 2004</td>
              </tr>
            </table>
          </td>
          <td class="hide-sm" align="center" width="48">
            <img src="https://i.imgur.com/evrIM2o.png" alt="" width="35">
          </td>
          <td class="col" width="376" style="padding: 0 8px;">
            <table cellpadding="0" cellspacing="0" role="presentation" width="100%">
              <tr>
                <td class="py-sm-8" style="padding-top: 32px;">
                  <h4 style="margin: 0 0 15px;">Berkley College</h4>
                  <p style="margin: 0;">Two year program with a focus on design principles and Javascript development. Won National Student Design Competition for Application Design.</p>
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

<div class="bg-blue-lightest border-l-4 border-blue p-4 mb-4" role="alert">
  <p class="font-sans font-bold m-0 text-md text-blue-dark">Note</p>
  <div class="-mb-4 text-md text-blue-dark" markdown="1">The more text you have in the right Column, the higher the risk of the 'pipe' images not connecting with each other. Since these are inline images, if you need more than ~2 lines of text, you need to adjust the pipe image accordingly.

  You can test this on desktop with the example above - we've made it editable.</div>
</div>
