<?php

function conexion(){
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', 'rootroot');
    define('DB_DATABASE', 'aulagaming');

    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
	if(!$db)
		die("Error conexión: ".mysqli_connect_error());
    return $db;
}

function ver_reservas($desde, $hasta, $turno, $db){
    $sql= "SELECT * from reservas WHERE turno='$turno' AND fecha>='$desde' AND fecha<='$hasta' ORDER BY fecha;";
    if(mysqli_query($db, $sql)){
        $result= mysqli_query($db, $sql);
        return $result;
    }
    else
        echo "Error: ".$sql."<br/>".mysqli_error($db);
}

?>