<?php
// connection
$server_name = "localhost";
$user_name = "root";
$password =  "";
$database = "coffee";

$con=mysqli_connect($server_name, $user_name, $password, $database);
if($con){
    echo "connected successfully";
}

?>