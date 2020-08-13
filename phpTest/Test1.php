<?php //test1.php
		$username = "Fred Smith";
	echo $username;

	echo "<br>";
		$current_user = $username;

	echo $current_user;

	echo "<br>";
		$count = 17.4;
	echo $count;

	// Display the array
	echo "<br>";
	$team = array('Bill','Mary','Mike','Chris','Anne');
	echo $team[3];
	

	// Multi-dimensional array
		echo "<br>";
	$oxo = array(array('x',' ','o'),
				array('o','o','x'),
				array('x','o',' '));
	echo $oxo[1][2];
	echo "<br>";
	echo "Preface for team Player is $team[3]";

	echo "<br>";
	// String Concatenation 
	echo "You have ".$team[3] ." as vice pressident";

	// String appending
	echo "<br>";
	echo $count.=$team[0];

	// Escaping Character
	echo "<br>";
	echo $text = 'My spelling\'s still atrohus';

?>