<?php
include("config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$myusername=addslashes($_POST['username']);
$mypassword=addslashes($_POST['password']);

$sql="SELECT ID FROM members WHERE UserID='$myusername' and Pass='$mypassword'";
$result=mysql_query($sql);

$row=mysql_fetch_array($result);
var_dump($row);
$count=mysql_num_rows($result);
var_dump($count);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
$_SESSION['login_user']=$row['ID'];
	header("Location: MyPrograms.php");

}
else
{
 header("location: invalid.php");
 //print("Your Login Name or Password is invalid");
}
}
?>
<form action="" method="post">
<label><font color="black">User Name </font></label>
<input type="text" name="username"/><br />
<label><font color="black">Password &nbsp </font></label>
<input type="password" name="password"/><br/>
<input type="submit" value=" Submit "/><br />
</form>