<?php
App::uses('AppModel', 'Model');
/**
 * FileLocation Model
 *
 * @property FileDocument $FileDocument
 */
class FileLocation extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'file_location_name' => array(
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'FileDocument' => array(
			'className' => 'FileDocument',
			'foreignKey' => 'file_location_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
