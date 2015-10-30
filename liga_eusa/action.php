<html>


    <head></head>


    <body>


<?php


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eusa15_bdphp";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $numero = $_POST['numero'];
    $fecha_fin = $_POST['fecha_fin'];
    $sql = "INSERT INTO jornadas (numero,fecha_fin) VALUES ('$numero','$fecha_fin')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Se ha grabado correctamente en la BD.";
        echo "Se ha grabado la jornada $numero con la fecha de finalización 					$fecha_fin";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        
    }
    mysqli_close($conn);
    ?>
        </body>
</html>