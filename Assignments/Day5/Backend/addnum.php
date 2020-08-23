<?php
    include 'arr.php';
    $n = $_POST["numberGiven"];
    // $n=23;
    $n = intval($n);
    $text = '';

    if(is_int($n)){
        array_push($arr,$n);
        $text = '{"status":1}';
    }
    else{
        $text = '{"status":0}';
    }
    $text = json_encode($text);
    echo $text;


?>