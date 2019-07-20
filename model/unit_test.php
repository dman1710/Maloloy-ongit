<?php 

	require("UserModel.php");

	$model = new UserModel();
	
	$model->name = "libran";
	$model->lastname = "Maloy";
	$model->age = "20";
	$model->username = "jojo123";
	$model->password = "4321";
	
	//Inserting record
	//echo "Test case result#1:";
	//var_dump($model->insert());
	
	//updating record
	//echo "Test case result#2:";
	//var_dump($model->update(2));
	
	//Read All record
	echo "Test case result#3:";
	var_dump($model->readAll());
	
	
	//Delete record
	//echo "Test case result#4:";
	//var_dump($model->delete(2));
	
	
	
	//Inserting record with 3 missing fields
	
	//updating record with a non-existing ID
	//echo "Test case result#6:";
	//var_dump($model->update('t'));
	

	
	//Deleting record with a non-existing ID
	//echo "Test case result#7:";
	//var_dump($model->delete('t'));
	
	
?>