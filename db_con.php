<?php

$hostname = 'localhost';  
$username = 'root'; 
$password = ''; 
$name = 'stu_det';

$conn = new mysqli($hostname, $username, $password, $name, 3307);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
echo "";
?>
