---
permalink: acorn/includes/components/nav-basic.html
search: false
exclude_pagenav: true
---

<!DOCTYPE html>
<html lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title>Acorn Email Framework</title>
    <!--[if mso]>
    <xml>
      <o:OfficeDocumentSettings>
        <o:AllowPNG/>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
    <style>
      table {border-collapse: collapse;}
      .spacer,.divider {mso-line-height-rule: exactly;}
      td,th,div,p,a {font-size: 16px; line-height: 25px;}
      td,th,div,p,a,h1,h2,h3,h4,h5,h6 {font-family:"Segoe UI",Helvetica,Arial,sans-serif;}
    </style>
    <![endif]-->

    <style type="text/css">

      /*DEMO ONLY*/
      html, body {height: 100%;}
      body {display: flex; align-items: center; background-color: #F1F5F8; overflow: hidden;}

      @import url('https://fonts.googleapis.com/css?family=Merriweather|Open+Sans');
      @media only screen {
        .col, td, th, div, p {font-family: -apple-system,system-ui,BlinkMacSystemFont,"Segoe UI","Roboto","Helvetica Neue",Arial,sans-serif;}
        .serif {font-family: 'Merriweather', Georgia, serif;}
        .sans-serif {font-family: 'Open Sans', Arial, sans-serif;}
      }

      #outlook a {padding: 0;}
      img {border: 0; line-height: 100%; vertical-align: middle;}
      .col {font-size: 16px; line-height: 25px; vertical-align: top;}

      @media only screen and (max-width: 632px) {
        .wrapper img {max-width: 100%;}
        u ~ div .wrapper {min-width: 100vw;}
        .container {width: 100%!important; -webkit-text-size-adjust: 100%;}
      }

      @media only screen and (max-width: 480px) {
        .col {
          box-sizing: border-box;
          display: inline-block!important;
          line-height: 23px;
          width: 100%!important;
        }

        .col-sm-1 {max-width: 25%;}
        .col-sm-2 {max-width: 50%;}
        .col-sm-3 {max-width: 75%;}
        .col-sm-third {max-width: 33.33333%;}

        .col-sm-push-1 {margin-left: 25%;}
        .col-sm-push-2 {margin-left: 50%;}
        .col-sm-push-3 {margin-left: 75%;}
        .col-sm-push-third {margin-left: 33.33333%;}

        .full-width-sm {display: table!important; width: 100%!important;}
        .stack-sm-first {display: table-header-group!important;}
        .stack-sm-last {display: table-footer-group!important;}
        .stack-sm-top {display: table-caption!important; max-width: 100%; padding-left: 0!important;}

        .toggle-content {
          max-height: 0;
          overflow: auto;
          transition: max-height .4s linear;
          -webkit-transition: max-height .4s linear;
        }
        .toggle-trigger:hover + .toggle-content,
        .toggle-content:hover {max-height: 999px!important;}

        .show-sm {
          display: inherit!important;
          font-size: inherit!important;
          line-height: inherit!important;
          max-height: none!important;
        }
        .hide-sm {display: none!important;}

        .align-sm-center {
          display: table!important;
          float: none;
          margin-left: auto!important;
          margin-right: auto!important;
        }
        .align-sm-left {float: left;}
        .align-sm-right {float: right;}

        .text-sm-center {text-align: center!important;}
        .text-sm-left {text-align: left!important;}
        .text-sm-right {text-align: right!important;}

        .borderless-sm {border: none!important;}
        .nav-sm-vertical .nav-item {display: block;}
        .nav-sm-vertical .nav-item a {display: inline-block; padding: 4px 0!important;}

        .spacer {height: 0;}

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
      }
    </style>
  </head>
  <body style="box-sizing:border-box;margin:0;padding:0;width:100%;word-break:break-word;-webkit-font-smoothing:antialiased;">

    <div style="display:none;font-size:0;line-height:0;"><!-- Add your preheader text here --></div>

    <table class="wrapper" bgcolor="#F1F5F8" cellpadding="16" cellspacing="0" role="presentation" width="100%">
      <tr>
        <td align="center">
          <table class="container" bgcolor="#FFFFFF" cellpadding="0" cellspacing="0" role="presentation" width="600">
            <tr>
              <td align="center">

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

              </td>
            </tr>
          </table>
        </td>
      </tr>
    </table>

  </body>
</html>

