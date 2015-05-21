<?php
$a = array("Ja" => true, "Juist" => true, 1 => true, "Mis" => false, "Nee" => false, 0 => false);
var_dump($a);

$a += array("correct" => true, "verkeerd" => false);
var_dump($a);
?>