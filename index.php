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
$countCars = count($cars);
echo "El arreglo cars tiene $countCars elementos"; 
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

echo "</br>FUNCIONES CON ARREGLOS<br>";

echo "</br>array_push<br>";
array_push($cars,"Ford"); // le agrega un elemento Ford al final
$nuevoCountCars = count($cars);
echo "Ahora hay " . $nuevoCountCars . " elementos en cars, el ultimo es: " . $cars[$nuevoCountCars-1]; // RE HARDCODEADO PERO ANDA

echo "</br>array_pop<br>";
array_pop($cars); // solo le indicamos el arreglo y le va a quitar el ultimo

$nuevoCountCars = count($cars);
echo "Ahora hay " . $nuevoCountCars . " elementos en cars, el ultimo es: " . $cars[$nuevoCountCars-1]; 

echo "</br>array_reverse<br>";
$nuevoCars = array_reverse($cars); // ahora lo vamos a dar vuelta, OJO, DEVUELVE UN NUEVO ARREGLO, POR LO QUE CONVIENE PONERLO EN UNA VARIABLE NUEVA
echo "El ultimo se volvio el primero y es: " . $nuevoCars[0]; 

echo "</br>array_sum<br>";

$sumaEdades = array_sum($edades);
echo "La suma de las edades del arreglo edades es: " . $sumaEdades; 

echo "</br>array_product<br>";

$productoEdades = array_product($edades);
echo "El producto de las edades del arreglo edades es: " . $productoEdades; 

echo "</br> ver mas en https://www.php.net/manual/es/ref.array.php <br>";

echo "</br>OPERADORES CON ARREGLOS<br>";

$a = true;
$b = 1;

echo "</br>a = true y b = 1; a==b ? <br>";
if ($a == $b) {
    echo "a == b";
}
else {
    echo "a != b";
};

echo "</br>a = true y b = 1; a===b ? <br>";

if ($a === $b) {
    echo "a === b";
}
else {
    echo "a !== b";
};

echo "</br>=== verifica tambien el tipo de la variable, pero == permite que 1 y true sean lo mismo *VER<br>";

echo "</br>FUNCIONES<br>";

function promedioEdad($ed){ 
	$promedio = array_sum($ed) / count($ed);
   return $promedio;
} 
$promEdades = promedioEdad($edades);
echo "promedio del arreglo edades: " . $promEdades; //VEASE QUE SUMO LOS VALORES DE UN ARREGLO ASOCIATIVO MAS SOBRE FUNCIONES https://www.php.net/manual/es/functions.user-defined.php

echo "</br>FOR<br>";


for ($i = 0; $i < $countCars; $i++) {
    echo  "<li>" . $cars[$i] . "</li>";
  };

  echo "</br>FOREACH<br>";
  
  

foreach ($bikes as $bike) { 
  echo "<li>".$bike."</li>";      
} ;

echo "</br>FUNCIONES CON CADENA DE TEXTO<br>";

$hello = "Hello world!";
echo "</br>strlen cuenta el largo del string (incluye espacios)<br>";
echo strlen($hello); // outputs 12 

echo "</br>str_word_count cuenta la cantidad de palabras<br>";
echo str_word_count($hello); // outputs 2 

echo "</br>strrev pone el string en reversa<br>";
echo strrev($hello); // outputs !dlrow olleH 

echo "</br>strpos nos indica la posicion de la palabra world dentro de Hello World<br>";
echo strpos($hello, "world"); // outputs 6 

echo "</br>str_replace world por Dolly en Hello World<br>";

echo str_replace("world", "Dolly", $hello);
  

//EXTRAS!!

echo "</br>ARRAY VALUES<br>";


$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));


echo "</br><br>";

?>