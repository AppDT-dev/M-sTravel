<?php 
	$event=$_GET['event'];
	$mail=$_GET['mail'];
	//$acepta = $_POST['acepto'];
//if ($acepta != 'si') {
   // $acepta = 'no';
//}
	?>

<!DOCTYPE html>
<html>
  <head>
<?php include('head.php'); ?>
</head>
  <body id="top" class="thebg" >
    <?php include('menu.php'); ?>
	
	
	<div class="container breadcrub">
	    <div>
			<a class="homebtn left" href="#"></a>
			<div class="left">
				<!--<ul class="bcrumbs">
                
                <li>/</li>
					<li><a href="evento.php?event=<?php echo $event;  ?>">Evento</a></li>
                    <li>/</li>
					<li><a href="#">Registro</a></li>
				</ul>	-->			
			</div>
			<a class="backbtn right" href="#"></a>
		</div>
		<div class="clearfix"></div>
		<div class="brlines"></div>
	</div>	

	<!-- CONTENT -->
	<div class="container">
		<div class="container mt25 offset-0">
			<!-- LEFT CONTENT -->
			<div class="col-md-8 pagecontainer2 offset-0">

				<div class="padding30 grey">
					<span class="size16px bold dark left">¡Listo!</span>
					<div class="clearfix"></div>
					<div class="line4"></div>
					Ya puedes acceder a tu perfil.
				</div>
		
			</div>
			<!-- END OF LEFT CONTENT -->	
          	
			
			<!-- RIGHT CONTENT -->
			<div class="col-md-4" >
				<?php
				
						include('connect.php');
						$query="SELECT * FROM evento WHERE id_evento='$event'";
						$link=mysql_connect($server,$dbuser,$dbpass);
						$result=mysql_db_query($database,$query,$link);
						while($row = mysql_fetch_array($result))
						{
							setlocale(LC_MONETARY, 'es_MX');
							$fecha=$row['fecha'];
							$direc=$row['direccion'];
							$costo=$row['desde'];
							
						echo '<div class="pagecontainer2 paymentbox grey">';
							echo '<div class="padding30">';
								echo '<img src="images/thumb.png" class="left margright20" alt=""/>';
								echo '<span class="opensans size18 dark bold">'.utf8_encode($row['nombre']).'</span>';
								echo '<span class="opensans size13 grey">'.$row['estado'].'</span><br/>';
								echo '<img src="images/bigrating-5.png" alt=""/>';
							echo '</div><div class="line3"></div>';
						}
						mysql_free_result($result);
                                    mysql_close($link);
				
					?>
					<div class="hpadding30 margtop30">
						<table class="table table-bordered margbottom20">
							<tr>
								<td>Fecha:</td>
								<td class="center green bold"><?php echo $fecha;?></td>
							</tr>
							<tr>
								<td>Ubicación:</td>
								<td class="center green bold"><?php echo utf8_encode($direc);?></td>
							</tr>
							<tr>
								<td colspan=2><span class="dark">Habitaciones:</span>:Cuadruple |Doble| Sencilla</td>
							</tr>
							<!--<tr>
								<td colspan=2><span class="dark">Noches</span>:<?php echo $fecha;?></td>
							</tr>-->
						
						</table>
					</div>	
					<div class="line3"></div>
					


				</div><br/>
				
				<br/>
				
				<div class="pagecontainer2 loginbox">
					<div class="cpadding1">
                    <form action="check.php" method="post">
						<span class="icon-lockk"></span>
						<h3 class="opensans">Acceso</h3>
						<input type="text" class="form-control logpadding" placeholder="Email" name="user">
						<br/>
						<input type="text" class="form-control logpadding" placeholder="Telefono" name="password">
						<div class="margtop20">
							<div class="left">
								<div class="checkbox padding0">
									<label>
									  <input type="checkbox">Recordar
									</label>
								</div>
								<a href="#" class="greylink">¿Olvidaste tu contraseña?</a><br/>
							</div>
							<div class="right">
								<button class="btn-search5" type="submit">Entrar</button>	
							</div>
						</div>
						<div class="clearfix"></div><br/>
                        </form>
					</div>
				</div><br/>
			
			</div>
			<!-- END OF RIGHT CONTENT -->
			
			
		</div>
		
		
	</div>
	<!-- END OF CONTENT -->
	

	<?php include('footer2.php');?>
	
	
	
	<?php include('js.php');?>
<script type="text/javascript">
function popup(url,ancho,alto) {
var posicion_x; 
var posicion_y; 
posicion_x=(screen.width/2)-(ancho/2); 
posicion_y=(screen.height/2)-(alto/2); 
window.open(url, "mastravel.mx", "width="+ancho+",height="+alto+",menubar=0,toolbar=0,directories=0,scrollbars=yes,resizable=no,left="+posicion_x+",top="+posicion_y+"");
}
</script>
  </body>
</html>
