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

    <form class="col-sm-4 col-sm-offset-4" id="searchForm">
        <h2>Fill in below</h2>

        <input type="text" name="term" class="form-control" placeholder="Term" required autofocus autocomplete="off">

        <button class="btn btn-lg btn-primary btn-block" type="submit" id="searchBTN">Search</button>
    </form>
	<ul id="results" class="col-sm-4 col-sm-offset-4"></ul>
</div>

<script src="scripts/jquery-2.1.4.min.js"></script>
<script src="scripts/app.js"></script>

</body>
</html>
