<?php

require_once "operacionesEj8.php";


if (
    (isset($_GET['valor1'])) &&
    (!empty($_GET['valor1'])) &&
    (isset($_GET['valor2'])) &&
    (!empty($_GET['valor2']))
) {


    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];

    //obtengo los select para el php 
    $operacion = $_GET['simbols'];

    switch ($operacion) {
        case '+':
            $resultado = sumar($valor1,$valor2);
        break;
        case "-": 
            $resultado = restar($valor1,$valor2); 
        break; 

        case "*": 
            $resultado = multiplicar($valor1,$valor2);
        break; 

        case "/": 
            $resultado = dividir($valor1,$valor2);
        break; 
    
        default: 
            echo "no elegiste simbolo";
            break; 


    }
    echo "El resultado es " . $valor1 . " ". $operacion ." " . $valor2 . " = " . $resultado;
 
}

?>