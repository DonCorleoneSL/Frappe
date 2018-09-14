<?php 
	class Database{

	 private $servername; 
	 private $username;
	 private $password;
	 private $dbname;
	 private $charset;

	 public function __construct(){
	 	$this->connect();
	 }

	 protected function connect(){
		$this-> servername = "localhost"; 
		$this-> username = "root";
		$this-> password = "";
		$this-> dbname = "Frappe";
		$this-> charset = "utf8mb4";

		try {
			$dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
	 		$pdo = new PDO($dsn,$this->username, $this->password);
	 		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 		return $pdo;
		} catch (PDOException $e) {
			echo "Connection failed: ".$e->getMessage();
		}
	 	
	 }

	 public function queryExec($sql){
		$stmt = $this->connect()->query($sql);
		if($stmt){
			$personas = $stmt->fetchAll(PDO::FETCH_OBJ);
			foreach ($personas as $persona) {
				echo $persona->Nombre."  ";
				echo $persona->Apellido ."<br>";
			}

		}else{
			echo "Hace bien las cosas pelotudo";
		}
	 }

	}

 ?>