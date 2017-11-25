<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
	$mysqli = new mysqli("mysql.eecs.ku.edu", "alinvill", "lacrosse2", "alinvill");
	if ($mysqli->connect_errno) {
		printf("{}");
		exit();
	}

	$username = $_POST["username"];
	$password = $_POST["password"];
	$email = $_POST["email"];
	$phone = $_POST["phone"];
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$passwordHashed = password_hash($password, PASSWORD_BCRYPT);

	printf($username);
	printf($password);
	printf($email);
	printf($phone);

  //Insert information into listings table in database
	//need to change back to correct table
  $query = "INSERT INTO Users(Username, Hashed_Password, Email, Phone1, FirstName, LastName) VALUES('$username', '$passwordHashed', '$email', '$phone', '$firstName', '$lastName')";

	if (!($mysqli->query($query))) {
	  echo "Error: " . $query . "<br>" . $mysqli->error;
	} else {
		setcookie("user", $username, 0, "/");	
		header("Location: https://people.eecs.ku.edu/~alinvill/EasyLease/");
	}
  //mysqli_query($mysqli, $sql1);

  //Change webpage to loginPage
  //header("Location: https://people.eecs.ku.edu/~alinvill/EasyLease");

  $mysqli->close();
  ?>
