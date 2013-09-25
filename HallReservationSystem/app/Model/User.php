<?php

App::uses('AppModel', 'Model');
App::uses('AuthComponent', 'Controller/Component');

/**
 * User Model
 *
 * @property Group $Group
 * @property Post $Post
 */
class User extends AppModel {

    public $name = 'User';
    public $displayField = 'name';

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'username' => array(
            'The username must be between 5 to 15 character' => array(
                'rule' => array('between', 5, 15),
                'message' => 'Username must be between 5 to 15 character'
            ),
            'The username is already taken' => array(
                'rule' => 'isUnique',
                'message' => 'Username exists'
            )
        ),
        'name' => array(
            'Please enter the first name' => array(
                'rule' => 'notEmpty',
                'message' => 'Please Enter your first name'
            ),
        ),
        'uID' => array(
            'Please enter the user ID' => array(
                'rule' => 'notEmpty',
                'message' => 'Please Enter your user ID'
            ),
            'The UID is already taken' => array(
                'rule' => 'isUnique',
                'message' => 'UID exists'
            )
        ),
        'password' => array(
            'notempty' => array(
                'rule' => 'notempty',
                'message' => 'Please enter your password'
            ),
            'Match password' => array(
                'rule' => 'matchPasswords',
                'message' => 'Your passwords do not match'
            )
        ),
        'password_confirmation' => array(
            'notempty' => array(
                'rule' => 'notEmpty',
                'message' => 'Please confirm your password'
            ),
        ),
        'email' => array(
            'notEmpty' => array(
                'rule' => array('email'),
                'message' => 'Please Enter a valid email address'
            ),
        ),
    );

    //match the passwords in the password field and the password confirmation field
    public function matchPasswords($data) {
        if ($data['password'] == $this->data['User']['password_confirmation']) {
            return true;
        }
        $this->invalidate('password_confirmation', 'Your passwords do not match');
        return false;
    }
    
    //hash the password before saving 
    public function beforeSave() {
        if(isset($this->data['User']['password'])) {
            $this->data['User']['password'] = AuthComponent::password($this->data['User']['password']); 
        }
        return true;
    }

}
