
<?php

session_start();

	include("connection.php");
	include("functions.php");
	
	//pasando datos del formulario
	if(!empty($_POST)){
$correo=$_POST["email"];
$contra=$_POST["password"];

//boton de ingresar leer la contraseÃ±a encriptada
    if(isset($_POST["ingresar"])){
        $queryusuario=mysqli_query($con, "SELECT *FROM users WHERE user_name='$correo'");
        $nfila=mysqli_num_rows($queryusuario);
        $buscarcontra=mysqli_fetch_array($queryusuario);

		if(($nfila==1)&&(password_verify($contra,$buscarcontra['password']))){
            echo"<script>alert('Bienvenido al sistema: $correo');window.location='tienda.php'</script>";
        }else{
            echo"
            <script>
            alert('Usuario o contraseña incorrectos');
            window.location='login.php'
            </script>";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesion</title>
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
		
		 <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>">
			<div style="font-size: 40px;margin: 10px;color: white;">Iniciar Sesion</div>
			<label for="email" class="col-md-3 control-label">Email</label>
			<input id="text" type="text" name="email"><br><br>
			<label for="password" class="col-md-3 control-label">contraseña</label>
			<input id="text" type="password" name="password"><br><br>

			<input id="button" name="ingresar" type="submit" value="Ingresar"><br><br>

			<a href="signup.php">Registrarse</a><br><br>
		</form>
	</div>
</body>
</html>