<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/app/webroot/css/format_form.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
	<h2 style="text-align: center">Work form</h2>

	<?php
	echo $this->Form->create('Post');
	echo $this->Form->input('work_content', array('label' => 'Work', 'rows' => '3'));
	echo $this->Form->input('start_date', array('label' => 'Start date', 'type' => 'Date', 'class' => 'col-sm-3'));
	echo $this->Form->end('Save Work');
//	echo $this->Form->end('Save Post');
	?>

</div>
</body>
</html>
