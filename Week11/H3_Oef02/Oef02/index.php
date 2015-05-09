<?php
$a = 12;
$b = 0;
$c = 1.23;
$d = 0.0;
$e = "0";
$f = "test";
$g = null;

$test = (bool)$a;
print ("a:". $test. "<br/>\n");

$test = (bool)$b;
print ("b:". $test. "<br/>\n");

$test = (bool)$c;
print ("c:". $test. "<br/>\n");

$test = (bool)$d;
print ("d:". $test. "<br/>\n");

$test = (bool)$e;
print ("e:". $test. "<br/>\n");

$test = (bool)$f;
print ("f:". $test. "<br/>\n");

$test = (bool)$g;
print ("g:". $test. "<br/>\n");

$test2 = 'a' . 'b';
print ($test2);
?>