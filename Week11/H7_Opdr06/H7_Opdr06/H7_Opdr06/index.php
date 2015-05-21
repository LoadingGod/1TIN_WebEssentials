<?php

$a = 12.32;
echo ("Var a = " . $a . "<br/><br/>");
echo ("Vierkantswortel van (4*a^3) en afgerond op 2 decimalen): " . floor(sqrt(4*(pow($a,3)))*100)/100);
?>