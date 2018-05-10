<html>
<head>
<title>
Formulario para consultar en l&iacute;nea el Rating Nacional de Ajedrez M&eacute;xico
</title>
 <LINK href="estilo.css" rel="stylesheet" type="text/css">
<meta name="description" content="Formulario para consultar en linea (online) el Rating Nacional de Ajedrez en Tlaxcala Mexico" /> 
<meta name="keywords" content="consultar,rating,nacional,ajedrez,mexico,en,linea,online,gratis" /> 
<meta name="Author" content="Luigi Pérez Calzada (GianBros)" />
<!-- Código de Seguimiento de Gogole -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-9436178-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- end código de seguimiento de gogole -->

</head>
<body>

<div id="global">
	<div id="izq"></div>
	<div id="cen">
<?php
include('cabecera.php');
include('conexion.php');
$buscarnombrec=$_POST['input_nombrec'];
//$buscarNo=explode(' ',$buscarN);
//$buscar=$buscarNo[0];
//$archivo=fopen("artedrez/federacion","r");
$ban=false;
$id=false;$no=false;$ti=false;$as=false;$ra=false;$ge=false;$fn=false;$fl=false;
if(isset($_POST['id'])) $id=true;
if(isset($_POST['no'])) $no=true;
if(isset($_POST['ti'])) $ti=true;
if(isset($_POST['as'])) $as=true;
if(isset($_POST['ra'])) $ra=true;
if(isset($_POST['ge'])) $ge=true;
if(isset($_POST['fn'])) $fn=true;
if(isset($_POST['fl'])) $fl=true;

print '<b><Table border="3px"><tr>';
if($id==true) print '<td>Id</td>';
if($no==true) print '<td>Nombre</td>';
if($ti==true) print '<td>T&iacute;tulo</td>';
if($as==true) print '<td>Asociaci&oacute;n</td>';
if($ra==true) print '<td>Rating</td>';
if($ge==true) print '<td>G</td>';
if($fn==true) print '<td>Fecha</td>';
if($fl==true) print '<td>Flags</td>';
print '</tr></b>';

if(!$ban) print '<tr><td>El jugador no tiene Rating Nacional</td></tr>';
print '</table>';
//fclose($archivo);
print '<p style="font-size: 12px;"></br><i>Nota: Los jugadores que su nombre aparece en min&uacute;sculas significa que tienen Rating FIDE.</i>';
print '</br><i>Nota 2: Las asociaciones de: Tamaulipas(TMS), Nayarit(NAY) y Guanajuato(GTO) no tienen logo disponible.</i></p>';
print '<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/"><img alt="Licencia Creative Commons" style="border-width:0" src="http://i.creativecommons.org/l/by-nc-sa/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/InteractiveResource" property="dct:title" rel="dct:type">';
?>
<b><i style="font-size: 10px;">Design and Developed by GianBros (<a href="http://puraslineas.com">Luigi P&eacute;rez Calzada</a>)</i></b>
<i style="font-size: 10px;">Mayo, 2018.</i>
</div><!-- end center -->
<div id="der"></div>
</div><!-- end global -->
</body>
</html>
