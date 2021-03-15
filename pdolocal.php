<?php
    //archivo de conexion a la base de datos
    //datos de conexion a la base de datos
    $hostname = "localhost";
    $database = "db_dovalle";
    $port = 3306;
    $username = "root";
    $password = "";

    try {
        //conexion exitosa
        $con = new PDO("mysql:host=$hostname;dbname=$database;port=$port",$username,$password);
    }
    catch(PDOException $e){
        echo "error".$e->getMessage();
        echo "error para la base de datos";
        die();
    }

?>