<?php

		$servername = "localhost";
	    $username = "eusa15";
	    $password = "eusa15";
	    $dbname = "eusa15_bdphp";

	    // Create connection
	    $conn = mysqli_connect($servername, $username, $password, $dbname);
	    // Check connection
	    if (!$conn) {
	        die("Connection failed: " . mysqli_connect_error());
	    }
	    $nombre = $_GET['nombre'];
	    $equipo = $_GET['teams'];
	    $id_us = $_GET['user'];
	    $ape=$_GET['apellido'];
	    
        $salida;	


	    $sql = "INSERT INTO jugadores (nombre, apellidos, equipo_real, id_usuario) VALUES ('$nombre', '$ape', '$equipo', '$id_us')";
	    
	    if (mysqli_query($conn, $sql)) {
	      $salida= "Se ha guardado correctamente";
                } else {
	      $salida= "Error: ";
	    }

	    mysqli_close($conn);

?>