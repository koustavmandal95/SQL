<?php
    $str = $_GET['str'];
    $revstr = strrev($str);
    if($str == $revstr){
        echo "$str is palindrome <br>";
    }
    else{
        echo "$str not a palindrome <br>";
    }
?>