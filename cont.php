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
<META HTTP-EQUIV="Refresh" CONTENT="1; URL=contacto.html" target="_self">
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
<link href="estilosatn2.css" rel="stylesheet" type="text/css" />
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
//-->
</script>
<link href="estiloshelvecia.css" rel="stylesheet" type="text/css" />
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

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$empresa = $_POST['empresa'];
$cargo = $_POST['cargo'];
$comentario = $_POST['comentario'];

// Datos obligatorios ($correo, $nombre)
$ok = false;
if (filter_var($correo, FILTER_VALIDATE_EMAIL) && $nombre != '') $ok = true;

 // $to y $msg son los campos del formulario
   $fecha = date( "d/m/Y h:i", time() );
   $msg = "nNombre: $nombre\nTelefono : $telefono\nCorreo : $correo\nempresa : $empresa\ncargo : $cargo\ncomentario : $comentario";
   //$to ="correo@xx.cl" . ', ';
   $to = "ventas@vendomatica.cl";

if ($ok) mail($to,"Contacto Vendomatica: $fecha",$msg, "From: $correo\nBCC: ");
?>
  <table width="988" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td class="izquierda">&nbsp;</td>
      <td colspan="2" bgcolor="#F18E00"><table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="32%"><a href="index.html"><img src="images/logo.png" alt="logo vendomatica" width="309" height="75" border="0" /></a></td>
          <td width="41%" style="text-align:right; padding-right: 25px;"><a href="brochure.pdf" target="_blank">
        <img src="images/brochure.png" alt="brochure" width="150" height="50" border="0" id="Image0" onmouseover="MM_swapImage('Image0','','images/brochureb.png',1)" onmouseout="MM_swapImgRestore()" /></a></td>
          <td width="27%"><a href="servicio_cliente.html"><img src="images/servcliente.png" alt="servicio cliente" width="232" height="50" border="0" id="Image7" onMouseOver="MM_swapImage('Image1','','images/servclienteb.png',1)" onMouseOut="MM_swapImgRestore()" /></a></td>
        </tr>
      </table></td>
      <td class="derecha">&nbsp;</td>
    </tr>
    <tr>
      <td width="14" rowspan="3" class="izquierda">&nbsp;</td>
      <td width="222" height="503" rowspan="3" valign="top" class="celeste"><table width="222" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td colspan="3"><img src="images/nada.png" width="11" height="8" /></td>
        </tr>
        <tr>
          <td width="29" height="489">&nbsp;</td>
          <td width="7" bgcolor="#009de0"><img src="images/nada.png" width="11" height="8" /></td>
          <td width="186" valign="top" bgcolor="#009de0"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td colspan="2"><img src="images/nada.png" width="12" height="18" /></td>
            </tr>
            <tr>
              <td colspan="2"><a href="pide_tu_maquina.html"><img src="images/pide.png" width="158" height="75" border="0" id="Image8" onMouseOver="MM_swapImage('Image2','','images/pideb.png',1)" onMouseOut="MM_swapImgRestore()" /></a></td>
            </tr>
            <tr>
              <td colspan="2"><img src="images/nada.png" width="12" height="18" /></td>
            </tr>
            <tr>
              <td width="8%" height="28"><img src="images/bullet1.png" width="7" height="12" alt="bullet" /></td>
              <td width="92%" class="botoneralat1">Soluciones a tu medida</td>
            </tr>
            <tr>
              <td height="38">&nbsp;</td>
              <td height="38" class="bots1"><a href="empresasMenos40Empleados.html">Empresas con<br />
                menos de 40 personas</a>
            </td></tr>
            <tr>
              <td height="5" colspan="2"><img src="images/nada.png" width="116" height="5" /></td>
            </tr>
            <tr>
              <td height="38">&nbsp;</td>
              <td height="38" class="bots1"><a href="empresasMas40Empleados.html">Empresas con<br />
                m&aacute;s de 40 personas</a>
            </td></tr>
            <tr>
              <td height="28"><img src="images/bullet1.png" width="7" height="12" alt="bullet" /></td>
              <td><span class="botoneralat1">Nuestros Productos</span></td>
            </tr>
            <tr>
              <td height="22">&nbsp;</td>
              <td class="bots2"><a href="productosCafeteria.html">Caf&eacute;</a></td>
            </tr>
            <tr>
              <td height="5" colspan="2"><img src="images/nada.png" width="116" height="5" /></td>
            </tr>
            <tr>
              <td height="21">&nbsp;</td>
              <td class="bots2"><a href="snaks.html">Snacks</a>
            </td></tr>
            <tr>
              <td height="5" colspan="2"><img src="images/nada.png" width="116" height="5" /></td>
            </tr>
            <tr>
              <td height="22">&nbsp;</td>
              <td class="bots2"><a href="jugosyBebidas.html">Jugos y bebidas</a></td>
            </tr>
            <tr>
              <td height="5" colspan="2"><img src="images/nada.png" width="116" height="5" /></td>
              </tr>
            <tr>
              <td height="22">&nbsp;</td>
              <td class="bots2"><a href="mixsaludable.html">Mix Saludable</a></td>
            </tr>
            <tr>
              <td height="33"><img src="images/bullet1.png" width="7" height="12" alt="bullet" /></td>
              <td><span class="botoneralat2">Nuestra Empresa</span></td>
            </tr>
            <tr>
              <td height="22">&nbsp;</td>
              <td class="bots2">Servicio T&eacute;cnico</td>
            </tr>
            <tr>
              <td height="5" colspan="2"><img src="images/nada.png" width="116" height="5" /></td>
              </tr>
            <tr>
              <td height="22">&nbsp;</td>
              <td class="bots2"><a href="nuestraEmpresa2.html">Great Place to Work</a></td>
            </tr>
            <tr>
              <td height="5" colspan="2"><img src="images/nada.png" width="116" height="5" /></td>
              </tr>
            <tr>
              <td height="22">&nbsp;</td>
              <td class="bots2"><a href="trabajaConNosotros.html">Trabaja con nosotros</a></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td colspan="3"><img src="images/nada.png" width="11" height="5" /></td>
        </tr>
      </table></td>
      <td width="738" height="44" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td width="31%" height="44" align="center" valign="middle"><a href="paraTusColaboradores.html"><img src="images/b1.png" width="228" height="44" border="0" id="Image9" onMouseOver="MM_swapImage('Image3','','images/b1b.png',1)" onMouseOut="MM_swapImgRestore()" /></a></td>
          <td width="24%" align="center" valign="middle"><a href="paraTusClientes.html"><img src="images/b2.png" width="175" height="44" border="0" id="Image10" onMouseOver="MM_swapImage('Image4','','images/b2b.png',1)" onMouseOut="MM_swapImgRestore()" /></a></td>
          <td width="4%" align="center" valign="middle"><a href="paraTusReuniones.html"><img src="images/b3.png" width="206" height="44" border="0" id="Image11" onMouseOver="MM_swapImage('Image5','','images/b3b.png',1)" onMouseOut="MM_swapImgRestore()" /></a></td>
          <td width="41%" align="center" valign="middle"><img src="images/b4b.png" width="129" height="44" border="0" id="Image12" onMouseOver="MM_swapImage('Image6','','images/b4b.png',1)" onMouseOut="MM_swapImgRestore()" /></td>
        </tr>
      </table></td>
      <td width="14" rowspan="3" class="derecha">&nbsp;</td>
    </tr>
    <tr>
      <td height="251" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="flow">
        <tr>
          <td width="61%" height="251" align="left"><table width="99%" height="228" border="0" align="left" cellpadding="0" cellspacing="0">
            <tr>
              <td width="381" height="228" align="center" valign="middle" class="botonerasup">Gracias por hacer tu pedido <br>
                te contactaremos a la brevedad.</td>
            </tr>
          </table></td>
          <td width="39%"><img src="images/cont.png" width="263" height="265" /></td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td height="187" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0" class="cafe3">
        <tr>
          <td width="19" height="36"><img src="images/nada.png" width="21" height="33" /></td>
          <!--<td width="675" valign="bottom"><span class="tituloceleste2"><img src="images/contacto.jpg" alt="T&eacute; Lipton" width="106" height="36" /></span></td>-->
          <td width="44" align="right">&nbsp;</td>
        </tr>
        <tr>
          <td width="19" height="154">&nbsp;</td>
          <td class="ptsans"><table width="493" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <!--<td width="493"><p class="ptsans">Si lo prefiere cont&aacute;ctenos a los telefonos:<br />
                <strong>Servicio Clientes:</strong> <strong><span class="botonerasupnaranja"> 800 207090</span></strong><br />
                <strong>desde celulares :</strong> <strong><span class="botonerasupnaranja">(56-2) 256 00620</span></strong><strong><br />
                  </strong><br />
                Casa Matriz: El Rosal 4601, Huechuraba, Santiago, Chile<br />
                E-mail: ventas@vendomatica.cl </p></td>-->
            </tr>
          </table></td>
          <td align="right">&nbsp;</td>
        </tr>
      </table></td>
    </tr>
    <tr>
      <td colspan="4"><img src="images/pie.png" alt="vendomatica s.a" width="988" height="69" /></td>
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
