<?php
	include "../Librerias/connection.php";
	session_start();
	
	$sql = "select nombre,contrasenia FROM usuario where CONCAT(nombre,contrasenia) like '".$_POST['user'].$_POST['pass']."'";

	$result = open()->query($sql);

	if ($result->num_rows > 0) {
	    $row = $result->fetch_assoc();
	    $_SESSION['usuario'] = $row['nombre'];
		echo "<script>alert('Bienvenido.'); window.location.assign('../Vistas/Index.php')</script>";
	} else {
    	echo "<script>alert('No se han encontrado credenciales para este usuario.'); window.location.assign('../Login/Index.html')</script>";
	}
	
?>