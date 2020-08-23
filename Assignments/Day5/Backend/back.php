<?php
      global $arr;
      $arr = array(1,2,3,4);
      $opt = $_POST["option"];
      switch ($opt) {
        case 1:
            $num = $_POST["numberGiven"];
            $text = '{"status":0}';
            for($j=0; $j<count($arr);$j++){
                if($arr[$j] == $num){
                    $text = '{"status":1}';
                    break;
                }
            }
            $text = json_encode($text);
            echo $text;
            break;
        case 2:
            $n = $_POST["numberGiven"];
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
            break;
        case 3:
            $n1 = $_POST['numberGiven'];
            $n2 = $_POST['modifiedvalue'];
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
            break;
        case 4:
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
            break; 
      }




?>