<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- FUENTES -->
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <!-- ESTILO -->

    <link rel="stylesheet" href="css/styles.css">
    <!-- TITULO -->
    <title>Tiendapp</title>

    <title>PASARELA</title>
</head>

<body>
    <header class="header">
        <img class="header__img" src="\muebles\img\logo.jpg" alt="logo THE HOME">
        <h1>THE HOME</h1>
        <div class="header__menu">
            <div class="header__menu--profile">
                <img src="./img/user-icon.png" alt="">
                <p>Menu</p>
            </div>
            <ul>
                <li><a href="index.php">ingreso</a></li>
                <li><a href="catalogo.php">catalogo</a></li>
            </ul>
        </div>
    </header>
    <!--Datos de pago-->
    <div id="divPago">
        <p><b>Introduzca los datos de la tarjeta de credito/debito donde se cargara el cobro y seleccion el medio de pago:</b></p>

        <div id="metodosDePago">
            <label for="visa">
             <br/><br/> <input type="radio" id="visa" name="tarjetas" class="logoTarjetas" value="Visa">
              <img src="img/pago/visa.png"></img>
              </label>

            <label for="masterCard">
              <br/><br/><input type="radio" id="masterCard" name="tarjetas" class="logoTarjetas" value="MasterCard">
              <img src="img/pago/master.png"></img>
              </label>

            <label for="pse">
             <br/><br/> <input type="radio" id="pse" name="tarjetas" class="logoTarjetas" value="pse">
              <img src="img/pago/pse.png"></img>
              </label>

        </div>


        <form id="formulario" action="" method="post" name="formulario">
            <h2>REGISTRO DATOS DE PAGO</h2>


            <label>Titular de la tarjeta:</label>
            <input type="text" name="titular" placeholder="nombre completo" size="26"><br/>


            <label>Número tarjeta:</label>
            <input type="text" name="tarjeta" placeholder="1234-5678-1234-1234-4566" size="15" maxlength="16"><br/>


            <label>CVC:</label>
            <input type="text" name="codigo" placeholder="1234" size="2" maxlength="4"><br/>


            <label for="fecha">Fecha vencimiento:</label>
            <input type="date" name="fecha"><br/><br/>


            <button id="enviar" type="submit">PAGAR</button>
        </form>

</body>

</html>