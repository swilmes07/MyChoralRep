<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		include('config.php');		
		<!-- TODO: Find out how to pull users with ajax. This method is bad, it is open to sql injection -->
		$ses_sql=mysql_query("SELECT * FROM members WHERE UserID='".$this->username."' ");

		$row=mysql_fetch_array($ses_sql);
		$login_session=$row['UserID'];
		$login_pass=$row['Pass'];
		
		$users=array();
		
		if($this->password == $login_pass){
			$users=array( $login_session=>$login_pass );
		} else{
			$users=array(
				// username => password
				'demo'=>'demo',
				'admin'=>'admin',
			);
		}
		
		if(!isset($users[$this->username]))
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users[$this->username]!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}
}