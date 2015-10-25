<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    private $id;

    /**
     * Authenticates a user.
     * @return boolean whether authentication succeeds
     */
    public function authenticate()
    {
        $users = array(
            'demo' => 'demo',
            'admin' => 'admin',
        );

        if (isset($users[$this->username]))
        {
            if ($users[$this->username] !== $this->password)
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            else
                $this->errorCode = self::ERROR_NONE;

            return !$this->errorCode;
        }

        $record = User::model()->findByAttributes(array('username' => $this->username));
        if ($record === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;  
        else if ($record->password !== $this->password)
            $this->errorCode = self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->id = $record->id;
            $this->errorCode = self::ERROR_NONE;
        }

        return !$this->errorCode;
    }

    public function getId()
    {
        return $this->id;
    }
}
