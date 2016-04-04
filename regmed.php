<?php 
	$id=$_GET['id'];
	$event=$_GET['event'];
	
	include('connect.php');
	$query="SELECT gen FROM Clientes where id_cliente='$id'";
	$link=mysql_connect($server,$dbuser,$dbpass);
	$result=mysql_db_query($database,$query,$link);
	while($row = mysql_fetch_array($result))
	{
		$gen=$row['gen'];
	}
	 mysql_free_result($result);
     mysql_close($link);        
	
	require 'database.php';

	if ( !empty($_POST)) {
		// keep track validation errors
		$sangeError = null;
		$alergicoError = null;
		$enfermedadError = null;
		$medError = null;
		
		// keep track post values
		if($gen=="m"){
			$posible = $_POST['posible'];
			$emb = $_POST['emb'];
			}else
			{
			$posible = "3";
			$emb = "3";
				}
		$sangre = $_POST['sangre'];
		$alergico = $_POST['alergico'];
		$enfermedad = $_POST['enfermedad'];
		
		$hospital = $_POST['hospital'];
		
		$med = $_POST['med'];
		// validate input
		$valid = true;
		if (empty($sangre)) {
			$sangreError = 'Please enter Tipo de sangre';
			$valid = false;
		}
		
		if (empty($enfermedad)) {
			$enfermedadError = 'Please enter Datos';
			$valid = false;
		}
		
		if (empty($alergico)) {
			$alergicoError = 'Please enter Si eres Alergico';
			$valid = false;
		} 
		
		if (empty($med)) {
			$medError = 'Please enter Medicamentos usados';
			$valid = false;
		} 
		
		// insert data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO datos_medicos (id_cliente,t_sangre,alergico,enfermedad,hospital,posibleemb,emb,medicamentos) values(?,?,?,?,?,?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($id,$sangre,$alergico,$enfermedad,$hospital,$posible,$emb,$med));
			Database::disconnect();
			//header("Location: profile.php?id=$id&&event=$event");
			$done="Registro exitoso. Tus datos se estan cargando.";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php');?>
</head>

<body>
<div class="login-fullwidith">
<form class="form-horizontal" action="regmed.php?id=<?php echo $id; ?>&&event=<?php echo $event;?>" method="post">
<div class="login-wrap">
<img src="images/maslogo.png" class="login-img" alt="logo"/><br/>
			<div class="login-c1">
            Registra tus datos médicos.
				<div class="cpadding50">
    		
	    			
					  <div class="control-group <?php echo !empty($sangreError)?'error':'';?>">
					    <label class="control-label">Tipo de sangre</label>
					    <div class="controls">
					      	<input name="sangre" type="text"  placeholder="Tipo de sangre" value="<?php echo !empty($sangre)?$sangre:'';?>">
					      	<?php if (!empty($sangreError)): ?>
					      		<span class="help-inline"><?php echo $sangreError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($alergicoError)?'error':'';?>">
					    <label class="control-label">¿Eres alergico a algo?</label>
					    <div class="controls">
					      	<input name="alergico" type="text" placeholder="" value="<?php echo !empty($alergico)?$alergico:'';?>">
					      	<?php if (!empty($alergicoError)): ?>
					      		<span class="help-inline"><?php echo $alergicoError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($enfermedadError)?'error':'';?>">
					    <label class="control-label">¿Tienes alguna enfermedad/fractura/cirugía?</label>
					    <div class="controls">
					      	<input name="enfermedad" type="text"  placeholder="" value="<?php echo !empty($enfermedad)?$enfermedad:'';?>">
					      	<?php if (!empty($enfermedadError)): ?>
					      		<span class="help-inline"><?php echo $enfermedadError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
                       <div class="control-group">
					    <label class="control-label">¿Haz estado hospitalizado?</label>
					    <div class="controls">
					      	<select name="hospital">
                            <option value="0">No</option>
                             <option value="1">Si</option>
                            </select>
					      	
					    </div>
					  </div>
                      <?php 
					  if($gen=="m")
					  {?>
						   <div class="control-group">
					    <label class="control-label">¿Posibilidad de estar embarazada?</label>
					    <div class="controls">
					      	<select name="posible">
                            <option value="0">No</option>
                             <option value="1">Si</option>
                            </select>
					      	
					    </div>
					  </div>
                       <div class="control-group">
					    <label class="control-label">¿Estas embarazada?</label>
					    <div class="controls">
					      	<select name="emb">
                            <option value="0">No</option>
                             <option value="1">Si</option>
                            </select>
					      	
					    </div>
					  </div>
						  <?php
						}
					  ?>
                      
                       <div class="control-group <?php echo !empty($medError)?'error':'';?>">
					    <label class="control-label">Menciona medicamentos utilizados regularmente</label>
					    <div class="controls">
					      	<input name="med" type="text"  placeholder="" value="<?php echo !empty($med)?$med:'';?>" multiple>
					      	<?php if (!empty($medError)): ?>
					      		<span class="help-inline"><?php echo $medError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>
                       <br>
					 <div class="login-c2">
					<div class="logmargfix">
					<div class="chpadding50">
							<div class="alignbottom">
								<button class="btn-search4"  type="submit">Enviar</button>							
							</div>
					</div>
				</div>
                 <p style="color:#093;"><?php echo $done;?></p> 
                </div>
                
               
                </div>
                
                </form>
                </div>
                           
     <?php include('js.php');?>
  </body>
</html>