<?php
echo "<table border=1>";
$length = 5;
for ($rij = 1; $rij <= $length; $rij++)
{
	echo "<tr>";
	MaakRij($rij, $length);
	echo "</tr>";
	}
	
function MaakRij($rij, $length){
n
	for($kolom = 1; $kolom <= $length; $kolom++)
	{	
		echo "<td>";
		print ($rij . ' * ' . $kolom . ' = ' . $rij * $kolom . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" );
	}
	echo "</td>";
}
?>

