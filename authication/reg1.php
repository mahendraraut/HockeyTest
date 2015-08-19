<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'signup');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$fullname = $_POST['email'];
	$userName = $_POST['fname'];
	$email = $_POST['lname'];
	$password1 =  $_POST['company'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	$query = "INSERT INTO signup1 (email,fname,lname,company,phone,password) VALUES ('$fullname','$userName','$email',''$password1','$phone','$password')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp()
{

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	
}

if(isset($_POST['submit']))
{
	SignUp();
}
?>


