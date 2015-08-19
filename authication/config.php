<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'signup');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

function NewUser()
{
	$email = $_POST['email'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$company=$_POST['company'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	
	$con = "INSERT INTO signup1 (email,fname,lname,company,phone,password) VALUES ('$email','$fname','$lname','$company','$phone','$password')";
	$data = mysql_query ($con)or die(mysql_error());
	if($data)
	{
	  header('location:login.html');
	echo "YOUR REGISTRATION IS COMPLETED...";
	}	
}


	if(!$row = mysql_fetch_array($con) or die(mysql_error()))
	{
		newuser();
	}
	
mysql_close($con);

?>





