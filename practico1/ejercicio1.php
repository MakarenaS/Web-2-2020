<!DOCTYPE html>
    <html lang="en">
    
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practico 1 Ej 1</title>
    </head>

    <body>

        <p>
            Escriba un script php que muestre una página html completa generada desde el servidor con un encabezado de primer nivel (h1) con el famoso “Hola mundo!”.
        </p>

        <?php

            $titulo = "Hola mundo!";

            echo "<h1>" . $titulo . "</h1>";

        ?>

        <p>
            ¿Qué extensión debe tener la página?
        </p>
        <p>
            Respuesta: .php
        </p>
        <p> 
            Lo que acabas de hacer: ¿Es una página dinámica o una página estática? ¿Cuál es la diferencia?
        </p>
        <p>
            Respuesta: Todavia no se
        </p>
        <p>
            ¿Por qué es necesario tener un servidor web para realizar esto?
        </p>
        <p>
            Respuesta: para que lo interprete apache
        </p>

    </body>
</html>