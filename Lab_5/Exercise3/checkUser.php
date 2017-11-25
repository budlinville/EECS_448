<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "alinvill", "lacrosse2", "alinvill");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$username = $_POST["username"];
$password = $_POST["password"];

//start session to store username for success.html
session_start();
$_SESSION['username'] = $username;

$query = "SELECT username, password FROM Users WHERE username = '$username'";
if ($result = $mysqli->query($query)) {
    /* fetch associative array */
    while ($row = $result->fetch_assoc()) {
        $fetchedUsername = $row["username"];
        $fetchedPassword = $row["password"];
    }
}

//check login information
if ($username = $fetchedUsername && password_verify($password, $fetchedPassword)) {
	header("Location: https://people.eecs.ku.edu/~alinvill/Lab_5/Exercise3/success.html");
} else {
	header("Location: https://people.eecs.ku.edu/~alinvill/Lab_5/Exercise3/login.html");
}

$result->free();

/* close connection */
$mysqli->close();
?>
