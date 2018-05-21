<?php


$archivo = $_FILES['archivo_fls']['tmp_name'];
$destino = "archivos/".$_FILES['archivo_fls']['name'];
$name = $_FILES['archivo_fls']['name'];

	if (move_uploaded_file($archivo, $destino)) {
		$nombre = $_POST['nombre'];
		$idNoticia = $_POST['idNoticia'];

		require_once 'conexion_noticia.php';

		$insertar = " INSERT INTO imagen (nombre, link, idNoticia) VALUES ('$nombre', '$name', '$idNoticia') ";
			
		if ( $db->query($insertar) ) {
		    header('Location: principal.php');
		    echo '<script language="javascript">alert("Registrado con exito");</script>';
		}
	}else{
		echo '<script language="javascript">alert("No se pudo subir el archivo");</script>';
	}
?>