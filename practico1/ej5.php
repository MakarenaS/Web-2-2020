<?php

$peso = $_GET["peso"];
$altura = $_GET["altura"];

require_once "operacionEj5.php";

$resultado = calculoIMC($peso, $altura);

echo "Su IMC es de: " . $resultado . "<br>";

require_once "estandarEj5.php";

compararEstandar($resultado);



?>