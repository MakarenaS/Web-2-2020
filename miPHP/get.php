<?php

//esto es un arreglo donde me voy a traer name
// echo $_GET["name"]; 
// echo $_GET["lastname"];

// si lo cambio por ejemplo por http://localhost/Web-2-2020/miPHP/get.php?name=hola&lastname=princesa
//me imprime hola princesa, porque le envie por el url el parametro de lastname, no tomando lo del input


//el isset previene errores, en el arreglo get tiene un valor? si, entonces imprimila
if(isset($_GET['name'])) { 
    $usuario = $_GET['name'];
$apellido = $_GET['lastname']; 
    echo "<p>Usuario: " . $usuario . "</p>";
echo "<p>Apellido: " . $apellido . "</p>";
}
?>