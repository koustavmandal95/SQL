<?php
    require 'dblogin.php';
    // Create A Connection
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
                    $text["empno"] = $row['empno'];
                    $text['phone'] = $row['phone'];
                    $text['loc'] = $row['location'];
                    array_push($arr,$text);
        }
        $arr = json_encode($arr);
        echo $arr;
        }

?>