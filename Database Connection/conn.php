<?php
$server_name="localhost";
$username="root";
$password="";
$dbname = "training_db";


//create connection
$conn=new mysqli($server_name, $username,$password,$dbname);

//check connection:
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}





?>
