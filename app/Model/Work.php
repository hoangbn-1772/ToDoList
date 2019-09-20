<?php

class Work extends AppModel
{
	var $name = 'Work';

	// use the Model::validate
	public $validate = array(
		'work_content' => array(
			'rule' => 'notBlank',
			'message' => 'Not blank'), //letters and numbers
		'start_date' => array(
			'rule' => 'notBlank',
			'message' => 'Enter a valid date',), //date
	);
}
