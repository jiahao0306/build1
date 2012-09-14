<?php
App::uses('AppModel', 'Model');
/**
 * Member Model
 *
 * @property MembershipType $MembershipType
 */
class Member extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'additional Members' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'MembershipType' => array(
			'className' => 'MembershipType',
			'foreignKey' => 'membership_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
