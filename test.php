<?php


echo "</br>INCLUDE ONCE<br>";
//require e lo mismo que include pero da un error especial
echo "<h1>ESTO ESTÁ EN OTRO ARCHIVO</h1>";
echo "</br>Como todavia no se incluyó no pasa nada<br>";
echo "Ciudad: $ciudad $prov";

include 'localidades.php';
echo "</br>Ahora lo incluí<br>";
echo "Ciudad: $ciudad $prov"; //ojo, VER cuando son numericos o string como se concatenan


?>