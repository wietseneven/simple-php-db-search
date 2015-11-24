<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>New entry</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container">
	<?php
	$result = $_GET['r'];
	if ($result == 'created') {
		echo '<h4 class="col-sm-4 col-sm-offset-4">Created new record succesfully</h4>';
	} else if ($result == 'alreadyExists') {
		echo '<h4 class="col-sm-4 col-sm-offset-4">This term already exists</h4>';
	}
	?>
	<form action="db-new-entry.php" class="col-sm-4 col-sm-offset-4">
		<h2 class="form-signin-heading">Fill in below</h2>

		<input type="text" name="term" class="form-control" placeholder="Term" required autofocus>

		<input type="text" name="result" class="form-control" placeholder="Result" required>

		<button class="btn btn-lg btn-primary btn-block" type="submit">Place entry</button>
	</form>

</div>


</body>
</html>
