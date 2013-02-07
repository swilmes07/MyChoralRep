<?php

$query = mysql_query("SELECT * FROM members WHERE ID='$user_check'");

if (mysql_num_rows($query)==0){
	die("User not found!");
	}
	else{
	$row = mysql_fetch_assoc($query);
	$location = $row['imagelocation'];
	echo "<img src='$location' width='100' height='100'>";
	}


?>