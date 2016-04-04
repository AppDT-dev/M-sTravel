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
				<ul class="bcrumbs">
					<li>/</li>
					<li><a href="#">Eventos</a></li>
					<li>/</li>
					<li><a href="#">Listado de eventos</a></li>
								
				</ul>				
			</div>
			<a class="backbtn right" href="#"></a>
		</div>
		<div class="clearfix"></div>
		<div class="brlines"></div>
	</div>	

	<!-- CONTENT -->
	<div class="container">
		<div class="container pagecontainer offset-0">	

			<!-- FILTERS -->
			<div class="col-md-3 filters offset-0">
			
				
				<!-- TOP TIP --
				<div class="filtertip">
					<div class="padding20">
						<p class="size13"><span class="size18 bold counthotel">53</span> Hotels starting at</p>
						<p class="size30 bold">$<span class="countprice"></span></p>
						<p class="size13">Narrow results or <a href="#">view all</a></p>
					</div>
					<div class="tip-arrow"></div>
				</div>
				
				<!-- END OF BOOK FILTERS -->	
				
				<div class="line2"></div>
				
				<div class="padding20title"><h3 class="opensans dark">Actualmente</h3></div>
				
				<div class="line2"></div>
				<div class="clearfix"></div>
				<br/>
				<br/>
				<br/>
				
				
			</div>
			<!-- END OF FILTERS -->
			
			<!-- LIST CONTENT   Arreglar a solo un evento por lista-->
			<div class="rightcontent col-md-9 offset-0">
			
				<br/><br/>
				<div class="clearfix"></div>
				

				<div class="itemscontainer offset-1">
						<?php 
						$event=$_GET['event'];
						include('connect.php');
						$query="SELECT * FROM evento WHERE id_evento='$event'";
						$link=mysql_connect($server,$dbuser,$dbpass);
						$result=mysql_db_query($database,$query,$link);
						while($row = mysql_fetch_array($result))
						{
							setlocale(LC_MONETARY, 'es_MX');
								$idevenet=$row['id_evento'];
								$namevenet=$row['nombre'];
								$fechaevenet=$row['fecha'];
								$direvenet=$row['direccion'];
								$estevenet=$row['estado'];
								$costevenet=$row['desde'];
						}
 									mysql_free_result($result);
                                    mysql_close($link);
						?>
	
					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="images/items/item7.jpg" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="images/items/item7.jpg" alt=""/></a>
								<div class="liover"></div>
								<a class="fav-icon" href="#"></a>
								<a class="book-icon" href="registro.php?event=<?php echo $idevenet; ?>"></a>
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel3">
								<div class="labelright">
									<img src="images/filter-rating-5.png" width="60" alt=""/><br/><br/><br/>
									<img src="images/user-rating-5.png" width="60" alt=""/><br/>
									<span class="size11 grey">18 Visitas</span><br/><br/>
									<span class="green size18"><b><?php echo "$".money_format('%i', $costevenet); ?></b></span><br/>
									<span class="size11 grey">Por Persona</span><br/><br/><br/>
                                    <a href="registro.php?event=<?php echo $idevenet; ?>" class="bookbtn mt1">Registrarse</a>	
								</div>
								<div class="labelleft2">			
									<b><?php echo utf8_encode($namevenet);?></b><br/><br/><br/>
									<p class="grey">
									<?php echo "Fecha: ".$fechaevenet;
										echo "<br>";
										echo "Ubicacion: ".utf8_encode($direvenet);
										echo "<br>";
										echo "Estado:" .$estevenet;
									?></p><br/>
									<ul class="hotelpreferences">
										<li class="icohp-internet"></li>
										<li class="icohp-air"></li>
										<li class="icohp-pool"></li>
										<li class="icohp-childcare"></li>
										<li class="icohp-fitness"></li>
										<li class="icohp-breakfast"></li>
										<li class="icohp-parking"></li>
										<li class="icohp-pets"></li>
										<li class="icohp-spa"></li>
									</ul>
									
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
					<div class="offset-2"><hr class="featurette-divider3"></div>
					<!--php
					<div class="offset-2">
						<div class="col-md-4 offset-0">
							<div class="listitem2">
								<a href="images/items/item11.jpg" data-footer="A custom footer text" data-title="A random title" data-gallery="multiimages" data-toggle="lightbox"><img src="images/items/item11.jpg" alt=""/></a>
								<div class="liover"></div>
								<a class="fav-icon" href="#"></a>
								<a class="book-icon" href="registro.php"></a>
							</div>
						</div>
						<div class="col-md-8 offset-0">
							<div class="itemlabel3">
								<div class="labelright">
									<img src="images/filter-rating-5.png" width="60" alt=""/><br/><br/><br/>
									<img src="images/user-rating-5.png" width="60" alt=""/><br/>
									<span class="size11 grey">Del 15 al 19 de Junio</span><br/><br/>
									<span class="green size18"><b>Desde $1,500.00</b></span><br/>
									<span class="size11 grey">Por persona</span><br/><br/><br/>
									<a href="registro.php?event=2" class="bookbtn mt1">Registrarse</a>	
								</div>
								<div class="labelleft2">			
									<b>Puerto Vallarta</b><br/><br/><br/>
									<p class="grey">
									Hotel Plaza Pelícanos Club Beach Resort</p><br/>
									<ul class="hotelpreferences">
										<li class="icohp-hairdryer"></li>
										<li class="icohp-garden"></li>
										<li class="icohp-grill"></li>
										<li class="icohp-kitchen"></li>
										<li class="icohp-bar"></li>
										<li class="icohp-living"></li>
										<li class="icohp-tv"></li>
									</ul>
									
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>
					<div class="offset-2"><hr class="featurette-divider3"></div>
					-->
				</div>	
				<!-- End of offset1-->		

				<!--<div class="hpadding20">
				
					<ul class="pagination right paddingbtm20">
					  <li class="disabled"><a href="#">&laquo;</a></li>
					  <li><a href="#">1</a></li>
					  <li><a href="#">2</a></li>
					  <li><a href="#">3</a></li>
					  <li><a href="#">4</a></li>
					  <li><a href="#">5</a></li>
					  <li><a href="#">&raquo;</a></li>
					</ul>

				</div>-->

			</div>
			<!-- END OF LIST CONTENT-->
			
		</div>
		<!-- END OF container-->
		
	</div>
	<!-- END OF CONTENT -->
	
	<?php include('footer2.php');?>
	
	
	
<?php include('js.php'); ?>
  </body>
</html>
