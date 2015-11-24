<?php
include('db-connection.php');

$searchterm = $_GET["term"];

// bereid het SQL statement voor
$query = $db->prepare('
		SELECT
			result
		FROM
			content
		WHERE
			term = "'.$searchterm.'"
	');

// voeg parameters toe aan je statement
$params = array();

// voer de statement met de parameters uit
$query->execute($params);
// sla het resultaat op in een array
$result = $query->fetchAll(PDO::FETCH_ASSOC);


// vertaal het resultaat naar een json object
$json = json_encode($result);
// toon het json object
echo $json;