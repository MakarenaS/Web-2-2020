<?php

function calculoIMC($peso, $altura) {
$miPeso = $peso;
$miAltura = $altura;

$total = $miPeso / ($miAltura * $miAltura);
return $total;
};


?>