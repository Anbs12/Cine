<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprado</title>
    <link rel="StyleSheet" href="style.css" type="text/css">
    
</head>
<body>

<div style="text-align: center;">

<img src="https://png.pngtree.com/png-clipart/20190516/original/pngtree-movie-cinema-entertainment-logo-with-neon-sign-effect-vector-illustration-png-image_3669641.jpg" alt="">


</div>



<div class="container">
<h1>Entradas Compradas</h1>

<?php


$precio = 5000;
class Persona{

    public $nombre;
    public $tipoEntrada;
    public $numEntradas;


    public $descuento = 0;


    function setDatos(){
        $this->nombre = $_POST["nombre"];
        $this->tipoEntrada = $_POST["tipoEntrada"];
        $this->numEntradas = $_POST["numEntradas"];

    }

    function getDatos(){

        echo "Su nombre es: ".$this->nombre."<br>";
        echo "Tipo de Entrada: ".$this->tipoEntrada."<br>";
        echo "Su cantidad de entradas es: ".$this->numEntradas."<br>";

    }

}



$persona = new Persona();

if ( isset($_POST["BTN"])){

    $persona->setDatos();
    $persona->getDatos();
    $tipoEntrada = $_POST["tipoEntrada"];
    $numEntradas = $_POST["numEntradas"];

    if($tipoEntrada == "Niño"){
        $precio = $numEntradas * $precio;
        echo 'Valor total  de entradas es: '. $precio."<br>";
        $descuento = 0.30;
        $total = $descuento * $precio;
        $precio = $precio - $total;

        echo 'Valor total con descuento: '. $precio;
    }
    if($tipoEntrada == "Adulto"){
        $precio = $numEntradas * $precio;
        echo 'Valor total  de entradas es: '. $precio."<br>";
        $descuento = 0.05;
        $total = $descuento * $precio;
        $precio = $precio - $total;
        echo 'Valor total con descuento: '. $precio;
    }
    if($tipoEntrada == "Mayor"){
        $precio = $numEntradas * $precio;
        echo 'Valor total  de entradas es: '. $precio."<br>";
        $descuento = 0.55;
        $total = $descuento * $precio;
        $precio = $precio - $total;
        echo 'Valor total con descuento: '. $precio."<br>";
    }
    
}





?>
<br>
</div>


    
</body>
</html>


