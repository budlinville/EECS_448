<?php
	ini_set('display_errors', 0);
	ini_set('display_startup_errors', 0);
    $mysqli = new mysqli("mysql.eecs.ku.edu", "alinvill", "lacrosse2", "alinvill");
	if ($mysqli->connect_errno) {
		printf("{}");
		exit();
	}
	
	if (!isset($_COOKIE["user"])) {
        echo "Please login!\n";
    }
    
    else {
        $userName = $_COOKIE["user"];
        $query = "SELECT UserID FROM Users WHERE Username = '$userName'";
        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $userID = $row["UserID"];
                
            }
        }
        
        $query = "SELECT Address, City, State, Zip, numBedrooms, numBathrooms, Rent ".
		"FROM Listings WHERE UserID = '$userID' ";
        
        $json = array("rows"=>[]);
        if ($result = $mysqli->query($query)) {
            while ($row = $result->fetch_assoc()) {
                $json["rows"][] = $row;
            }
        }
        printf(json_encode($json));
    
    }
	
	
?>
