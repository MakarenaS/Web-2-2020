<?php

function sumar($valor1,$valor2) {

    $resultado = $valor1 + $valor2;
    echo $valor1 . " + " . $valor2 . " = " . $resultado;
};

function restar($valor1,$valor2) {

    $resultado = $valor1 - $valor2;
    echo $valor1 . " - " . $valor2 . " = " . $resultado;
};

function multiplicar($valor1,$valor2) {

    $resultado = $valor1 * $valor2;
    echo $valor1 . " * " . $valor2 . " = " . $resultado;
};

function dividir($valor1,$valor2) {

    $resultado = $valor1 / $valor2;
    echo $valor1 . " / " . $valor2 . " = " . $resultado;
};


if( (isset($_GET['valor1'])) && 
    (isset($_GET['valor2'])) ) 
    
    {
        $valor1 = $_GET['valor1'];
        $valor2 = $_GET['valor2'];

        $operacion = $_GET['operacionPHP'];

        switch($operacion){ 
            case "sumar": 
                sumar($valor1,$valor2); 
                break; 

            case "restar": 
                restar($valor1,$valor2); 
                break; 

            case "multiplicar": 
                multiplicar($valor1,$valor2);
                break; 

            case "dividir": 
                dividir($valor1,$valor2);
                break; 
        
            default: 
                echo "no elegiste";
                break; 
        }
    }


?>