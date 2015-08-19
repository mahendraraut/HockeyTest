<?php 
error_reporting(0);
$email=$_POST['email'];
if($_POST['submit']=='submit')
{
mysql_connect('localhost','root','') or die(mysql_error);
mysql_select_db('signup');
$query="select * from signup1 where email='$email'";
$result=mysql_query($query) or die(error);
if(mysql_num_rows($result))
{
$code=rand(100,999);
$message="You activation link is: http://yourwebsitename.com/forgot.php?email=$email&code=$code
mail($email, "Subject Goes Here", $message);
header('Location: passworddone.html');

}
else
{
echo "No user exist with this email id";
}
?>