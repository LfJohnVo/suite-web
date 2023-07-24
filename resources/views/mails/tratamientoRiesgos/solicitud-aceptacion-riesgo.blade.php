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

    <style>
        /* Remove space around the email design. */

        html,

        body {

            margin: 0 auto !important;

            padding: 0 !important;

            height: 100% !important;

            width: 100% !important;
        }

        /* Stop Outlook resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
        }


        /* Stop Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        /* Use a better rendering method when resizing images in Outlook IE. */

        img {
            -ms-interpolation-mode: bicubic;
        }


        /* Prevent Windows 10 Mail from underlining links. Styles for underlined links should be inline. */

        a {

            text-decoration: none;

        }
    </style>
</head>

<body style="margin:0;padding:0;">
    <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation"
                    style="width:602px;border-collapse:collapse;border:.5px solid #153643;border-spacing:0;text-align:left;">
                    {{-- <tr>
                        <td align="center" style="padding:40px 0 30px 0;background:#358765;">
                            <img src="https://image.flaticon.com/icons/png/512/4786/4786029.png" alt="" width="100"
                                style="height:auto;display:block; margin-bottom: 10px;" />
                            <h3 class="p-0 m-0"
                                style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif; color:white">
                                Sistema de Gestión Normativa - Tabantaj</h3>
                        </td>
                    </tr> --}}

                    <tr>

                        <td style="padding:36px 30px 42px 30px;">
                            <table role="presentation"
                                style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                <tr>
                                    <hr style="margin:0;width: 100%; height: 1.5px; background-color: #153643;">
                                    &nbsp;
                                    </hr>
                                    @php
                                        use App\Models\Organizacion;
                                        $organizacion = Organizacion::getFirst();
                                        $logotipo = $organizacion->logotipo;
                                        $empresa = $organizacion->empresa;
                                    @endphp
                                    <h2 style="padding-top:3px; color:#153643; text-align:center">
                                        {{ $empresa }}</h2>
                                    <hr style="margin:0;width: 100%; height:1.5px; background-color: #153643;">
                                    &nbsp;
                                    </hr>

                                    <td style="padding:0 0 36px 0;">

                                        <div class="caja_img_logo" style="margin-top:30px; text-align:center">
                                            <img width="160" src="{{ asset($logotipo) }}" class="mt-2 ml-4"
                                                style="width:160px;">
                                        </div>

                                        <div style="margin-top:50px;">
                                            <strong
                                                style="color:#153643; padding-top:40px; margin:0 0 14px 0;font-size:17px;line-height:24px;font-family:Arial,sans-serif;">
                                                Estimado(a) {{ $empleado->name }},
                                            </strong>
                                        </div>

                                        <div style="width: 100%; margin-top: 10px;">
                                            <p style="font-size:11pt; color:#153643;">
                                                Le informamos que derivado del riesgo identificado<strong>
                                                    {{ $tratamientoRiesgo->registro->name }}</strong>, solicita su firma
                                                de aceptación
                                            </p>
                                            <br>

                                            <ul>
                                                <li style="font-size:11pt;">ID:
                                                    <strong style="font-size:10pt;">
                                                        {{ $tratamientoRiesgo->identificador ? $tratamientoRiesgo->identificador : 'Sin registro' }}
                                                    </strong>
                                                </li>
                                                <li style="font-size:11pt;">Dueño:
                                                    <strong style="font-size:10pt;">
                                                        {{ $empleado->name ? $empleado->name : 'Sin registro' }}
                                                    </strong>
                                                </li>
                                                <li style="font-size:11pt;">Fecha compromiso:<strong
                                                        style="font-size:10pt;">
                                                        {{ \Carbon\Carbon::parse($tratamientoRiesgo->fechacompromiso)->format('d-m-Y') }}
                                                    </strong>
                                                </li>
                                                <li style="font-size:11pt">Proceso:
                                                    <strong style="font-size:10pt;">
                                                        {{ $tratamientoRiesgo->proceso ? $tratamientoRiesgo->proceso->nombre : 'Sin registro' }}</strong>
                                                </li>
                                                <li style="font-size:11pt">Tipo de Riesgo:
                                                    @if ($tratamientoRiesgo->tipo_riesgo == 1)
                                                        <strong style="font-size:10pt;">Positivo</strong>
                                                    @elseif($tratamientoRiesgo->tipo_riesgo == 0)
                                                        <strong style="font-size:10pt;">Negativo</strong>
                                                    @else
                                                        <strong style="font-size:10pt;">No hay dato</strong>
                                                    @endif
                                                </li>
                                                <li style="font-size:11pt">Riesgo Total:
                                                    <strong class="estilockedi" style="font-size:10pt;">
                                                        {{ $tratamientoRiesgo->riesgototal ? $tratamientoRiesgo->riesgototal : 'Sin registro' }}
                                                    </strong>
                                                </li>
                                                <li style="font-size:11pt;">Riesgo Residual:
                                                    <strong style="font-size:10pt;">
                                                        {{ $tratamientoRiesgo->riesgo_total_residual ? $tratamientoRiesgo->riesgo_total_residual : 'Sin registro' }}
                                                    </strong>
                                                </li>


                                            </ul>
                                            <span style="font-size:11pt; text-"><strong>Descripcion del Riesgo:</strong>
                                                <span style="font-size:10pt; text-align: justify !important;">
                                                    {!! $tratamientoRiesgo->descripcionriesgo ? $tratamientoRiesgo->descripcionriesgo : 'Sin registro' !!}
                                                </span>
                                            </span>


                                            <br>
                                            <br>
                                            <p style="font-size:11pt; color:#153643;">
                                                Para ingresar a revisar el riesgo dé clic en siguiente botón:
                                            </p>

                                            <div style="text-align:center; margin-top:20px">
                                                <a href="{{ route('admin.tratamiento-riesgos.show', $tratamientoRiesgo) }}"
                                                    style="text-decoration:none;padding-top:15px; border-radius:4px; display:inline-block; min-width:300px; height:35px ;color:#fff; font-size:11pt; background-color:#345183">
                                                    Revisar Riesgo
                                                </a>
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
                                        <hr style="margin:0; width: 100%; height: 1.5px; background-color: #153643;">
                                        &nbsp;
                                        </hr>

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
