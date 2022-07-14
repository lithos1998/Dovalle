<?php
    include("pdo.php");
    //cargar las fotos y cargar los datos al sql
    //subir la foto al servidor
    //echo("cargar slide");

    //traemos el nomero de cant
    $gsent = $con->prepare("SELECT cant FROM `datos` ORDER by cant DESC;");
    $gsent->execute();
    $result = $gsent->fetch(PDO::FETCH_OBJ);
    $cantidad = $result->cant;
    if($cantidad == null || $cantidad == ''){
        $cantidad = 0;
    }else{
        $cantidad++;
    }
    //print $cantidad;
    
    //nombramos la imagen
    //que es banner + el cant que llega de la db
    $cantidadimg = $cantidad + 1; 
    $nombre_final = "slide".$cantidadimg ;

    
    // si la imagen llega vacia
    if(!empty($_FILES) && ($_FILES["imagen"]["size"] == 0)){
        echo("no se cargo img");
        // header("Location:cargar.php");
        // die();
    }    
        
    //guardamos el nombre de la imagen
    $imagen = $_FILES["imagen"];
    //chequeamos tipo de imagen
    if($imagen["type"] == "image/jpeg"){
        $formato_imagen = "jpg";
        $imagen_original = imagecreatefromjpeg($imagen["tmp_name"]);
    }else{
        header("Location: cargar.php");
        die();
    }
    
    //la imagen
    //asignamos valores
    // valores originales de la imagen original
    $ancho_original = imagesx($imagen_original);
    $alto_original = imagesy($imagen_original);
    // valores nuevos
    $ancho_nuevo = 1000;
    //calculamos el otro valor
    $alto_nuevo = 600;
    // creaamos un lienzo nuevo
    $imagen_nueva = imagecreatetruecolor($ancho_nuevo,$alto_nuevo);
    //guardamos el destino de la foto
    $destino_imagen = "img/slide/$nombre_final.jpg";
    //si el tipo coincide ,copiamos la imagen en el lienzo , creamos la foto 
    if($imagen["type"] == "image/jpeg"){
        // copiar la imagen original en el lienzo nuevo
        $nuevo_lienzo = imagecopyresampled($imagen_nueva,$imagen_original,0,0,0,0,$ancho_nuevo,$alto_nuevo,$ancho_original,$alto_original);
        //creamos la foto para nuestro servidor
        $imagen_actual = imagejpeg($imagen_nueva,$destino_imagen,75);
        // borramos la imagen q esta almazenada en la memoria
        //imagedestroy($imagenCopia);
    }
    //movemos la foto al servidor
    move_uploaded_file($_FILES["imagen"]["tmp_name"],"img/slide/$nombre_final.jpg");
    
    
    
    //cagrgar los datos
    $cliente = $_POST["cliente"];
    if($cliente == ''){
        header("Location:cargar.php");
    }

    $rubro = $_POST["rubro"];
    if($rubro == ''){
        header("Location:cargar.php");
    }

    $id = $cantidad ;


    $insert = "INSERT INTO datos VALUES($id, 'Tramite: $cliente', 'Nombre: $rubro' , $id);";
    $insertar_datos = $con->exec($insert);

    header("Location:index.php");
/*
    
    

*/
    