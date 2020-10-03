<?php

$limite = $_GET["limite"];

echo "<table>";
for ($i = 1; $i < $limite+1; $i++) {
    echo "<tr>";
    for ($j = 1; $j <$limite+1; $j++) {
        echo "<td>" . $i * $j . "</td>";

    }
    echo "</tr>";
};

echo "</table>";


?>