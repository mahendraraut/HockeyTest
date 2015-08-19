<?php
//  Establishing Connection with Server by Passing server_name, user_id and password as a Parameter.
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("signup", $connection);  // Selecting Database
session_start();  // Starting Session

$login_session =$row['email'];
$login_password =$row['password'];
if(!isset($login_session))
{
mysql_close($connection); // Closing Connection
header('Location:login.html'); // Redirecting to Home Page
}
?>