<?php
App::uses('AuthComponent', 'Controller/Component');
App::uses('BlowfishPasswordHasher', 'Controller/Component/Auth');
/**
 * Class User app model for accounts. handle all accounts information.
 */
// app/Model/User.php
class User extends AppModel
{

    /**
     * Password is been encrypting before save into the database.
     * This encryption is doing by using CakePHP Cipher Salt and Cipher Seed (Default CakePHP security).
     *
     * @param array $options
     * @return bool
     */
    public function beforeSave($options = array()) {
        // if ID is not set, we're inserting a new user as opposed to updating
        if (!$this->id) {
            $passwordHasher = new BlowfishPasswordHasher();
            $this->data[$this->alias]['password'] = $passwordHasher->hash($this->data[$this->alias]['password']);
        }
        return true;
    }

    /**
     * @var array
     */
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        )
    );

    /**
     * Matching the password and confirm password.
     *
     * @return bool
     */
    public function CheckPass()
    {
        return $this->data['User']['password'] === $this->data['User']['cPassword'];
    }

}

?>