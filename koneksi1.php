<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "form_peserta";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
	die("<script>alert('Connection failed.')</script>");
}

?>