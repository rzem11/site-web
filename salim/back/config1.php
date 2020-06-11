<?php

$con = new mysqli('localhost', 'root', '', 'salim');
	if($con->connect_error){
	   die("Connection failed: " . $con->connect_error);
	}
?>
