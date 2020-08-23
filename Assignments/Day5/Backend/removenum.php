<?php
        require 'arr.php';
        $n = $_POST['numberGiven'];
        $text = '{"status":0}';
        for($j=0; $j < count($arr); $j++){
            if($arr[$j]==$n){
                array_splice($arr, $j, 1);
                $text = '{"status":1}';
            break;
            }
    }
    $text = json_encode($text);
    echo $text;


?>