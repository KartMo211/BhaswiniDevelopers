<?php
	$dbServername="localhost";
	$dbUsername="BD";
	$dbPassword="12345";
	$dbName="taranbhaswinidevelopers";

	$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

	if(!$conn){
		die("Connection failed: ".mysqli_connect_error());
	}
?>