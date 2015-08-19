<?php
include('session.php');
$Error ="";  // Initialize Variables to Null.
$successMessage ="";
if (isset($_POST['submit']))
{
$newpassword=$_POST['password'];  // Fetching Values from URL
$password= sha1($cnewpassword);
$connection = mysql_connect("localhost", "root", "");  // Establishing Connection with Server..
$db = mysql_select_db("signup1", $connection);  // Selecting Database
$query = mysql_query("UPDATE signup1 SET password='$password' WHERE email='$session[email]' ");
if($query)
{
$successMessage ="Password Changed Successfully.";
}
}
else{
$Error ="Password not match...!!!!";
}



?>