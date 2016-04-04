<?php session_start();?>

<?php
if(!isset($_SESSION['inicia'])){
header("location: index.html?**sin-acceso**");
} else { 
$e=$_SESSION['inicia'];
$id=$_GET['id'];
$event=$_GET['event'];

    require 'database.php';

    if ( !empty($_POST)) {
        // keep track validation errors
        //$nameError = null;
             
        // keep track post values
       $coord = $_POST['coord'];
       $paq = $_POST['paquete'];
       //$cong = $_POST['congreso']; 
        $cong=0;                  
      $hab = $_POST['hab'];
      $barra = $_POST['barra'];
      $extra = $_POST['extra'];
        // validate input
        $valid = true;
        //if (empty($name)) {
            //$nameError = 'Please enter Name';
            //$valid = false;
        //}
        
        
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           $sql = "INSERT INTO paquete (id_evento,id_cliente,id_opcion,id_congreso,id_barra,id_hab,id_coord,id_extra) values(?, ?,?, ?,?,?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($event,$id,$paq,$cong,$barra,$hab,$coord,$extra));
            Database::disconnect();
			echo "exito";
            //header("Location:profile.php");
        }
    }

} /* Y cerramos el else */ 

?>
<!DOCTYPE HTML>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url=http://example.com">
        <script type="text/javascript">
           window.location.href = "profile.php?id=<?php echo $id?>&&event=<?php echo $event;?>";
        </script>
        <title>Configurando...</title>
    </head>
    <body>
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
        If you are not redirected automatically, follow the <a href='http://example.com'>link to example</a>
         120754  
    </body>
</html>

