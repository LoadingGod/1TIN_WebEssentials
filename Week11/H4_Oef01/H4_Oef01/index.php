<?php
$a = 'a' + 'b';
echo '$a = ' . $a . '<br/>';

$b = 7 % 3.5;
echo '$b = ' . $b . '<br/>';

$c = 0;
$d = 2;
$c -= 1- $d;

echo '$c = ' .$c . '<br/>';
echo '$d= ' . $d . '<br/>';

$e = 1;
$f = 10;
$g = $e++ * --$f;

echo '$e ' . $e . '<br/>';
echo '$f ' . $f . '<br/>';
echo '$g ' . $g . '<br/>';

$h = 1;
if(++$h == 2 && $h++ == 2) 
{
	echo 'a<br/>';
} else {
	echo 'b<br/>';
}
echo '$h = ' . $h . '<br/>';
?>