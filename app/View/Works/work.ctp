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
	<h2 style="text-align: center">List Work</h2>

	<table class="table table-bordered">
		<thead class="thead-dark text-center">
		<tr>
			<th scope="col" style="width: 5%">#</th>
			<th scope="col">Work</th>
			<th scope="col" style="width: 20%">Start date</th>
			<th scope="col" style="width: 20%">Due date</th>
			<th scope="col" style="width: 5%">Status</th>
			<th scope="col" style="width: 5%">Action</th>
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
				echo "<td><a href='edit/" . $item['Work']['id'] . "' >" . $item['Work']['work_content'] . "</a></td>";
				echo "<td>" . $item['Work']['start_date'] . "</td>";
				echo "<td>" . $item['Work']['due_date'] . "</td>";

				if ($item['Work']['status'] == 0) {
					echo '<td class="text-center"><input type="checkbox"></td>';
				} else {
					echo '<td class="text-center"><input type="checkbox" checked disabled></td>';
				}

				echo "<td><a href='delete/" . $item['Work']['id'] . "' >Delete</a></td>";
				echo "</tr>";
			}
		}
		?>
		</tbody>
	</table>

</div>
</body>
</html>
