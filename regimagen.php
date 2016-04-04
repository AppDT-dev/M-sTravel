<?php 
$id=$_GET['id'];

$servername = "localhost";
$username = "mastrave_root";
$password = "@ppDT2016.";
$dbname = "mastrave_cm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$conn = mysql_connect($server,$dbuser,$dbpass);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

		if ($_FILES['archivo']["error"] > 0)
			  {
			  echo "Error:No seleccionaste foto";
			  
			  }
			else
			  {
			  $nombrearchivo=$_FILES['archivo']['name'];
			  move_uploaded_file($_FILES['archivo']['tmp_name'],"photos/" . $_FILES['archivo']['name']);
			  $sql = "UPDATE Clientes SET photo='$nombrearchivo' WHERE id_Cliente='$id'";

				if ($conn->query($sql) === TRUE) {
					 $e="Foto actualizada con éxito";
				} else {
					 $e="Error al actualizar foto: " . $conn->error;
				}
			  }
		// update data
$conn->close();
	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('head.php');?>
</head>

<body>
<div class="login-fullwidith">
		<form action="regimagen.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
        <div class="login-wrap">
<img src="images/maslogo.png" class="login-img" alt="logo"/><br/>
			<div class="login-c1">
				<div class="cpadding50">
                	<div class="control-group">
					    <label> <?php echo $e;?></label>
					</div>
            	</div>
			</div>
         </div>
            </form>
        </div>
  
    <?php include('js.php');?>
    
	</body>
</html>

