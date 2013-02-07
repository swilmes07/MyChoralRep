<?php
include('lock.php');

echo $login_name;



if (isset($_POST['submit']))
{
//Get File Attributes
$name = $_FILES['myfile']['name'];
$size = $_FILES['myfile']['size'];
$tmp_name = $_FILES['myfile']['tmp_name'];

if ($name)
{
	//Start Upload Process
	$location = "avatars/.$name";
	move_uploaded_file($tmp_name,$location);
	$query = mysql_query("UPDATE members SET imagelocation='$location' WHERE UserID='$login_session'");
	die("Your Profile Image Has been uploaded! <a href='welcome.php'>Back To Profile</a>");
}
else{

die("Please select a file!");
}
}
echo "</br> </br>Please select an image to upload: 
<form action='upload.php' method='POST' enctype='multipart/form-data'>
File: <input type='file' name='myfile'> <input type='submit' name='submit' value='Upload!'> 
</form>
";?>
