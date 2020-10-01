<?php

//echo "</br><br>"; //salto de pagina para legibilidad

echo "VARIABLE<br>";
$titulo = "Hola mundo";
echo $titulo;

echo "</br>CONCATENACION DE VARIABLES<br>";
$name = "Juan";
$lastname = "Perez";


echo "$name, $lastname";

echo "</br>CONSTANTE<br>";

define ("HOLA","Chau"); // el nombre de la constante va SIN $ y lo segundo es su valor, siguiendo el orden clave = valor

echo HOLA; // cuando lo llamo tambien sin pesos

echo "</br>ARREGLOS<br>";

//ASIGNACION IDENTADA (NUMEROS)
$cars = array("Toyota","Volvo","Chevrolet");

//ASIGNACION MANUAL IDENTADA
$bikes[0] = "Yamaha";
$bikes[1] = "Suzuki";
$bikes[2] = "Honda";
$bikes[3] = "Kawasaki";
$bikes[4] = "Harley Davidson";

//FUNCION PARA CONTAR
$contCars = count($cars);
echo "El arreglo cars tiene $contCars elementos"; 
echo "</br><br>";
echo "El arreglo bikes tiene $bikes[3] en la posicion 3";

echo "</br>ARREGLO ASOCIATIVO<br>";
//el arreglo asociativo necesita ser indicado segun su clave, y no se comporta igual que un identado ya que no podemos llamarlo por numero
$edades = array(
        "juan" => 35,
        "ana" => 59,
        "sofia" => 10
); // LAS FLECHAS SON NECESARIAS PARA INDICAR LA CONEXION ENTRE CLAVE Y VALOR

echo "El arreglo edades tiene como clave juan y su valor es " . $edades["juan"]; //CUIDADO CON LAS COMILLAS por si lo pones dentro no funciona muy bien
echo "</br>ERROR LLAMADO DE ITEM EN ARREGLO ASOCIATIVO POR NUMERO<br>";
echo $edades[0]; //ERROR DE CORRESPONDENCIA, EL ARREGLO ES ASOCIATIVO PERO SE LO LLAMA POR IDENTACION

echo "</br>aunque haya un error, php sigue interpretando el resto<br>";

echo "</br>MOSTRAREMOS UN NOMBRE DE USUARIO Y SU EDAD CORRESPONDIENTE UTILIZANDO TAMBIEN UNA CONSTANTE:<br>";
echo "</br>En un arreglo asociativo tenemos usuario y edad.
En una constante tenemos el nombre de usuario que queremos mostrar.<br>";

define("ELEGIDO", "juan");

echo ELEGIDO . " tiene ". $edades[ELEGIDO] . " años"; 

echo "</br><br>";
?>