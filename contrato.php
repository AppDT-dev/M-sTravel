<?php 
date_default_timezone_set('mexico/general');
$event=$_GET['event'];
$mail=$_GET['mail'];
$nombre="";
include('connect.php');
$query="SELECT * FROM Clientes where email='$mail'";
$link=mysql_connect($server,$dbuser,$dbpass);
$result=mysql_db_query($database,$query,$link);
while($row = mysql_fetch_array($result))
{
	$id=$row['id_cliente'];
	$nombre=$row['nombre']." ".$row['ap']." ".$row['am'];
	$fn=$row['fn'];
	$direccion=$row['calle']." ".$row['numero']." ".$row['col'];
	$mun=$row['mun'];
	$estado=$row['estado'];
	$cp=$row['cp'];
	$email=$row['email'];
	$cel=$row['cel'];
	$tel=$row['tel'];
}
mysql_free_result($result);
mysql_close($link);		
/////////////
$query="SELECT * FROM contrato where id_cliente='$id'";
$link=mysql_connect($server,$dbuser,$dbpass);
$result=mysql_db_query($database,$query,$link);
while($row = mysql_fetch_array($result))
{
	$idcontract=($row['id_contrato']==null)?"001":"00".($row['id_contrato']);
	$fecha=$row['fecha'];


}
mysql_free_result($result);
mysql_close($link);		
?>
<html xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office"
xmlns:w="urn:schemas-microsoft-com:office:word"
xmlns:m="http://schemas.microsoft.com/office/2004/12/omml"
xmlns:css="http://macVmlSchemaUri" xmlns="http://www.w3.org/TR/REC-html40">

<head>

</head>

<body lang=ES-TRAD link="#0563C1" vlink="#954F72" style='tab-interval:35.4pt'>
<input type="button" name="imprimir" value="Imprimir" onClick="window.print();">

<div class=WordSection1>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b
style='mso-bidi-font-weight:normal'><u><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'>CONTRATO
QUE REGULA LA PRESTACION DE SERVICIOS TURISTICOS<o:p></o:p></span></u></b></p>

<p class=MsoNormal align=right style='text-align:right;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'>Grupo:
<span style='color:red'>Verano Vallarta 2016</span>// Clave de Reservación
Personal: <span style='color:red'>VeranoVallarta2016-<?php echo $idcontract; ?><o:p></o:p></span></span></b></p>

<p class=MsoNormal align=right style='text-align:right;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'>Fecha
y Hora: <span style='color:red'><?php echo date("d-m-Y h:m:s");?><span style="mso-spacerun:yes">&nbsp;
</span></span><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>QUE CELEBRAN POR UNA PARTE EL SEÑOR <b
style='mso-bidi-font-weight:normal'><u>SERGIO ALEJANDRO HERNÁNDEZ AUSTRIA</u>,</b>
A QUIEN EN LO SUCESIVO Y PARA LOS EFECTOS DEL PRESENTE DOCUMENTO SE LE
DENOMINARA <b style='mso-bidi-font-weight:normal'><u>“EL PRESTADOR</u>”</b> Y
POR LA OTRA EL USUARIO DEL SERVICIO QUIEN COMPARECE POR SU PROPIO DERECHO EL O LA
<b style='mso-bidi-font-weight:normal'>C. </b></span><b style='mso-bidi-font-weight:
normal'><span lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Tahoma;
mso-fareast-language:ES-MX'><?php echo "<b>".$nombre."</b>";?></span></b><span lang=ES-MX
style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> Y/O SU REPRESENTANTE LEGAL O TUTOR Y QUE LO IDENTIFICA COMO ALUMNO Y/O
INTEGRANTE DEL GRUPO DENOMINADO <b style='mso-bidi-font-weight:normal'><span
style='color:red'>Verano Vallarta 2016 </span></b>A QUIEN EN LO SUCESIVO Y PARA LOS EFECTOS
DEL PRESENTE CONTRATO SE LE DENOMINARA <b style='mso-bidi-font-weight:normal'><u>“EL
CLIENTE</u>”</b>, AL TENOR DE LAS SIGUIENTES DECLARACIONES Y CLAUSULAS:<o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma;
background:windowtext;mso-highlight:windowtext'>D E C L A R A C I O N E S</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>1ª.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> Declara <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”,</b> que su servicio consiste en: organizar y llevar a cabo planes e
itinerarios turísticos, reservación de espacios en los medios de transportes y
en hoteles; actuando únicamente como intermediario entre el <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> y las personas físicas o
morales que proporcionan dichos servicios, y que para tal efecto cuentan con la
capacidad técnica y administrativa, así como con los elementos materiales y
humanos necesarios para contratar por cuenta de <b style='mso-bidi-font-weight:
normal'>“EL CLIENTE”</b> y a petición de él, el servicio al que se refiere este
contrato. <o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>2ª.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> Declara <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b> que tiene capacidad legal suficiente para contratar, manifiesta
bajo declaración de decir verdad que son correctos los datos personales que
inscribió en el presente contrato, contar con dieciocho años cumplidos y por lo
tanto con capacidad de ejercicio o bien estar representado en este acto por la
persona que de acuerdo a las disposiciones civiles tenga su representación
legal, patria potestad y/o tutela, quien celebrara el presente convenio en su
representación así como interés en adquirir los servicios que se especifican en
este contrato y que para ello recurre a <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”</b>; con el fin de que los adquiera por cuenta de él, a efecto de
que <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> funja como
intermediario entre él y las personas morales directas de dichos servicios.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>3ª.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL PRESTADOR”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> SERGIO ALEJANDRO HERNÁNDEZ AUSTRIA, declara ser una persona física, de
ocupación comerciante, con domicilio fiscal ubicado en calle Jorge Rojo Lugo
número 186, Fraccionamiento Jorge Rojo Lugo, en Pachuca de Soto; Hidalgo, y
Registro Federal de Causantes: HEAS901127NZ5.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>4ª.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL CLIENTE”:<o:p></o:p></span></b></p>

<p class=MsoNoSpacing style='text-align:justify'><span lang=ES-MX
style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>Para efectos del presente contrato se considera <b style='mso-bidi-font-weight:
normal'>CLIENTE</b>, la persona física mayor de edad, en caso de ser menor de
edad, su representante legal y/o tutor, ambos casos deben reunir las siguientes
características:<o:p></o:p></span></p>

<p class=MsoNoSpacing style='text-align:justify'><span lang=ES-MX
style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNoSpacing style='text-align:justify'><span lang=ES-MX
style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>A) Tener la voluntad comprar un paquete de servicios turísticos a <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b><o:p></o:p></span></p>

<p class=MsoNoSpacing style='text-align:justify'><span lang=ES-MX
style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>B) Realizar un primer pago en efectivo o a la cuenta bancaria señalada
en la cláusula <b style='mso-bidi-font-weight:normal'><span style='background:
windowtext;mso-highlight:windowtext'>VIGÉSIMA TERCERA</span></b> del presente
convenio, por cuando menos $1,000.00 (Un mil pesos 00/100 M.N.) o bien la
cantidad por concepto de anticipo que aparezca en el calendario de pagos que se
adjunta al presente como <b style='mso-bidi-font-weight:normal'>ANEXO I.<o:p></o:p></b></span></p>

<p class=MsoNoSpacing style='text-align:justify'><span lang=ES-MX
style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>El o (La) <b style='mso-bidi-font-weight:normal'>C.
</b></span><b style='mso-bidi-font-weight:normal'><span lang=ES-MX
style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Tahoma;
mso-fareast-language:ES-MX'><?php echo $nombre; ?> </span></b><span lang=ES-MX
style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>declara ser una persona física, con fecha de nacimiento
<b style='mso-bidi-font-weight:normal'><?php echo $fn; ?> </b><!--tipo de sangre </span><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-fareast-font-family:
"Times New Roman";mso-bidi-font-family:Tahoma;mso-fareast-language:ES-MX'>O+</span></b>--><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Tahoma;
mso-fareast-language:ES-MX'>, </span><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>con domicilio particular en <b style='mso-bidi-font-weight:normal'><?php echo $direccion; ?>, </b>código postal </span><b style='mso-bidi-font-weight:
normal'><span lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:
"Myriad Pro Light","sans-serif";mso-fareast-font-family:"Times New Roman";
mso-bidi-font-family:Tahoma;mso-fareast-language:ES-MX'><?php echo $cp; ?> </span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>en la ciudad de<b style='mso-bidi-font-weight:
normal'> </b></span><b style='mso-bidi-font-weight:normal'><span lang=ES-MX
style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Tahoma;
mso-fareast-language:ES-MX'><?php echo $mun; ?>, </span></b><span lang=ES-MX
style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-fareast-font-family:"Times New Roman";mso-bidi-font-family:Tahoma;
mso-fareast-language:ES-MX'>estado de <b style='mso-bidi-font-weight:normal'><?php echo $estado; ?></b></span><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>, correo electrónico <b style='mso-bidi-font-weight:
normal'><?php echo $email; ?></b>, número celular <b style='mso-bidi-font-weight:
normal'><?php echo $cel; ?></b>, número telefónico fijo </span><b style='mso-bidi-font-weight:
normal'><span lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:
"Myriad Pro Light","sans-serif"'><?php echo $tel; ?></span></b><b style='mso-bidi-font-weight:
normal'><span lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:
"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'>, </span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>y quien se identifica con identificación con
fotografía de la cual proporciona copia simple única y exclusivamente para los
efectos de este contrato.<u><o:p></o:p></u></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><u><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Si el servicio es proporcionado para un menor de
edad:<o:p></o:p></span></u></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Deberá suscribir el presente contrato el padre o
tutor del menor, quien en este momento ejerza la patria potestad, guardia y
custodia; dejando copia simple de su identificación oficial, comprobante de
domicilio, haciéndose sabedor de todas y cada una de las cláusulas que contiene
este contrato comprometiéndose el menor así como el responsable de este a lo
establecido en el presente contrato.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>5ª.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> Declaran ambas partes que es su voluntad celebrar
el presente contrato, acorde a la referencia 5.1.2 de la NOM-010-TUR-2001, y
sujetarlo al tenor de las siguientes:<o:p></o:p></span></p>

<p class=MsoNormal align=center style='text-align:center;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>C L A U S U L A S</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'><o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>PRIMERA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL PRESTADOR”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> al solicitar el servicio o reservación <b style='mso-bidi-font-weight:
normal'>“EL CLIENTE”</b> por escrito, correo electrónico, o por redes sociales,
ya está aceptando todos los términos y cláusulas aquí estipuladas.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>SEGUNDA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL PRESTADOR”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> se compromete y obliga a solicitar los servicios que se especifican en
la reservación correspondiente y de acuerdo a la disponibilidad de los mismos,
a contratarlos por cuenta de <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”,</b> fungiendo como intermediario entre éste y las personas encargadas
de proporcionarlos directamente los servicios como transportistas aéreos,
terrestres, marítimos, reservación en hoteles, cruceros, restaurantes, bares,
discotecas, arrendadoras de automóviles, guías de turistas etc., El precio del
servicio, será el que se especifica más adelante en la cláusula <b
style='mso-bidi-font-weight:normal'><span style='background:windowtext;
mso-highlight:windowtext'>VIGÉSIMA PRIMERA</span></b>, con la opción de
contratar y prestar servicios adicionales <b style='mso-bidi-font-weight:normal'>”EL
PRESTADOR”</b> con costo diverso al pactado en este contrato, durante el
trayecto o viaje con el consentimiento del <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b>.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>TERCERA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL CLIENTE”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> acepta que la intervención de <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”</b> será única y exclusivamente con carácter de intermediario entre
los prestadores directos de los servicios solicitados especificados en el <b
style='mso-bidi-font-weight:normal'>ANEXO I</b> motivo por el cual <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR” </b>no es responsable por
alguna pérdida, daño o accidente, cambios de horario o alguna otra
irregularidad que se presentará por causas de fuerza mayor, ni por pérdida o
daños a equipajes durante la prestación del servicio, responsabilidad directa
de los prestadores de los servicios. Tampoco habrá responsabilidad alguna para <b
style='mso-bidi-font-weight:normal'>“El PRESTADOR”</b> y/o sus representantes
por ningún acto u olvido de <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>
durante la prestación del servicio, en cualquier lugar o tiempo en que dure la
prestación de los servicios contemplados en este contrato o bien durante las
actividades previas o posteriores organizadas por <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”</b>. Por lo que <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b> se obliga a responder por su cuenta de manera civil, penal y
económicamente por los daños y perjuicios ocasionados a terceros en sus bienes
o personas liberando a <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>
de toda responsabilidad.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>CUARTA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL CLIENTE”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> se obliga a aceptar y apegarse a los lugares de alojamiento, recreo y
diversión y medios de transporte aéreo y terrestre; así como excursiones,
restaurantes, bares y discotecas, etc., designados por <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”</b> para el desarrollo del paquete de servicios
turísticos materia del presente contrato.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>QUINTA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>En mérito de lo anterior, ambas partes convienen
en que si por causas ajenas a <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”</b>, de fuerza mayor o casos fortuitos como lo son: cancelaciones de
reservación, huelgas, atrasos (que no le sean imputables a <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”</b>), terremotos, conflictos bélicos, etc. los servicios
contratados no pudieran ser proporcionados parcial o totalmente conforme a lo
pactado,<b style='mso-bidi-font-weight:normal'> “EL PRESTADOR” </b>se obligará
a contratar uno similar o equivalente para el efecto de lograr el objetivo
convenido, en caso de que resultar materialmente imposible en ese momento, se
pospondrá para nueva fecha, y en caso de no ser posible ambos casos, gestionará
por cuenta de <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> el
reembolso del importe que proceda, quedando relevado de cualquier
responsabilidad o compromiso mayor al que se comprometió.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>SEXTA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> “EL CLIENTE”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> deberá realizar los pagos de acuerdo al calendario de pagos que para
tal efecto <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> haya
estipulado y que se adjunta al presente como <b style='mso-bidi-font-weight:
normal'>ANEXO I</b>.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>SÉPTIMA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL CLIENTE”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> reconoce y acepta su total obligación y responsabilidad de
proporcionar datos veraces y correctos sobre su edad, sexo, nombre completo,
apellidos y demás datos necesarios para la contratación del servicio requerido
en este contrato, para la integración del itinerario y la reservación de
servicios terrestres y marítimos (hoteles, visitas, autos de alquiler,
restaurantes, cruceros, etc.), deslindando a <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”</b> de cualquier responsabilidad por cambios de
itinerario generados por datos mal proporcionados a <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”</b>, o por cualquier error en datos proporcionados por <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>, para la emisión o compra
de boletos aéreos como puede ser el caso de edades, sexo, nombres, apellidos,
fechas, rutas, líneas aéreas, horarios, clases, categorías, etc. apegándose en
su caso a las cláusulas de cancelación para servicios aéreos, terrestres,
marítimos o de cruceros expresadas en este contrato.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>OCTAVA.</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma;background:windowtext;mso-highlight:windowtext'>-</span><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> Ambas partes convienen en que <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> queda exento totalmente
de responsabilidad legal civil, o penal alguna, por daños, heridas, accidentes,
retrasos o irregularidades que sobrevengan por causas de fuerza mayor, o por
actitud negligente de “<b style='mso-bidi-font-weight:normal'>EL CLIENTE”</b>
al no respetar los lineamientos establecidos en el paquete causando daño a
otros clientes o a los bienes o recursos materiales de los prestadores directos
de los servicios o por caso fortuito que durante la ejecución de los servicios
pudiera ocurrirle a <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> por
no ser <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> la persona
directamente encargada de prestar los servicios correspondientes y por ser solo
intermediario entre éste y <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”,
</b>dando motivo inmediato a la rescisión del contrato deslindándose <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> totalmente de cualquier
obligación pactada con <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>,
siendo responsabilidad de éste último responder ante las autoridades
respectivas cualquier tipo de conducta antisocial.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>NOVENA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> No obstante a la cláusula anterior, <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> a partir del inicio<span
style="mso-spacerun:yes">&nbsp; </span>del viaje cuenta con un seguro de accidentes
personales, que ampara las coberturas de muerte accidental, perdidas orgánicas
y reembolso de gastos médicos misma que está contratada por <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR” </b>con la compañía de
seguros <b style='mso-bidi-font-weight:normal'>AXA Seguros, S.A. de C.V.</b>,
obligándose únicamente <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>
a coadyuvar con el trámite administrativo ante la compañía aseguradora en caso
de que <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> requiera efectuar
cualquiera de las coberturas contenidas en la caratula de la póliza; quedando
como única responsable de la procedencia o no del reclamo la compañía de
seguros <b style='mso-bidi-font-weight:normal'>AXA Seguros, S.A. de C.V.</b> y
no <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”.<o:p></o:p></b></span></p>

<p class=MsoListParagraph style='margin-left:18.0pt;mso-add-space:auto;
text-align:justify;text-indent:-18.0pt;line-height:150%;mso-list:l6 level1 lfo5'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-fareast-font-family:
"Myriad Pro Light";mso-bidi-font-family:"Myriad Pro Light"'><span
style='mso-list:Ignore'>A)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>“EL CLIENTE” </span></b><span lang=ES-MX
style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>se compromete a enviar la siguiente documentación
cuando menos 40 (cuarenta) días antes de la fecha del viaje escaneada vía
correo electrónico a <b style='mso-bidi-font-weight:normal'><span
style='background:yellow;mso-highlight:yellow'>hola@mastravel.mx</span></b>
donde el asunto del correo deberá decir <b style='mso-bidi-font-weight:normal'>“DOCUMENTOS
AXA (Grupo de Viaje_Clave de reservación_NombreCompleto)”</b>: Acta de
nacimiento, Comprobante de domicilio no mayor a 3 meses e identificación
oficial (identificación del padre o tutor si es menor de edad) con resolución
mínima de 300 pps. La documentación deberá estar completa y en un mismo correo
como 3 archivos adjuntos y no como contenido del correo. Documentación que será
enviada a la aseguradora para realizar el trámite de la contratación del
seguro. Ambas partes acuerdan que el incumplimiento de esta cláusula representa
la aceptación del <b style='mso-bidi-font-weight:normal'>“EL CLIENTE” </b>de no
requerir la contratación del servicio con <b style='mso-bidi-font-weight:normal'>AXA
Seguros, S.A. de C.V.</b>, independientemente ambas partes acuerdan que en
ningún momento <b style='mso-bidi-font-weight:normal'>“EL CLIENTE” </b>podrá
exigir rembolso alguno por el concepto del seguro.<b style='mso-bidi-font-weight:
normal'><o:p></o:p></b></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>DÉCIMA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL CLIENTE”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> se compromete a cumplir y a respetar los reglamentos y condiciones de
servicio establecidas por cada uno de los prestadores de servicios contratados
por intermediación de <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>,
por lo que <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> deberá
hacer del conocimiento por escrito o por correo electrónico de <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> las que sean más
importantes.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpFirst style='margin-left:18.0pt;mso-add-space:
auto;text-align:justify;text-indent:-18.0pt;line-height:150%;mso-list:l5 level1 lfo6'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-fareast-font-family:
"Myriad Pro Light";mso-bidi-font-family:"Myriad Pro Light"'><span
style='mso-list:Ignore'>A)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>Así mismo<b style='mso-bidi-font-weight:normal'> “LAS PARTES”</b>
convienen en que <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>
única y exclusivamente funge como intermediario para la contratación de los
servicios de transporte aéreo por parte de <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b>, por lo que no recibe ninguna utilidad sobre los costos y/o
tarifas de los mismos, las cuales son pagadas en su entera totalidad a las
líneas aéreas respectivas.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:18.0pt;mso-add-space:
auto;text-align:justify;text-indent:-18.0pt;line-height:150%;mso-list:l5 level1 lfo6'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-fareast-font-family:
"Myriad Pro Light";mso-bidi-font-family:"Myriad Pro Light"'><span
style='mso-list:Ignore'>B)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>La línea aérea será escogida por <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”</b> en base a los mejores horarios de vuelo redondo para <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>. La línea aérea que se
ajuste a las necesidades y que sea seleccionada se hará del conocimiento de <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> por escrito o por correo
electrónico. Así como el itinerario del vuelo y terminal aérea. <o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:18.0pt;mso-add-space:
auto;text-align:justify;text-indent:-18.0pt;line-height:150%;mso-list:l5 level1 lfo6'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-fareast-font-family:
"Myriad Pro Light";mso-bidi-font-family:"Myriad Pro Light"'><span
style='mso-list:Ignore'>C)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>“EL PRESTADOR”</span></b><span lang=ES-MX
style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> recomienda a <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b> presentarse en el aeropuerto designado, en el mostrador de la
línea aérea, TRES HORAS antes del horario del vuelo. La pérdida del vuelo por
negligencia o impuntualidad de <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b> es única y exclusivamente responsabilidad de <b style='mso-bidi-font-weight:
normal'>“EL CLIENTE”</b>.Y UNA HORA DE ANTICIPACIÓN en la terminal de autobuses
o lugar que indique <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>
tratándose de transporte vía terrestre, salvo la instrucción por escrito, o por
correo electrónico que reciba de <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”, </b>de lo contrario, se declina cualquier responsabilidad que
pudiera derivar a <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> por
su incumplimiento oportuno de <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”.<o:p></o:p></b></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:18.0pt;mso-add-space:
auto;text-align:justify;text-indent:-18.0pt;line-height:150%;mso-list:l5 level1 lfo6'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-fareast-font-family:
"Myriad Pro Light";mso-bidi-font-family:"Myriad Pro Light"'><span
style='mso-list:Ignore'>D)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><b style='mso-bidi-font-weight:normal'><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>“EL PRESTADOR”</span></b><span lang=ES-MX
style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> no se responsabiliza por retrasos, cambios de
horario, pérdida de equipaje y/o cancelaciones que la aerolínea haga por causas
de fuerza mayor, ya que laboran bajo la política de “Cambios sin previo aviso”,
sin que esto afecte el cumplimiento de los servicios objeto del presente
contrato por parte de <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:18.0pt;mso-add-space:
auto;text-align:justify;text-indent:-18.0pt;line-height:150%;mso-list:l5 level1 lfo6'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-fareast-font-family:
"Myriad Pro Light";mso-bidi-font-family:"Myriad Pro Light"'><span
style='mso-list:Ignore'>E)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>Le corresponde a <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>
cubrir los impuestos que por ley deban cubrirse, tales como Impuesto al Valor
Agregado (IVA), impuesto estatal al turismo, TUA, cargo por seguridad, etc.
Dicho impuesto ya se encuentran considerados en el precio total del paquete de
servicios turísticos objeto del presente convenio. Para el caso de que por
decreto federal superviniente, los impuestos sufrieran un incremento “EL
CLIENTE” deberá cubrir la diferencia generada por dicho aumento.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:18.0pt;mso-add-space:
auto;text-align:justify;text-indent:-18.0pt;line-height:150%;mso-list:l5 level1 lfo6'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-fareast-font-family:
"Myriad Pro Light";mso-bidi-font-family:"Myriad Pro Light"'><span
style='mso-list:Ignore'>F)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>En caso de suceder el supuesto señalado anteriormente, <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> se obliga a cubrir este
incremento en los siguientes “cinco días hábiles” posteriores a que <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> hace del conocimiento de
<b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> dicho incremento.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpMiddle style='margin-left:18.0pt;mso-add-space:
auto;text-align:justify;text-indent:-18.0pt;line-height:150%;mso-list:l5 level1 lfo6'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-fareast-font-family:
"Myriad Pro Light";mso-bidi-font-family:"Myriad Pro Light"'><span
style='mso-list:Ignore'>G)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>Todos los boletos de avión son electrónicos por lo que <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>, deberá presentarse en el
mostrador de la aerolínea señalada por <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”</b> con identificación oficial.<o:p></o:p></span></p>

<p class=MsoListParagraphCxSpLast style='margin-left:18.0pt;mso-add-space:auto;
text-align:justify;text-indent:-18.0pt;line-height:150%;mso-list:l5 level1 lfo6'><![if !supportLists]><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-fareast-font-family:
"Myriad Pro Light";mso-bidi-font-family:"Myriad Pro Light"'><span
style='mso-list:Ignore'>H)<span style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;
</span></span></span></b><![endif]><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>En caso de que <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>
desee cancelar el servicio de transporte aéreo, es necesario que lo notifique
por escrito a <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> con
cuando menos 60 (sesenta) días de anticipación con respecto a la fecha de
salida del servicio de traslado aéreo que desee cancelar.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>DÉCIMA PRIMERA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> La ocupación de las habitaciones de hotel por parte
de <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> es única y
exclusivamente responsabilidad del mismo, <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”</b> no tiene injerencia en la misma. <b style='mso-bidi-font-weight:
normal'>“EL CLIENTE”</b> deberá únicamente respetar el tipo de ocupación
contratada (sencilla o individual, doble, triple o cuádruple). La ocupación y/o
acomodo de los <b style='mso-bidi-font-weight:normal'>CLIENTES</b> en las
habitaciones deberá ser registrada vía correo electrónico a </span><span
lang=ES-MX><a href="mailto:clientes_mastravel@outlook.com"><b style='mso-bidi-font-weight:
normal'><span style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma;color:windowtext;text-decoration:none;text-underline:
none'>clientes_mastravel@outlook.com</span></b></a></span><span lang=ES-MX
style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> donde el asunto del correo deberá decir <b
style='mso-bidi-font-weight:normal'>REGISTRO DE HABITACIÓN_GRUPO DE VIAJE</b>,
quien únicamente será responsable de pasar dicha relación a los proveedores de
hospedaje para su registro en recepción o <b style='mso-bidi-font-weight:normal'>“CHECK
IN”</b>. El registro de las habitaciones deberá ser hecha por <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>, cuando menos 30 (Treinta)
días antes del viaje.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>DÉCIMA SEGUNDA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL PRESTADOR”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> sub contratará a un proveedor del servicio de transportaciones
terrestres especializado en el tipo de servicio y/o ruta que <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> solicita, como en los
otros servicios turísticos que vende y garantizará su correcta prestación.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>DÉCIMA TERCERA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL PRESTADOR”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> proporcionará asistencia y asesoría a <b style='mso-bidi-font-weight:
normal'>“EL CLIENTE”</b> durante la prestación de los servicios turísticos
mediante su staff de operación. Sin embargo, <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”</b> se deslinda de toda responsabilidad por accidentes
y/o percances que <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> sufra
por imprudencia, mala conducta, inexperiencia y/o falta de cuidado por parte
del mismo.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>DÉCIMA CUARTA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> Las partes convienen en que la seguridad de <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> durante la prestación de
los servicios turísticos es única y exclusivamente responsabilidad de <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> y que <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”</b> no es responsable por aquellas consecuencias y/o
accidentes resultado de la irresponsabilidad, indisciplina, falta de prudencia
y cuidado por parte de <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>,
aún y cuando estos sucedan durante la prestación de los servicios turísticos
objeto del presente convenio; sin embargo <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”</b> proveerá y garantizará todos los <b style='mso-bidi-font-weight:
normal'>MEDIOS PREVENTIVOS</b> para evitar cualquier tipo de situación que
ponga en riesgo la misma en los lugares públicos y de prestación de los
servicios turísticos objetos del presente contrato, reconociendo ambas partes
que <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> se encuentra
limitado por el <b style='mso-bidi-font-weight:normal'>RESPETO A LA PRIVACIDAD
DE “EL CLIENTE”.<span style='background:windowtext;mso-highlight:windowtext'><o:p></o:p></span></b></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>DÉCIMA QUINTA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> Ambas partes convienen que cualquier servicio
turístico o tour perdido durante la prestación del servicio por causas
imputables a <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>, por
incapacidad, inasistencia o impuntualidad del mismo, será única y
exclusivamente responsabilidad de <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b> y no será reembolsable.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>DÉCIMA SEXTA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL PRESTADOR”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> reconoce dos tipos de precios, ambos dados a conocer a <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> en el <b style='mso-bidi-font-weight:
normal'>ANEXO I</b> del presente contrato:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>A) PRONTO PAGO:</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> Para tener derecho al precio de <b style='mso-bidi-font-weight:normal'>“PRONTOPAGO”</b>,
será necesario cumplir con todas las fechas de pago señaladas en el calendario
de pagos que se adjunta al presente como <b style='mso-bidi-font-weight:normal'>ANEXO
I</b>.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>B) PRECIO NORMAL:</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> En caso de no ajustarse estrictamente a las hechas señaladas en el
calendario de pagos que se adjunta al presente convenio como <b
style='mso-bidi-font-weight:normal'>ANEXO I</b>, <b style='mso-bidi-font-weight:
normal'>“EL CLIENTE”</b> deberá pagar el costo normal del paquete.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%'><b style='mso-bidi-font-weight:normal'><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma;background:windowtext;mso-highlight:windowtext'>DÉCIMASÉPTIMA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> Cuando se trate de excursiones o paquetes en el
extranjero, se deberán presentar los precios en moneda extranjera y en pesos
mexicanos, señalando el tipo de cambio en que están calculados estos últimos,
haciendo mención de que el precio de venta será el resultado de la conversión
de la moneda extranjera a moneda nacional, al tipo de cambio que fije el Banco
de México al momento en que se efectúe el pago; sirviendo este tipo de cambio
para todos los efectos consiguientes, incluyendo reembolsos, conforme lo
dispone el Artículo 8º de la Ley monetaria de los Estados Unidos Mexicanos.<o:p></o:p></span></p>

<p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
justify;line-height:150%'><span lang=ES-MX style='font-size:9.0pt;line-height:
150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>DÉCIMAOCTAVA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL PRESTADOR”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> se reserva el derecho de modificar el orden de los servicios indicados
en el presente contrato, para un mejor desarrollo de los mismos o por las
causas que así lo justifican, procurando respetar la cantidad, calidad, y
destino directo del viaje, contratados, incluyendo cambio de transporte.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>DECIMANOVENA.-</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> Cuando <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR” </b>cancele
un viaje de cualquier naturaleza por causas imputables a este y ajenas a <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>, estará obligado <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> a contratar uno similar
o equivalente para el efecto de lograr el objetivo convenido, en caso de
resultar materialmente imposible en ese momento, se pospondrá para nueva fecha.
Si la responsabilidad o causa de la cancelación recae en los prestadores
directos de los servicios, <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”</b> deberá auxiliar a <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”
</b>para lograr los objetivos antes mencionados. En el caso de que el prestador
final de los servicios demuestre la responsabilidad de <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”,</b> éste debe realizar los pagos a <b style='mso-bidi-font-weight:
normal'>“EL CLIENTE”</b> que correspondan conforme a la ley. <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> queda obligado a
demostrar que se remitieron los fondos correspondientes a los prestadores o
empresas de servicios directos y <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b> queda obligado a demostrar que se entregaron a <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”.</b><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>VIGÉSIMA.-</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> Ambas partes convienen en que el pago de anticipos, apartados o
liquidación del importe de los servicios objeto de este contrato por parte de <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>, así como el uso del
contrato mismo, cupones, boletos, cortesías, o cualquier otro documento
expedido en su favor con motivo del mismo, implica de su parte <u>la aceptación
total del contrato,</u> así como de las condiciones generales de contratación
del presente contrato.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>VIGÉSIMA PRIMERA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> “EL CLIENTE”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> acepta y se obliga a pagar la cantidad total estipulada en el <b
style='mso-bidi-font-weight:normal'>ANEXO I</b> de este contrato, deberá ser cubierto
en Moneda Nacional y deberá quedar liquidado en su totalidad cuando menos <span
style='background:yellow;mso-highlight:yellow'>30 (treinta)</span> días antes
de la fecha del viaje o bien en la fecha límite estipulada en el calendario de
pagos que se adjunta al presente como <b style='mso-bidi-font-weight:normal'>ANEXO
I</b>, por concepto de la contratación del servicio turístico ante <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”, </b>pago que deberá
realizarse en efectivo o mediante depósito bancario a la cuenta bancaria número
374331 de la Institución Banamex a nombre de <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”.</b><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>VIGÉSIMA SEGUNDA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> En caso de que <b style='mso-bidi-font-weight:
normal'>“EL CLIENTE”</b> realice en una sola exhibición el pago del monto total
establecido el <b style='mso-bidi-font-weight:normal'>ANEXO I</b> de este
contrato, queda sin efecto las clausulas <b style='mso-bidi-font-weight:normal'>VIGÉSIMA
TERCERA</b> y <b style='mso-bidi-font-weight:normal'>VIGÉSIMA CUARTA</b>.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>VIGÉSIMA TERCERA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Las partes acuerdan que para la compra de
cualquiera de los servicios turísticos ofertados por <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”</b>, el depósito mínimo inicial para considerar activo a
un cliente dentro del sistema de pagos de <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”</b> es de <span style='background:yellow;mso-highlight:yellow'>$500.00
(Quinientos pesos 00/100 M.N.)</span> o bien el marcado como anticipo en su
calendario de pagos que se adjunta al presente como <b style='mso-bidi-font-weight:
normal'>ANEXO I.</b> Dicho depósito inicial se considera como anticipo y no
será reembolsado a <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>,
bajo ninguna circunstancia, en caso de cancelación del paquete por parte de <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>, ya que el mismo es
utilizado para reservar espacios para <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b> con los diferentes proveedores de servicio de <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”</b>. Pago que deberá realizarse en efectivo o mediante depósito
bancario a la cuenta bancaria número 374331 de la Institución Banamex a nombre
de <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR” </b>considera firme el
inicio de la tramitación del servicio a partir de esta cláusula, para el caso
de registrarse 30 (Treinta) días o menos antes del viaje sin haber respetado
por lo menos la fecha del primer depósito del calendario de pagos que se
adjunta al presente como <b style='mso-bidi-font-weight:normal'>ANEXO I</b> o
haber cubierto por lo menos el 50% del costo total del paquete de servicios
turísticos objeto del presente contrato, <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b> quedará sujeto a aumento del costo del mismo por aumento en
tarifas, revisión de disponibilidad en espacios aéreos y de hospedaje.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>VIGÉSIMA CUARTA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL CLIENTE”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> se obliga a pagar la cantidad total estipulada en el <b
style='mso-bidi-font-weight:normal'>ANEXO I</b> de este contrato como fecha
límite para liquidar, pagos que se realizaran en efectivo o mediante depósito
bancario a la cuenta bancaria número 374331 de la Institución Banamex a nombre
de <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR” </b>donde <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE</b>” se compromete a remitir
dentro de las 24 horas posteriores al depósito, el acuse respectivo del mismo
al correo electrónico </span><span lang=ES-MX><a
href="mailto:clientes_mequierograduar@outlook.com"><b style='mso-bidi-font-weight:
normal'><span style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma;color:black;mso-themecolor:text1;text-decoration:
none;text-underline:none'>clientes_mastravel@outlook.com</span></b></a></span><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>, caso contrario se le cobrara a “EL CLIENTE” una
pena convencional de $100.00, (CIEN PESOS 00/100 M.N.), por pago tardío, en
caso de que <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> no cumpla
con lo establecido en el calendario de pagos que se adjunta al presente como <b
style='mso-bidi-font-weight:normal'>ANEXO I</b>, estará sujeto a que se tramite
una nueva cotización para el paquete de servicios turísticos objeto del
presente convenio, ya que el costo del mencionado paquete está calculado
tomando en consideración los tiempos en los que <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”</b> debe pre-pagar los servicios turísticos a sus
proveedores.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>VIGÉSIMA QUINTA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Si transcurrida la fecha límite de pago <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> no ha cubierto la
totalidad del servicio contratado y manifiesta su voluntad de no continuar con
la contratación del servicio, será causa de rescisión del contrato, de igual
manera la falta de pago de “EL CLIENTE”, por dos veces consecutivas, será
motivo de causa de rescisión del contrato siempre y cuando no sea por causas
imputables a “EL PRESTADOR”.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>VIGÉSIMA SEXTA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Para el caso de que<b style='mso-bidi-font-weight:
normal'> “EL CLIENTE”</b> no cubra el monto total del servicio en la fecha
límite establecida para la liquidación total de los servicios contratados
estipulado en el <b style='mso-bidi-font-weight:normal'>ANEXO I </b>de este
contrato y manifieste su voluntad de continuar con la contratación del
servicio, <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>, se obliga a
pagar a <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR” </b>una
penalización de<span style='background:yellow;mso-highlight:yellow'>$ 1,000.00
(UN MIL </span>PESOS 00/100 M.N.), quedando sujeto a aumento en tarifas,
revisión de disponibilidad en espacios aéreos y/o terrestres y de hospedaje,
hasta que se reciba la manifestación expresa de cancelación del servicio por
escrito de <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”.<o:p></o:p></b></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>VIGÉSIMA SÉPTIMA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Si es voluntad de <b style='mso-bidi-font-weight:
normal'>“EL CLIENTE”</b>, cambiar o sustituir algún servicio turístico del
paquete objeto del presente contrato y manifieste su voluntad por escrito o por
correo electrónico a <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>,
una vez que los términos y condiciones del presente instrumento legal fueron
aceptados por parte del <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>,
éste último deberá realizar el pago extra de $ 300.00 (TRESCIENTOS PESOS 00/100
M.N.) a <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR” </b>quedando
sujeto a re-cotización del paquete de servicios turísticos por parte de <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”, </b>siempre y cuando <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> lo solicite por escrito al
correo electrónico <b style='mso-bidi-font-weight:normal'><span
style='background:yellow;mso-highlight:yellow'>hola@mastravel.mx</span>. </b>En
caso de cambio o cancelación de cualquier reservación por causas imputables a
los prestadores de servicios directos, tanto<span
style="mso-spacerun:yes">&nbsp; </span><b style='mso-bidi-font-weight:normal'>“EL
CLIENTE “</b> como <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>
quedan sujetos a las políticas de cambio o cancelación del operador y a los
cargos por gastos de cambios o cancelación que se requieran.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>VIGÉSIMA OCTAVA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>El cliente que desee cancelar la contratación del
paquete de servicios turísticos con <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”</b>, objeto del presente contrato, quedará sujeto a la siguiente
tabla de penalizaciones sobre el precio normal total del paquete previamente
contratado:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>A) En el caso de que la cancelación se efectué de
00 a 10 (cero a diez) días antes de la fecha de salida al viaje o evento, <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> cobrará el 90% (noventa
por ciento), del costo total del paquete o el total depositado en caso de que
este último sea inferior al porcentaje señalado en la presente cláusula.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>B) En caso de que la cancelación se efectué de 11
a 25 (once a veinticinco) días antes del comienzo del evento, <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> cobrará el setenta por
ciento (70%), del costo total del paquete o el total depositado, en caso de que
este último sea inferior al porcentaje señalado en la presente cláusula, más el
costo de una noche de hotel por cada persona o habitación que se cancele.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>C) En caso de que la cancelación se efectúe de 26
a 49 (Veintiséis a cuarenta y nueve) días, antes de la fecha del evento, <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> cobrará el cuarenta por
ciento (40%), del costo total del paquete o el total depositado, en caso de que
este último sea inferior al porcentaje señalado en la presente cláusula, más el
costo de una noche de hotel por cada persona o habitación que se cancele.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>D) Si la cancelación de los servicios se realiza
con más de 50 (cincuenta) días a la realización del viaje se cobrará el 30%,
del costo total del paquete o el total depositado, en caso de que este último
sea inferior al porcentaje señalado en la presente cláusula.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>VIGÉSIMA NOVENA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>En caso de cancelación de la contratación del
paquete de servicios turísticos y una vez observada las disposiciones de
penalización descritas en la cláusula que antecede, <b style='mso-bidi-font-weight:
normal'>“EL CLIENTE”</b> podrán solicitar a <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”</b> el reembolso correspondiente mediante el
procedimiento siguiente:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>A) Toda solicitud de reembolso deberá realizarse
por escrito y deberá ser enviada vía correo electrónico a la siguiente
dirección de correo: <b style='mso-bidi-font-weight:normal'><span
style='background:yellow;mso-highlight:yellow'>hola@mastravel.mx</span></b><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>B) Toda solicitud de reembolso deberá contar con
todos los requisitos exigidos por la Secretaria de Hacienda y Crédito Público
SHCP y especificados en las políticas de reembolso de <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”</b>: Carta solicitud de reembolso, copia identificación
de <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> y número de clabe
interbancaria de <b style='mso-bidi-font-weight:normal'>“EL CLIENTE” </b>especificando
la institución de crédito a la que pertenece, fichas de depósitos originales y
debidamente selladas por la institución bancaria que las expida y/o
comprobantes de dinero expedidos por <b style='mso-bidi-font-weight:normal'>“El
PRESTADOR”</b> y/o sus representantes, correspondientes a cada uno de los pagos
realizados por parte de <b style='mso-bidi-font-weight:normal'>”EL CLIENTE”</b>,
los cuales sumados deberán coincidir en cantidad con el estado de cuenta de <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> en el sistema de pagos de <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Todos los reembolsos que resulten procedentes, por
reunir los requisitos señalados en los inciso A y B de la presente clausula,
serán pagados por <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>
mediante cheque depositado o transferencia interbancaria a la cuenta o clabe
interbancaria especificada por <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b> en la carta solicitud de reembolso, en un plazo no mayor a 30 (Treinta)
días hábiles, contados a partir de la fecha en la que fue recibida la carta de
solicitud de reembolso. Todo reembolso tendrá un cargo administrativo de
$500.00 (Quinientos pesos 00/100 M.N.).<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>TRIGÉSIMA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL CLIENTE”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> se compromete a conservar los comprobantes de depósitos debidamente
sellados, transferencia interbancaria, cargo a tarjeta de crédito, o
comprobantes de dinero originales y en buenas condiciones que les permitan ser
fácilmente legibles, para cualquier tipo de aclaración. Estos serán el único
medio reconocido por <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>
para comprobar cualquiera de los pagos.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>TRIGÉSIMA PRIMERA.- </span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>Para efectos del presente convenio, se considera como <b
style='mso-bidi-font-weight:normal'>“GRUPO”</b>, cuando viajen 40 (cuarenta)
personas o más al mismo tiempo, al mismo destino y firmen el presente contrato,
bajo el nombre de un mismo grupo. Aquellos que no reúnan las características
señaladas en la presente cláusula serán considerados como pasajeros
individuales y no gozarán del mismo tratamiento que los grupos. Las partes
acuerdan en que los costos para <b style='mso-bidi-font-weight:normal'>“GRUPO”</b>,
son menores a los <b style='mso-bidi-font-weight:normal'>“INDIVIDUALES”</b>
debido a que son cotizados por volumen con la mayoría de los proveedores. Para
el caso de que la totalidad de clientes sea inferior a 40 (cuarenta) personas,
ambas partes convienen en que el precio del paquete establecido en el<b
style='mso-bidi-font-weight:normal'> ANEXO I </b>del presente contrato queda
sujeta a re-cotización y/o la fecha del viaje estipulada en el <b
style='mso-bidi-font-weight:normal'>ANEXO I</b> del presente contrato pude ser
cambiada por <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR” </b>con la
finalidad de gozar del mismo precio del paquete.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>TRIGÉSIMA SEGUNDA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> “EL CLIENTE”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> autoriza a que <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>
durante la duración de los servicios turísticos contratados por <b
style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>, tome fotografías o video
grabe la prestación de los mismos; así como utilice el material fotográfico o
de videograbación en cualquier tiempo y lugar del evento, con fines única y
exclusivamente de promoción y archivo.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>TRIGÉSIMA TERCERA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Las partes convienen en que una vez finalizada la
prestación de los servicios objeto del presente contrato, si éstos quedaron
satisfechos, <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> firmará de
conformidad una carta denominada <b style='mso-bidi-font-weight:normal'>“Carta
de Satisfacción del Cliente”</b>, la cual será conservada en los archivos de <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> y podrá ser utilizada
por dicha empresa como <b style='mso-bidi-font-weight:normal'>“Carta de
Recomendación”</b>, para la prestación posterior de sus servicios a otros <b
style='mso-bidi-font-weight:normal'>CLIENTES</b> y/o como información
estadística.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>TRIGÉSIMA CUARTA.</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma;background:windowtext;mso-highlight:windowtext'>-</span><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> Una vez que <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”</b> recibe por parte de <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b> el importe de los servicios contratados, séase estos aéreos,
terrestres o bien en conjunto (paquete), <b style='mso-bidi-font-weight:normal'>“EL
PRESTADOR”</b> cuenta con la autorización inmediata de <b style='mso-bidi-font-weight:
normal'>“EL CLIENTE”</b> para emitir, expedir o adquirir los boletos aéreos a
su nombre, apegándose y aceptando las políticas de cancelación, emisión y venta
de boletos de las compañías aéreas nacionales e internacionales.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>TRIGÉSIMA QUINTA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL PRESTADOR” </span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>se reserva el derecho de contratar por cuenta de <b style='mso-bidi-font-weight:
normal'>“EL CLIENTE”</b>, los servicios a que se refiere este contrato precisamente
en la calidades y/o categorías contratadas, en cuanto a transportistas, hoteles
o arrendadoras de autos se refiere etc., independientemente del prestador
último de los servicios, salvo que expresamente se convenga que estos serán
prestados invariablemente por un proveedor determinado. El prestador procurará
en beneficio de <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>, se
proporcione otro de calidad equivalente, si <b style='mso-bidi-font-weight:
normal'>“EL CLIENTE”</b> hace uso del servicio, se entenderá que consintió
dicha modificación y no procederá reclamación, compensación o reembolso alguno.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>TRIGÉSIMA SEXTA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> Toda reservación confirmada en firme por <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> proporciona un número de
control de reservación el cual deberá portar “<b style='mso-bidi-font-weight:
normal'>EL CLIENTE”</b> en todo momento.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>TRIGÉSIMA SÉPTIMA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Para el caso de que no haya disponibilidad de
boletos de avión para prestar el servicio contratado en este acuerdo de
voluntades, “<b style='mso-bidi-font-weight:normal'>EL PRESTADOR” </b>se obliga
a informar a <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> por
escrito o por correo electrónico, realizando <b style='mso-bidi-font-weight:
normal'>“EL PRESTADOR”</b> el cambio inmediato de transporte a vía terrestre
entregando al <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b> el
reembolso de la parte proporcional por dicho cambio.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>TRIGÉSIMA OCTAVA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> Será <u>causa de rescisión</u> del presente
contrato el incumplimiento de cualquiera de las obligaciones plasmadas en este
acuerdo de voluntades por cualquiera de las partes, las cuales deberán cubrir
las penas convencionales e intereses señalados en este contrato.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>TRIGÉSIMA NOVENA.-</span></b><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>“EL PRESTADOR”</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'> queda relevado de cualquier responsabilidad derivada de convenios
adicionales que se hayan celebrado entre <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b> y los prestadores directos de los servicios, como son
transportistas aéreos y terrestres, navieras, cruceros, hoteles, arrendadoras
de autos, tours, discotecas etc.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>CUADRAGÉSIMA.</span></b><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma'>- La entrega de documentos a “EL CLIENTE”, (tickets, boletos, cupones,
billetes, etc.) se efectuará, previa liquidación total de los servicios, dentro
de las 48 horas previas a la salida de <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”,</b> en el domicilio donde<b style='mso-bidi-font-weight:normal'> “EL
PRESTADOR”</b>, indique.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>CUADRAGÉSIMA PRIMERA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>El presente contrato tendrá vigencia desde el
momento de su firma por parte de <b style='mso-bidi-font-weight:normal'>“EL
CLIENTE”</b> y hasta el momento en que finalice la prestación de los servicios
turísticos contratados o <b style='mso-bidi-font-weight:normal'>“EL CLIENTE”</b>
firme la carta a la que se hace referencia en la cláusula <b style='mso-bidi-font-weight:
normal'><span style='background:windowtext;mso-highlight:windowtext'>TRIGÉSIMA
TERCERA</span></b><span style='background:windowtext;mso-highlight:windowtext'>.</span><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>CUADRAGÉSIMA SEGUNDA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> Todas las notificaciones, requerimientos,
autorizaciones, renuncias, avisos y otras comunicaciones que deban darse entre
las partes conforme a este Contrato, deberán hacerse por escrito y deberán
considerarse como debidamente entregadas si se encuentran firmadas por la
persona que la envía y entregadas con acuse de recibo al destinatario.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>CUADRAGÉSIMA TERCERA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> “<b style='mso-bidi-font-weight:normal'>EL
CLIENTE”</b> manifiesta conocer el aviso de privacidad, para protección de sus
datos personales, que es parte integrante de este contrato y que se agrega como
<b style='mso-bidi-font-weight:normal'>ANEXO C.</b><o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:150%'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
line-height:150%;font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:
Tahoma;background:windowtext;mso-highlight:windowtext'>CUADRAGÉSIMA CUARTA.-</span></b><span
lang=ES-MX style='font-size:9.0pt;line-height:150%;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Las partes contratantes manifiestan que conocen
los alcances del presente contrato cuyas cláusulas son la expresión fiel de su
voluntad, no encontrándose afectados<span style="mso-spacerun:yes">&nbsp;
</span>de error, dolo, mala fe, lesión o violencia, y se someten para el caso
de incumplimiento o interpretación a la competencia de la Procuraduría Federal
del Consumidor en la vía administrativa, como instancia conciliatoria, para
resolver las diferencias que pudieran suscitarse y en caso de subsistir las
mismas, se someterán a la competencia de <span
style="mso-spacerun:yes">&nbsp;</span>las Leyes y Tribunales de la Ciudad de
Pachuca de Soto, Hidalgo, renunciando expresamente a cualquier otra
jurisdicción que pudiera corresponderles, por razón de sus domicilios presentes
o futuros o por cualquier otra razón.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></b></p>

</div>

<b style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-fareast-font-family:Calibri;
mso-bidi-font-family:Tahoma;mso-ansi-language:ES-MX;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='page-break-before:auto;
mso-break-type:section-break'>
</span></b>

<b style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-fareast-font-family:Calibri;
mso-bidi-font-family:Tahoma;mso-ansi-language:ES-MX;mso-fareast-language:EN-US;
mso-bidi-language:AR-SA'><br clear=all style='page-break-before:auto;
mso-break-type:section-break'>
</span></b>

<div class=WordSection3>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b
style='mso-bidi-font-weight:normal'><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>ANEXO C<o:p></o:p></span></b></p>

<p class=MsoNormal align=center style='text-align:center;line-height:normal'><b><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>AVISO DE PRIVACIDAD (Protección de datos)<o:p></o:p></span></b></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma;mso-bidi-font-weight:bold'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='margin-left:18.0pt;text-align:justify;text-indent:
-18.0pt;line-height:normal;mso-list:l0 level1 lfo3'><![if !supportLists]><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-fareast-font-family:"Myriad Pro Light";mso-bidi-font-family:"Myriad Pro Light";
mso-bidi-font-weight:bold'><span style='mso-list:Ignore'>A.<span
style='font:7.0pt "Times New Roman"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span></span><![endif]><span lang=ES-MX style='font-size:9.0pt;
font-family:"Myriad Pro Light","sans-serif";mso-bidi-font-family:Tahoma;
mso-bidi-font-weight:bold'>Declaración de privacidad de <b>“EL PRESTADOR” </b></span><u><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>SERGIO ALEJANDRO HERNÁNDEZ AUSTRIA</span></u><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>.<span style='mso-bidi-font-weight:bold'><o:p></o:p></span></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Es una persona física comprometida en proteger su
privacidad.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>La información personal que nos proporciona (datos
personales y en su caso, datos personales sensibles), será tratada conforme a
lo establecido en este Aviso de Privacidad.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma;mso-bidi-font-weight:bold'>B. Finalidad de la
información Personal.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>1. La información personal que nos proporciona
será utilizada por Sergio Alejandro Hernández Austria, para prestar los servicios
que usted le solicita relacionada con la prestación de servicios turísticos y
comerciales en general.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>2. “EL PRESTADOR” puede utilizar la información
personal que nos proporciona para ofrecerle un mejor servicio y en su caso,
identificar sus preferencias durante su viaje.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>3. Asimismo, puede utilizar la información para
ofrecerle promociones y productos turísticos y comerciales en general, así como
cualquier otro producto o servicio relacionado como puede ser en forma
enunciativa mas no limitativa el envío de promociones, servicios especiales,
boletines informativos, encuestas y otros productos y servicios de <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>4. Finalmente la información que nos proporciona
podrá ser tratada en los casos que expresamente autoriza el artículo 10 de la
Ley Federal de Protección de Datos Personales en Posesión de Particulares.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma;mso-bidi-font-weight:bold'>C. Control y Seguridad
de Información Personal.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma;mso-bidi-font-weight:bold'>1.- “<b>EL PRESTADOR”</b></span><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'> se compromete a tomar las medidas necesarias para
proteger la información recopilada, utilizando tecnologías de seguridad y
procedimientos de control en el acceso, uso o divulgación de su información
personal sin autorización, por ejemplo, almacenando la información personal
proporcionada en servidores ubicados en Centros de Datos que cuentan con
controles de acceso limitado. Para transacciones en línea, utilizamos también
tecnologías de seguridad que protegen la información personal que nos sea
transmitida a través de los diversos medios electrónicos. Sin embargo, ningún
sistema de seguridad o de transmisión de datos del cual la empresa no tenga el
control absoluto y/o tenga dependencia con internet, puede garantizar que sea
totalmente seguro.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Acepto que la información personal que proporciono
a <b style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b> se trate conforme a
lo establecido en este Aviso de Privacidad.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Me doy por enterado del contenido del Aviso de
Privacidad.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>REVELACIÓN DE INFORMACIÓN A TERCEROS EN CASO DE
CONTRATACIÓN DE UN SERVICIO.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>La información proporcionada por el cliente, no
será revelada a terceros, salvo:<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>Cuando se haya contratado un servicio a <b
style='mso-bidi-font-weight:normal'>“EL PRESTADOR”</b>, lo que se entiende que
al momento de la contratación el cliente está consintiendo la transferencia de
información.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'>La información personal podrá ser revelada en caso
de que así lo señale alguna ley, a cualquier autoridad o tercero que la
necesite para cumplir con alguna obligación o petición legal.<o:p></o:p></span></p>

<p class=MsoNormal style='text-align:justify;line-height:normal'><span
lang=ES-MX style='font-size:9.0pt;font-family:"Myriad Pro Light","sans-serif";
mso-bidi-font-family:Tahoma'><o:p>&nbsp;</o:p></span></p>

</div>
<br>
<p><input type="button" name="imprimir" value="Imprimir" onClick="window.print();"></p>
</body>

</html>
