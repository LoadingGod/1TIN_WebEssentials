<?php

echo ("50 willekeurige getallen tussen 0 en 5: " . "<br/><br/>");
for ($i = 0; $i < 50; $i++)
{
	echo (mt_rand(0*10,5*10)/10 . "<br/>");
}
?>