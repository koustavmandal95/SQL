<?php
    $paper[] = "Copier";
    $paper[] = "Inkjet";
    $paper[] = "Laser";
    $paper[] = "Photo";
    print_r($paper);
    echo "<br>";
    for($j = 0; $j <=3 ; ++$j){
        echo "$j: $paper[$j] <br>";
    }
    // Associative Array
    $paper['copier'] ="Copier and manufacturer";
    $paper['inkjet'] = "Inkjet Printer";
    echo $paper['copier'];

    list($a,$b) = array('Alice','Bob');
    echo "a=$a b=$b";
?>