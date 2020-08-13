<?php
	function longdate($timestamp)
	{
		$temp =  date("l F jS Y",$timestamp);
		echo "The date is $temp";
	}
	echo longdate(time());
	echo "<br>";
	$var1 = 100;
	$var2 = 200;
	$temp = "The answer is";
	$symbol = "+";
	echo $temp.compute($symbol,$var1,$var2);

	function add($symbol,$a,$b){
		echo $symbol == "+";
		return $a +$b;
	}
?>