<?php 
$id=$_GET['id'];
$event=$_GET['event'];
$pad=$_GET['paq'];
setlocale(LC_MONETARY, 'es_MX');
include('connect.php');
$query="SELECT paquete.id_paquete as paq,evento.nombre as nombre,evento.desde as desde,coordinador.nombre as coord,habitacion.costo as a,habitacion.desc as a2,barra.costo as b,barra.desc as b2 ,opcionespaquete.costo as c,opcionespaquete.descripcion as c2, extrapaq.desc as e2,extrapaq.costo as e FROM paquete inner join habitacion on paquete.id_hab=habitacion.id_hab inner join barra on paquete.id_barra=barra.id_barra inner join opcionespaquete on paquete.id_opcion=opcionespaquete.id_opcion inner join coordinador on paquete.id_coord=coordinador.id_coord inner join evento on paquete.id_evento=evento.id_evento inner join extrapaq on paquete.id_extra=extrapaq.id_extra where paquete.id_evento='$event' and paquete.id_cliente='$id' ";
$link=mysql_connect($server,$dbuser,$dbpass);
$result=mysql_db_query($database,$query,$link);
while($row = mysql_fetch_array($result))
{
	$evento=$row['nombre'];
	$coord=$row['coord'];
	$desde=$row['desde'];
	$paq=$row['paq'];
	$descpaq=$row['c2'];
	$hab=$row['a'];
	$habdesc=$row['a2'];
	$barra=$row['b'];
	$barradesc=$row['b2'];
	$opciones=$row['c'];
	$extradesc=$row['e2'];
	$extra=$row['e'];
	$total=$row['a']+$row['b']+$row['c']+$row['e'];
	//$congreso=($row['d']==0)? 'No aplica' : '0';

}
mysql_free_result($result);
mysql_close($link);	

/////////////Suma extras
/*$query="select congreso from paquete where id_evento='$event' and id_cliente='$id' ";
							$link=mysql_connect($server,$dbuser,$dbpass);
							$result=mysql_db_query($database,$query,$link);
							while($row = mysql_fetch_array($result))
							{
								$band2=$row['congreso'];
							}
							mysql_free_result($result);
							mysql_close($link);*/
//$band2=0;
//$total=0;                                              
							
/*$query="SELECT paquete.id_paquete as paq ,habitacion.costo as a,barra.costo as b ,opcionespaquete.costo as c,congreso.costo as d FROM paquete inner join habitacion on paquete.id_hab=habitacion.id_hab inner join barra on paquete.id_barra=barra.id_barra inner join opcionespaquete on paquete.id_opcion=opcionespaquete.id_opcion where paquete.id_evento='$event' and paquete.id_cliente='$id' ";
							$link=mysql_connect($server,$dbuser,$dbpass);
							$result=mysql_db_query($database,$query,$link);
							while($row = mysql_fetch_array($result))
							{
							$paq=$row['paq'];
							if($band2==0){
								//no suma precio de congreso
								$total=$row['a']+$row['b']+$row['c'];
								}
								else
								{
								//suma precio de congreso
								//$total=$row['a']+$row['b']+$row['c']+$row['d'];
								}
							}
							mysql_free_result($result);
							mysql_close($link);   */  
							$query="SELECT * FROM contrato where id_cliente='$id'";
$link=mysql_connect($server,$dbuser,$dbpass);
$result=mysql_db_query($database,$query,$link);
while($row = mysql_fetch_array($result))
{
	$idcontract=($row['id_contrato']==null)?"001":"00".$row['id_contrato'];

	
}
mysql_free_result($result);
mysql_close($link);		                             				
  ?>

<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content="Microsoft Excel 14">
<link rel=File-List href="anexo_archivos/filelist.xml">
<!--[if !mso]>
<style>
\:* {behavior:url(#default#VML);}
\:* {behavior:url(#default#VML);}
\:* {behavior:url(#default#VML);}
.shape {behavior:url(#default#VML);}
</style>
<![endif]-->
<style>
<!--table
	{mso-displayed-decimal-separator:"\.";
	mso-displayed-thousand-separator:"\,";}
@page
	{margin:.75in .7in .75in .7in;
	mso-header-margin:.3in;
	mso-footer-margin:.3in;}
.font0
	{color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;}
.font7
	{color:black;
	font-size:11.0pt;
	font-weight:700;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;}
.style16
	{mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	mso-style-name:Moneda;
	mso-style-id:4;}
.style0
	{mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	white-space:nowrap;
	mso-rotate:0;
	mso-background-source:auto;
	mso-pattern:auto;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	border:none;
	mso-protection:locked visible;
	mso-style-name:Normal;
	mso-style-id:0;}
td
	{mso-style-parent:style0;
	padding:0px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	border:none;
	mso-background-source:auto;
	mso-pattern:auto;
	mso-protection:locked visible;
	white-space:nowrap;
	mso-rotate:0;}
.xl65
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;
	border:.5pt solid windowtext;}
.xl66
	{mso-style-parent:style16;
	font-size:9.0pt;
	font-weight:700;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	border:.5pt solid windowtext;}
.xl67
	{mso-style-parent:style0;
	mso-number-format:"Short Time";
	text-align:left;
	border:.5pt solid windowtext;}
.xl68
	{mso-style-parent:style16;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	border:.5pt solid windowtext;}
.xl69
	{mso-style-parent:style0;
	mso-number-format:"Short Time";
	text-align:left;
	border:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;}
.xl70
	{mso-style-parent:style16;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	border:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;}
.xl71
	{mso-style-parent:style0;
	color:#00B050;
	font-weight:700;
	text-align:center;
	border:.5pt solid windowtext;
	mso-protection:unlocked visible;}
.xl72
	{mso-style-parent:style0;
	color:#00B050;
	font-weight:700;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl73
	{mso-style-parent:style0;
	color:#00B050;
	font-weight:700;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;}
.xl74
	{mso-style-parent:style0;
	font-size:8.0pt;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;
	white-space:normal;}
.xl75
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	vertical-align:middle;}
.xl76
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#366092;
	mso-pattern:black none;}
.xl77
	{mso-style-parent:style0;
	text-align:center;}
.xl78
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;}
.xl79
	{mso-style-parent:style16;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:center;}
.xl80
	{mso-style-parent:style16;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:left;
	mso-protection:unlocked visible;
	padding-left:24px;
	mso-char-indent-count:2;}
.xl81
	{mso-style-parent:style16;
	color:white;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:center;}
.xl82
	{mso-style-parent:style16;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";}
.xl83
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;}
.xl84
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;
	border:.5pt solid windowtext;
	background:#B8CCE4;
	mso-pattern:black none;}
.xl85
	{mso-style-parent:style16;
	font-size:9.0pt;
	font-weight:700;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	border:.5pt solid windowtext;
	background:#B8CCE4;
	mso-pattern:black none;}
.xl86
	{mso-style-parent:style0;
	color:#00B050;
	font-weight:700;
	text-align:center;
	border:.5pt solid windowtext;
	background:#B8CCE4;
	mso-pattern:black none;}
.xl87
	{mso-style-parent:style16;
	font-size:9.0pt;
	font-weight:700;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0_-\;\\-\0022$\0022* \#\,\#\#0_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:left;
	border:.5pt solid windowtext;}
.xl88
	{mso-style-parent:style16;
	font-size:9.0pt;
	font-weight:700;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0_-\;\\-\0022$\0022* \#\,\#\#0_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:left;
	border:.5pt solid windowtext;
	background:#B8CCE4;
	mso-pattern:black none;}
.xl89
	{mso-style-parent:style16;
	font-size:9.0pt;
	font-weight:700;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0_-\;\\-\0022$\0022* \#\,\#\#0_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:left;
	vertical-align:middle;
	border:.5pt solid windowtext;}
.xl90
	{mso-style-parent:style0;
	color:#00B050;
	font-weight:700;
	text-align:center;
	border:.5pt solid windowtext;
	background:#B8CCE4;
	mso-pattern:black none;
	mso-protection:unlocked visible;}
.xl91
	{mso-style-parent:style0;
	color:#00B050;
	font-weight:700;
	text-align:center;
	border:.5pt solid windowtext;}
.xl92
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#366092;
	mso-pattern:black none;}
.xl93
	{mso-style-parent:style16;
	color:white;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#366092;
	mso-pattern:black none;
	white-space:normal;}
.xl94
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#366092;
	mso-pattern:black none;}
.xl95
	{mso-style-parent:style0;
	font-size:9.0pt;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl96
	{mso-style-parent:style16;
	font-size:9.0pt;
	font-weight:700;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl97
	{mso-style-parent:style0;
	color:#00B050;
	font-weight:700;
	text-align:center;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl98
	{mso-style-parent:style0;
	mso-number-format:"Short Time";
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;}
.xl99
	{mso-style-parent:style16;
	font-weight:700;
	mso-number-format:"\0022$\0022\#\,\#\#0\;\[Red\]\\-\0022$\0022\#\,\#\#0";
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;}
.xl100
	{mso-style-parent:style0;
	mso-number-format:"Short Time";
	text-align:left;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl101
	{mso-style-parent:style16;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	border-top:none;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl102
	{mso-style-parent:style16;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;}
.xl103
	{mso-style-parent:style0;
	color:#00B050;
	font-weight:700;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl104
	{mso-style-parent:style0;
	color:#00B050;
	font-weight:700;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;}
.xl105
	{mso-style-parent:style0;
	color:#00B050;
	font-weight:700;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-protection:unlocked visible;}
.xl106
	{mso-style-parent:style0;
	color:#00B050;
	font-weight:700;
	text-align:center;
	border-top:.5pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:.5pt solid windowtext;
	background:#DCE6F1;
	mso-pattern:black none;
	mso-protection:unlocked visible;}
.xl107
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#366092;
	mso-pattern:black none;}
.xl108
	{mso-style-parent:style0;
	mso-number-format:"Medium Date";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl109
	{mso-style-parent:style16;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0_-\;\\-\0022$\0022* \#\,\#\#0_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl110
	{mso-style-parent:style0;
	mso-number-format:"Medium Date";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	white-space:normal;}
.xl111
	{mso-style-parent:style16;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0_-\;\\-\0022$\0022* \#\,\#\#0_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;}
.xl112
	{mso-style-parent:style0;
	vertical-align:middle;
	white-space:normal;}
.xl113
	{mso-style-parent:style16;
	font-size:9.0pt;
	font-weight:700;
	font-family:Tahoma, sans-serif;
	mso-font-charset:0;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0_-\;\\-\0022$\0022* \#\,\#\#0_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:center;
	border:.5pt solid windowtext;
	background:#B8CCE4;
	mso-pattern:black none;}
.xl114
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#366092;
	mso-pattern:black none;}
.xl115
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#366092;
	mso-pattern:black none;}
.xl116
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#366092;
	mso-pattern:black none;}
.xl117
	{mso-style-parent:style16;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-protection:unlocked visible;
	padding-left:24px;
	mso-char-indent-count:2;}
.xl118
	{mso-style-parent:style16;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:left;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-protection:unlocked visible;
	padding-left:24px;
	mso-char-indent-count:2;}
.xl119
	{mso-style-parent:style16;
	color:windowtext;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#00B050;
	mso-pattern:black none;
	padding-left:24px;
	mso-char-indent-count:2;}
.xl120
	{mso-style-parent:style16;
	color:windowtext;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:.5pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#00B050;
	mso-pattern:black none;
	padding-left:24px;
	mso-char-indent-count:2;}
.xl121
	{mso-style-parent:style16;
	color:windowtext;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#00B050;
	mso-pattern:black none;
	padding-left:24px;
	mso-char-indent-count:2;}
.xl122
	{mso-style-parent:style16;
	color:windowtext;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	background:#00B050;
	mso-pattern:black none;
	padding-left:24px;
	mso-char-indent-count:2;}
.xl123
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;}
.xl124
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl125
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl126
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl127
	{mso-style-parent:style16;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-protection:unlocked visible;
	padding-left:24px;
	mso-char-indent-count:2;}
.xl128
	{mso-style-parent:style16;
	font-weight:700;
	mso-number-format:"_-\0022$\0022* \#\,\#\#0\.00_-\;\\-\0022$\0022* \#\,\#\#0\.00_-\;_-\0022$\0022* \0022-\0022??_-\;_-\@_-";
	text-align:left;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-protection:unlocked visible;
	padding-left:24px;
	mso-char-indent-count:2;}
.xl129
	{mso-style-parent:style16;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:.5pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	mso-protection:unlocked visible;}
.xl130
	{mso-style-parent:style16;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:.5pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:.5pt solid windowtext;
	mso-protection:unlocked visible;}
.xl131
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#B8CCE4;
	mso-pattern:black none;
	white-space:normal;}
.xl132
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#B8CCE4;
	mso-pattern:black none;
	white-space:normal;}
.xl133
	{mso-style-parent:style0;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#B8CCE4;
	mso-pattern:black none;
	white-space:normal;}
.xl134
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;
	background:#366092;
	mso-pattern:black none;}
.xl135
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#366092;
	mso-pattern:black none;}
.xl136
	{mso-style-parent:style0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;}
.xl137
	{mso-style-parent:style0;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl138
	{mso-style-parent:style0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;}
.xl139
	{mso-style-parent:style0;
	text-align:center;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl140
	{mso-style-parent:style0;
	text-align:center;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:1.0pt solid windowtext;}
.xl141
	{mso-style-parent:style0;
	text-align:center;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl142
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	background:#366092;
	mso-pattern:black none;}
.xl143
	{mso-style-parent:style0;
	color:red;
	font-weight:700;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl144
	{mso-style-parent:style0;
	color:red;
	font-weight:700;
	text-align:center;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl145
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#366092;
	mso-pattern:black none;}
.xl146
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;
	background:#366092;
	mso-pattern:black none;}
.xl147
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:none;}
.xl148
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;}
.xl149
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:none;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl150
	{mso-style-parent:style0;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:none;
	border-right:1.0pt solid windowtext;
	border-bottom:1.0pt solid windowtext;
	border-left:none;}
.xl151
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:none;
	border-bottom:none;
	border-left:1.0pt solid windowtext;
	background:#366092;
	mso-pattern:black none;}
.xl152
	{mso-style-parent:style0;
	color:white;
	font-weight:700;
	text-align:center;
	vertical-align:middle;
	border-top:1.0pt solid windowtext;
	border-right:1.0pt solid windowtext;
	border-bottom:none;
	border-left:none;
	background:#366092;
	mso-pattern:black none;}
-->
</style>
</head>

<body link=blue vlink=purple>
<button onclick="myFunction()">Imprimir Anexo</button>
	<br>

<table border=0 cellpadding=0 cellspacing=0 width=699 style='border-collapse:
 collapse;table-layout:fixed;width:699pt'>
 <col width=247 style='mso-width-source:userset;mso-width-alt:10538;width:247pt'>
 <col width=69 style='mso-width-source:userset;mso-width-alt:2944;width:69pt'>
 <col width=81 style='mso-width-source:userset;mso-width-alt:3456;width:81pt'>
 <col width=67 style='mso-width-source:userset;mso-width-alt:2858;width:67pt'>
 <col width=85 style='mso-width-source:userset;mso-width-alt:3626;width:85pt'>
 <col width=85 style='mso-width-source:userset;mso-width-alt:3626;width:85pt'>
 <col width=65 style='width:65pt'>
 <tr height=15 style='height:15.0pt'>
  <td colspan=5 height=15 class=xl123 width=549 style='border-right:1.0pt solid black;
  height:15.0pt;width:549pt'>ANEXO I (Hoja 1 de 1)</td>
  <td class=xl83 width=85 style='width:85pt'></td>
  <td width=65 style='width:65pt'></td>
 </tr>
 <tr height=29 style='height:29.0pt'>
  <td height=29 class=xl92 style='height:29.0pt'>CONCEPTO</td>
  <td class=xl93 width=69 style='border-left:none;width:69pt'><span
  style="mso-spacerun:yes">&nbsp;</span>PRECIO<br>
  ADICIONAL<span style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl94 style='border-left:none'>INCLUIDO</td>
  <td colspan=2 class=xl76 style='border-right:1.0pt solid black'>PRECIO DEL
  PAQUETE</td>
  <td class=xl78></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td colspan=3 height=15 class=xl114 style='height:15.0pt'>HOSPEDAJE</td>
  <td colspan=2 class=xl127 align=right style='border-right:1.0pt solid black'>
  <?php echo money_format('%i',$desde);?> </td>
  <td class=xl77></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 class=xl95 style='height:14.0pt'>5 días y 4 noches en alguno de
  los hoteles sede</td>
  <td class=xl96 style='border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span>NO<span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl103 style='border-left:none'>SI</td>
  <td colspan=2 class=xl76 style='border-right:1.0pt solid black'>AVIÓN</td>
  <td class=xl78></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td height=15 class=xl98 style='height:15.0pt;border-top:none'>Alimentos y
  bebidas (Todo Inlcuido)</td>
  <td class=xl99 style='border-top:none;border-left:none'>$999</td>
  <td class=xl104 style='border-top:none;border-left:none'>SI</td>
  <td colspan=2 class=xl129 style='border-right:1.0pt solid black'>0</td>
  <td class=xl79></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td colspan=3 height=15 class=xl114 style='height:15.0pt'>TRANSPORTE</td>
  <td colspan=2 class=xl76 style='border-right:1.0pt solid black'>TODO INCLUIDO</td>
  <td class=xl78></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td height=15 class=xl100 style='height:15.0pt'>Redondo en autobús</td>
  <td class=xl101 style='border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span>NO<span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl105 style='border-left:none'>SI</td>
  <td colspan=2 class=xl129 style='border-right:1.0pt solid black'>0</td>
  <td class=xl80></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td height=15 class=xl98 style='height:15.0pt;border-top:none'>Redondo en
  avión</td>
  <td class=xl102 style='border-top:none;border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span>SI<span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl106 style='border-top:none;border-left:none'>NO</td>
  <td colspan=2 class=xl76 style='border-right:1.0pt solid black'>EXTRAS</td>
  <td class=xl78></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td colspan=3 height=15 class=xl114 style='height:15.0pt'>SEGURIDAD</td>
  <td colspan=2 class=xl117 align=right style='border-right:1.0pt solid black'><span
  style="mso-spacerun:yes">&nbsp;</span><?php echo money_format('%i', $total);?><span style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl78></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 class=xl100 style='height:14.0pt'>Seguro de viajero (autobús)</td>
  <td class=xl101 style='border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span>NO<span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl103 style='border-left:none'>SI</td>
  <td colspan=2 class=xl76 style='border-right:1.0pt solid black'>&nbsp;</td>
  <td class=xl78></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td height=15 class=xl69 style='height:15.0pt;border-top:none'>Seguro de
  estancia (Seguros AXA)</td>
  <td class=xl70 style='border-top:none;border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span>NO<span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl73 style='border-top:none;border-left:none'>SI</td>
  <td colspan=2 class=xl117 style='border-right:1.0pt solid black'>&nbsp;</td>
  <td class=xl78></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 class=xl67 style='height:14.0pt;border-top:none'>Asistencia
  medica especializada (40 viajeros)</td>
  <td class=xl68 style='border-top:none;border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span>NO<span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl72 style='border-top:none;border-left:none'>SI</td>
  <td colspan=2 class=xl76 style='border-right:1.0pt solid black'>PRECIO TOTAL
  A PAGAR</td>
  <td class=xl80></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td height=15 class=xl69 style='height:15.0pt;border-top:none'>Wrist Band</td>
  <td class=xl70 style='border-top:none;border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span>NO<span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl73 style='border-top:none;border-left:none'>SI</td>
  <td colspan=2 rowspan=2 class=xl119 align=right style='border-right:1.0pt solid black;
  border-bottom:1.0pt solid black'><span
  style="mso-spacerun:yes">&nbsp;</span><?php echo money_format('%i', $totalpaq=$total+$desde);?><span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl78></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td colspan=3 height=15 class=xl114 style='height:15.0pt'>PRODUCCIÓN</td>
  <td class=xl78></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 class=xl95 style='height:14.0pt'>Camarógrafo Profesional por
  cada 20 viajeros</td>
  <td class=xl96 style='border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span>NO<span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl97 style='border-left:none'>SI</td>
  <td class=xl78></td>
  <td colspan=3 style='mso-ignore:colspan'></td>
 </tr>
 <tr height=15 style='mso-height-source:userset;height:15.75pt'>
  <td height=15 class=xl84 style='height:15.75pt;border-top:none'>Fotógrafo
  Profesional por cada 20 viajeros</td>
  <td class=xl85 style='border-top:none;border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span>NO<span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl86 style='border-top:none;border-left:none'>SI</td>
  <td class=xl80></td>
  <td colspan=3 style='mso-ignore:colspan'></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 class=xl65 style='height:14.0pt;border-top:none'>Pool Party en
  la alberca del hotel (40 viajeros)</td>
  <td class=xl66 style='border-top:none;border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span>NO<span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl91 style='border-top:none;border-left:none'>SI</td>
  <td class=xl78></td>
  <td colspan=3 style='mso-ignore:colspan'></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td height=15 class=xl84 style='height:15.0pt;border-top:none'>DJ Invitado</td>
  <td class=xl85 style='border-top:none;border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span>NO<span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl86 style='border-top:none;border-left:none'>SI</td>
  <td class=xl81></td>
  <td colspan=3 style='mso-ignore:colspan'></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td colspan=3 height=15 class=xl114 style='height:15.0pt'>EXTRAS</td>
  <td class=xl82></td>
  <td colspan=3 style='mso-ignore:colspan'></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 class=xl84 style='height:14.0pt'><?php echo $barradesc;?></td>
  <td class=xl113 style='border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span><?php echo "$".$barra;?><span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl86 style='border-left:none'>SI</td>
  <td class=xl78></td>
  <td colspan=3 style='mso-ignore:colspan'></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 class=xl65 style='height:14.0pt;border-top:none'><?php echo utf8_encode($habdesc);?></td>
  <td class=xl87 align=right style='border-top:none;border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span><?php echo "$".$hab;?><span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl91 style='border-top:none;border-left:none'>SI</td>
  <td class=xl78></td>
  <td class=xl74 width=85 style='width:85pt'></td>
  <td class=xl74 width=85 style='width:85pt'></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 class=xl84 style='height:14.0pt;border-top:none'><?php echo utf8_encode($extradesc);?></td>
  <td class=xl88 align=right style='border-top:none;border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span><?php echo "$".$extra;?><span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl90 style='border-top:none;border-left:none'>SI</td>
  <td></td>
  <td class=xl74 width=85 style='width:85pt'></td>
  <td class=xl74 width=85 style='width:85pt'></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 class=xl65 style='height:14.0pt;border-top:none'>&nbsp;</td>
  <td class=xl89 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl71 style='border-top:none;border-left:none'>&nbsp;</td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 colspan=3 style='height:14.0pt;mso-ignore:colspan'></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 colspan=3 style='height:14.0pt;mso-ignore:colspan'></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 colspan=3 style='height:14.0pt;mso-ignore:colspan'></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=15 style='mso-height-source:userset;height:15.75pt'>
  <td height=15 style='height:15.75pt' align=left valign=top><span
  style='position:absolute;z-index:1;margin-left:-1px;margin-top:9px;
  width:289px;height:42px'><img width=289 height=42
  src="anexo_archivos/image001.png"></span>
  <table cellpadding=0 cellspacing=0>
   <tr>
    <td height=15 width=247 style='height:15.75pt;width:247pt'></td>
   </tr>
  </table>
  </span></td>
  <td></td>
  <td></td>
  <td colspan=2 style='mso-ignore:colspan'></td>
  <td class=xl78></td>
  <td></td>
 </tr>
 <tr height=15 style='mso-height-source:userset;height:15.75pt'>
  <td height=15 class=xl112 width=247 style='height:15.75pt;width:247pt'></td>
  <td></td>
  <td class=xl76>Fecha de pago</td>
  <td class=xl107 style='border-left:none'>Cantidad</td>
  <td class=xl75></td>
  <td class=xl78></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 class=xl112 width=247 style='height:14.0pt;width:247pt'></td>
  <td></td>
  <td class=xl108 width=81 style='border-top:none;width:81pt'>21-abr-16</td>
  <td class=xl109 align=right style='border-top:none;border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span>
  <?php $calculapago=($totalpaq-500)/4; echo money_format('%i',round($calculapago));?>
  <span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl75></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td height=15 class=xl112 width=247 style='height:15.0pt;width:247pt'></td>
  <td></td>
  <td class=xl108 width=81 style='border-top:none;width:81pt'>05-may-16</td>
  <td class=xl109 align=right style='border-top:none;border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span><?php echo money_format('%i',round($calculapago));?><span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl75></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td rowspan=15 height=219 class=xl131 width=247 style='border-bottom:1.0pt solid black;
  height:219.75pt;width:247pt'><font class="font7">VIGÉSIMA SEXTA.-</font><font
  class="font0"> Para el caso de que “EL CLIENTE” no cubra el monto total del
  servicio en la fecha límite establecida para la liquidación total de los
  servicios contratados en la cláusula </font><font class="font7">VIGÉSIMA
  PRIMERA</font><font class="font0"> y manifieste su voluntad de continuar con
  la contratación del servicio, </font><font class="font7">“EL CLIENTE”</font><font
  class="font0">, se obliga a pagar a </font><font class="font7">“EL PRESTADOR”</font><font
  class="font0"> una penalización de $1,000.00 (UN MIL PESOS 00/100 M.N.),
  quedando sujeto a aumento en tarifas, revisión de disponibilidad en espacios
  aéreos y/o terrestres y de hospedaje, hasta que se reciba la manifestación
  expresa de cancelación del servicio por escrito de </font><font class="font7">“EL
  CLIENTE”.</font></td>
  <td></td>
  <td class=xl108 width=81 style='border-top:none;width:81pt'>19-may-16</td>
  <td class=xl109 align=right style='border-top:none;border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span><?php echo money_format('%i',round($calculapago));?><span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl75></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=15 style='mso-height-source:userset;height:15.0pt'>
  <td height=15 style='height:15.0pt'></td>
  <td class=xl108 width=81 style='border-top:none;width:81pt'>10-jun-16</td>
  <td class=xl109 align=right style='border-top:none;border-left:none'><span
  style="mso-spacerun:yes">&nbsp;</span><?php echo money_format('%i',round($calculapago));?><span
  style="mso-spacerun:yes">&nbsp;</span></td>
  <td class=xl75></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td height=15 style='height:15.0pt'></td>
  <td class=xl110 width=81 style='border-top:none;width:81pt'>&nbsp;</td>
  <td class=xl111 style='border-top:none;border-left:none'>&nbsp;</td>
  <td class=xl75></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=15 style='mso-height-source:userset;height:15.75pt'>
  <td colspan=4 height=15 class=xl145 style='border-right:1.0pt solid black;
  height:15.75pt'>PENALIZACIÓN POR PAGO TARDÍO</td>
  <td class=xl78></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td colspan=4 rowspan=2 height=29 class=xl147 style='border-right:1.0pt solid black;
  border-bottom:1.0pt solid black;height:29.0pt'>$200 (DOSCIENTOS PESOS)</td>
  <td class=xl78></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td height=15 style='height:15.0pt'></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td height=15 style='height:15.0pt'></td>
  <td colspan=2 class=xl151 style='border-right:1.0pt solid black'>ESTOY DE
  ACUERDO</td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 style='height:14.0pt'></td>
  <td colspan=2 class=xl151 style='border-right:1.0pt solid black'>CLIENTE</td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td height=15 style='height:15.0pt'></td>
  <td colspan=2 class=xl134 style='border-right:1.0pt solid black'>NOMBRE Y
  FIRMA</td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 style='height:14.0pt'></td>
  <td colspan=2 rowspan=4 class=xl136 style='border-right:1.0pt solid black;
  border-bottom:1.0pt solid black'>&nbsp;</td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 style='height:14.0pt'></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=14 style='height:14.0pt'>
  <td height=14 style='height:14.0pt'></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td height=15 style='height:15.0pt'></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td colspan=4 height=15 class=xl142 style='height:15.0pt'>CLAVE DE
  RESERVACIÓN</td>
  <td></td>
  <td></td>
 </tr>
 <tr height=15 style='height:15.0pt'>
  <td colspan=4 height=15 class=xl143 style='border-right:1.0pt solid black;
  height:15.0pt'><?php echo "VeranoVallarta2016-".$idcontract; ?></td>
  <td></td>
  <td></td>
 </tr>
</table>
<br>
<button onclick="myFunction()">Imprimir Anexo</button>
<script>
function myFunction() {
    window.print();
}
</script>

</body>

</html>
