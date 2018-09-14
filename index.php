<?php
	include_once 'connection.php' 
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba PHP</title>
</head>
<body>
	<?php
		$db = new Database();
		//$sql2 = "INSERT INTO `persona`(`Nombre`) VALUES ('Raul');";
		//$sql2 = "UPDATE `persona` SET `Nombre`= 'Luis' WHERE Nombre = 'Jorge';";
		//$sql2 = "DELETE FROM `persona` WHERE Nombre = 'Raul';";
		//$sql2 = "CREATE TABLE `Apellido` ( `id_user` INT NOT NULL );";
		$sql = "SELECT * FROM persona;";
		$db -> queryExec($sql2);
		printf("<br>".$servername."<br>");
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		
		if ($resultCheck > 0) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo $row['Nombre']."<br>";
			}
		}
	 ?>
</body>
</html>