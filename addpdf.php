<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];
$p_ID=$_SESSION['pname'];

$ses_sql=mysql_query("SELECT * FROM members WHERE ID='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_id=$row['ID'];
$login_session=$row['UserID'];
$login_name=$row['FirstName'];
$login_last=$row['LastName'];
$login_pass=$row['Pass'];


if(!isset($user_check))
{
header("Location: home.php");
}

if (isset($_POST['submit']))
{
//Get File Attributes
$name = $_FILES['myfile']['name'];
$size = $_FILES['myfile']['size'];
$tmp_name = $_FILES['myfile']['tmp_name'];

if ($name)
{
	//Start Upload Process
	$location = "programs/.$name";
	move_uploaded_file($tmp_name,$location);
	$query = mysql_query("UPDATE programs SET Location_PDF='$location' WHERE Program_ID='$p_ID'");
	die("Your pdf has been uploaded! <a href='MyPrograms.php'>Back To Profile</a>");
}
else{

die("Please select a file!");
}
}
?>
