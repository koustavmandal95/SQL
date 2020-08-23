<?php
    require 'arr.php';
    $n1 = $_POST['numberGiven'];
    $n2 = $_POST['modifiedvalue'];
    // $n1 = 1;
    // $n2 = 20;

    $text = '{"status":1}';
    for($j=0; $j<count($arr); $j++){
        if($arr[$j]==$n2){
            $text = '{"status":0}';
            break;
        }
        else if($arr[$j]==$n1){
            $arr[$j] = $n2;
            $text = '{"status":1}';
        }
    }
    $text = json_encode($text);
    echo $text;
?>