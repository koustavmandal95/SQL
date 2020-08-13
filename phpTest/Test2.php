<?php
	$author = "Brain W. Kernighan";
	echo <<< _END
	Debugging is twice as hard as writing the code in the first place \n
	Therefore, if you write the code as cleverly as possible, you are,
	by definition , not smart enough to debug it.
	- $author;
	_END;
	echo "<br>";
	$number = 12345*67890;
	echo $number;
		echo "<br>";
	echo substr($number,3,5);
	echo "<br>";
	$pi = "4.1234";
	$radius = 5;
	echo $pi*($radius*$radius);
	echo "<br>";
	echo " This is line ". __LINE__ ." of file " . __FILE__ . "method is" .__METHOD__;


?>