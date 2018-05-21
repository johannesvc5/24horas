<?php
    session_start();
    if(isset($_SESSION['u_id'])){
?>
<?php

$archivo = $_FILES['archivo_fls']['tmp_name'];
$destino = "images/publicidad/".$_FILES['archivo_fls']['name'];
$name = $_FILES['archivo_fls']['name'];

	if (move_uploaded_file($archivo, $destino)) {
		$fechaInicial = $_POST['fechaInicial'];
		$fechaFinal = $_POST['fechaFinal'];
		$tipo = $_POST['tipo'];
		$usuario = $_SESSION['u_id'];

		require_once 'conexion_noticia.php';

		$insertar = " INSERT INTO publicidad (tipo, fInicio, fFinal, archivo, idusuario) VALUES ('$tipo', '$fechaInicial', '$fechaFinal', '$name', '$usuario') ";
			
		if ( $db->query($insertar) ) {
		    header('Location: principal.php');
		    echo '<script language="javascript">alert("Registrado con exito");</script>';
		}
	}else{
		echo '<script language="javascript">alert("No se pudo subir el archivo");</script>';
	}
?>
<?php    }else{
    header("location:login.php");
}
?>