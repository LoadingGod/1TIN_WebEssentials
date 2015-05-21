<?php

$a = array(1 => "ma", 2 => "di", 3 => "wo", 4 => "do", 5 => "vr", 6 => "za", 7 => "zo");

echo ("For Loop:<br/><br/>");

for ($i = 0; $i < count($a); $i++)
	{
	echo ("Sleutel = " . array_values($a)[$i] . ", Waarde = " . array_keys($a)[$i] . "<br/>");
	}
	
echo("<br/>");
	
echo("Foreach:<br/><br/>");

foreach ($a as $key => $val) {
	echo ("Sleutel = " . $key . ", Waarde = " . $val . "<br/>");
}
?>

