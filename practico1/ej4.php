<?php

$arrIndex = array ("one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve");

$countIndex = count($arrIndex);

if (isset($_GET['mostrar'])) {
    $newCount = $_GET['mostrar'];
    for ($i = 0; $i < $newCount; $i++) {
        echo "<li>" . $arrIndex[$i] . "</li>";
    }
}

else { 
    for ($i = 0; $i < $countIndex; $i++) {
        echo "<li>" . $arrIndex[$i] . "</li>";
    }
}

?>