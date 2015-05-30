<?php
$haystack = "+5*3+4=19=1+18";
$needle = "+";
$counter = 0;
$pos = strpos($haystack,$needle);
while(!($pos === false)){
	$counter += $pos;
	echo ($counter . "<br/>");
	$haystack = substr($haystack,($pos+1));
	$pos = strpos($haystack,$needle);
	$counter++;
}
?>