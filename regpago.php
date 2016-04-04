
<?php 
$id=$_GET['id'];
$event=$_GET['event'];
$paq=$_GET['paq'];
	
	require 'database.php';

	if ( !empty($_POST)) {
		// keep track validation errors
		$pagoError = null;
		$sucError = null;
		$folioError = null;
				
		// keep track post values
		$pago = $_POST['pago'];
		$suc = $_POST['suc'];
		$folio = $_POST['folio'];
		$tipopago=$_POST['tipopago'];
				
		// validate input
		$valid = true;
		if (empty($pago)) {
			$pagoError = 'Please enter Pago';
			$valid = false;
		}
		if (empty($suc)) {
			$sucError = 'Please enter Sucursal';
			$valid = false;
		}
		if (empty($folio)) {
			$folioError = 'Please enter Folio';
			$valid = false;
		}
		
		if ($_FILES['archivo']["error"] > 0)
			  {
			  echo "Error:Debe subir su comprobante";
			  }
			else
			  {
			  $nombrearchivo=$_FILES['archivo']['name'];
			  move_uploaded_file($_FILES['archivo']['tmp_name'],"comprobante/" . $_FILES['archivo']['name']);
			  }
		
		// insert data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO pagos (t_pago,id_evento,id_cliente,id_paquete,suc,folio,pago,archivo) values(?, ?, ?,?,?,?,?,?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($tipopago,$event,$id,$paq,$suc,$folio,$pago,$nombrearchivo));
			Database::disconnect();
			$done="Tu pago ha sido registrado con exito";
			//header("Location: confirmedpago.php");
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <?php //include('head.php');?>
</head>

<body>
<div class="login-fullwidith">
<form class="form-horizontal" action="regpago.php?id=<?php echo $id;?>&&event=<?php echo $event;?>&&paq=<?php echo $paq;?>" method="post" enctype="multipart/form-data">
<div class="login-wrap">
<img src="images/maslogo.png" class="login-img" alt="logo"/><br/>
			<div class="login-c1">
            Registra tú pago.
				<div class="cpadding50">
                <div class="control-group">
					    <label>Selecciona tu pago</label>
					    <div class="controls">
					      	  <select class="form-control select2" name="tipopago">
                              <option value="1">Pago 1 (21/Abr/2016)</option>
                              <option value="2">Pago 2 (05/May/2016)</option>
                              <option value="3">Pago 3 (19/May/2016)</option>
                              <option value="4">Liquidación (10/Jun/2016)</option>
                              </select>
					    </div>
					  </div>
					  <div class="control-group <?php echo !empty($sucError)?'error':'';?>">
					    <label>Número de sucrusal:</label>
					    <div class="controls">
					      	<input name="suc" type="text"  placeholder="Sucursal" value="<?php echo !empty($suc)?$suc:'';?>">
					      	<?php if (!empty($sucError)): ?>
					      		<span class="help-inline"><?php echo $sucError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
                      <div class="control-group <?php echo !empty($folioError)?'error':'';?>">
					    <label>Folio:</label>
					    <div class="controls">
					      	<input name="folio" type="text"  placeholder="Folio" value="<?php echo !empty($folio)?$folio:'';?>">
					      	<?php if (!empty($folioError)): ?>
					      		<span class="help-inline"><?php echo $folioError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
                      <div class="control-group <?php echo !empty($pagoError)?'error':'';?>">
					    <label>Tu pago por $:</label>
					    <div class="controls">
					      	<input name="pago" id="pago" type="text"  placeholder="Pago" value="<?php echo !empty($pago)?$pago:'';?>">
					      	<?php if (!empty($pagoError)): ?>
					      		<span class="help-inline"><?php echo $pagoError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>
                      <br>
                       <label>Tú comprobante</label>
                      <br>
                      <input type="file" name="archivo" id="archivo"></input>
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
    <script>
addEvent(document.getElementById('pago'),'keyup',validate);

function validate(event){
    
    var str=this.value;
    
    var charsAllowed="0123456789";
    var allowed;
    
    for(var i=0;i<this.value.length;i++){
        
        allowed=false;
        
        for(var j=0;j<charsAllowed.length;j++){
            if( this.value.charAt(i)==charsAllowed.charAt(j) ){ allowed=true; }
        }
        
        if(allowed==false){ this.value = this.value.replace(this.value.charAt(i),""); i--; }
    }
    
    return true;
}



function addEvent(obj,type,fn) {
 
    if (obj.addEventListener) {
        obj.addEventListener(type,fn,false);
        return true;
    } else if (obj.attachEvent) {
        obj['e'+type+fn] = fn;
        obj[type+fn] = function() { obj['e'+type+fn]( window.event );}
        var r = obj.attachEvent('on'+type, obj[type+fn]);
        return r;
    } else {
        obj['on'+type] = fn;
        return true;
    }
}
</script>
  </body>
</html>