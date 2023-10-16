<?php

include('connect.php');

$email = $_POST["email"];
$password = $_POST["password"]; 

if ( !empty($email) && !empty($password)) {


    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";

    if (mysqli_query($conn, $sql))
     {
        header("Location: login.html");
    } 
    else
     {
        header("Location: register.html");
        echo "<h2 style=color:red>ERROR</h2>";
    }
} 
else 
{
    echo "<h2 style=color:red>Fill all input</h2>";
}

mysqli_close($conn);
?>