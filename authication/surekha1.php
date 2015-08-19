<?php     //start php tag
//include connect.php page for database connection
Include('surekha.php')
//if submit is not blanked i.e. it is clicked.

	
$sql="insert into student(email,fname,lname,company,phone,password) values('".$_REQUEST['email']."', '".$_REQUEST['fname']."', '".$_REQUEST['lname']."', '".$_REQUEST['company']."','".$_REQUEST['phone']."','".$_REQUEST['password']."')";
$res=mysql_query($sql);
If($res)
{
Echo "Record successfully inserted";
}
Else
{
Echo "There is some problem in inserting record";
}

}


?>
?>