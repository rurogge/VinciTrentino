<?php
class QuestionsSession extends AppModel {
	var $name = 'QuestionsSession';
	var $displayField = 'id';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Question' => array(
			'className' => 'Question',
			'foreignKey' => 'question_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'UserSession' => array(
			'className' => 'UserSession',
			'foreignKey' => 'session_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>
