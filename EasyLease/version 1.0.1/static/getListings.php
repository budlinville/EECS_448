<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$mysqli = new mysqli("mysql.eecs.ku.edu", "alinvill", "lacrosse2", "alinvill");
	if ($mysqli->connect_errno) {
		printf("{}");
		exit();
	}

	$numBedrooms = $_GET["numBedrooms"];
	$numBathrooms = $_GET["numBathrooms"];
	$rent = $_GET["rent"];
	//TODO if some of these are null, don't select with WHERE
	$query = "SELECT /*listingID,*/ address, city, state, zip, numBedrooms, numBathrooms, rent ".
		"FROM Listings WHERE numBedrooms >= $numBedrooms AND numBathrooms >= $numBathrooms ".
		"AND rent <= $rent";

	$json = array("rows"=>[]);
	if ($result = $mysqli->query($query)) {
		while ($row = $result->fetch_assoc()) {
			$json["rows"][] = $row;
		}
	}
	//printf(json_encode($json))
	echo json_encode($json);
?>
