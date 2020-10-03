<?php

if (
    (isset($_GET['nombreG'])) &&
    (!empty($_GET['nombreG'])) &&
    
    (isset($_GET['apellidoG'])) &&
    (!empty($_GET['apellidoG'])) &&
    
    (isset($_GET['edadG'])) &&
    (!empty($_GET['edadG'])) 

    ) {
        echo "Nombre: " . $_GET["nombreG"] . " </br>Apellido: " . $_GET["apellidoG"] . " </br>Edad: " . $_GET["edadG"];

    };



    

?>