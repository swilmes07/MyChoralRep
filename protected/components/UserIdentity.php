<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_id;

	/**
	 * Authenticates a user.
	 * 
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		
		$username=strtolower($this->username);
        $user=Users::model()->find('LOWER(Email)=?',array($username));
        if ($user == 'admin'){
        		$this->redirect(Yii::app()->homeUrl);
        }
        if($user===null)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif(!$user->validatePassword($this->password))
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			$this->_id=$user->ID;
            $this->username=$user->Email;
            $this->errorCode=self::ERROR_NONE;
		return !$this->errorCode;
	}

	public function getId()
    {
        return $this->_id;
    }
}