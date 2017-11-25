<?php


//Connect to mysql database
$mysqli = new mysqli("mysql.eecs.ku.edu", "alinvill", "lacrosse2", "alinvill");
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}


    $userName = $_COOKIE["user"];
    $query = "SELECT UserID FROM Users WHERE Username = '$userName'";
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            $UserID = $row["UserID"];  
        }
    }



//Get data from create listing page
$address = $_POST["address"];
$city = $_POST["city"];
$state = $_POST["state"];
$zipCode = $_POST["zip_code"];
$bedrooms = $_POST["bedrooms"];
$bathrooms = $_POST["bathrooms"];
$rent = $_POST["rent"];

//Insert information into listings table in database
$sql1 = "INSERT INTO Listings (Address, City, State, Zip, NumBedrooms, NumBathrooms, Rent, UserID) VALUES ('$address', '$city', '$state', '$zipCode', $bedrooms, $bathrooms, $rent, $UserID)";

mysqli_query($mysqli, $sql1);

//Change webpage to login page
header("Location: ../manageAccount.html");

$mysqli->close();



?>
