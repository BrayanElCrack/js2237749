<?php 
session_start();


include("connection.php");
include("functions.php");
	
	//pasando datos del formulario
	if(!empty($_POST)){
$correo=$_POST["email"];
$nombre=$_POST["nombre"];
$contra=$_POST["password"];
//boton de registrar se pulso y encripta la contraseÃ±a
if(isset($_POST["registrar"])){
    $contra_encryp= password_hash($contra,PASSWORD_DEFAULT);
    //envio de datos 
    $queryregistrar="INSERT INTO users (nombre, user_name,password) values ('$nombre', '$correo','$contra_encryp')";
	
if(mysqli_query($con,$queryregistrar)){
        echo"<script>alert('Usuario registrado: $nombre');window.location='login.php'</script>";
    }else{
        echo "Error: ".$queryregistrar."<br>".mysqli_error($con);
    }
}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>

</head>
<body>

		<style type="text/css">
	body {
    background-color: #ad1c1c;
	 margin-top: 200px;
    padding: 0;
}
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: #4e4646;
		background-color: lightblue;
		border: none;
		border-radius: 5px;
	}

	#box{

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}
		</style>
	<div id="box">
		
		<form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Registro</div>

			<label for="email" class="col-md-3 control-label">email:</label>
			<input id="text" type="text" name="email"><br><br>
			<label for="nombre" class="col-md-3 control-label">Nombre:</label>
			<input id="text" type="text" name="nombre"><br><br>
			<label for="password" class="col-md-3 control-label">Contraseña:</label>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" name="registrar" type="submit" value="Registrar"><br>
			<br><br>

			<a href="login.php">Iniciar sesion</a><br><br>
		</form>
	</div>
</body>
</html>