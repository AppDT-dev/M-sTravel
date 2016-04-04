<?php session_start();?>

<?php
if(!isset($_SESSION['inicia'])){
header("location: index.html?**sin-acceso**");
} else { 
$e=$_SESSION['inicia'];
$id=$_GET['id'];
$event=$_GET['event'];
setlocale(LC_MONETARY, 'es_MX');

include('connect.php');
$query = "SELECT * FROM Clientes where id_cliente='$id'";
$result = mysql_query($query);
while($row = mysql_fetch_array($result))
{
$nombre=$row['nombre'];
$ap=$row['ap'];
$am=$row['am'];
$email=$row['email'];
$cel=$row['cel'];
$fn=$row['fn'];
$calle=$row['calle'];
$num=$row['numero'];
$col=$row['col'];
$cp=$row['cp'];
$mun=$row['mun'];
$edo=$row['estado'];
$photo=$row['photo'];
}
mysql_free_result($result);
mysql_close($link);
} /* Y cerramos el else */ 
?>
<!DOCTYPE html>
<html>
  <head>
  	<?php include('head.php');?>
  </head>
  <body id="top" class="thebg" >
    <?php include('menu.php');?>
	<div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="#"></a>
			<div class="left">
				<ul class="bcrumbs">
					<li>/</li>
					<li><a href="#" class="active">Tu Cuenta</a></li>					
				</ul>				
			</div>
			<a class="backbtn right" href="#"></a>
		</div>
		<div class="clearfix"></div>
		<div class="brlines"></div>
	</div>	

	<!-- CONTENT -->
	<div class="container">

		
		<div class="container mt25 offset-0">
			
			
			<!-- CONTENT -->
			<div class="col-md-12 pagecontainer2 offset-0">
				
				<!-- LEFT MENU -->
				<div class="col-md-1 offset-0">
					<!-- Nav tabs -->
					<ul class="nav profile-tabs">
					  <li class="active">
						<a href="#profile" data-toggle="tab">
						<span class="profile-icon"></span>
						Perfil
						</a></li>
					  <li>
						  <a href="#bookings" data-toggle="tab">
						  <span class="bookings-icon"></span>						  
						  Paquete
						  </a></li>
					  <li>
						  <a href="#wishlist" data-toggle="tab">
						  <span class="icon-money"></span>							  
						  Pagos
						  </a></li>
					  <li>
						  <a href="#settings" data-toggle="tab">
						  <span class="settings-icon"></span>								  
						  Settings
						  </a></li>
					  <li>
						  <a href="#history" data-toggle="tab">
						  <span class="history-icon"></span>								  
						  Historial
						  </a></li>
					  <li>
						  <a href="#password" data-toggle="tab">
						  <span class="password-icon"></span>							  
						  Cambio de contraseña
						  </a></li>
					  <li>
						  <a href="#newsletter" data-toggle="tab">
						  <span class="newsletter-icon"></span>									  
						  Noticias
						  </a></li>
					</ul>
					<div class="clearfix"></div>
				</div>
				<!-- LEFT MENU -->
					
				<!-- RIGHT CPNTENT -->
				<div class="col-md-11 offset-0">
					<!-- Tab panes from left menu -->
					<div class="tab-content5">
					
					  <!-- TAB 1 -->
					  <div class="tab-pane padding40 active" id="profile">

						  <!-- Admin top -->
						  <div class="col-md-4 offset-0">
                          <?php if($photo==""){
							echo "<img src=\"images/user-avatar.jpg\" class=\"left margright20\"/>";
						  }else
						  {
							  echo "<img src=\"photos/".$photo."\" class=\"left margright20\"/>";
							  //echo $photo;
							  }
							?>
							<p class="size12 grey margtop10">
							Bienvenido! <span class="lred"><?php echo $nombre." ".$ap;?></span><br/>
							<a href="javascript:popup('saveimage.php?id=<?php echo $id;?>',400,400)" class="lblue">Cambiar Foto</a>
							</p>
							<div class="clearfix"></div>
						  </div>
						  <div class="col-md-4">
						  </div>
						  <!--<div class="col-md-4 offset-0">
							<table class="table table-bordered  mt-10">
							<tr class="grey opensans">
								<td class="center"><span class="size30 slim lh4">2</span><br/><span class="size12">Trips</span></td>
								<td class="center"><span class="size30 slim lh4">5</span><br/><span class="size12">Places</span></td>
								<td class="center"><span class="size30 slim lh4">14</span><br/><span class="size12">Days away</span></td>
								<td class="center"><span class="size30 slim lh4">3</span><br/><span class="size12">Countries</span></td>
							</tr>
							</table>
						  </div>-->
						  <!-- End of Admin top -->
						  
						  
						<div class="clearfix"></div>
						<br>
						
						
						<span class="size16 bold">Datos Personales</span>
						<div class="line2"></div>
						  <br>
 						<?php
							include('connect.php');
							$resultado = mysql_query("SELECT id_cliente FROM datos_medicos WHERE id_cliente = '$id' ");
							$fila = mysql_fetch_row($resultado);
							if ($fila[0]==""){
							?>
                          <p style="color:#F00;">Faltan datos por registrar<a href="javascript:popup('regmed.php?id=<?php echo $id; ?>&&event=<?php echo $event;?>',400,400)" class="bookbtn mt1">Registar Datos Médicos</a></p>
                            <?php
							}else{
								echo "<p style=\"color:#0C0;\">Perfil completo</b>";
							}
								
								
							 ?>
						<div class="line2"></div>

						<!-- COL 1 -->
						<div class="col-md-12 offset-0">
                        <form action="#" method="post">
							Nombre completo:
							<input type="text" class="form-control" placeholder="<?php echo $nombre." ".$ap." ".$am; ?>" rel="popover" id="name" data-content="This field is mandatory" data-original-title="Here you can edit your name">				  
							<br/>
							E-mail:
							<input type="text" class="form-control" placeholder="<?php echo $email;?>" id="email" data-content="This field is mandatory" data-original-title="Edit your email address">
							<br/>
							Teléfono:
							<input type="text" class="form-control" placeholder="<?php echo $cel;?>">	
							
							<br/>
							Tu cumpleaños:<br/>
							<div class="row">
							<input type="text" class="form-control" placeholder="<?php echo $fn;?>">			
							</div>
				
						<br/>
						<br/>						
						<span class="size16 bold">Tu dirección</span>
						<div class="line2"></div>
						
						<br/>
						Dirección:
						<input type="text" class="form-control" placeholder="<?php echo $calle." ".$num;?>">							
						
						<br/>
                        Colonia:
						<input type="text" class="form-control" placeholder="<?php echo $col;?>">							
						
						<br/>
						Codigo Postal:
						<input type="text" class="form-control" placeholder="<?php echo $cp;?>">
                        
						<br/><br/>
						Municipio*:
						<input type="text" class="form-control" placeholder="<?php echo $mun;?>">

						<br/>
						Estado:
						<input type="text" class="form-control" placeholder="<?php echo $edo;?>">

					    <!--<button type="submit" class="bluebtn margtop20">Modificar</button>	-->
                        </form>
						</div>
						<!-- END OF COL 1 -->
						
						<div class="clearfix"></div><br/><br/><br/>
						
						
						<!--<div class="row">
							<div class="col-md-4 grey">
								<span class="size16 bold dark">Personal details</span>
								<div class="line2"></div>
								<a href="#" class="clblue">New York Marriott Marquis</a> from <span class="bold green">$150</span><br/>
								<a href="#" class="clblue">The Jade Hotel</a> from <span class="bold green">$49</span><br/>
								<a href="#">See all</a>
							</div>
							<div class="col-md-4">
								<span class="size16 bold dark">Wish lists</span>
								<div class="line2"></div>
								<a href="#" class="clblue">Incredible places</a> (1)<br/>
								<a href="#" class="clblue">My next places</a> (0)<br/>
								<a href="#">+ Add new category</a>							
							</div>						
							<div class="col-md-4">
								<span class="size16 bold dark">Your past bookings</span>
								<div class="line2"></div>				
								<a href="#" class="clblue">Solita Soho Hotel</a> from <span class="bold green">$150</span><br/>
								<a href="#" class="clblue">Helmsley Park Lane Hotel</a> from <span class="bold green">$49</span><br/>
								<a href="#">See all</a>							
							</div>			
						</div>-->
						
					  </div>
					  <!-- END OF TAB 1 -->		

					  
					  
					  <!-- TAB 2 -->					  
					  <div class="tab-pane" id="bookings">
						<div class="padding40">
						<!--Bookings Tab-->
                        <div class="relative margtop10">
							<ul class="nav nav-tabs myTab2pos" id="myTab2">
								
								<li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#cruisetab3"><span class="cruisetab3"></span><span class="hidetext">Arma Tu Paquete</span>&nbsp;</a></li>
								
							</ul>
						
							<div class="tab-content6">
                            <?php
							include('connect.php');
							$resultado = mysql_query("SELECT id_paquete,fecha,id_congreso FROM paquete WHERE id_cliente = '$id' and id_evento='$event'");
							$fila = mysql_fetch_row($resultado);
							$cong=$fila[2];
							if ($fila[1]==""){
								$op="visible";
								echo "<b>Aún no tienes un paquete de viaje, diseñalo a tu gusto:</b>";
								$bandera=0;
								$form="formpaquete";
								//////Aqui llena el form
							}else{
								$op="hidden";
								echo "Ya tienes un paquete de viaje registrado con fecha: ".$fila[1]; // el valor de email
								$bandera=1;
								$form="paq";
								//$datos="?id=".$id."&&event=".$event."";
								///otro form
							}
								
								
							 ?>
                            <br>
                            <br>
                          <?php include(''.$form.'.php');?>
							
							</div>
						</div>
						  <!---->
						</div>
					  </div>
					  <!-- END OF TAB 2 -->	
					  
					  <!-- TAB 3 -->					  
					  <div class="tab-pane" id="wishlist">
						<div class="padding40">
                        <!---->
                        <p class="hpadding20 dark">Listado de pagos</p>
						
						<div class="line2"></div>
						
						<div class="padding20">
							<!--<div class="col-md-4 offset-0">
								<a href="#"><img src="images/items2/item1.jpg" alt="" class="fwimg"/></a>
							</div>-->
							<div class="col-md-8 offset-0">
								<div class="col-md-8 mediafix1">
                                <?php 
                                                                                
                                                    include('connect.php');
                                                    $query="SELECT * FROM evento where id_evento='$event'";
                                                    $link=mysql_connect($server,$dbuser,$dbpass);
                                                    $result=mysql_db_query($database,$query,$link);
                                                    while($row = mysql_fetch_array($result))
                                                    {
                                                         echo '<h4 class="opensans dark bold margtop1 lh1">'.utf8_encode($row['nombre']).'</h4>';
														 echo '<p>'.$row['fecha'].'</p>';
														 $desde=$row['desde'];
                                                    }
                                                             mysql_free_result($result);
                                                    mysql_close($link);                 
                                                    ?>
									
									<div class="clearfix"></div>
									<!--<ul class="checklist2 margtop10">
										<li>FREE Cancellation</li>
										<li>Nuevo Pago</li>
									</ul>	-->								
								</div>
                                <!--REvisa si solicitaron entrada al congreso-->
                                 <?php
								 include('connect.php');
							/*$query="select id_congreso from paquete where id_evento='$event' and id_cliente='$id' ";
							$link=mysql_connect($server,$dbuser,$dbpass);
							$result=mysql_db_query($database,$query,$link);
							while($row = mysql_fetch_array($result))
							{
								$band2=$row['id_congreso'];
							}
							mysql_free_result($result);
							mysql_close($link);*/
								 ////Total de paquete 
                            $band2=0;
							$total=0;                                              
							include('connect.php');
							$query="SELECT paquete.id_paquete as paq ,habitacion.costo as a,barra.costo as b ,opcionespaquete.costo as c,extrapaq.costo as e FROM paquete inner join habitacion on paquete.id_hab=habitacion.id_hab inner join barra on paquete.id_barra=barra.id_barra inner join opcionespaquete on paquete.id_opcion=opcionespaquete.id_opcion inner join extrapaq on paquete.id_extra=extrapaq.id_extra where paquete.id_evento='$event' and paquete.id_cliente='$id' ";
							$link=mysql_connect($server,$dbuser,$dbpass);
							$result=mysql_db_query($database,$query,$link);
							while($row = mysql_fetch_array($result))
							{
							$paq=$row['paq'];
							if($band2==0){
								//no suma precio de congreso
								$total=$row['a']+$row['b']+$row['c']+$row['e'];
								}
								else
								{
								//suma precio de congreso
								$total=$row['a']+$row['b']+$row['c']+$row['d'];
								}
							}
							mysql_free_result($result);
							mysql_close($link);
							
							////////Suma Pagos
							$falta=0;                                              
							include('connect.php');
							$query="Select SUM(pago) as pago from pagos where id_evento='$event' and id_cliente='$id' and id_paquete='$paq' ";
							$link=mysql_connect($server,$dbuser,$dbpass);
							$result=mysql_db_query($database,$query,$link);
							while($row = mysql_fetch_array($result))
							{
								$falta=$row['pago'];
																
							}
							mysql_free_result($result);
							mysql_close($link);               
							?>
								<div class="col-md-4 center bordertype4">
                                	<?php if($total==0) echo "Sin paquete configurado"; ?>
									<span class="opensans green size24">Total:$<?php echo money_format('%i', $total+$desde) ;?></span><br/>
                                    <span class="opensans grey size20">Pagado:$<?php echo money_format('%i', $falta) ;?></span>
                                    <br>
                                    <?php 
									$restapagos=$total-$falta;
									if($restapagos==0) {}
									else{?>
			<a href="javascript:popup('regpago.php?id=<?php echo $id; ?>&&event=<?php echo $event;?>&&paq=<?php echo $paq; ?>',400,400)" class="bookbtn mt1">Nuevo Pago</a>
										<?php 
										}
									
									?>
                                   
								</div>										
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="line2"></div>	
                        <p class="hpadding20 dark">Listado de pagos</p>	
							<table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                      	<th>Fecha</th>
                        <th>Cantidad</th>
                        <th>Comprobante</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php 
                                                                                
							include('connect.php');
							$query="SELECT * from pagos where id_evento='$event' and id_cliente='$id' ";
							$link=mysql_connect($server,$dbuser,$dbpass);
							$result=mysql_db_query($database,$query,$link);
							while($row = mysql_fetch_array($result))
							{
								$pago=$row['pago'];
								$res=$total-$pago;
							 echo '<tr>';
							 echo '<td>'.$row['fecha'].'</td>'; 
							echo '<td>$'.money_format('%i', $pago).'</td>';
							echo'<td><a href="comprobante/'.$row['archivo'].'" target="_blank">'.$row['archivo'].'</a></td>';
                      	echo '</tr>';
							}
							mysql_free_result($result);
							mysql_close($link);                 
							?>
                      </tbody>
                      </table>
                        <!---->
						</div>
					  </div>
					  <!-- END OF TAB 3 -->	
					  
					  <!-- TAB 4 -->					  
					  <div class="tab-pane" id="settings">
						<div class="padding40">
						<!--contrato-->
				<p><a style='cursor: pointer;' onclick="muestra_oculta('contrato')" title="">Mostar/Ocultar Contrato</a></p>
                <div id="contrato">
                 <iframe id="cont" name="cont" src="contratoperfil.php?id=<?php echo $id;?>" width="100%" height="600" style="border:hidden;"></iframe>
                </div>
                <!--contrato-->
						</div>
					  </div>
					  <!-- END OF TAB 4 -->	
					  
					  <!-- TAB 5 -->					  
					  <div class="tab-pane" id="history">
						<div class="padding40">
						History Tab - comingsoon
						</div>
					  </div>
					  <!-- END OF TAB 5 -->	
					  
					  <!-- TAB 6 -->					  
					  <div class="tab-pane" id="password">
						<div class="padding40">
						Password Tab - comingsoon
						</div>
					  </div>
					  <!-- END OF TAB 6 -->	
					  
					  <!-- TAB 7 -->					  
					  <div class="tab-pane" id="newsletter">
						<div class="padding40">
						Newsletter Tab - comingsoon
						</div>
					  </div>
					  <!-- END OF TAB 7 -->	
					</div>
					<!-- End of Tab panes from left menu -->	
				</div>
				<!-- END OF RIGHT CPNTENT -->
			<div class="clearfix"></div><br/><br/>
			</div>
			<!-- END CONTENT -->			
		</div>
	</div>
	<!-- END OF CONTENT -->
	<!-- FOOTER -->
	
	<?php include('footer2.php');?>
	
	<div class="footerbg3black">
		<div class="container center grey"> 
		<a href="#top" class="gotop scroll"><img src="images/spacer.png" alt=""/></a>
		</div>
	</div>
	<!-- Javascript  -->
	<script src="assets/js/js-profile.js"></script>
	
    <!-- Nicescroll  -->	
	<script src="assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- Custom functions -->
    <script src="assets/js/functions.js"></script>
	
    <!-- Custom Select -->
	<script type='text/javascript' src='assets/js/jquery.customSelect.js'></script>
	
	<!-- Load Animo -->
	<script src="plugins/animo/animo.js"></script>

    <!-- Picker -->	
	<script src="assets/js/jquery-ui.js"></script>	

    <!-- Picker -->	
    <script src="assets/js/jquery.easing.js"></script>	
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script><script>  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');  ga('create', 'UA-43203432-1', 'titanicthemes.com');  ga('send', 'pageview');</script>

<script type="text/javascript">
function popup(url,ancho,alto) {
var posicion_x; 
var posicion_y; 
posicion_x=(screen.width/2)-(ancho/2); 
posicion_y=(screen.height/2)-(alto/2); 
window.open(url, "mastravel.mx", "width="+ancho+",height="+alto+",menubar=0,toolbar=0,directories=0,scrollbars=no,resizable=no,left="+posicion_x+",top="+posicion_y+"");
}
</script>    
<script language="JavaScript">
 window.onload = function () {
        muestra_oculta('contrato');
 }

function muestra_oculta(id) {
        if (document.getElementById) { //se obtiene el id
            var el = document.getElementById(id); //se define la variable "el" igual a nuestro div
            el.style.display = (el.style.display == 'none') ? 'block' : 'none'; //damos un atributo display:none que oculta el div
        }
    }
   
</script>
  </body>
</html>
