<?php
include_once('dbconnection.php');

if (isset($_POST)) {
	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$phone = test_input($_POST["phone"]);
	$marks = test_input($_POST["marks"]);
	
	//TODO - do some server side validation here
	if(!empty($name)) {
		//insert data
		$db_insert_object = new db_connection();
		$table_column = array('name',  'email', 'phone', 'marks'); //table fields
		$td_value = array($name, $email, $phone, $marks);
		$td_value_array = array_combine($table_column, $td_value);
		$db_insert_object->insertData($td_value_array);
		//header('Location:index.php');
	} else {
		//dont insert any data
	}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

