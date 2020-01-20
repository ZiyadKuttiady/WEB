<?php
if(isset($_POST['submit']))
{
phpcall();
}
function phpcall()
{
$basic = $_POST['b1'];
$allowance = $basic * 0.2;
$gp = $basic + $allowance;
$ded = $basic * 0.1;
$net = $gp - $ded;
$an = $net * 12;
if($an <=3000)
$tax = 0;
else if($an <= 55000)
$tax = ($an = 30000)*0.3;
else
$tax =(25000 * .3) + ($an - 55000)*.5;
$name = $_POST['n1'];
$desg = $_POST['d1'];
echo "Name of Employee: ".$name."<br>";
echo "Designation: ".$desg."<br>";
echo "Basicpay: ".$basic."<br>";
echo "Allowance: ".$allowance."<br>";
echo "Grosspay: ".$gp."<br>";
echo "Deduction: ".$ded."<br>";
echo "Netpay: ".$net."<br>";
echo "AnnualSalary: ".$an."<br>";
echo "IncomeTax ".$tax."<br>";
}
?>