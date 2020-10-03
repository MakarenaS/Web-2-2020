<?php

if (
    (isset($_POST['nombreP'])) &&
    (!empty($_POST['nombreP'])) &&
    
    (isset($_POST['apellidoP'])) &&
    (!empty($_POST['apellidoP'])) &&
    
    (isset($_POST['edadP'])) &&
    (!empty($_POST['edadP'])) 

    ) {
        echo "Nombre: " . $_POST['nombreP'] . " </br>Apellido: " . $_POST['apellidoP'] . " </br>Edad: " . $_POST['edadP'];

    };


?>