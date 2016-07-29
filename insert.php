<?php

// make conn
$link = mysqli_connect("localhost", "gmapsuser", "gmaps123", "gmaps");

// check conn
if($link === false){
	die("ERROR: Could not connect. Reason: " . mysqli_connect_error());
}

// escape user inputs for security
$flyer_id = mysqli_real_escape_string($link, $_POST['flyerid']);

// attempt insert query execution
$sql = "INSERT INTO markers

