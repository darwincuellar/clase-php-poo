<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mostrar Coche</title>
</head>
<body>
	<h1>Mostrar Coche</h1>
	<?php
		include_once("coche.php");
		$auto = new clsCoche("Corolla","Verde","1540ABC","Toyota");
		echo "Modelo: " . $auto->getModelo() ."<br>";
		echo "Color: ". $auto->getColor() ."<br>";
		echo "Placa: ". $auto->getPlaca() ."<br>";
		echo "Marca: ". $auto->getMarca() ."<br>";

		$vagoneta = new clsCoche("Runner","Negro","2456CBA","Toyota");
		echo "----------------------------------------- <br>";
		echo "Modelo:" .$vagoneta->getModelo() ."<br>";
		echo "Color: ". $vagoneta->getColor() ."<br>";
		echo "Placa: ". $vagoneta->getPlaca() ."<br>";
		echo "Marca: ". $vagoneta->getMarca() ."<br>";
	?>
</body>
</html>