<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <link href='http://fonts.googleapis.com/css?family=Dosis:400,700|PT+Sans:400,700' rel='stylesheet' type='text/css'>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta name="keywords" content="dise�o de paginas web, dise�o, dise�o web, dise�o de sitios web, web, chile, santiago, animacion, flash, internet, websites, Dise�o, diseno, web, dise�o web, multimedia, cdrom, paginas web, powerpoint, presentaciones, imagen corporativa, dise�o grafico, chile, santiago, animacion, vizcarra, julio, julio vizcarra, on line, dise�o on line, agencia, publicidad, mailings, mails, vizcarra.cl, banners, popup, banner, 3D, hile, santiago">
        <meta name="description" content="Dise�o on Line. Dise�o y programaci�n de sitios web.">
        <meta name="author" content="Dise�o on Line, Julio Vizcarra">
        <meta name="robots" content="all">
        <link rel="shortcut icon" href="favicon.ico">
        <title>Vendomatica S.A. Contacto</title>
        <META HTTP-EQUIV="Refresh" CONTENT="1; URL=pideform.html" target="_self">
            <style type="text/css">
                <!--
                body {
                margin-left: 0px;
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
                background-color: #FFFFFF;
                background-image: url(images/fondo.jpg);
                }
                -->
            </style>

            <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
            <style type="text/css">
                <!--
                .style1 {
                font-size: 11px;
                font-family: Arial, Helvetica, sans-serif;
                font-weight: bold;
                }
                .style4 {font-size: 11px; font-family: Arial, Helvetica, sans-serif;}
                .style2 {color: #E4E4E4}
                .style3 {color: #FF0000}
                -->
            </style>
            <link href="estilodemnex.css" rel="stylesheet" type="text/css" />
            <style type="text/css">
                <!--
                .style8 {font-size: 22px}
                .style7 {font-size: 17px}
                .style8 {color: #8FA799}
                -->
            </style>
            <style type="text/css">
                .style11 {font-size: 11px; font-family: Arial, Helvetica, sans-serif;}
                .style5 {font-size: 14px}
                .style6 {font-size: 16px;
                    font-weight: bold;
                }
                .style71 {font-size: 18px}
                .style81 {font-size: 24px}
            </style>
            <link href="estilossitio2011.css" rel="stylesheet" type="text/css">
            <style type="text/css">
                a:link {
                    color: #FFF;
                    text-decoration: none;
                }
                a:visited {
                    text-decoration: none;
                    color: #FFF;
                }
                a:hover {
                    text-decoration: none;
                    color: #FEC978;
                }
                a:active {
                    text-decoration: none;
                    color: #FFF;
                }
                .style111 {	font-size: 12px;
                    color: #FFFFFF;
                    font-family: Arial, Helvetica, sans-serif;
                    font-weight: bold;
                }
            </style>
            <link href="estilosvendomatica.css" rel="stylesheet" type="text/css">
            </head>

        <body>
            <div align="center">
                <?php

$empresa = $_POST['empresa'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$rut = $_POST['rut'];
$maquina = $_POST['maquina'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$rut = $_POST['rut'];
$celular = $_POST['celular'];
$telefono_fijo = $_POST['telefono_fijo'];

// Datos obligatorios ($correo, $nombre)
$ok = false;
if (filter_var($correo, FILTER_VALIDATE_EMAIL) && $nombre != '') $ok = true;

// $to y $msg son los campos del formulario
$fecha = date( "d/m/Y h:i", time() );
$msg = "nempresa: $empresa\ndireccion : $direccion\ntelefono : $telefono\nrut : $rut\nmaquina : $maquina\nnombre : $nombre\ncorreo : $correo\nrut : $rut\ncelular : $celular\ntelefono_fijo : $telefono_fijo";
//ventas@vendomatica.cl;
$to = "ventas@vendomatica.cl";
//$to = "gonzalo.salas@vendomatica.cl";

if ($ok) mail($to,"Pedido de Maquina Vendomatica: $fecha",$msg, "From: $correo\nBCC: ");
                ?>
                <table width="430" border="0" align="left" cellpadding="0" cellspacing="0">
                    <tr>
                        <td width="4%" valign="middle" class="estilo2">&nbsp;</td>
                        <td width="96%" height="44" valign="middle" class="ptsans"><img src="images/pidetumaquina2.png" width="183" height="37" /></td>
                    </tr>
                    <tr>
                        <td valign="middle" class="estilo2">&nbsp;</td>
                        <td height="351" align="center" valign="middle" class="ptsans"><span class="botonerasup">Gracias por contactarnos<br>
                            le responderemos a la brevedad.</span></td>
                    </tr>
                </table>
            </div>
            <script type="text/javascript">

                var _gaq = _gaq || [];
                _gaq.push(['_setAccount', 'UA-16593056-6']);
                _gaq.push(['_trackPageview']);

                (function() {
                    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                })();

            </script>
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                                        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                ga('create', 'UA-39807662-1', 'vendomatica.cl');
                ga('send', 'pageview');

            </script>
            <!-- Google Code for Conversi&oacute;n MarketingOnline Google Adwords Conversion Page -->
            <script type="text/javascript">
                /* <![CDATA[ */
                var google_conversion_id = 1003971554;
                var google_conversion_language = "es";
                var google_conversion_format = "2";
                var google_conversion_color = "ffffff";
                var google_conversion_label = "r65ACOa5ywQQ4sfd3gM";
                var google_conversion_value = 0;
                /* ]]> */
            </script>
            <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
            </script>
            <noscript>
                <div style="display:inline;">
                    <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1003971554/?value=0&amp;label=r65ACOa5ywQQ4sfd3gM&amp;guid=ON&amp;script=0"/>
                </div>
            </noscript>

        </body>
        </html>
