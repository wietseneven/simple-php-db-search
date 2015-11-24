<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Simple PHP DB Search</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container">
	<div class="col-sm-4 col-sm-offset-4 ">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#id</th>
					<th>Term</th>
					<th>Result</th>
				</tr>
			</thead>
			<tbody>
			<?php
				include('db-connection.php');
				$query = $db->prepare('	SELECT * FROM content ');

				// voeg parameters toe aan je statement
				$params = array();

				// voer de statement met de parameters uit
				$query->execute($params);
				// sla het resultaat op in een array
				$result = $query->fetchAll(PDO::FETCH_ASSOC);


				// vertaal het resultaat naar een json object
				foreach ($result as $term) {
					echo '<tr><td>'.$term['id'].'</td><td>'.$term['term'].'</td><td>'.$term['result'].'</td></tr>';
				}
			?>
			</tbody>
		</table>
	</div>
</div>

<script src="scripts/jquery-2.1.4.min.js"></script>
<script src="scripts/app.js"></script>

</body>
</html>
