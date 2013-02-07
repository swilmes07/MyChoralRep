<?php
include('lock.php');

if ($_POST['nextsong']){
	
	$pname=$_POST['ProgramName'];
	$pdate=$_POST['ProgramDate'];
	$song=$_POST['SongName'];
	$composer=$_POST['Composer'];
	$arranger=$_POST['Arranger'];
	$tnotes=$_POST['Comments'];
	
	mysql_query("INSERT INTO programs (ID, Program_Name, Program_Date)
		  VALUES('$login_id','$pname','$pdate')");
	
	$program=mysql_query("SELECT * FROM programs WHERE Program_Name='$pname' ");
	$p_row=mysql_fetch_array($program);
	$p_ID=$p_row['Program_ID'];
	
	mysql_query("INSERT INTO songs (Program_ID, ID, Song_Name, Composer, Arranger, Translation_Notes)
		  VALUES('$p_ID', '$login_id','$song','$composer','$arranger','$tnotes')");
	
	die(header("Location: NextSong.php"));
}else if($_POST['done']){
	
	die(header("Location: programadded.php"));
	
} else
  {
  die('Error: ' . mysql_error());
  }
  mysql_close($bd);
