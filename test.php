<?php 
	
	require 'database.php';

	if ( !empty($_POST)) {
		// keep track validation errors
		$nameError = null;
		/*$apError = null;
		$amError = null;
		$edadError = null;
		$calleError = null;
		$numeroError = null;
		$coloniaError = null;
		$munError = null;
		$estadoError = null;
		$telError = null;
		$celError = null;
		$emailError = null;
		$coorError = null;*/
		
		// keep track post values
		$name = $_POST['name'];
		/*$ap = $_POST['ap'];
		$am = $_POST['am'];
		$edad = $_POST['edad'];
		$gen = $_POST['gen'];
		$calle = $_POST['calle'];
		$numero = $_POST['numero'];
		$col = $_POST['col'];
		$mun = $_POST['mun'];
		$estado = $_POST['estado'];
		$tel = $_POST['tel'];
		$cel = $_POST['cel'];
		$email = $_POST['email'];
		$evento=1;
		$coord=1;*/
		
		// validate input
		$valid = true;
		if (empty($name)) {
			$nameError = 'Please enter Name';
			$valid = false;
		}
		
		/*if (empty($ap)) {
			$apError = 'Please enter Apellido';
			$valid = false;
		}
		if (empty($am)) {
			$amError = 'Please enter Apellido';
			$valid = false;
		}
		if (empty($edad)) {
			$edadError = 'Please enter Edad';
			$valid = false;
		}
		if (empty($calle)) {
			$calleError = 'Please enter Calle';
			$valid = false;
		}
		if (empty($num)) {
			$numError = 'Please enter Numero';
			$valid = false;
		}
		if (empty($col)) {
			$colError = 'Please enter Colonia';
			$valid = false;
		}
		if (empty($estado)) {
			$estadoError = 'Please enter Estado';
			$valid = false;
		}
		if (empty($cel)) {
			$celError = 'Please enter Num. Celular';
			$valid = false;
		}
		
		if (empty($email)) {
			$emailError = 'Please enter Email';
			$valid = false;
		} else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
			$emailError = 'Please enter a valid Email';
			$valid = false;
		}*/
			
		// insert data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO clientes (nombre,ap,am,edad,gen,calle,numero,col,mun,estado,tel,cel,email,id_coord,id_evento) values(?, ?, ?,?,?,?,?,?,?,?,?,?,?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($name,$ap,$am,$edad,$gen,$calle,$numero,$col,$mun,$estado,$tel,$cel,$email,$coord,$evento));
			Database::disconnect();
			header("Location: index.php");
		}
	}
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
				<ul class="bcrumbs">
					<li><a href="#">Registro</a></li>
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
			<!-- LEFT CONTENT -->
			<div class="col-md-8 pagecontainer2 offset-0">

				<div class="padding30 grey">
					<span class="size16px bold dark left">Datos Personales</span>
					<div class="roundstep active right">1</div>
					<div class="clearfix"></div>
					<div class="line4"></div>
					Es importante utilizar datos...<br/><br/>
					<form action="test.php" method="post">
                    
					<div class="col-md-4 textright">
						<div class="margtop15"><span class="dark">Nombre Completo:</span><span class="red">*</span></div>
					</div>
					 <div class="col-md-4" <?php echo !empty($nameError)?'error':'';?>>
					   <span class="size12">Nombre(s)*</span>
					      	<input name="name" type="text" class="form-control"  placeholder="" value="<?php echo !empty($name)?$name:'';?>">
					      	
					  </div>
					<div class="col-md-4 textleft margtop15">
                    <?php if (!empty($nameError)): ?>
					      		<span style="color:#F00"><?php echo $nameError;?></span>
					      	<?php endif; ?>
					</div>
					<div class="clearfix"></div>
					<br/>
                    <div class="col-md-4 textright">
						<div class="margtop15"><span class="dark">Apellidos:</span><span class="red">*</span></div>
					</div>
					<div class="col-md-4">
						<span class="size12">Paterno*</span>
						<input type="text" name="ap" class="form-control " placeholder="">
					</div>
					<div class="col-md-4 textleft margtop15">
					</div>
					<div class="clearfix"></div>
					<br/>
                    <div class="col-md-4 textright">
						<div class="margtop15"><span class="dark">Apellidos:</span><span class="red">*</span></div>
					</div>
					<div class="col-md-4">
						<span class="size12">Meterno*</span>
						<input type="text" name="am" class="form-control " placeholder="">
					</div>
					<div class="col-md-4 textleft margtop15">
					</div>
					<div class="clearfix"></div>
					<br/>
					<div class="col-md-4 textright">
						<div class="margtop7"><span class="dark">Telefonos:</span><span class="red">*</span></div>
					</div>
					<div class="col-md-4">
						<span class="size12">De casa*</span>						
						<input type="text" name="tel" class="form-control" placeholder="">
					</div>
					<div class="col-md-4 textleft">
						<span class="size12">Celular*</span>	
						<input type="text" name="cel" class="form-control" placeholder="">
					</div>
					<div class="clearfix"></div>
					<br/>
                    <div class="col-md-4 textright">
						<div class="margtop15"><span class="dark">Genero:</span><span class="red">*</span></div>
					</div>
					<div class="col-md-4">
						<span class="size12">*</span>
						<select name="gen"><option value="h">Hombre</option><option value="m">Mujer</option></select>
					</div>
					<div class="col-md-4 textleft margtop15">
					</div>
					<div class="clearfix"></div>
					<br/>
                    <div class="col-md-4 textright">
						<div class="margtop15"><span class="dark">Edad:</span><span class="red">*</span></div>
					</div>
					<div class="col-md-4">
						<span class="size12">Fecha de nacimento*</span>						
						<input type="text" name="fecha" class="form-control" placeholder="16-dic-88">
					</div>
					<div class="col-md-4 textleft">
						<span class="size12">Edad*</span>	
						<input type="text" name="edad" class="form-control" placeholder="">
					</div>
					<div class="clearfix"></div>
					<br/>
					<div class="col-md-4">
					</div>
					<!--<div class="col-md-8 textleft">
						Bedding / Smoking Request (optional)
						<!-- Collapse 3 --
						<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse3"></button>
						<div id="collapse3" class="collapse">
							<textarea rows="3" class="form-control margtop10"></textarea>
						</div>
						<!-- End of collapse 3 --
						<div class="clearfix"></div>				

						Special Requests (optional)		
						<!-- Collapse 4 --	
						<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse4"></button>
						<div id="collapse4" class="collapse">
							<textarea rows="3" class="form-control margtop10"></textarea>
						</div>
						<!-- End of collapse 4 --
						<div class="clearfix"></div>	
						
					</div>
					<div class="clearfix"></div>-->
					
					
					<br/>
					<br/>
					<span class="size16px bold dark left">Dirección</span>
					<div class="roundstep right">2</div>
					<div class="clearfix"></div>
					<div class="line4"></div>		
					<br/>
					<div class="col-md-4">
					</div>
					<div class="col-md-4">
						Codigo Postal
						<!-- Collapse 5 -->	
						<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse5"></button>
						<div id="collapse5" class="collapse">
							<input type="text" name="cp" class="form-control margtop10" placeholder="">
						</div>
						<!-- End of collapse 5 -->
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 textleft">
					</div>
					<div class="clearfix"></div>
					

					<br/>
					<!-- Nav tabs -->
					<ul class="nav navigation-tabs">
					  <li class="active"><a href="#card" data-toggle="tab">Direccion Actual</a></li>
					  <!--<li><a href="#paypal" data-toggle="tab">Paypal</a></li>-->
					</ul>

					<!-- Tab panes -->
					<div class="tab-content4">
					
					  <!-- Tab 1 -->
					  <div class="tab-pane active" id="card">
					  
							<div class="col-md-4 textright">
								<div class="margtop15"><span class="dark">Calle:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
								<input type="text" name="calle" class="form-control margtop10" placeholder="">
							</div>
							<div class="col-md-4 textleft">
							</div>
							<div class="clearfix"></div>
							
							<br/>
                            <div class="col-md-4 textright">
								<div class="margtop15"><span class="dark">Numero:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
								<input type="text" name="numero" class="form-control margtop10" placeholder="">
							</div>
							<div class="col-md-4 textleft">
							</div>
							<div class="clearfix"></div>
							
							<br/>
                            <div class="col-md-4 textright">
								<div class="margtop15"><span class="dark">Colonia:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
								<input type="text" name="col" class="form-control margtop10" placeholder="">
							</div>
							<div class="col-md-4 textleft">
							</div>
							<div class="clearfix"></div>
							
							<br/>
                            <div class="col-md-4 textright">
								<div class="margtop15"><span class="dark">Municipio:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
								<input type="text" name="mun" class="form-control margtop10" placeholder="">
							</div>
							<div class="col-md-4 textleft">
							</div>
							<div class="clearfix"></div>
							
							<br/>
							<div class="col-md-4 textright">
								<div class="margtop7"><span class="dark">Estado:</span><span class="red">*</span></div>
							</div>
							<div class="col-md-4">
                                <select name="estado" id="state" class="form-control mySelectBoxClass">
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Durango">Durango</option>
                        <option value="Estado de México">Estado de México</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                    		</select>
							</div>
							<div class="col-md-4 textleft">
							</div>
							<div class="clearfix"></div>
							
							<br/>
							
					  
					  </div>
					  <!-- End of Tab 1 -->					  
					  
					  <!-- Tab 2 --				  
					  <div class="tab-pane" id="paypal">
						
						<div class="alert alert-warning fade in">
							<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
							<strong>Important:</strong> You will be redirected to PayPal's website to securely complete your payment. 
						</div>

						<button type="submit" class="btn-search5">Proceed to paypal</button>

					  </div>
					  <!-- End of Tab 2 -->	
					</div>

					
					<br/>
					<br/>
					<span class="size16px bold dark left">Datos de usuario</span>
					<div class="roundstep right">3</div>
					<div class="clearfix"></div>
					<div class="line4"></div>	
                    Por ultimo.Usa tu emal para recibir tus datos de acceso<br/> 
					<div class="col-md-4 textright">
						<div class="mt15"><span class="dark">Email:</span><span class="red">*</span></div>
					</div>
					<div class="col-md-4">
					<input type="text" name="email" class="form-control margtop10" placeholder="">
					</div>
					<div class="col-md-4 textleft">
					</div>
					<div class="clearfix"></div>
					<br/>
                    <div class="col-md-4 textright">
						<div class="mt15"><span class="dark">Clave de tu Coordinador:</span><span class="red">*</span></div>
					</div>
					<div class="col-md-4">
					<input type="text" name="coord" class="form-control margtop10" placeholder="">
					</div>
					<div class="col-md-4 textleft">
					</div>
					<div class="clearfix"></div>
					<br/>
                    
					<br/>
					<span class="size16px bold dark left">Review and book your trip</span>
					<div class="roundstep right">4</div>
					<div class="clearfix"></div>
					<div class="line4"></div>		
					
					<div class="alert alert-info">
					Informacion importante:<br/>
					<p class="size12">• Favor de revisar nuestro aviso de privacidad y control de datos.</p>
					</div>
                    Estas de acuerdo y aceptas los terminos <a href="#" class="clblue">rules & 
					restrictions</a> <a href="#" class="clblue">terms & conditions</a> , and <a href="#" class="clblue">privacy policy</a>.	<br/>		
					
					<button type="submit" class="bluebtn margtop20">Registrarme</button>	
					
				</form>	
				</div>
		
			</div>
			<!-- END OF LEFT CONTENT -->	
          	
			
			<!-- RIGHT CONTENT -->
			<div class="col-md-4" >
				
				<div class="pagecontainer2 paymentbox grey">
					<div class="padding30">
						<img src="images/thumb.png" class="left margright20" alt=""/>
						<span class="opensans size18 dark bold">Nombre de evento</span>
						<span class="opensans size13 grey">Ciudad, Estado</span><br/>
						<img src="images/bigrating-5.png" alt=""/>
					</div>
					<div class="line3"></div>
					
					<div class="hpadding30 margtop30">
						<table class="table table-bordered margbottom20">
							<tr>
								<td>Guests recommendations</td>
								<td class="center green bold">97%</td>
							</tr>
							<tr>
								<td>Guest ratings</td>
								<td class="center green bold">4.5</td>
							</tr>
							<tr>
								<td colspan=2><span class="dark">Room 1</span>: Standard Double Room</td>
							</tr>
							<tr>
								<td colspan=2><span class="dark">5 Nights</span>: Sep/10/2013 - Sep/14/2013</td>
							</tr>
							<tr>
								<td>
									<span class="dark">Room 1</span>: 2 Adults<br/>
									5 Nights
									<!-- Collapse 1 -->	
									<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse1"></button>
									<div id="collapse1" class="collapse">
										<div class="left size12 lblue">
											Thu Nov 14<br/>
											Fri Nov 15
										</div>
										<div class="right size12 lblue">
											$15.92<br/>
											$20.00
										</div><div class="clearfix"></div>	
									</div>
									<!-- End of collapse 1 -->
									<div class="clearfix"></div>	
									
									
									Taxes & Fees per night
									
									<!-- Collapse 1 -->	
									<button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse2"></button>
									<div id="collapse2" class="collapse">
										<div class="left size12 lred">
											Thu Nov 14<br/>
											Fri Nov 15
										</div>
										<div class="right size12 lred">
											$1.51<br/>
											$1.00
										</div><div class="clearfix"></div>	
									</div>
									<!-- End of collapse 1 -->
									<div class="clearfix"></div>	
									
								</td>
								<td class="center">
									avg./night<br/>
									$35.92<br/>
									$2.51<br/>
								</td>
							</tr>
						</table>
					</div>	
					<div class="line3"></div>
					<div class="padding30">					
						<span class="left size14 dark">Trip Total:</span>
						<span class="right lred2 bold size18">$192.15</span>
						<div class="clearfix"></div>
					</div>


				</div><br/>
				
				<div class="pagecontainer2 needassistancebox">
					<div class="cpadding1">
						<span class="icon-help"></span>
						<h3 class="opensans">Necesitas ayuda?</h3>
						<p class="size14 grey">Nuestro equipo esta disponible 24/7 para tu atención</p>
						<p class="opensans size30 lblue xslim">1-866-599-6674</p>
					</div>
				</div><br/>
				
				<div class="pagecontainer2 loginbox">
					<div class="cpadding1">
						<span class="icon-lockk"></span>
						<h3 class="opensans">Log in</h3>
						<input type="text" class="form-control logpadding" placeholder="Email">
						<br/>
						<input type="text" class="form-control logpadding" placeholder="Telefono">
						<div class="margtop20">
							<div class="left">
								<div class="checkbox padding0">
									<label>
									  <input type="checkbox">Recordad
									</label>
								</div>
								<a href="#" class="greylink">Olvidaste tu contraseña?</a><br/>
							</div>
							<div class="right">
								<button class="btn-search5" type="submit" onclick="errorMessage()">Login</button>	
							</div>
						</div>
						<div class="clearfix"></div><br/>
					</div>
				</div><br/>
			
			</div>
			<!-- END OF RIGHT CONTENT -->
			
			
		</div>
		
		
	</div>
	<!-- END OF CONTENT -->
	

	
	
	<!-- FOOTER -->
	
	<div class="footerbgblack">
		<div class="container">		
			
			<div class="col-md-3">
				<span class="ftitleblack">Siguenos</span>
				<div class="scont">
					<a href="#" class="social1b"><img src="images/icon-facebook.png" alt=""/></a>
					<a href="#" class="social2b"><img src="images/icon-twitter.png" alt=""/></a>
					<a href="#" class="social3b"><img src="images/icon-gplus.png" alt=""/></a>
					<a href="#" class="social4b"><img src="images/icon-youtube.png" alt=""/></a>
					<br/><br/><br/>
					<a href="#"><img src="images/mas.png" width="158" height="80" alt="" /></a><br/>
					<span class="grey2">&copy; 2016  |  <a href="#">Privacy Policy</a><br/>
					All Rights Reserved </span>
					<br/><br/>
					
				</div>
			</div>
			<!-- End of column 1-->
			
			<div class="col-md-3">
				<span class="ftitleblack">Travel Specialists</span>
				<br/><br/>
				<ul class="footerlistblack">
					<li><a href="#">Golf Vacations</a></li>
					<li><a href="#">Ski & Snowboarding</a></li>
					<li><a href="#">Disney Parks Vacations</a></li>
					<li><a href="#">Disneyland Vacations</a></li>
					<li><a href="#">Disney World Vacations</a></li>
					<li><a href="#">Vacations As Advertised</a></li>
				</ul>
			</div>
			<!-- End of column 2-->		
			
			<div class="col-md-3">
				<span class="ftitleblack">Travel Specialists</span>
				<br/><br/>
				<ul class="footerlistblack">
					<li><a href="#">Weddings</a></li>
					<li><a href="#">Accessible Travel</a></li>
					<li><a href="#">Disney Parks</a></li>
					<li><a href="#">Cruises</a></li>
					<li><a href="#">Round the World</a></li>
					<li><a href="#">First Class Flights</a></li>
				</ul>				
			</div>
			<!-- End of column 3-->		
			
			<div class="col-md-3 grey">
				<span class="ftitleblack">Newsletter</span>
				<div class="relative">
					<input type="email" class="form-control fccustom2black" id="exampleInputEmail1" placeholder="Enter email">
					<button type="submit" class="btn btn-default btncustom">Submit<img src="images/arrow.png" alt=""/></button>
				</div>
				<br/><br/>
				<span class="ftitleblack">Customer support</span><br/>
				<span class="pnr">1-866-599-6674</span><br/>
				<span class="grey2">office@travel.com</span>
			</div>			
			<!-- End of column 4-->			
		
			
		</div>	
	</div>
	
	<?php include('js.php');?>
  </body>
</html>
