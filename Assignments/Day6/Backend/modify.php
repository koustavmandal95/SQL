<?php
    require 'dblogin.php';
    $con = new mysqli($server, $username, $password, $database);
    if($con->connect_error) die ($con->connect_error);
    $stmt = $con->prepare('update employee set phone=? ,location=? where empno=?;');
    $stmt->bind_param('sss',$n1,$n2,$n3);
    $n1 = $_POST['phone'];
    $n2 = $_POST['loc'];
    $n3 = $_POST['empno'];

    $text = '{"status":0}';
    $query = "select * from employee";
    $result = $con->query($query);
    $rows = $result->num_rows;
    for($j = 0; $j < $rows ; ++$j){
        $result->data_seek($j);
        $row = $result->fetch_array(MYSQLI_ASSOC);
              if( $n1 == $row['phone'] ){
                $text = '{"status":1}';
                $text = json_encode($text);
                echo $text;
                return;
              }
    }
 
    $text = '{"status":0}';
    $stmt->execute();
    $text = json_encode($text);
    echo $text;
     $stmt->close();
    $con->close();


?>