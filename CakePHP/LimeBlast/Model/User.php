<?php

class User extends AppModel
{

	public $name = 'User';
	public $displayField = 'email';
	public $validate = array(
		'email' => array(
			'email' => array(
				'rule' => array('email', true),
				'message' => 'The email address you entered is invalid.'
			),
			'isUnique' => array(
				'rule' => 'isUnique',
				'message' => 'That email address you entered is already registered.' // todo: add 'login here/forgot password' link.
			),
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter your email address.'
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Please enter your password.'
			),
			'matchPasswords' => array(
				'rule' => 'matchPasswords',
				'message' => 'The passwords you have entered do not match.'
			)
		),
		'password_confirmation' => array(
			'notEmpty' => array(
				'rule' => 'notEmpty',
				'message' => 'Please confirm your password.'
			)
		)
	);

	public function matchPasswords($data)
	{
		if ($data['password'] == $this->data['User']['password_confirmation'])
		{
			return true;
		}
		$this->invalidate('password_confirmation', 'The passwords you have entered do not match.');
		return false;
	}

	public function beforeSave()
	{
		if (isset($this->data['User']['password']))
		{
			$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
		}
		return true;
	}

}