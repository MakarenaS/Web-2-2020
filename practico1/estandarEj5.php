<?php

function compararEstandar($IMC) {
    $miIMC = $IMC;
        if (
            ($miIMC > 0) &&
            ($miIMC < 18.5) 
        )   {
                echo "bajopeso";
            }
        
        elseif (
            ($miIMC >= 18.5) &&
            ($miIMC < 24.99) 
        )   {
                echo "normal";
            }

        elseif (
            ($miIMC >= 24.99) &&
            ($miIMC < 29.99) 
        )   {
                echo "sobrepeso";
            }
        elseif (
            ($miIMC >= 29.99) && 
            ($miIMC < 100))   
            {
                echo "obesidad";
            }
};

?>