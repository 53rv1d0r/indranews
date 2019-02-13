<?php 
session_start();

require('../conexion.php');

$result=mysql_query("SELECT * FROM users where usuario='".$_POST['user']."' and pass='".$_POST['pass']."' ")or die(mysql_error());
$filas=mysql_num_rows($result);
	if ($filas <= 0) {
		header('location: login.php?error');
	}



	while ($res=mysql_fetch_object($result)) {
		$arreglo= array('user' =>$res->usuario,

						'pass' =>$res->pass	 );
	}
	if (isset($arreglo)) {

		$_SESSION['admin']=$arreglo;
		
		header('location: admin.php');
	}






 ?>


 