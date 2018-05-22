<?php

	/* $_POST data */
	$title_task = $_POST['title_task'];
	$description_task = $_POST['description_task'];
	
	/* Create an array for extracting a json structure */
	$json_array = Array('title' => $_POST['title_task'], 'description' => $_POST['description_task'], 'datetask' => $_POST['date_task'],
		'fromtime' => $_POST['fromtime_task'], 'totime' => $_POST['totime_task']);
	
	/* Open a json file in write mode */
	$handle = file_get_contents('tasksDb.json');
	$tempArray = json_decode($handle);
	
	echo $handle;
	
	/* Check if $handle is empty */
	if( $tempArray === null ) {
		$tempArray = [];
	}
	array_push($tempArray,$json_array);
	$jsonData = json_encode($tempArray);
	file_put_contents('tasksDb.json', $jsonData);
	fclose('tasksDb.json');
	
	header("Location: index.html");
	die();
	
?>

