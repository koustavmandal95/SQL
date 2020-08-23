<?php
    require 'dblogin.php';
    // Create A Connection
        $n1 = $_POST["empno"];
        $con = new  mysqli($server, $username, $password, $database);
        if(!$con){
            die ("Connection Terminated! by Die() function". mysqLi_connect_error());
           
        }
        else {  
        $query = "select * from employee";
        $result = $con->query($query);
        $rows = $result->num_rows;
        $arr = array();
        $text = array();
        $notavl = array();
        for($j = 0; $j < $rows ; ++$j){
            $result->data_seek($j);
            $row = $result->fetch_array(MYSQLI_ASSOC);
                if($n1 == $row['empno']){
                    $text["empno"] = $row['empno'];
                    $text['phone'] = $row['phone'];
                    $text['loc'] = $row['location'];
                    array_push($arr,$text);
                    $arr = json_encode($arr);
                    echo $arr;
                    return;
                }
        }
        $text["status"] = 0;
        array_push($notavl,$text);
        $arr = json_encode($notavl);
        echo $arr;
        }

?>