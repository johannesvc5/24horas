<?php

session_start();

$usuario = $_POST['usuario'];
$password = $_POST['password'];

include ('conexion_noticia.php');

$proceso = $db->query("SELECT * FROM usuario WHERE correo = '$usuario' AND  pass = '$password'");

if($resultado = mysqli_fetch_array($proceso)){
    $_SESSION['u_id'] = $resultado[0];
    $_SESSION['u_nombre'] = $resultado[1];
    $_SESSION['u_apellidos'] = $resultado[2];
    $_SESSION['u_alias'] = $resultado[6];
    $_SESSION['u_usuario'] = $usuario;
    header("location:principal.php");
}else{
	echo '<script language="javascript">alert("Corriga su correo e-mail o contraseña");location.href="login.php";</script>';
}