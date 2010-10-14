<?php
class Province extends AppModel {
	var $name = 'Province';
	var $displayField = 'province';


var $belongsTo = array (
		'region' => array(
			'className' => 'Region',
			'foreignKey' => 'region_id',
		)
	);
}
?>
