<?php

$host='localhost';
$username='root';
$password='';
$database='users';


$conn=new mysqli($host,$username,$password,$database);
if($conn->connect_error){
    die("Connection failed: " . $connection->connect_abort);
}

echo "<h1 style=color:red>Hello Mr</>"
?>