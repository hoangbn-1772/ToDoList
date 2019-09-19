<?php

class Work extends AppModel
{
	var $name = 'Work';

	// use the Model::validate
	public $validate = array(
		'work' => array(
			'rule'=>'notBlank',
			'alphaNumeric',
			'required' => true,
			'message' => 'Letters and numbers only'), //letters and numbers
		'date' => array(
			'rule' => 'date',
			'message' => 'Enter a valid date',
			'required' => true) //date
	);
}
