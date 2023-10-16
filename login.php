<?php
include("connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    $email = $_POST["email"];
    $password = $_POST["password"];

   
   
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) >0) {
        $user = mysqli_fetch_assoc($result);
        if ($password === $user["password"])
         {
            echo "<h1 style=color:red;font-size:100px>Nice</h1>";
        } 
        else 
        {
            echo "invalid password";
        }
    } 
    else
     {
        echo "email is not define";
    }
    
    mysqli_close($conn);
}
?>