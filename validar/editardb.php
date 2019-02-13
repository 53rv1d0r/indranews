<?php
session_start();

require('../conexion.php');

$id=$_GET['id'];

$titulo=$_POST['titulo'];

$subtitulo=$_POST['sub-titulo'];

$video=$_POST['video'];

$content= $_POST['content'];

$fecha= $_POST['fecha'];



mysql_query(" UPDATE post Set titulo ='$titulo', description ='$subtitulo',video='$video',contenido='$content',fecha='$fecha' Where 						id='$id'");

$filas=mysql_affected_rows();





if ($filas>0) {

	header('location: admin.php?id='.$id.'&ok');
	
	
 



 }else{


header('location: admin.php?id='.$id.'&error');
 
 	

	

}







?>