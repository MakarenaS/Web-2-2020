<?php

require_once "operaciones.php";


if( (isset($_GET['valor1'])) && 
    (isset($_GET['valor2'])) ) 
    
    {
        $valor1 = $_GET['valor1'];
        $valor2 = $_GET['valor2'];

        $operacion = $_GET['operacionPHP'];

        switch($operacion){ 
            case "sumar": 
                $resultado = sumar($valor1,$valor2); 
                break; 

            case "restar": 
                $resultado = restar($valor1,$valor2); 
                break; 

            case "multiplicar": 
                $resultado = multiplicar($valor1,$valor2);
                break; 

            case "dividir": 
                $resultado = dividir($valor1,$valor2);
                break; 
        
            default: 
                echo "no elegiste";
                break; 
        }
        echo "El resultado de " . $operacion . " " . $valor1 . " y " . $valor2 . " es: " . $resultado;
    }


?>