<?php
	
	require 'funciones/conexion.php';
	require 'funciones/funciones.php';
	
	$errors = array();

	if(!empty($_POST)){
		$nombre= $mysqli->real_escape_string($_POST['nombre']);
		$usuario= $mysqli->real_escape_string($_POST['usuario']);
		$password= $mysqli->real_escape_string($_POST['password']);
		$con_password = $mysqli->real_escape_string($_POST['con_password']);
		$email= $mysqli->real_escape_string($_POST['email']);
		$captcha= $mysqli->real_escape_string($_POST['g-recaptcha-response']);

		$activo =0;//el usuario al crearlo siempre este sin activar
		$tipo_usuario =2;//siempre se asigna un usuaurio basico y por mySql se le asigna el rol de admin
		$secret ='6Ld_xuUaAAAAAEnNkPe002r1Y2liz9fDKQgtcsqs';

		//validacion de captcha

		if(!$captcha){
			$errors[]="Verificar captcha";
		}
		//validar datos obligatorios

		if(isNull($nombre,$usuario, $password, $con_password, $email)){

			$errors[]= "Hay campos vacios";
		}

		//validacion estructura correcta de email
		if(!isEmail($email)){
			$errors[]= "Direccion de correo no Valida";
		}

		//validacion coincidencia de password
		if(!validaPassword($password, $con_password)){
			$errors[]= "las contraseñas no coinciden";
		}
		//validacion de usuarios duplicados
		if(usuarioExiste($usuario)){
			$errors[]= " usuario $usuario ya existe";
		}
		if(emailExiste($email)){
			$errors[]= "correo electronico $email ya existe";
		}
		if (validar_clave($password,$error_clave)){
			$errors[]= "su contraseña presenta el siguiente error $error_clave";
		}
		//validar si hay errores
		if(count($errors)== 0){
			$response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
			var_dump($response);
			$arr = json_decode($response, TRUE);

			if($arr['success']){
				$pass_hash = hashPassword($password);
				$token = generateToken();

				$registro = registraUsuario($usuario, $pass_hash, $nombre, $email,  $activo, $token, $tipo_usuario);

				If($registro > 0){
					$url = 'http://'.$_SERVER['SERVER_NAME'].'/muebles/activar.php?id='.$registro.'&val='.$token;

					$asunto = 'Activar Cuenta - Proyecto aprendizaje';
					$cuerpo = " Estimado $nombre: <br /><br /> Ahora verifica tu dirección de correo y comienza a usar nuestro sistema <a href='$url'>Activar cuenta</a>";

					if(enviarEmail($email, $nombre, $asunto, $cuerpo)){
						echo "Verifique su correo electronico para terminar proceso de registro: $email";

						echo "<br><a href='index.php' >Iniciar Sesion</a>";
						exit;

					}else{
						$errors[]= "Error al enviar Correo";
					}
				}else{
			$errors[]= "Error al cargar registro";
		}

			}else{
				$errors[]= "Error al comprobar Captcha";
			}
		}
	}	
	
?>

<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registro</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<link rel="stylesheet" href="\desarrollo web1\parte 6\css\registro_estilo.css">
		<script src="js/bootstrap.min.js" ></script>
		<script src='https://www.google.com/recaptcha/api.js'></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="text/javascript" src="\desarrollo web1\parte 6\js\strength.js"></script>
		<script src="\desarrollo web1\parte 6\js\bootstrap.min.js"></script>
		<link rel="stylesheet" href="../muebles/css/styles.css">
</head>
	
	<body>
	<style type="text/css">
	body {
    
	background: linear-gradient(0deg, rgb(102, 94, 94) 10%, rgb(245, 236, 236) 100%);
	margin-top: 20px;
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
		width: 600px;
		padding: 20px;
		border-radius: 5px;
		align: center;
	}

	</style>
	<header class="header">
        <img class="header__img" src="\muebles\img\logo.jpg" alt="logo THE HOME">
        <h1>THE HOME</h1>
        <div class="header__menu">
            <div class="header__menu--profile">
                <img src="./img/user-icon.png" alt="">
                <p>Menu</p>
            </div>
            <ul>
                <li><a href="index.php">iniciar sesion</a></li>
                <li><a href="catalogo.php">catalogo</a></li>
            </ul>
        </div>
    </header>
		<div class="container">
			<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">Reg&iacute;strate</div>
						<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="index.php">Iniciar Sesi&oacute;n</a></div>
					</div>  
					
					<div class="panel-body" >
						
						<form id="signupform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>
							
							<div class="form-group">
								<label for="nombre" class="col-md-3 control-label">Nombre:</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php if(isset($nombre)) echo $nombre; ?>" required >
								</div>
							</div>
							
							<div class="form-group">
								<label for="usuario" class="col-md-3 control-label">Usuario</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php if(isset($usuario)) echo $usuario; ?>" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="password" id="myPassword" placeholder="Password" required>
								</div>
								
							</div>
							
							
							<div class="form-group">
								<label for="con_password" class="col-md-3 control-label">Confirmar Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="con_password" placeholder="Confirmar Password" required>
								</div>
							</div>
							
							
							<div class="form-group">
								<label for="email" class="col-md-3 control-label">Email</label>
								<div class="col-md-9">
									<input type="email" class="form-control" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>" required>
								</div>
							</div>
							
							
							<div class="form-group">
								<label for="captcha" class="col-md-3 control-label"></label>
								<div class="g-recaptcha col-md-9" data-sitekey="6Ld_xuUaAAAAACBm_4RFgDBXRXjaxjtbysaS0QSJ"></div>
							</div>
							
							<div class="form-group">                                      
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Registrar</button> 
								</div>
							</div>
						</form>
						<?php echo resultBlock($errors); ?>
					</div>
				</div>
			</div>
		</div>
		</form>
		<?php echo resultBlock($errors); ?>
	</body>
</html>															