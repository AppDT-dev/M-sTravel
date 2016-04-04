<?php 
	
	require 'database.php';

	if ( !empty($_POST)) {
		// keep track validation errors
		
				
		// keep track post values
		
		$id=$_GET['id'];
		$event=$_GET['event'];
		// validate input
		$valid = true;
		
						
		// insert data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO contrato (id_cliente,id_evento) values(?, ?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($id,$event));
			Database::disconnect();
			//header("Location: index.php");
		}
	}
?>


!DOCTYPE HTML>
<html lang="es-MX">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="refresh" content="1;url=http://example.com">
        <script type="text/javascript">
           window.location.href = "login.html";
        </script>
        <title>Configurando...</title>
    </head>
    <body>
        <!-- Note: don't tell people to `click` the link, just tell them that it is a link. -->
        If you are not redirected automatically, follow the <a href='http://example.com'>link to example</a>
         120754  
    </body>
</html>