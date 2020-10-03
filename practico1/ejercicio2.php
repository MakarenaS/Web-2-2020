<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practico 1 Ej 2</title>
</head>
<body>

<h1>
Escribir un programa que muestre una lista html generada desde el servidor a través de un arreglo. Identifique las diferencias entre arreglos asociativos e indexados
</h1>


<?php

$arrIndex = array ("one", "two", "three", "four", "five");

$countIndex = count($arrIndex);

for ($i = 0; $i < $countIndex; $i++) {
    echo "<li>" . $arrIndex[$i] . "</li>";
}


$arrAsoc = array (
    "Manzana" => 100,
    "Banana" => 210,
    "Kiwi"  => 175,
    "Limon"  => 10
);

echo "</br>"; //espacio estetico, no usar

foreach ($arrAsoc as $key => $value) {

    //NUEVO, VER FUNCTION KEY PARA LOS FOREACH Y TRAERNOS LA CLAVE ADEMAS DEL VALOR

    //VER MAS EN https://www.php.net/manual/es/function.key.php 

  $mykey = $key;

    echo "<li>En la clave: " . $mykey . " tiene valor: " . $value . "</li>";

}

?>


</body>
</html>