<?php
include('config.php');
if(isset($_POST["submit"]))

{

// Define Variables

$email = $_POST['email'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$company = $_POST['company'];
$phone = $_POST['phone'];
$password = $_POST['password'];

// Prepare SQL Query
$STM = $conn->prepare("INSERT INTO signup1(email, fname, lname, company, phone, password) VALUES (':email',':fname',':lname',':company',':phone',':password')");
     include('config.php');
// Bind parameters, Named parameters always start with colon(:)
$STM->bindParam(':email',$email);
$STM->bindParam(':fname',$fname);
$STM->bindParam(':lname',$lname);
$STM->bindParam(':company',$company);
$STM->bindParam(':phone',$phone);
$STM->bindParam(':password',$password);

// Execute prepared statement
$STM->execute();
     
// Redirecting it to other page where we will show success message.
header("location:customers.php");           			   
}
?>