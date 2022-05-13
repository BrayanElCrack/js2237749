<?php
	
	require 'funciones/conexion.php';
	require 'funciones/funciones.php';
	
	$user_id =$mysqli->real_escape_string($_POST['user_id']);
	$token =$mysqli->real_escape_string($_POST['token']);
	$password =$mysqli->real_escape_string($_POST['password']);
	$con_password =$mysqli->real_escape_string($_POST['con_password']);

	//validacion que los password coincidad y generar el hash nuevo
	if(validaPassword($password, $con_password)){
		
		$pass_hash = hashPassword($password);
		if(cambiaPassword($pass_hash, $user_id, $token)){
			echo"<script>alert('Su password ha sido modificado');window.location='index.php'</script>";
		}else{
		
			echo"<script>alert('Error al modificar el Password');window.location='cambia_pass.php'</script>";
		}
	}else{
		
		echo"<script>alert('Las contraseñas no coinciden');window.location='cambia_pass.php'</script>";
	}

?>	