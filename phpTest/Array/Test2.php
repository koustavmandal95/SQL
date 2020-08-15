<?php 
    $fname = "Doctor";
    $sname = "Who";
    $planet = "Gallifrey";
    $system = "GridLock";
    $constellation = "Kasterborous";

    $contact = compact('fname','sname','planet','system','constellation');
    print_r($contact);

    $p1 = array(12,45,10,1000,234,32);
    print_r($p1);

    sort($p1,SORT_NUMERIC);
    for($i=0;$i<count($p1);++$i){
        echo "$i: $p1[$i]<br>";
    }
    print_r($p1);

    rsort($p1,SORT_NUMERIC);
    for($i=0;$i<count($p1);++$i){
        echo "$i: $p1[$i]<br>";
    }
    print_r($p1);

    $alpha = array("AA","ZZ","BB","DD","LL");
    sort($alpha,$SORT_STRING);
    print_r($alpha);

    shuffle($alpha);
    print_r($alpha);

    echo "<br>";
    $temp = explode(' ',"This is a sentence with seven words");
    print_r($temp);

?>