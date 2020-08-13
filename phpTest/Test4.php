<?php
	function test(){
		static $count = 0;
		echo $count++."\t";
	}

	for($i=0 ; $i<10;$i++){
		test();
	}

?>