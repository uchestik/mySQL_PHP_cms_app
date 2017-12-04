<?php 
//connect to Database
$db_host = 'localhost';
$db_name = 'shop';
$db_user = 'uchenna';
$db_pass = 'abcdefgh1234';

//create mysqli object
$mysqli = new mysqli ($db_host, $db_user,$db_pass,$db_name);

//handle errors
if(mysqli_connect_errno()){
    echo "This connection failed".mysqli1_connect_error();
    die();
}






?>