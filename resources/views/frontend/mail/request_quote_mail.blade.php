<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="x-apple-disable-message-reformatting">
  <title></title>
  <!--[if mso]>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]-->
  <style>
    table, td, div, h1, p {font-family: Arial, sans-serif;}
  </style>
</head>
<body style="margin:0;padding:0;">
  <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
      <td align="center" style="padding:0;">
        <table role="presentation" style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
          <tr>
            <!-- <td align="center" style="padding:40px 0 30px 0;background:#70bbd9;">
              <img src="https://assets.codepen.io/210284/h1.png"  width="300" style="height:auto;display:block;" />
            </td> -->
          </tr>
          <tr>
            <td style="padding:36px 30px 42px 30px;">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                <tr>
                  <td style="padding:0 0 10px 0;color:#153643;" align="left">
                    <h1 style="font-size:20px;margin:0 0 10px 0;font-family:Arial,sans-serif;">Tallentor Digital - Request Quote</h1>
                  </td>
                  <td style="padding:0 0 10px 0;color:#153643;" align="right">
                    <img src="{{url('images/logo/fev/tallentor_digital.png')}}" style="max-width:100px; margin:0 0 10px 0;">                    
                  </td>
                </tr>
                <tr>
                  <td style="padding:0 0 30px 0;color:#153643;">
                    <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Dear {{ $details['quote_name'] }},</p>
                    <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Thank you for contacting Tallentor Digital.</p>
                    <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">One of our team members will get in touch with you shortly.</p>
                    <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Regards,</p>
                    <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Team Tallentor</p>
                  </td>
                </tr>
                <tr style="border-top: 3px solid #101E40;">
                  <td style="padding:0 0 10px 0;color:#153643;" align="left">
                    <p style="padding: 0.6rem 0; color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><b>Your Message</b></p>
                  </td> 
                </tr>
                <tr>
                  <td style="padding:0;">
                    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                      <tr>
                        <td style="width:30%;padding:0;vertical-align:top;color:#153643;">
                          <!-- <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/left.gif"  width="260" style="height:auto;display:block;" /></p> -->
                          <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Name:</p>
                          <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Email:</p>
                          <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Phone:</p>
                          <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Country:</p>
                          <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Company:</p>
                          <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">Brief Your Project:</p>
                          <!-- <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="http://www.example.com" style="color:#ee4c50;text-decoration:underline;">Blandit ipsum volutpat sed</a></p> -->
                        </td>
                        <td style="padding:0;vertical-align:top;color:#153643;">
                          <!-- <p style="margin:0 0 25px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><img src="https://assets.codepen.io/210284/right.gif"  width="260" style="height:auto;display:block;" /></p> -->
                          <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">{{ $details['quote_name'] }}</p>
                          <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">{{ $details['quote_email'] }}</p>
                          <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">{{ $details['quote_phone'] }}</p>
                          <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">{{ $details['country'] }}</p>
                          <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">{{ $details['quote_company'] }}</p>
                          <p style="color: black; margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">{{ $details['brief_project'] }}</p>
                          <!-- <p style="margin:0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;"><a href="http://www.example.com" style="color:#ee4c50;text-decoration:underline;">In tempus felis blandit</a></p> -->
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="padding:30px;background:#101E40;">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                <tr>
                  <td style="padding:0;width:50%;" align="center">
                      <a href="www.tallentordigital.com" style="margin:0;font-size:20px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff; text-decoration:none!important;">www.tallentordigital.com</a>
                  </td>
                  <!-- <td style="padding:0;width:50%;" align="right">
                    <table role="presentation" style="border-collapse:collapse;border:0;border-spacing:0;">
                      <tr>
                        <td style="padding:0 0 0 10px;width:38px;">
                          <a href="http://www.twitter.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/tw_1.png" alt="Twitter" width="38" style="height:auto;display:block;border:0;" /></a>
                        </td>
                        <td style="padding:0 0 0 10px;width:38px;">
                          <a href="http://www.facebook.com/" style="color:#ffffff;"><img src="https://assets.codepen.io/210284/fb_1.png" alt="Facebook" width="38" style="height:auto;display:block;border:0;" /></a>
                        </td>
                      </tr>
                    </table>
                  </td> -->
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