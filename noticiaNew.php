<?php

header("Content-Type: text/html;charset=utf-8");

session_start();

$fecha = $_POST['fecha'];
$tipo = $_POST['tipo'];
$encabezado = $_POST['encabezado'];
$muestra = nl2br($_POST['muestra']);
$noticia = nl2br($_POST['noticia']);
$link = $_POST['link'];
$usuario = $_SESSION['u_id'];

require_once 'conexion_noticia.php';


//print_r("holaaa");exit();

//echo $llegada, $salida, $procedencia, $destino, $descuento, $pago, $habitacion, $cliente;


$insertar = " INSERT INTO noticia (fecha, encabezado, textoA, textoB, tipo, enlace, idUsuario) VALUES ('$fecha', '$encabezado', '$muestra', '$noticia', '$tipo', '$link', '$usuario') ";
	
if ( $db->query($insertar) ) {
    header('Location: principal.php');
    echo '<script language="javascript">alert("Registrado con exito");</script>';
}else{
	echo '<script language="javascript">alert("Hubo inconvenientes al añadir información, por favor corrigelas");location.href="principal.php";</script>';
}