<?php
include('config.php');
session_start();
$user_check=$_SESSION['login_user'];

$ses_sql=mysql_query("SELECT * FROM members WHERE ID='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_id=$row['ID'];
$login_session=$row['UserID'];
$login_name=$row['FirstName'];
$login_last=$row['LastName'];
$login_pass=$row['Pass'];
$login_school=$row['School'];
$login_job=$row['Job'];
$login_skill=$row['SkillLevel'];


if(!isset($user_check))
{
header("Location: home.php");
}

?>