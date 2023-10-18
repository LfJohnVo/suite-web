@extends('layouts.admin')
@section('content')
    <style>
        .card-main {
            top: 135px;
            left: 286px;
            width: 1146px;
            height: 138px;
            /* UI Properties */
            background: #3B7EB2;
            border-radius: 8px;
            opacity: 1;
            display: flex;
            align-items: center;
            /* Centra verticalmente los elementos en el contenedor */
        }

        .titulo-card {
            /* UI Properties */
            font: var(--unnamed-font-style-normal) normal 600 var(--unnamed-font-size-20)/27px Segoe UI;
            letter-spacing: var(--unnamed-character-spacing-0);
            color: var(--unnamed-color-ffffff);
            text-align: left;
            font: normal normal 600 20px/27px Segoe UI;
            letter-spacing: 0px;
            color: #FFFFFF;
            opacity: 1;
            margin-bottom: 55px;
        }

        .texto-card {
            font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-normal) 12px/16px Segoe UI;
            letter-spacing: var(--unnamed-character-spacing-0);
            color: var(--unnamed-color-ffffff);
            text-align: left;
            font: normal normal normal 12px/16px Segoe UI;
            letter-spacing: 0px;
            color: #FFFFFF;
            opacity: 1;
            margin-right: 60px;
            margin-left: 20px:
        }

        .container {
            display: flex;
            align-items: center;
            /* Centra verticalmente los elementos en el contenedor */
        }

        .left-image {
            flex: 0.25;
            /* El 50% del ancho disponible para la imagen */
        }

        .right-content {
            flex: 3;
            /* El 50% del ancho disponible para el contenido */
        }

        .titulo {
            text-align: left;
            font: normal normal 600 24px Segoe UI;
            letter-spacing: 0px;
            color: #2567AE;
            opacity: 1;
            margin-left: 5px;
            margin-bottom: 12px;
        }

        .display-analisis {
            /* Layout Properties */
            width: 410px;
            height: 402px;
            /* UI Properties */
            background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 1px 4px #00000024;
            border-radius: 14px;
            opacity: 1;
            margin-top: 30px;
            margin-bottom: 100px;
        }

        .titulo-display-analisis {
            /* UI Properties */
            font: var(--unnamed-font-style-normal) normal medium 13px/16px var(--unnamed-font-family-roboto);
            letter-spacing: var(--unnamed-character-spacing-0);
            color: var(--unnamed-color-606060);
            text-align: center;
            font: normal normal medium 13px/16px Roboto;
            letter-spacing: 0px;
            color: #606060;
            opacity: 1;
        }

        .boton-display {
            /* Layout Properties */
            top: 595px;
            left: 541px;
            width: 100px;
            height: 35px;
            /* UI Properties */
            background: #0489FE 0% 0% no-repeat padding-box;
            box-shadow: 0px 1px 4px #00000029;
            opacity: 1;
            font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-normal) var(--unnamed-font-size-14)/17px var(--unnamed-font-family-roboto);
            letter-spacing: var(--unnamed-character-spacing-0);
            color: var(--unnamed-color-ffffff);
            text-align: center;
            font: normal normal normal 17px Roboto;
            letter-spacing: 0px;
            color: #FFFFFF;
            border-radius: 4px;
            margin: 15px 155px 0px 155px;
            padding-top: 6px;
        }

        .letra-boton-display {
            font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-normal) var(--unnamed-font-size-14)/17px var(--unnamed-font-family-roboto);
            letter-spacing: var(--unnamed-character-spacing-0);
            color: var(--unnamed-color-ffffff);
            text-align: center;
            font: normal normal normal 17px Roboto;
            letter-spacing: 0px;
            color: #FFFFFF;
        }

        .card-datos {
            /* Layout Properties */
            top: 309px;
            left: 286px;
            width: 1146px;
            height: 296px;
            /* UI Properties */
            background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 1px 4px #0000000F;
            border-radius: 8px;
            opacity: 1;
            margin: 30px 0px 30px 0px;
        }

        .card-middle-datos {
            /* Layout Properties */
            top: 625px;
            left: 286px;
            width: 1146px;
            height: 240px;
            /* UI Properties */
            background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 1px 4px #0000000F;
            border-radius: 8px;
            opacity: 1;
            margin: 30px 0px 30px 0px;
        }

        .card-small-datos {
            /* Layout Properties */
            top: 884px;
            left: 286px;
            width: 1146px;
            height: 62px;
            /* UI Properties */
            background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 1px 4px #0000000F;
            border-radius: 8px;
            opacity: 1;
            margin: 30px 0px 30px 0px;
        }

        .seccion {
            /* Layout Properties */
            top: 966px;
            left: 286px;
            width: 121px;
            height: 29px;
            /* UI Properties */
            background: var(--unnamed-color-306ba9) 0% 0% no-repeat padding-box;
            background: #306BA9 0% 0% no-repeat padding-box;
            border-radius: 10px 10px 0px 0px;
            opacity: 1;
            /* UI Properties */
            font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-normal) 18px/var(--unnamed-line-spacing-20) var(--unnamed-font-family-roboto);
            letter-spacing: var(--unnamed-character-spacing-0);
            color: var(--unnamed-color-ffffff);
            text-align: left;
            font: normal normal normal 18px/20px Roboto;
            letter-spacing: 0px;
            color: #FFFFFF;
            padding-left: 20px;
            padding-top: 5px;
        }

        .linea-seccion {
            top: 986px;
            left: 286px;
            width: 1146px;
            height: 11px;
            background: var(--unnamed-color-306ba9) 0% 0% no-repeat padding-box;
            background: #306BA9 0% 0% no-repeat padding-box;
            border-radius: 0px 10px 0px 0px;
            opacity: 1;
        }

        .card-seccion {
            top: 987px;
            left: 286px;
            width: 1146px;
            height: 186px;
            /* UI Properties */
            background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 1px 4px #0000000F;
            border-radius: 0px 8px 0px 8px;
            opacity: 1;
            margin-bottom: 30px;
        }

        .card-formulario-seccion {
            /* Layout Properties */
            top: 1193px;
            left: 286px;
            width: 1146px;
            height: 244px;
            /* UI Properties */
            background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
            background: #FFFFFF 0% 0% no-repeat padding-box;
            box-shadow: 0px 1px 4px #0000000F;
            border-radius: 8px;
            opacity: 1;
            margin-bottom: 30px;
        }

        .titulo-card-template {
            /* UI Properties */
            color: var(--unnamed-color-306ba9);
            text-align: left;
            font: 20px Roboto;
            letter-spacing: 0px;
            color: #306BA9;
            opacity: 1;
            padding: 20px 0px 0px 40px;
        }

        .data-descripcion-card {
            top: 1058px;
            left: 316px;
            width: 936px;
            height: 86px;
            /* UI Properties */
            border: 1px solid var(--unnamed-color-d5d5d5);
            background: #F8FAFC 0% 0% no-repeat padding-box;
            border: 1px solid #D5D5D5;
            border-radius: 4px;
            opacity: 1;
            margin: 0px 20px 20px 20px;
        }
        .form-name-norm{
            /* Layout Properties */
            top: 413px;
            left: 316px;
            width: 532px;
            height: 48px;
            /* UI Properties */
            border: 1px solid var(--unnamed-color-d5d5d5);
            background: #F8FAFC 0% 0% no-repeat padding-box;
            border: 1px solid #D5D5D5;
            border-radius: 4px;
            opacity: 1;
        }
        .form-descripcion{
            top: 481px;
            left: 316px;
            width: 1075px;
            height: 86px;
            /* UI Properties */
            border: 1px solid var(--unnamed-color-d5d5d5);
            background: #F8FAFC 0% 0% no-repeat padding-box;
            border: 1px solid #D5D5D5;
            border-radius: 4px;
            opacity: 1;
            margin: 10px 0px 0px 6px;
        }
        .sub-estatus-valor{
            /* UI Properties */
            font: italic normal var(--unnamed-font-weight-normal) var(--unnamed-font-size-14)/var(--unnamed-line-spacing-20) var(--unnamed-font-family-roboto);
            letter-spacing: var(--unnamed-character-spacing-0);
            color: var(--unnamed-color-606060);
            text-align: left;
            font: italic normal normal 14px/20px Roboto;
            letter-spacing: 0px;
            color: #606060;
            opacity: 1;
            margin: 10px 0px 0px 40px;
        }
        .estatus{
            /* Layout Properties */
            top: 785px;
            left: 316px;
            width: 159px;
            height: 41px;
            /* UI Properties */
            border: 1px solid var(--unnamed-color-057be2);
            background: #F8FAFC 0% 0% no-repeat padding-box;
            border: 1px solid #057BE2;
            opacity: 1;
        }
        .valor{
            /* Layout Properties */
            top: 785px;
            left: 484px;
            width: 51px;
            height: 41px;
            /* UI Properties */
            border: 1px solid var(--unnamed-color-057be2);
            background: #F8FAFC 0% 0% no-repeat padding-box;
            border: 1px solid #057BE2;
            border-radius: 4px;
            opacity: 1;
            /* UI Properties */
            font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-normal) var(--unnamed-font-size-14)/19px var(--unnamed-font-family-roboto);
            letter-spacing: var(--unnamed-character-spacing-0);
            color: var(--unnamed-color-5a5a5a);
            text-align: center;
            font: 14px Roboto;
            letter-spacing: 0px;
            color: #5A5A5A;
        }
        .valor-form{
            /* Layout Properties */
            top: 785px;
            left: 484px;
            width: 51px;
            height: 41px;
            /* UI Properties */
            border: 1px solid var(--unnamed-color-057be2);
            background: #F8FAFC 0% 0% no-repeat padding-box;
            border: 1px solid #057BE2;
            border-radius: 4px;
            opacity: 1;
            /* UI Properties */
            font: var(--unnamed-font-style-normal) normal var(--unnamed-font-weight-normal) var(--unnamed-font-size-14)/19px var(--unnamed-font-family-roboto);
            letter-spacing: var(--unnamed-character-spacing-0);
            color: var(--unnamed-color-5a5a5a);
            text-align: center;
            font: 11px Roboto;
            letter-spacing: 0px;
            color: #5A5A5A;
        }
        .filtro-seccion{
            top: 905px;
            left: 1249px;
            width: 51px;
            height: 31px;
            border: 1px solid var(--unnamed-color-d5d5d5);
            background: #F8FAFC 0% 0% no-repeat padding-box;
            border: 1px solid #D5D5D5;
            border-radius: 4px;
            opacity: 1;
        }
        .añadir-seccion{
            /* UI Properties */
            font: normal normal normal 20px Roboto;
            letter-spacing: 0px;
            color: #057BE2;
        }
        .card-body.card {
            box-shadow: 0px 1px 4px #0000000F;
            border-radius: 8px;
        }
    </style>
    <h5 class="titulo">Construir Evaluación para medir el cumplimiento del Análisis de Brechas</h5>

    <div class="card-main">
        <div class="left-image">
            <img src="{{ asset('assets/Rectángulo 2344@2x.png') }}"
                style="margin: 9px 10px 10px 10px; width: 128px; height: 119px;">
        </div>
        <div class="right-content">
            <div class="">
                <div class="titulo-card" style="margin-left:15px;">Crea tu template
                    <div class="texto-card" style="margin-top:10px;">Genera tus preguntas y personaliza tus campos según lo
                        requieras
                    </div>
                    <div class="texto-card" style="margin-top:5px;">
                        Elaboraremos nuestro cuestionario que nos permitirá
                        evaluar el
                        cumplimiento de nuestra norma selaccionada.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-body mt-5">
        <div style="color:#306BA9; font-size:16px;">Datos Generales</div>
        <hr style="margin: 20px 32px 0px 32px;">
        <form>
            <div class="form-row" style="">
              <div class="col-md-6">
                <div class="form-group ">
                    <input type="text" class="form-control" value="">
                    <label>Nombre del Template</label>
                </div>
              </div>
              <div class="form-group col-md-6 ">
                <select id="inputState" class="form-control ">
                  <option selected>Norma</option>
                  <option>...</option>
                </select>
              </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control">
                        </textarea>
                        <label>Descripción</label>
                      </div>
                  </div>
              </div>
          </form>
    </div>
    <div class="card-middle-datos">
        <div class="titulo-card-template">Define el valor de los parámetros con los que se evaluará tu cuestionario
        </div>
        <div class="sub-estatus-valor">
            Estatus: Define el nombre de tu parámetro
        </div>
        <div class="sub-estatus-valor">
            Valor: Agrega el valor de tu parámetro con los que se evaluará tu cuestionario
        </div>
        <form>
            <div class="form-row" style="margin:30px 30px 10px 35px;">
            <div class="col-md-2">
                <input type="text" class="form-control estatus" placeholder="Estatus">
            </div>
            <div class="col-md-1">
                <input type="text" class="form-control valor-form" placeholder="Valor" style="font: 5px;">
            </div>
              <div class="col-md-2">
                <input type="text" class="form-control estatus" placeholder="Estatus">
              </div>
              <div class="col-md-1">
                <input type="text" class="form-control valor-form" placeholder="Valor" style="font: 5px;">
              </div>
              <div class="col-md-2">
                <input type="text" class="form-control estatus" placeholder="Estatus">
              </div>
              <div class="col-md-1">
                <input type="text" class="form-control valor-form" placeholder="Valor" style="font: 5px;">
              </div>
              <div class="col-md-2">
                <input type="text" class="form-control estatus" placeholder="Estatus">
              </div>
              <div class="col-md-1">
                <input type="text" class="form-control valor-form" placeholder="Valor" style="font: 5px;">
              </div>
            </div>
          </form>
    </div>
    <div class="card-small-datos">
        <div class="form-row" style="margin:30px 30px 10px 35px;">
            <div class="col-md-8 titulo-card-template" style="padding-top: 20px;">
                Define el valor de los parámetros con los que se evaluará tu cuestionario
            </div>
            <div class="col-md-2 añadir-seccion" style="padding-top: 20px; padding-left:41px;">
                Añadir Sección
            </div>
            <div class="col-md-2" style="padding-top: 18px;">
                <select id="inputState" class="form-control filtro-seccion">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
            </div>
        </div>
    </div>
    <div>
        <div class="seccion">Sección 1</div>
        <div class="linea-seccion"></div>
        <div class="card-seccion">
            <div>
                <div class="data-descripcion-card">Descripcion*
                </div>
            </div>
        </div>
        <div class="card-formulario-seccion"></div>
    </div>
@endsection
