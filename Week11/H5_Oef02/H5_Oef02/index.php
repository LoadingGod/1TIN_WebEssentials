<?php
$getal = 20;
echo 'Getal: ' . $getal . '<br/>';

if ($getal < 0)
{
	echo 'Negatief' . '<br/>';
	if ($getal % 2 == 0)
	{
		echo 'Even';
	} else 
	{
		echo 'Oneven';
	}
} else
{
	echo 'Positief' . '<br/>';
	if ($getal > 10)
	{	
		echo 'Groter dan 10';	
	} else 
	{
		echo 'Tussen 0 en 10';
	}
}
?>

