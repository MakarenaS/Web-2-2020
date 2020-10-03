<?php

$inversion = $_GET["inversion"];
$interes = $_GET["interes"];





echo "Con $" . $inversion . " y un interes de " . $interes . "%";

for ($i = 0; $i < 12; $i++) {


    $resultado = $inversion + ($inversion * $interes / 100);

    $meses = array("enero", "febrero", "marzo", "abril", "mayo", "junio", "julio", "agosto", "septiembre", "octubre", "noviembre", "diciembre");

    echo "<br>En el mes de " .  $meses[$i] . " obtendra $" . $resultado;
    $inversion = $resultado;
    
        // echo "<br>";

        // echo $inversion;
        // echo "<br>";
        // echo $resultado;
}
?>