<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "alinvill", "lacrosse2", "alinvill");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

//www.mysql.eecs.ku.edu/

$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$username = $_POST["username"];
$password = $_POST["password"];
$profPic = $_POST["profPic"];
$passwordHashed = password_hash($password, PASSWORD_BCRYPT);

$queryUser = "INSERT INTO Users(firstName, lastName, username, password) VALUES ('$firstName', '$lastName', '$username', '$passwordHashed')";
$queryProfPic = "INSERT INTO Image(username, image) VALUES ('$username', '$profPic')";

//$mysqli->query($queryUser);
//$mysqli->query($queryProfPic);

if (!($mysqli->query($queryUser))) {
    echo "Error: " . $queryUser . "<br>" . $mysqli->error;
} else if (!($mysqli->query($queryProfPic))) {
    echo "Error: " . $queryProfPic . "<br>" . $mysqli->error;
} else {
	header("Location: https://people.eecs.ku.edu/~alinvill/Lab_5/Exercise3/login.html");
}





/* close connection */
$mysqli->close();
?>
