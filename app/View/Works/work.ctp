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
	echo $this->Form->create('Post', array(
		'url' => array(
			'controller' => 'Works',
			'action' => 'add',
		),
	));
	echo $this->Form->input('work_content', array('label'=>'Work','rows' => '3'));
	echo $this->Form->input('start_date', array('label'=>'Start date', 'type' => 'Date', 'class' => 'col-sm-3'));
	echo $this->Form->end('Save');

//	echo $this->Html->link('Add work', array('controller' => 'works', 'action' => 'work'))
	?>

	<h2>List work</h2>
	<table class="table table-bordered">
		<thead class="thead-dark text-center">
		<tr>
			<th scope="col" style="width: 5%">#</th>
			<th scope="col">Work</th>
			<th scope="col" style="width: 15%">Start date</th>
			<th scope="col" style="width: 15%">Due date</th>
			<th scope="col" style="width: 5%">Status</th>
		</tr>
		</thead>
		<tbody>
		<?php
		if ($data == NULL) {
			echo '<h2>Data Empty</h2>';
		} else {
			foreach ($data as $item) {
				echo "<tr>";
				echo "<td>" . $item['Work']['id'] . "</td>";
				echo "<td>" . $item['Work']['work_content'] . "</td>";
				echo "<td>" . $item['Work']['start_date'] . "</td>";
				echo "<td>" . $item['Work']['due_date'] . "</td>";
				if ($item['Work']['status'] == 0) {
					echo '<td class="text-center"><input type="checkbox"></td>';
				} else {
					echo '<td class="text-center"><input type="checkbox" checked></td>';
				}
				echo "</tr>";
			}
		}
		?>
		</tbody>
	</table>

</div>
</body>
</html>

