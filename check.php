<?php
session_start();
include("connect.php");
$login=$_POST['user'];
$password=$_POST['password'];
//verificar campos
if(($_POST['user']=="")||($_POST['password']=="")){
	header("location:login.html?**faltan-datos**");
}
else{
$query="SELECT * FROM Clientes WHERE email='$login' and cel ='$password' ";
$link=mysql_connect($server,$dbuser,$dbpass);
$result=mysql_db_query($database,$query,$link);
	/////////////////////////////////////////////////////////////////////////////////////
	if(!mysql_num_rows($result))
	{
	header("location:login.html?**usuario-no-encontrado");//loger no encontrado
	}
	///////////////
	else{ 
	while($row = mysql_fetch_array($result))
		{
			$iduser=$row['id_cliente'];
			$event=$row['id_evento'];
			$_SESSION['inicia']=$login;
			header("location:profile.php?id=".$iduser."&&event=".$event." ");
			//header("location:profile.html");
	}//while
				
	///////////////////////////////////////////////////////////////////////////////////////			
	 		mysql_close($sql);
	 }
}
?>

