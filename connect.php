<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'e-commerce';

    $conn = mysqli_connect($servername,$username,$password,$db);
    
    if($conn == true){
        'Connection Successfull';
    }else{
        die('Connection error'.mysqli_connect_error());
    }
?>