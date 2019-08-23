<?php
		$link = mysqli_connect("localhost","root","","padilauaromas");
		/* comprobar conexion*/
		if (mysqli_connect_errno()) {
			printf("Error de conexion: %s\n", mysql_connect_error());
			exit();
			$link->set_charset(utf8_general_ci);
		}?>