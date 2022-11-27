<?php 
define('DB_HOST' , 'localhost');
define('DB_USER' , 'mahdi');
define('DB_PASS' , '123456');
define('DB_NAME' , 'first_test');

//create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); 


//check connection
if($conn->connect_error){
    die('connection failed' . $conn->connect_error);
} 

echo "CONNECTED";
