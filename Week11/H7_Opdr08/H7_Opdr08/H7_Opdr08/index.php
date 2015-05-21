<?php

$getal = 457423;
echo ("Getal = " . $getal . "<br/><br/>");

echo ("Via sprintf:<br/><br/>");
echo (sprintf("Binair: %b: ",$getal) . "<br/>");
echo (sprintf("Octaal: %o: ",$getal) . "<br/>");
echo (sprintf("Hexadecimaal: %x: ",$getal) . "<br/>");

echo ("<br/>Via decbin, decoct, dechex:<br/><br/>");
echo ("Binair = " . decbin($getal) . "<br/>");
echo ("Octaal = " . decoct($getal) . "<br/>");
echo ("Hexadecimaal = " . dechex($getal) . "<br/>");

?>