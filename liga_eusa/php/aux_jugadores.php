<?php 
	function inserta_jugador($nombre, $ape, $equipo, $id_us){
        $servername = "localhost";
	    $username = "eusa15";
	    $password = "eusa15";
	    $dbname = "eusa15_bdphp";

	    // Create connection
	    $conn = mysqli_connect($servername, $username, $password, $dbname);
	    // Check connection
	    if (!$conn) {
	       // die("Connection failed: " . mysqli_connect_error());
	    }
	    $nombre = $_GET['nombre'];
	    $equipo = $_GET['equipo'];
	    $id_us = $_GET['usuario'];
	    $ape=$_GET['apellido'];
	    
        $salida;	
		
	    $sql = "INSERT INTO jugadores (nombre, apellidos, equipo_real, id_usuario) VALUES ('$nombre', '$ape', '$equipo', '$id_us')";
	    
	    if (mysqli_query($conn, $sql)) {
	      $salida= "Se ha guardado correctamente";
                } else {
	      $salida= "Error: ";
	    }

	    mysqli_close($conn);

        return $salida;
    }

    function puntua_jugador($nombre, $ape, $puntos, $jornada){
    	$servername = "localhost";
	    $username = "eusa15";
	    $password = "eusa15";
	    $dbname = "eusa15_bdphp";

	    // Create connection
	    $conn = mysqli_connect($servername, $username, $password, $dbname);
	    // Check connection
	    if (!$conn) {
	       // die("Connection failed: " . mysqli_connect_error());
	    }
	    $nombre = $_GET['nombre'];
	    $jornada = $_GET['jornada'];
	    $puntos = $_GET['puntos'];
	    $ape=$_GET['apellido'];
	    
	    $id_jugador = "SELECT id_jugador FROM jugadores WHERE nombre='$nombre' AND apellidos='$ape'";
	    $id_jornada = "SELECT id_jornada FROM jornadas WHERE numero='$jornada'";
        $salida;	

	    $sql = "INSERT INTO puntuaciones (id_jugador, id_jornada, valor) VALUES ('$id_jugador', '$id_jornada', '$puntos')";
	    
	    if (mysqli_query($conn, $sql)) {
	      $salida= "Se ha guardado correctamente";
                } else {
	      $salida= "Error: ";
	    }

	    mysqli_close($conn);

        return $salida;
    }


?>
