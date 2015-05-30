<?php

$string1 = "test1";
$string2 = "test2";

echo ("String 1 = " . $string1 . "<br/>");
echo ("String 2 = " . $string2 . "<br/><br/>");
echo ("Omwisselen:" . "<br/><br/>");
WisselOm($string1,$string2);

function WisselOm(&$a, &$b)		//&-teken voor een variabele -> pass by reference -> $a = $string1, $b = $string2
	{
		$temp = $a;
		$a = $b;
		$b = $temp;
	}
	
echo ("String 1 = " . $string1 . "<br/>");
echo ("String 2 = " . $string2);

?>