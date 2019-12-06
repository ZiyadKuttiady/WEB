<!-- 
Check if a given number is Fibanocci Number or Not

html file: second.html
php file: second.php
 -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
$a=0;
$b=1;
$c=0;
$n=$_GET[num];
echo "<br>";
echo "The Fibanocci Series are:";
echo "<br>";
echo $a;
echo "<br>";
echo $b;
echo "<br>";
for ($i=0; $i<$n-2; $i++) { 
	$c=$a+$b;
	echo $c;
	echo "<br>";
	$a = $b;
	$b = $c;
}
?>
</body>
</html>