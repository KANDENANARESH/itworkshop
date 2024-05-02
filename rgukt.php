<!DOCTYPE html>
<html>
<body>
<?php
	$txt = "IIIT Basar.com";
	echo "I love $txt!<br>";
	echo "Thank YOU <br>";
?>

<?php
	if (TRUE)
		echo "This condition is TRUE.<br>";
	if (FALSE)
		echo "This condition is FALSE.";
?>
 
<?php
	$dec1 = 34;3;
	$oct1 = 0243;
	$hexa1 = 0x45;
	echo "Decimal number: " .$dec1. "</br>";
	echo "Octal number: " .$oct1. "</br>";
	echo "HexaDecimal number: " .$hexa1. "</br>";
?>
 
 <?php
	$n1 = 19.34;
	$n2 = 54.472;
	$sum = $n1 + $n2;
	echo "Addition of floating numbers:<br>".$sum;
	echo "</br>";
?>

<?php
	$company="tcs <br>";
	echo "Hello $company";
	echo "</br>";
	echo 'Hello $company<br>';
?>
<?php
	$bikes = array ("Royal Enfield", "Yamaha", "KTM");
	var_dump($bikes); //the var_dump() function returns the 	datatype and values
	echo "</br>";
	echo "Array Element1: $bikes[0] </br>";
	echo "Array Element2: $bikes[1] </br>";
	echo "Array Element3: $bikes[2] </br>";
?>
</body>
</html>
