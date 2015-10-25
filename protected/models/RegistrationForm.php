<?php

/**
 * RegistrationForm class.
 * RegistrationForm is the data structure for keeping
 * user registration form data. It is used by the 'registration' action of 'SiteController'.
 */
class RegistrationForm extends CFormModel
{
    public $username;
    public $email;
    public $password;
    public $repeatPassword;
    public $rememberMe;

    private $_identity;

    public function rules()
    {
        return array(
            array('username, email, password, repeatPassword', 'required'),
            array('username', 'checkUniqUsername'),
            array('repeatPassword', 'compare', 'compareAttribute' => 'password', 'on' => 'register'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'repeatPassword' => 'Repeat password',
        );
    }

    /**
     * This is the 'checkUniqUsername' validator as declared in rules().
     */
    public function checkUniqUsername($attribute, $params)
    {
        if (!$this->hasErrors())
        {
            $this->_identity = new UserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
            if ($this->_identity->errorCode !== UserIdentity::ERROR_USERNAME_INVALID)
            {
                $this->addError('username', 'This login already exists.');
            }
        }
    }

    /**
     * Register the user using the given username and password in the model.
     * @return boolean whether registration is successful
     */
    public function register()
    {
        if ($this->_identity === null)
        {
            $this->_identity = new UserIdentity($this->username, $this->password);
            $this->_identity->authenticate();
        }
        if ($this->_identity->errorCode === UserIdentity::ERROR_USERNAME_INVALID)
        {
            $newUser = new User();
            $newUser->username = $this->username;
            $newUser->password = $this->password;
            $newUser->email = $this->email;
            if ($newUser->save()) {
                $this->_identity = new UserIdentity($newUser->username, $newUser->password);
                if ($this->_identity->authenticate())
                {
                    $duration = $this->rememberMe ? 3600*24*30 : 0;
                    Yii::app()->user->login($this->_identity, $duration);
                }
                return true;
            }
        }
        else
        {
            return false;
        }
    }
}
