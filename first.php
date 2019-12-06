
<!-- 
Check if a given number is Armstrong Number or Not

html file: first.html
php file: first.php
 -->


<!DOCTYPE html>
<html>
<head>
	<title>Check Armstrong Number</title>
</head>
<body>

<?php
$num = $_GET[num];
$sum = 0;
$temp=$num;
while ($temp>0) {
	$sum=$sum+pow($temp%10,3);
	$temp=(int)$temp/10;
}
if ($sum==$num)
	echo "<h3 align=center>$num is an Armstrong Number</h3>";
else
	echo "<h3 align=center>$num is not an Armstrong Number</h3>";
?>

<input type="button" name="click" value="Check Another Number" onclick="parent.location='first.html'">
</body>
</html>