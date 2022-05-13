<?php
	session_start();
	require 'funciones/conexion.php';
	require 'funciones/funciones.php';

	$errors = array();
	if(!empty($_POST)){
		$usuario = $mysqli->real_escape_string($_POST['usuario']);
		$password = $mysqli->real_escape_string($_POST['password']);

			//uso de funcion para validar que no existan campos vacios
		if(isNullLogin($usuario, $password)){
			$errors[]= "Debe diligenciar todos los campos";
		}
//usamos la funcion login para validar los datos de usuario

		$errors[] = login($usuario, $password);
	}

?>
<!doctype html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		<link rel="stylesheet" href="css/sweetalert2.min.css">
		<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link rel="stylesheet" href="muebles\css\estilos.css">
	<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
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
                <li><a href="registro.php">registrarse</a></li>
                <li><a href="catalogo.php">catalogo</a></li>
            </ul>
        </div>
    </header>
	<header>
    
        <div class="container">
            <div class="row align-items-stretch justify-content-between">
				<nav class='navbar navbar-default'>
				<div class='container-fluid'>
							
					<div id='navbar' class='navbar-collapse collapse'>
						<ul class='nav navbar-nav'>
							<li class='active'><a href='index.php'>Inicio</a></li>			
						</ul>
						<ul class='nav navbar-nav'>
							<li class='active'><a href='#'>Contactenos</a></li>			
						</ul>
						<ul class='nav navbar-nav'>
							<li class='active'><a href='#'>Mas menu</a></li>			
						</ul>
						
					</div>
				</div>
			</nav>
		<div class="container">    
			<div id="box"  class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					<div class="panel-heading">
						<div class="panel-title">Iniciar Sesi&oacute;n</div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="recupera.php">¿Olvidaste tu contraseña?</a></div>
					</div>     
					
					<div style="padding-top:30px" class="panel-body" >
						
						<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
						
						<form id="loginform" class="form-horizontal" role="form" action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" autocomplete="off">
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input id="usuario" type="text" class="form-control" name="usuario" value="" placeholder="usuario o email" required>                                        
							</div>
							
							<div style="margin-bottom: 25px" class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input id="password" type="password" class="form-control" name="password" placeholder="password" required>
							</div>
							<div>
							<input type="checkbox" name="recordar">
            <label>Recordarme en este equipo</label>
			</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-success">Iniciar Sesi&oacute;n</a>
								</div>
							</div>
							
							<div class="form-group">
								<div class="col-md-12 control">
									<div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
										No tiene una cuenta! <a href="registro.php">Registrate aquí</a>
									</div>
								</div>
							</div>    
						</form>
					<?php echo resultBlock($errors);?>
					</div>                     
				</div>  
			</div>
		</div>
		<footer class="pie-pagina">
    <div class="grupo-1">
        <div class="box">
           
        </div>
        <div class="box">
            <h2>SOBRE NOSOTROS</h2>
            <p>Tienda online donde puedes comprar: Decoración para el hogar, muebles, herramientas, materiales de construcción y más.</p>
            
        </div>
        <div class="box">
            <h2>SIGUENOS</h2>
            <div class="red-social">
                <a href="#" class="fa fa-facebook"></a>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-twitter"></a>
                <a href="#" class="fa fa-youtube"></a>
            </div>
        </div>
    </div>
    <div class="grupo-2">
        <small>&copy; 2022 <b>The Home</b> - Todos los Derechos Reservados.</small>
    </div>
</footer>
	</body>
</html>						