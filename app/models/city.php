<?php
class City extends AppModel {
	var $name = 'City';
	var $displayField = 'city';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Province' => array(
			'className' => 'Province',
			'foreignKey' => 'province_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>