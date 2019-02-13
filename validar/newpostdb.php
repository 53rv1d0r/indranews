<?php
require('../conexion.php');


	

	if(!isset($_POST['titulo']) &&  !isset($_POST['sub-titulo']) && !isset($_POST['video']) && !isset($_POST['content']) && !isset($_POST['fecha'])){
		header("Location: newpost.php");
	}else{
			$allowedExts = array("gif", "jpeg", "jpg", "png");
			$temp = explode(".", $_FILES["file"]["name"]);
			$extension = end($temp);
			$imagen="";
			$random=rand(1,999999);
			if ((($_FILES["file"]["type"] == "image/gif")
				|| ($_FILES["file"]["type"] == "image/jpeg")
				|| ($_FILES["file"]["type"] == "image/jpg")
				|| ($_FILES["file"]["type"] == "image/pjpeg")
				|| ($_FILES["file"]["type"] == "image/x-png")
				|| ($_FILES["file"]["type"] == "image/png"))){
				//Verificamos que sea una imagen
		  	if ($_FILES["file"]["error"] > 0){
		  		//verificamos que venga algo en el input file
		    	echo "Error numero: " . $_FILES["file"]["error"] . "<br>";
		    }else{
		    	//subimos la imagen

		    	$imagen= $random.'_'.$_FILES["file"]["name"];
		    	if(file_exists("../img/".$random.'_'.$_FILES["file"]["name"])){
		      		echo $_FILES["file"]["name"] . " Ya existe. ";
		      	}else{
		      		move_uploaded_file($_FILES["file"]["tmp_name"],
		      		"../img/" .$random.'_'.$_FILES["file"]["name"]);
		      		//echo "Archivo guardado en " . "../img/" .$random.'_'. $_FILES["file"]["name"];
		      		$titulo=$_POST['titulo'];
					$subtitulo=$_POST['sub-titulo'];
					$video=$_POST['video'];
					$content=$_POST['content'];
					$fecha=$_POST['fecha'];
					$Sql="INSERT into post (titulo,description,contenido,video,fecha,imagen) values(
							'".$titulo."',
							'".$subtitulo."',
							'".$content."',
							'".$video."',
							'".$fecha."',
							'".$imagen."')";
					mysql_query($Sql);
				
					header ("Location: admin.php?okpost ");
		     }
		    }
		  }else{
		  echo "Formato no soportado";
		  }

		
	}
		
	

?>