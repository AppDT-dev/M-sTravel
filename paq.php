<?php 
$id=$_GET['id'];
$event=$_GET['event'];
include('connect.php');
$query="SELECT paquete.id_paquete as paq,evento.nombre as nombre,coordinador.nombre as coord,habitacion.costo as a,habitacion.desc as a2,barra.costo as b,barra.desc as b2 ,opcionespaquete.costo as c,opcionespaquete.descripcion as c2, extrapaq.desc as e2,extrapaq.costo as e FROM paquete inner join habitacion on paquete.id_hab=habitacion.id_hab inner join barra on paquete.id_barra=barra.id_barra inner join opcionespaquete on paquete.id_opcion=opcionespaquete.id_opcion inner join coordinador on paquete.id_coord=coordinador.id_coord inner join evento on paquete.id_evento=evento.id_evento inner join extrapaq on paquete.id_extra=extrapaq.id_extra where paquete.id_evento='$event' and paquete.id_cliente='$id' ";
$link=mysql_connect($server,$dbuser,$dbpass);
$result=mysql_db_query($database,$query,$link);
while($row = mysql_fetch_array($result))
{
	$evento=$row['nombre'];
	$coord=$row['coord'];
	$paq=$row['paq'];
	$descpaq=$row['c2'];
	$hab=$row['a'];
	$habdesc=$row['a2'];
	$barra=$row['b'];
	$barradesc=$row['b2'];
	$opciones=$row['c'];
	//$congreso=($row['d']==0)? 'No aplica' : '0';
	$extradesc=$row['e2'];
	$extra=$row['e'];

}
mysql_free_result($result);
mysql_close($link);	                                  				
  ?>
<table border="0">
<tr>
<td><label class="control-label" for="userName">Evento</label></td><td>  <label><?php echo utf8_encode($evento);?></label>
</tr>
<tr>
<td><label class="control-label" for="userName">Coordinador:</label></td><td> <label><?php echo $coord;?><label>
</tr>
<tr>
<td> <label class="control-label" for="name">Opciones de viaje:</label></td><td> <label><?php echo utf8_encode($descpaq)." $".$opciones ;?></label>
</tr>
<!--<tr>
<td><label class="control-label" for="surname">Entrada al congreso:</label></td><td> <label><?php echo $congreso;?></label>
</tr>-->
<tr>
<td><label class="control-label " for="address">Tipo de habitación:</label></td><td> <label><?php echo utf8_encode($habdesc)." $".$hab;?></label>
</tr>
<tr>
<td><label class="control-label " for="address">Barra Libre:</label></td><td><label><?php echo $barradesc." $".$barra;?></label>
</tr>
<tr>
<td><label class="control-label " for="address">Extras:</label></td><td><label><?php echo $extradesc." $".$extra;?></label>
</tr>
</table>

<a href="anexo.php?id=<?php echo $id;?>&&event=<?php echo $event;?>&&paq=<?php echo $paq;?>" target="_blank">Imprime tu anexo</a>. Es muy importante que lo entregues a tu coordinador.