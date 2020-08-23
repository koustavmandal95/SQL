<?php

require 'dblogin.php';
// Create A Connection
    $conn = new  mysqli($server, $username, $password, $database);

     // Check For Connection
     if(!$conn){
        die ("Connection Terminated! by Die() function". mysqLi_connect_error());
       
    }
    else {
        echo "Connection Succefully Happened to database $database <br>";
        echo "--------------------------<br>";
    }
    $sql1 = "create table if not exists employee ( 
        empno varchar(10),
        phone varchar(20),
        location varchar(15),primary key(empno)
        )";

        if($conn->query($sql1) === TRUE) {
            echo "Database and Table Online";
          }else{
            echo "Database and Table Offline" . $conn->error;
          }
        
        $conn->close();

?>