<?php
	
	require("../database/Database.php");
	
	//Case#1  Inserting data using valid SQL insert command
	$dbObj = new Database();
	$result = $dbObj->execute("INSERT INTO user(name,email,username,password) VALUES('joseph','joseph@yahoo.com','joseph','joseph')");
	echo "Case#1 result: ".$result;
	
	
	//Case#2 Updating data using valid SQL update command
	//$result = $dbObj->execute("UPDATE  user SET name='joseph arnie' WHERE id=1");
	//echo  "Case#2 result: ". $result;
	
	//Case#3 Extracting data using valid SQL select command.
	//$result = $dbObj->execute("SELECT * FROM user");
	//echo  "Case#3 result: ". $result;
	
	//Case#4 Deleting data using valid SQL delete command.
	//$result = $dbObj->execute("DELETE FROM user WHERE id = 1");
	//echo  "Case#4 result: ". $result;
	
	
	
	
	
	//Case#5   Inserting data using invalid SQL insert command
	//$result = $dbObj->execute("INSET INTO user(name,email,username,password) VALUES('joseph','joseph@yahoo.com','joseph','joseph',)");
	//echo "Case#5 result: ".$result;
	
	//Case#6 Updating data using invalid SQL update command
	//$result = $dbObj->execute("UPDAT  user SET name='joseph arnie' WHERE id=1");
	//echo  "Case#6 result: ". $result;
	
	//Case#7 Extracting data using invalid SQL select command.
	//$result = $dbObj->execute("SELET * FROM user");
	//echo  "Case#7 result: ". $result;
	
	//Case#8 Deleting data using valid SQL delete command.
	//$result = $dbObj->execute("DELET FROM user WHERE id = 1");
	//echo  "Case#8 result: ". $result;
	
?>