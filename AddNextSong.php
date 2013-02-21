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


if ($_POST['nextsong']){
	
	$song=$_POST['SongName'];
	$composer=$_POST['Composer'];
	$arranger=$_POST['Arranger'];
	$tnotes=$_POST['Comments'];
	
	
	mysql_query("INSERT INTO songs (Program_ID, ID, Song_Name, Composer, Arranger, Translation_Notes)
		  VALUES('$p_ID', '$login_id','$song','$composer','$arranger','$tnotes')");
	
	die(header("Location: NextSong.php"));
}else if($_POST['done'])){
	if(isset($_POST['SongName']){
		$song=$_POST['SongName'];
		$composer=$_POST['Composer'];
		$arranger=$_POST['Arranger'];
		$tnotes=$_POST['Comments'];
	
	
		mysql_query("INSERT INTO songs (Program_ID, ID, Song_Name, Composer, Arranger, Translation_Notes)
					VALUES('$p_ID', '$login_id','$song','$composer','$arranger','$tnotes')");
		die(header("Location: programadded.php"));
	}else{
		die(header("Location: programadded.php"));
	}
	
} else
  {
  die('Error: ' . mysql_error());
  }
  mysql_close($bd);
?>