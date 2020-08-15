<?php
// server side
$number = $_GET['number'];
$mul_5 = $number*5;
$fnumber = $number*2;
$snumber = $number*3;
echo nl2br("The 5th multiple $mul_5 \n 
The next two multiple
$fnumber , $snumber ");
?>