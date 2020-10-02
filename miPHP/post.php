<?php
 // LO MISMO PERO CON POST, VEAMOS LA DIFERENCIA

 //LA URL SE QUEDA COMO http://localhost/Web-2-2020/post.php

if( 
    (isset ($_POST['name']) ) && //EXISTE EL ATRIBUTO NAME 
    (!empty($_POST['name']) ) && // ME FIJO QUE EL VALUE DE AQUEL POST CON ATRIBUTO NAME NO ESTÉ VACIO
    (isset ($_POST['lastname']) ) && 
    (!empty($_POST['lastname']) ) 
) { 
    $usuarioPOST = $_POST['name'];
$apellidoPOST = $_POST['lastname']; 


    echo "<p>Usuario: " . $usuarioPOST . "</p>";
echo "<p>Apellido: " . $apellidoPOST . "</p>";


}

else { 
    echo "Son necesarios ambos campos";
}
?>