<?php 
	class Database{

	 private $conn;	
	 private $servername = "localhost"; 
	 private $username = "root";
	 private $password = "root";
	 private $dbname = "Frappe";

	 public function __construct(){
	 	$this->connect_db();
	 }

	 public function connect_db(){
	 	$this->conn = mysqli($this->servername, $this->username, $this->password, $this->dbname);

	 	if($conn->connect_error){
		die("Connection failed: ".$conn->connect_error);
	 }else{
		echo "Connected successfully";
	 }

	 }

	 //Universal Function for Querys.
	 public function queryExec($sql){
		//Call global var connection.
		global $conn;
		//Execute mysqli_query with parameths $conn and $sql.
		if(mysqli_query($conn, $sql)){
			echo "Consulta Exitosa";
		}else{
			echo "Hace bien las cosas pelotudo";
		}
	 }

	}

 ?>