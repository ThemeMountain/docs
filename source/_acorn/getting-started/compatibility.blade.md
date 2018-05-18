---
title: Compatibility
description: See which email clients the Acorn Email Framework is compatible with
tags: compatibility, rendering, clients
page_order: 3
navigation:
  group: Getting Started
  order: 3
---

# List of email clients that Acorn is compatible with

Acorn has been (and is regularly) tested to render well in all major email clients.

We use both [Email on Acid](https://www.emailonacid.com/) and [Litmus](https://litmus.com/) to test. The following table shows all major email clients that Acorn supports and is compatible with:

<table class="rounded text-left border text-grey-dark mt-8 mb-6 w-full text-sm" cellpadding="16" cellspacing="0">
    <thead class="bg-grey-lighter text-black">
        <tr>
            <th id="list" class="py-2 px-4">Email Client or Operating System</th>
            <th class="py-2 px-4">Compatible</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td colspan="2" class="bg-grey-dark py-2 px-4">
                <h2 class="p-0 text-sm font-normal text-white">Android</h2>
            </td>
        </tr>
        <tr>
            <td>Gmail Android</td>
            <td>✔ <sup>1</sup></td>
        </tr>
        <tr>
            <td>Outlook Android</td>
            <td>✔</td>
        </tr>
        <tr>
            <td colspan="2" class="bg-grey-dark py-2 px-4">
                <h2 class="p-0 text-sm font-normal text-white">iOS (10+)</h2>
            </td>
        </tr>
        <tr>
            <td>iPhone</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>iPad</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Gmail</td>
            <td>✔ <sup>1</sup></td>
        </tr>
        <tr>
            <td>Outlook</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Google Inbox</td>
            <td>✔ <sup>1</sup></td>
        </tr>
        <tr>
            <td colspan="2" class="bg-grey-dark py-2 px-4">
                <h2 class="p-0 text-sm font-normal text-white">macOS</h2>
            </td>
        </tr>
        <tr>
            <td>Apple Mail</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Outlook 2011</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Outlook 2016</td>
            <td>✔</td>
        </tr>
        <tr>
            <td colspan="2" class="bg-grey-dark py-2 px-4">
                <h2 class="p-0 text-sm font-normal text-white">Outlook (Windows)</h2>
            </td>
        </tr>
        <tr>
            <td>Outlook 2003</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Outlook 2007</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Outlook 2010</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Outlook 2011</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Outlook 2013</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Outlook 2016</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Windows 10 Mail</td>
            <td>✔</td>
        </tr>
        <tr>
            <td colspan="2" class="bg-grey-dark py-2 px-4">
                <h2 class="p-0 text-sm font-normal text-white">Lotus Notes</h2>
            </td>
        </tr>
        <tr>
            <td>Lotus Notes 8</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Lotus Notes 8.5</td>
            <td>✔</td>
        </tr>
        <tr>
            <td colspan="2" class="bg-grey-dark py-2 px-4">
                <h2 class="p-0 text-sm font-normal text-white">Mozilla</h2>
            </td>
        </tr>
        <tr>
            <td>Thunderbird</td>
            <td>✔</td>
        </tr>
        <tr>
            <td colspan="2" class="bg-grey-dark py-2 px-4">
                <h2 class="p-0 text-sm font-normal text-white">Common Web Clients</h2>
            </td>
        </tr>
        <tr>
            <td>Gmail</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Google Apps</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Office 365</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Outlook.com</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>Yahoo! Mail</td>
            <td>✔</td>
        </tr>
        <tr>
            <td>AOL</td>
            <td>✔</td>
        </tr>
    </tbody>
</table>

<sup>1</sup> Gmail app used with a non-Google account (a.k.a. GANGA) does not currently support media queries, so it will render the desktop version. It also doesn't support background images.

#### Other notes:

- Outlook does not support rounded or pill buttons, it shows 90° corners
- For Web Clients, we officially support IE9+, Edge, Chrome, Firefox, and Safari (Mac)
- Web fonts are supported only in Apple Mail, iOS Mail, native Android app (not Gmail), and Thunderbird
- While we don't officially support them, we have seen Acorn rendering well in the vast majority of international email clients

## Responsive, not hybrid

Acorn is a _responsive_ email framework, meaning it relies on CSS `@media` queries for proper rendering on mobile devices. This means that email clients which do not support embedded CSS or media queries will show the desktop layout.

While hybrid coding does currently hold an advantage in this case, we have decided not to use it for the following reasons:

1. Hybrid requires the use of 'ghost tables' - HTML table structures wrapped inside Outlook-specific HTML comments. They are needed with hybrid, because Outlook does not support the max-width CSS property. However, this adds extra weight to the HTML size and, being basically a comment, it's very hard to manipulate automatically (i.e. drag'n'drop builders, CSS inlining).
2. Starting with Gmail's support for media queries in email back in 2016, we can clearly see the trend is to go _towards_ supporting responsive, not away from it. It'll probably take a bit of time, but once Gmail will support media queries in the Gmail app for non-Google accounts too, there will be no reasonable justification to use hybrid coding.
