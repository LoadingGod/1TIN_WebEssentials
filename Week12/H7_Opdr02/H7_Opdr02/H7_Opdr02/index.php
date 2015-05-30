<?php

PrintBoodschap("testboodschap");
echo ("<br/>");
PrintBoodschap("testboodschap", "*");

function PrintBoodschap($arg1, $arg2 = "")
{	
	if ($arg2 == "")	
	{
		echo ("<p style=\"fontsize: 12px; font-family: monospace;\">");
		echo ($arg1);
		echo ("</p>");
	} 
	else 
	{
		$amount = strlen($arg1) + 2;
		echo ("<p style=\"fontsize: 12px; font-family: monospace;\">");
		echo str_repeat("*", $amount) . "<br/>";
		echo ("*" . $arg1 . "*"  . "<br/>");
		echo str_repeat("*", $amount);
		echo ("</p>");
	}	
}

?>