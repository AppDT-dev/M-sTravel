<?php 
$id=$_GET['id'];

include('connect.php');
			$query="SELECT * FROM Clientes where id_cliente='$id'";
			$link=mysql_connect($server,$dbuser,$dbpass);
			$result=mysql_db_query($database,$query,$link);
			while($row = mysql_fetch_array($result))
			{
				 $name=$row['nombre'];
			}
			mysql_free_result($result);
			mysql_close($link);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php');?>
</head>

<body>
<div class="login-fullwidith">
    <?php echo "Hola ".$name." sube tu foto."?>
		<form action="regimagen.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
        <div class="login-wrap">
<img src="images/maslogo.png" class="login-img" alt="logo"/><br/>
			<div class="login-c1">
            Sube tu foto.
				<div class="cpadding50">
                	<div class="control-group">
					    <label>Selecciona tu foto</label>
			<input type="file" name="archivo" id="archivo"></input>
            <input type="submit" value="Subir archivo"></input>		
					</div>
            	</div>
                *Necesitamos que el tu foto sea de frente, sin acompañantes, sin lentes de sol, no caricaturizada o a lápiz.
			</div>
         </div>
            </form>
        </div>
  
    <?php include('js.php');?>
    
	</body>
</html>