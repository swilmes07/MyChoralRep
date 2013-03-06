<?php

$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_password = "";
	$mysql_database = "test";
	$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)
	or die("Oops something went wrong");
	mysql_select_db($mysql_database, $bd) or die("Oops, something went wrong");

$pass1=$_POST['Password'];
$pass2=$_POST['Password2'];
if ($pass1 == $pass2){
	
	$first=$_POST['FirstName'];
	$last=$_POST['LastName'];
	$email=$_POST['Email'];
	$school =$_POST['School'];
	$job = $_POST['Job'];
	$drop=implode(",",$_POST['skill']);
	
	include ('emailValidation.php');
	validate($email);
	include ('uploadReg.php');
	
	$location = $filename;
	
	//$sql="INSERT INTO members (FirstName, LastName, UserID, Pass, SkillLevel)
		  //VALUES('$first','$last','$email','$pass1','$drop')";
	mysql_query("INSERT INTO members (FirstName, LastName, UserID, Pass, SkillLevel, School, Job, imagelocation)
		  VALUES('$first','$last','$email','$pass1', '$drop', '$school', '$job', '$location')");
		  echo "Thank you for registering! <a href=home.php> Home</a>";
}else if($pass1 != $pass2){
		echo "I'm sorry, your passwords don't match. Please <a href=registration.php> return to registration</a>";
} else
  {
  die('Error: ' . mysql_error());
  }
  mysql_close($bd);

?>
