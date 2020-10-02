<?php

function restar($valor1,$valor2) {

    $resta = $valor1 - $valor2;

    echo "La resta de " . $valor1 ." - " . $valor2 .  " es " . $resta;
    echo "</br>";
    echo $valor1 . " - " . $valor2 . " = " . $resta;
};


if( (isset($_GET['valor1'])) && 
    (isset($_GET['valor2'])) ) 
    
    {
        $valor1 = $_GET['valor1'];
        $valor2 = $_GET['valor2'];

        $operacion = $_GET['operacionPHP'];


        //"si estas usando un switch con muchos valores, algo estas haciendo mal" javiR

        switch($operacion){ 
            case "sumar": 
                echo $valor1 + $valor2; 
                break; 

            case "restar": 
                restar($valor1,$valor2); 
                break; 

            case "multiplicar": 
                echo $valor1 * $valor2; 
                break; 

            case "dividir": 
                echo $valor1 / $valor2; 
                break; 
        
            default: 
                echo "no elegiste";
                break; 
        }
    }


?>