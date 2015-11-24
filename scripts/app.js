$(function() {
	var $searchForm = $('#searchForm');
	var $results = $('#results');

	$searchForm.on('submit', function(event){
		event.preventDefault();

		var formResults = $searchForm.serializeArray()[0];
		procesData(formResults);
	});

	function procesData(formData) {

		var searchTerm = formData.value;
		$.getJSON('db-search.php?term='+searchTerm, procesResults );

	}

	function procesResults(resultData) {
		if (resultData.length == 0) {
			$results.html('<li>No results</li>');
		} else {
			$results.empty();
			$.each(resultData, renderResult);
		}
	}
	function renderResult(id, value) {
		$results.append('<li>'+ value.result + '</li>');
	}
});