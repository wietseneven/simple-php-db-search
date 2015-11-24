<?php
include('db-connection.php');
$term = $_GET['term'];
$result = $_GET['result'];

// Before injecting look for duplicates
$testQuery = $db->prepare('
		SELECT
			result
		FROM
			content
		WHERE
			term = "'.$term.'"
	');

$testQuery->execute();
$testResult = $testQuery->fetchAll(PDO::FETCH_ASSOC);

if (count($testResult) == 0) {
	$sql = "INSERT INTO content (term, result)
	VALUES ('$term', '$result')";

	// use exec() because no results are returned
	$db->exec($sql);

	header('Location: new-entry.php?r=created&term=' . $term . '&result=' . $result);
} else {
	header('Location: new-entry.php?r=alreadyExists&term=' . $term . '&result=' . $result);
}