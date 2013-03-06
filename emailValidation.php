<?php


function validate($email){
	$testEmail1=preg_match('#[.]#', $email);
	$testEmail2=preg_match('#[@]#', $email);
	
	if (!$testEmail1){
	echo "The email is not correct. Please <a href=registration.php> return to registration</a>";
	exit;
	}elseif(!$testEmail2){
	echo "The email is not correct. Please <a href=registration.php> return to registration</a>";
	exit;
	}
	

}


?>