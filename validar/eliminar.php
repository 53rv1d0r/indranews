<?php
session_start();

if (!isset($_SESSION['admin'])) {

header('location: login.php?access%denegado');

}

require('../conexion.php');


$id=$_GET['id'];

$result=mysql_query("DELETE FROM comentarios WHERE numero_post='$id'");


mysql_query("DELETE FROM post WHERE id='$id'");
$filas=mysql_affected_rows();



if ($filas>0) {

	header('location: admin.php?deletepost');
}




?>