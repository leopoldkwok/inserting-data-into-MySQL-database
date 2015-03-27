<?php
	// remove php error messages
	error_reporting(E_ALL ^ E_DEPRECATED);

	include_once('db.php');

	$name = $_POST['name'];
	$age = $_POST['age'];

	if(mysql_query("INSERT INTO user VALUES('$name','$age')"))
		
		echo "Successfully Inserted";
	else
		echo "Insertion Failed";

?>

