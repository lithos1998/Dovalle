<?php
    include("config.php");

    $name = $_POST["nombre"];
    $pass = $_POST["pass"];

    if($name ==''){
        header("Location:loguin.php");
    }
    if($pass ==''){
        header("Location:loguin.php");
    }

    if($name == "dovalle" && $pass == "mellopascual"){
        header("Location:cargar.php");
        $_SESSION["ok"] = "logok";
    }else{
        header("Location:loguin.php");
    }