<?php
class db_connection {
	private $_connection;
	private $_host = "localhost";
	private $_username = "root";
	private $_password = "";
	private $_database = "dhiraj";
	private $tablename = 'student';

	public function __construct() {
		$this->_connection = new mysqli($this->_host, $this->_username, 
			$this->_password, $this->_database);
	
		// Error handling
		if(mysqli_connect_error()) {
			trigger_error("Failed to conencto to MySQL: " . mysql_connect_error(),
				 E_USER_ERROR);
		}
	}
	
	// Get mysqli connection
	public function getConnection() {
		return $this->_connection;
	}
	
	public function insertData($td_value_array) {
		$conn = $this->getConnection();
	/*
		$sql = "INSERT INTO ".$this->tablename." (name,  email, phone, marks)
				VALUES ('".$data['name']."', '".$data['email']."', '".$data['phone'].", '".$data['marks']."')";
		
	*/	
		$sql = "INSERT INTO ".$this->tablename." (";
		$sql .= implode(", ", array_flip($td_value_array));
		$sql .= ") VALUES ( '";
		$sql .= implode("','", $td_value_array);
		$sql .= "')";
		
		if ($conn->query($sql) === TRUE) {
			//return false;
			return $conn->insert_id;
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}	
	}
	
	
	public function displayData() {
		$conn = $this->getConnection();
		
		$sql = "SELECT * FROM ".$this->tablename;
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				$rows[] = $row;
			}
			return $rows;
		} else {
			//return false;
		}
	}
	
}


?>