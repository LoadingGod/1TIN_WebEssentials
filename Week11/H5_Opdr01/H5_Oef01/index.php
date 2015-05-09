<?php
$h = 1;
if(++$h == 2) 
{
	if ($h++ == 2)
	{
		echo 'a<br/>';		
	}else 
	{
		echo 'b<br/>';
	}	
}
echo '$h = ' . $h . '<br/>';
?>