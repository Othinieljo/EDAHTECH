{{--  Test envoie Email Contact EDAHTECH  --}}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Réception contact  - EDAHTECH</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <style type="text/css">
    a[x-apple-data-detectors] {color: inherit !important;}
  </style>

</head>
<body style="margin: 0; padding: 0;">
  <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
      <td style="padding: 20px 0 30px 0;">
        <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; border: 1px solid #cccccc;">
        <tr>
            <td align="center" bgcolor="#021738" style="padding: 40px 0 30px 0;">
            <img src="{{$message->embed('images/mail.png')}}" alt="EDAHTECH - Service Mailing" width="300" height="230" style="display: block;" />
            </td>
        </tr>
        <tr>
            <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                <tr>
                    <td style="color: #153643; font-family: Arial, sans-serif;">
                        <h1 style="font-size: 24px; margin: 0;">Vous avez un nouveau message!</h1>
                    </td>
                </tr>
                <tr>
                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
                        <p style="margin: 0;">EDAHTECH viens d'être contacté par un de ses visiteurs.</p>
                        <p style="color: green; font-weight: bold;"><i>Ci-dessous, les détails de la réquête.</i></p>
                    </td>
                </tr>
                {{--  details message  --}}
                <tr>
                    <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 20px 0 30px 0;">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                            {{--  nom  --}}
                            <tr>
                                <td width="30%">
                                    <p style="margin: 0; font-weight: bold;">Nom & Prénoms</p>
                                </td>
                                <td>
                                   : {{ $infos['nom']}}
                                </td>
                            </tr>
                            {{--  email  --}}
                            <tr>
                                <td width="30%">
                                    <p style="margin: 0; font-weight: bold;">Email</p>
                                </td>
                                <td>
                                    : {{ $infos['email'] }}
                                </td>
                            </tr>
                            {{--  contacts  --}}
                            <tr>
                                <td width="30%">
                                    <p style="margin: 0; font-weight: bold;">Téléphone / Fax</p>
                                </td>
                                <td>
                                   : {{ $infos['contact'] }}
                                </td>
                            </tr>
                            {{--  fonction  --}}
                           
                            {{--  société  --}}
                            <tr>
                                <td width="30%">
                                    <p style="margin: 0; font-weight: bold;">Société</p>
                                </td>
                                <td>
                                    : {{ $infos['societe'] }}
                                </td>
                            </tr>
                            {{--  message  --}}
                            <tr>
                                <td width="30%">
                                    <p style="margin: 0; font-weight: bold;">Message</p>
                                </td>
                                <td>
                                    : {{ $infos['message'] }}
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                {{--  fin message  --}}
                <tr>
                {{-- <td>
                    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                    <tr>
                        <td width="260" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                            <tr>
                            <td>
                                <img src="{{$message->embed('images/general/img-monde.jpg')}}" alt="" width="100%" height="140" style="display: block;" />
                            </td>
                            </tr>
                            <tr>
                            <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;">
                                <p style="margin: 0; font-weight: bold;">Stratégie de développement international </p>
                            </td>
                            </tr>
                        </table>
                        </td>
                        <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                        <td width="260" valign="top">
                        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                            <tr>
                            <td>
                                <img src="{{$message->embed('images/rse/mark.jpg')}}" alt="" width="100%" height="140" style="display: block;" />
                            </td>
                            </tr>
                            <tr>
                            <td style="color: #153643; font-family: Arial, sans-serif; font-size: 16px; line-height: 24px; padding: 25px 0 0 0;">
                                <p style="margin: 0; font-weight: bold;">Stratégie RSE</p>
                            </td>
                            </tr>
                        </table>
                        </td>
                    </tr>
                    </table>
                </td> --}}
                </tr>
            </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#021738" style="padding: 30px 30px;">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                <tr>
                <td style="color: #ffffff; font-family: Arial, sans-serif; font-size: 14px;">
                    <p style="margin: 0;"><span style="color: #fff; font-weight: bold">Email:</span> contact@edahtech.com<br/>
                   
                </td>
                <td align="right">
                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                    <tr>
                        <td>
                        <a target="_blank" href="https://www.edahtech.com/">
                            <img src="{{$message->embed('images/logo.png')}}" alt="EDAHTECH - Site officiel" width="300" height="300" style="display: block;" border="0" />
                        </a>
                        </td>
                        <td style="font-size: 0; line-height: 0;" width="20">&nbsp;</td>
                        <td>
                       
                        </td>
                    </tr>
                    </table>
                </td>
                </tr>
            </table>
            </td>
        </tr>
        </table>
        {{--    --}}
      </td>
    </tr>
  </table>
</body>
</html>

