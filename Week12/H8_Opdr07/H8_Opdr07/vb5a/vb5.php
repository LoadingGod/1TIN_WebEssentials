<?php header('X-XSS-Protection: 0'); ?>
<!--
Chrome has default protection against Reflective XSS attacks. This is not a flaw that sandboxing can address. This 
protection system works by looking outgoing requests for javascript and preventing that javascript from being 
executed in the http response. No browser will prevent DOM Based XSS or Stored XSS.
-->
<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./css/opmaak.css" />
	<title><?php echo basename(__FILE__);?></title>
</head>
<body>
<p>
<?php 
error_reporting(E_ALL); 
?>

<?php 
if(isset($_POST['btnOk'])){
	$invoer = $_POST['invoer'];
	echo "Invoer: '$invoer'";
	}
else{
?>
<h3>Invoer zonder magic quotes:</h3>

<form action="vb5.php" method = "post">
	Invoer: <input type="text" name="invoer"/><br/>
	<input type="submit" name = "btnOk" value="OK"/>
</form>
<?php  } ?>
</p>
</body>
</html>
