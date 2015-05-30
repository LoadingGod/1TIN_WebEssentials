<?php
$getal = 10;
echo ("Getal: ". $getal . "<br/>");
$product = 1;
//for ($i = $getal; $i >= 1; $i--)
	//{
		//$product *= $i;
	//}
$i = $getal;
while ($i > 0){
	$product *= $i;
	$i--;
}
echo ("De faculteit van " . $getal . " is: " . $product);
?>