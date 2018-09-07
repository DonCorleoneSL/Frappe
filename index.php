<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Prueba PHP</title>
</head>
<body>
	<h1>Formulario</h1>
	<?php if(!isset($_POST["input1"])) { ?>
		<form action="index.php" method="POST">
			<h2>Llena los campos</h2>
			<input name="input1" type="text">
			<input name="input2" type="text">
			<input name="input3" type="text">
			<input name="input4" type="text">
			<input value="enviar" type="submit">
		</form>
	<?php } else { ?>
			<h1><?php echo $_POST["input1"]; ?></h1>

	<?php } ?>
</body>
</html>