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
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }

    </style>
</head>

<body style="margin:0;padding:0;">
    <table role="presentation"
        style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation"
                    style="width:602px;border-collapse:collapse;border:.5px solid #153643;border-spacing:0;text-align:left;">
                    <tr>
                        <td style="padding:36px 30px 42px 30px;">
                            <table role="presentation"
                                style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                <tr>
                                    <div style="width: 100%; height: 1.5px; background-color: #153643;">
                                        &nbsp;
                                    </div>
                                    @php
                                        use App\Models\Organizacion;
                                        $organizacion = Organizacion::first();
                                        $logotipo = $organizacion->logotipo;
                                        $empresa = $organizacion->empresa;
                                    @endphp
                                    <h2 style="padding-top:3px; color:#153643; text-align:center">
                                        {{ $empresa }}</h2>
                                    <div style="width: 100%; height:1.5px; background-color: #153643;">
                                        &nbsp;
                                    </div>

                                    <td style="padding:0 0 36px 0;">

                                        <div class="caja_img_logo" style="margin-top:30px; text-align:center">
                                            <img src="{{ asset($logotipo) }}" class="mt-2 ml-4"
                                                style="width:160px;">
                                        </div>

                                        <div style="margin-top:50px;">
                                            <strong
                                                style="color:#153643; padding-top:40px; margin:0 0 14px 0;font-size:17px;line-height:24px;font-family:Arial,sans-serif;">
                                                Estimado(a) {{ $empleado->name }},
                                            </strong>
                                        </div>

                                        <div style="width: 100%; margin-top: 10px;">
                                            <p style="font-size:11pt; color:#153643;text-align: left;">Nos complace
                                                darte la bienvenida
                                                al Sistema Integral <span
                                                    style="color:#4580ff;font-weight: bold;">TABANTAJ</span> donde
                                                podrás estar al tanto de lo que
                                                ocurre en <span
                                                    style="color:#4580ff;font-weight: bold;">{{ $empresa }}</span>
                                                y realizar múltiples actividades
                                                administrativas que hemos centralizado en esta plataforma para ti.
                                            </p>

                                            </p>
                                            <p style="font-size:11pt; color:#153643;text-align: left;">Éstas son tus
                                                credenciales de acceso:</p>
                                            <p style="font-size:11pt; color:#153643;text-align: left;">
                                                <strong>URL de Acceso: </strong><a
                                                    href="{{ config('app.url') }}">{{ config('app.url') }}</a>
                                            </p>
                                            <p style="font-size:11pt; color:#153643;text-align: left;">
                                                <strong>Usuario: </strong><span>{{ $empleado->email }}</span>
                                            </p>
                                            <p style="font-size:11pt; color:#153643;text-align: left;">
                                                <strong>Contraseña: </strong><span>{{ $password }}</span>
                                            </p>
                                            <br>
                                            <div style="text-align:center; margin-top:20px">
                                                <span
                                                    style="text-decoration:none;padding-top:15px; border-radius:4px; display:inline-block; min-width:300px; height:35px ;color:#fff; font-size:11pt; background-color:#345183">
                                                    <a href="{{ config('app.url') }}"
                                                        style="color:#fff">Comenzar</a></span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;background:#fff;">
                            <table role="presentation"
                                style="width:100%;border-collapse:collapse;border:0;border-spacing:30;font-size:9px;font-family:Arial,sans-serif;">
                                <tr>
                                    <td style="padding:0;width:30%;" align="left">
                                        <p style="text-align:center; font-size:10pt; color:#153643;">Por favor no
                                            responda a este correo</p>
                                        <div style="width: 100%; height: 1.5px; background-color: #153643;">
                                            &nbsp;
                                        </div>

                                        <p style="text-align:center;font-size:10pt;font-weight: normal;color:#153643;">
                                            SISTEMA INTEGRAL DE GESTIÓN EMPRESARIAL TABANTAJ</p>
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
