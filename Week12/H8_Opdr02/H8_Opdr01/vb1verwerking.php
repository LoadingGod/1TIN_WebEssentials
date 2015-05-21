<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title><?php echo basename(__FILE__);?></title>
</head>
<body>
<?php 
 error_reporting(E_ALL); 
?>
<p>
<?php 
$vnaam = $_POST["vnaam"];
$anaam = $_POST["anaam"];
$email  = $_POST["email"];
$geslacht = $_POST["gesl"];
$leeftijd = $_POST["lft"];

?>

<table>
<tr>
<td>Voornaam: </td><td> <?php echo $vnaam;?></td></tr>
<tr><td>Achternaam: </td><td><?php echo $anaam; ?></td></tr>
<tr><td>Emailadres:</td><td><?php echo $email;?></td></tr>
<tr><td>Geslacht:</td><td><?php echo $geslacht;?></td></tr>
<tr><td>Leeftijd:</td><td><?php echo $leeftijd;?></td></tr>
</table>
</p>
</body>
</html>
