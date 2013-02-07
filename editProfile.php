<?php
include('lock.php');


$pass1=$_POST['Password'];
$pass2=$_POST['Password2'];
if ($pass1 == $pass2){
	
	$first=$_POST['FirstName'];
	$last=$_POST['LastName'];
	$email=$_POST['Email'];
	$drop=$_POST['dropdown'];

	if (mysql_num_rows($ses_sql)==0){
	die("User not found!");
	}else if($pass1 != $pass2){
		die("I'm sorry, your passwords don't match. Please <a href=registration.php> return to registration</a>");
	} else{
	$query = mysql_query("UPDATE members SET FirstName='$first',LastName='$last',UserID='$email',Pass='$pass1',SkillLevel='$drop' WHERE ID='$login_id'");
		  die("Thank you for updating! <a href=welcome.php> Back to profile</a>");
	}
}
  

?>