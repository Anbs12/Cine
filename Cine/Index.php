<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="StyleSheet" href="style.css" type="text/css">
    <title>Entradas</title>
</head>
<body>

<div style="text-align: center;">

<img src="https://png.pngtree.com/png-clipart/20190516/original/pngtree-movie-cinema-entertainment-logo-with-neon-sign-effect-vector-illustration-png-image_3669641.jpg" alt="">


</div>

<div class="container">

<h1>CineHoyts</h1>
<h2>Compra de Entradas</h2>

<p>Valor entradas: $5000</p></p>
<h3>Descuentos:</h3>
<p>
        
        <p>Niño = 30% </p>
        <p>Adulto = 5% </p>
        <p>Adulto Mayor = 55% </p><br><br>

<form action="resultado.php" method="POST">
    <label for="nombre">Nombre: </label>
    <input type="text" name="nombre" ><br><br>

    <label for="tipoEntrada">Elige tipo de entrada</label><br><br>
    <input type="radio" name="tipoEntrada" value="Niño"> Niño<br>
    <input type="radio" name="tipoEntrada" value="Adulto"> Adulto<br>
    <input type="radio" name="tipoEntrada" value="Mayor"> Tercera Edad<br>

    <br>

    <label for="numEntradas">Cantidad de entradas: </label>
    <input type="number" name="numEntradas"> <br><br>

    <input type="submit" value="Comprar" name="BTN"><br><br>
</form>

</div>





</body>
</html>

