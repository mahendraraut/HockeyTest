<?php
if(isset($_POST['submit']))
{ 
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('signup') or die(mysql_error());
 $mail=$_POST['email'];
 $q=mysql_query("select * from signup1 where email='".$mail."' ") or die(mysql_error());
 $p=mysql_affected_rows();
 if($p!=0) 
 {
  $res=mysql_fetch_array($q);
  $to=$res['email'];
  $subject='Remind password';
  $message="You activation link is: http://yourwebsitename.com/setpassword.html?email=$email&code=$code"; 
  $headers='From:guruparthiban19@gmail.com';
  $m=mail($to,$subject,$message,$headers);
  if($m)
  {
    echo'Check your inbox in email';
  }
  else
  { 
	  header('Location: passworddone.html');
   
  }
 }
 else
 {
  echo'You entered mail id is not present';
 }
}
?>