<!DOCTYPE html>
<html lang="pl" xmlns:v="urn:schemas-microsoft-com:vml">

<head>
    <meta charset="utf-8">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no, url=no">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
    <!--[if mso]>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings xmlns:o="urn:schemas-microsoft-com:office:office">
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <style>
    td,th,div,p,a,h1,h2,h3,h4,h5,h6 {font-family: "Segoe UI", sans-serif; mso-line-height-rule: exactly;}
  </style>
  <![endif]-->
    <title>Nowa wiadomość ze strony Kocham Ząb</title>
    <style>
        @media (max-width: 600px) {
            .sm-my-8 {
                margin-top: 32px !important;
                margin-bottom: 32px !important
            }

            .sm-px-4 {
                padding-left: 16px !important;
                padding-right: 16px !important
            }

            .sm-px-6 {
                padding-left: 24px !important;
                padding-right: 24px !important
            }

            .sm-leading-8 {
                line-height: 32px !important
            }
        }
    </style>
</head>

<body
    style="margin: 0; width: 100%; background-color: #f8fafc; padding: 0; -webkit-font-smoothing: antialiased; word-break: break-word">
  
    <div role="article" aria-roledescription="email" aria-label="Nowa wiadomość ze strony Hotel Jan" lang="pl">
        <div class="sm-px-4"
            style="background-color: #333; font-family: ui-sans-serif, system-ui, -apple-system, 'Segoe UI', sans-serif">
            <table align="center" cellpadding="0" cellspacing="0" role="none">
                <tr>
                    <td style="width: 552px; max-width: 100%">
                        <div class="sm-my-8" style="margin-top: 48px; margin-bottom: 48px; text-align: center">
                            <a href="https://jan-krakow.pl">
                                <img src="{{ asset('assets/logo.png') }}" width="200"
                                    alt="logo Hotel Jan" style="max-width: 100%; vertical-align: middle">
                            </a>
                        </div>
                        <table style="width: 100%;" cellpadding="0" cellspacing="0" role="none">
                            <tr>
                                <td class="sm-px-6"
                                    style="border-radius: 4px; background-color: #fffffe; padding: 48px; font-size: 16px; color: #334155; box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05)">
                                    <h1 class="sm-leading-8"
                                        style="margin: 0 0 24px; font-size: 24px; font-weight: 600; color: #000001">
                                        Cześć
                                    </h1>
                                    <p style="margin: 0; line-height: 24px">
                                        Oto nowa wiadomość z formularza kontaktowego: <br> </p>
                                    <div role="separator" style="line-height: 24px">&zwj;</div>
                                    <div>
                                        <span style="font-size: 18px; font-weight: 700">Imię i nazwisko: </span> <span
                                            style="font-size: 18px;">{{ $name }}</span>
                                    </div>
                                    <div role="separator" style="line-height: 15px">&zwj;</div>
                                    <div>
                                        <span style="font-size: 18px; font-weight: 700;">Telefon: </span> <a
                                            href="tel:{{ $phone }}"
                                            style="font-size: 18px; color: #000001; text-decoration: none">{{ $phone }}</a>
                                    </div>
                                    <div role="separator" style="line-height: 15px">&zwj;</div>
                                    <div>
                                        <span style="font-size: 18px; font-weight: 700;">Email: </span> <a
                                            href="mailto:{{ $email }}"
                                            style="font-size: 18px; color: #000001; text-decoration: none;">{{ $email }}</a>
                                    </div>
                                    <div role="separator" style="line-height: 15px">&zwj;</div>
                                    <div style="display: flex; flex-direction: column; gap: 12px">
                                        <span style="font-size: 18px; font-weight: 700;">Wiadomość: </span> <span
                                            style="color: #000001; text-decoration: none;">{{ $content }}</span>
                                    </div>
                                    <div role="separator" style="line-height: 32px">&zwj;</div>
                                    <div
                                        style="display: flex; align-items: center; justify-content: flex-start; gap: 24px">
                                        <div>
                                            <a href="tel:{{ $phone }}"
                                                style="color: #f8fafc; background-color: #c18b52; display: inline-block; border-radius: 4px; padding: 16px 24px; font-size: 16px; line-height: 1; font-weight: 600; text-decoration: none">
                                                <!--[if mso]>
      <i style="mso-font-width: 150%; mso-text-raise: 30px" hidden>&emsp;</i>
    <![endif]-->
                                                <span style="mso-text-raise: 16px">
                                                    Zadzwoń
                                                </span>
                                                <!--[if mso]>
      <i hidden style="mso-font-width: 150%;">&emsp;&#8203;</i>
    <![endif]-->
                                            </a>
                                        </div>
                                        <div>
                                            <a href="mailto:{{ $email }}"
                                                style="color: #f8fafc; background-color: #c18b52; display: inline-block; border-radius: 4px; padding: 16px 24px; font-size: 16px; line-height: 1; font-weight: 600; text-decoration: none;">
                                                <!--[if mso]>
      <i style="mso-font-width: 150%; mso-text-raise: 30px;" hidden>&emsp;</i>
    <![endif]-->
                                                <span style="mso-text-raise: 16px">
                                                    Napisz wiadomość
                                                </span>
                                                <!--[if mso]>
      <i hidden style="mso-font-width: 150%;">&emsp;&#8203;</i>
    <![endif]-->
                                            </a>
                                        </div>
                                    </div>
                                    <div role="separator" style="line-height: 24px">&zwj;</div>
                                </td>
                            </tr>
                            <tr role="separator">
                                <td style="line-height: 48px">&zwj;</td>
                            </tr>
                            <tr>
                                <td
                                    style="padding-left: 24px; padding-right: 24px; text-align: center; font-size: 12px; color: #475569">
                                    <p style="margin: 0 0 16px; text-transform: uppercase">
                                        created by
                                    </p>
                                    <div>
                                        <a href="https://marketingmix.pl">
                                            <img src="{{ asset('assets/marketingmix-logo.png') }}" width="100"
                                                alt="logo marketingmix"
                                                style="max-width: 100%; vertical-align: middle;margin-bottom: 50px">
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>
