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
		$nombre = "puto";
		//$sql2 = "INSERT INTO `persona`(`Nombre`) VALUES ('$nombre');";
		//$sql2 = "UPDATE `persona` SET `Nombre`= 'Luis' WHERE Nombre = 'Jorge';";
		//$sql2 = "DELETE FROM `persona` WHERE Nombre = '$nombre';";
		//$sql2 = "CREATE TABLE `Apellido` ( `id_user` INT NOT NULL );";
		$sql = "SELECT * FROM persona;";
		echo $db-> queryExec($sql);
		
	 ?>
</body>
</html>