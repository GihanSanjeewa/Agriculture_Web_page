<?php 
//databse cofiguration
    $server_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $databse = 'agriculture';

    //create database connection
    $connection = new mysqli($server_name,$user_name, $password, $databse);

    //check connection
    if($connection -> connect_error){
        die("connection failed : ".$connection->connect_error);
    }
    
?>    


