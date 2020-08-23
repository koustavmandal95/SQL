<?php
    $num = $_POST["numberGiven"];
    require 'arr.php';
    $text = '{"status":0}';
    for($j=0; $j<count($arr);$j++){
        if($arr[$j] == $num){
            $text = '{"status":1}';
            break;
        }
    }
    $text = json_encode($text);
    echo $text;
   
?>