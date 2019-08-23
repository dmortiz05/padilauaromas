<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
		$link = mysqli_connect("localhost","root","","saphirus");
		$cantidadaerosol=$_POST["cantidadaerosol"];

		$query = "UPDATE `aerosol` SET  `cantidadaerosol` = '$cantidadaerosol' WHERE `aerosol`.`idaerosol` = $idaerosol;";
		mysqli_query($link, $query);
		header("Location: aerosoles.php");
		?>
	</body>
</html>