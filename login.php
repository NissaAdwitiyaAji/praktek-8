<?php
// Definisi username dan password
$valid_username = "nissa";
$valid_password = "12345";


$username = $_POST['username'];
$password = $_POST['password'];


if ($username == $valid_username && $password == $valid_password) {

	header("Location: registrasi.php");
	exit();
} else {
	
	header("Location: login.php");
	exit();
}
?>