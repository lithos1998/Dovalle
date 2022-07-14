<?php
    include("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style_cargar.css">
    <script src="https://kit.fontawesome.com/aa47ff6f99.js" crossorigin="anonymous"></script><title>Cargar slide</title>
</head>
<body>
    <?php
        if(isset($_SESSION["ok"]) && $_SESSION["ok"] === "logok"){
            $sesion = true;
            
        }else{
            header("Location:loguin.php");
        }
    ?>
    <header>
        <nav>
            <a href="index.php" class="link"><i class="fas fa-arrow-left"></i></a>
        </nav>
    </header> 
    <section>
    <form action="cargar_slide.php" enctype="multipart/form-data" method="POST" class="bg-white p-3">
            <!-- input del cliente -->
            <div class="form-group">
                <label for="cliente" class="text-dark">Cliente</label>
                <input type="text" name="cliente" id="cliente" class="form-control" placeholder="ingrese cliente">
                <small id="help_cliente" class="text-muted">el nombre del cliente</small>
            </div>
            
            <!-- input del rubro -->
            <div class="form-group">
                <label for="rubro" class="text-dark">Rubro</label>
                <input type="text" name="rubro" id="rubro" class="form-control" placeholder="Ingrese rubro">
                <small id="help_rubro" class="text-muted">El rubro</small>
            </div>
            
            <!-- subida de imagen-->
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" accept="image/jpeg" class="form-control-file btn" name="imagen" id="imagen" placeholder="Subir imagen" aria-describedby="help_imagen">
                <small id="help_imagen" class="form-text text-muted">La imágen del libro unicamen debe ser en formato jpg y pesar menos de 2mb</small>
            </div>
            <!-- boton de envio -->
            <button type="submit" class="btn btn-outline-success btn-lg btn-block">Subir</button>
        </form>
    </section>
</body>
</html>