<?php
	$name = $_POST['fname'];
	$ice_cream = $_POST['ice'];
	$appointment = $_POST['time'];
	$vegetable = $_POST['veg'];
	echo $name;
	echo " <br> The flavour liked are <br>";
	foreach ($ice_cream as $item) {
		# code...
		echo "$item <br>";
	}
	echo $appointment;
	echo $appointment == 1 ? "<p style='color:red;'> First Half</p>":"after Lunch";
	echo "<br> $vegetable";

?>