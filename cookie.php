<?php
$InTwoMonth=60*60*24*60+Time();
setcookie('lastvisit' , date("G:i _ m/d/y"), $InTwoMonth);
if(isset($_COOKIE['lastvisit']))
{
$visit=$_COOKIE['lastvisit'];
echo "your last visit was_".$visit;
}
else
{
echo "you have got some state cookies";
}
?>
