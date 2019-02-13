<?php
require('../conexion.php');

$comentario=$_POST['comentario'];
$nombre=$_POST['nombre'];
$id=$_GET['id'];
$email=$_POST['email'];


mysql_query("INSERT INTO comentarios (comentario,numero_post,nombres,email)VALUES('$comentario','$id','$nombre','$email')")or die(mysql_error());
$filas=mysql_affected_rows();

echo $filas;

if ($filas==0) {
	header('location: ../post.php#comentarios?id='.$id.'&error&');

}else{

$result=mysql_query("SELECT * From post where id='$id'");

while ($titulo=mysql_fetch_object($result)) {

	$titulo1=$titulo->titulo;
}



// Create the email and send the message
$to = 'alejandrorestrepo471@hotmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Nuevo mensaje del blog comentarios:  $titulo1";
$email_body = "Se ha agregado un nuevo comentario.\n\n"."mas detalles:\n\n nombre del post: $titulo1";
$headers = "From: alejandrorestrepo@tekknia.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
header('location: ../post.php?id='.$id.'&ok&#comentarios');
return true;

}








 ?>
