<?php
    include("pdo.php");
    include("config.php");
    $_SESSION["ok"]="no log";
    
    header("Cache-Control: no-cache, must-revalidate"); 
    header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); 
    
    //no juega con la url
    // $url= $_SERVER["REQUEST_URI"];
    // if($url != "/"){
    //     if($url != "/index.php" || $url != "/loguin.php" || $url != "/index.php?form=ok"){
    //         header("Location:/");
    //     }
    // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximun-scale=1.0, minimum-scale-1.0, user-scalable=no">
    <meta name="author" content="Carlos Riveros">
    <!-- Desarollador Carlos Riveros contacto/contrataciones : carlosriveros1998gmail.com  -->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icono.ico">
    <script src="https://kit.fontawesome.com/aa47ff6f99.js" crossorigin="anonymous"></script>
    
    <title>Estudio Dovalle</title>
</head>

<body>
    <!-- btn volver arriba -->
    <div class="btn-volver-arriba" id="btnVolverArriba">
        <a href="#" class="volver-arriba-a">
            <i class="fas fa-arrow-circle-up"></i>
        </a>
    </div> 
    <!-- boton wpp -->
    <div class="btn-wpp">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=+5491125566073&text=Hola%20deseo%20informacion">
            <img src="img/wpp.png" alt="">
        </a>
    </div>
    <!-- alerta -->
    <?php
        if(isset($_GET["form"])){
            $valForm = $_GET["form"];
            if($valForm == "ok"){
    ?>
            <div class="alerta-form">
                <p >Se envio con exito, a la brevedad nos estaremos comunicando con usted.</p>
            </div>
    <?php
            }
        }
    ?>
    <!-- menu -->
    <header>
        <div class="menu-mobile">
            <div class="barra">
                <a href="#" id="btnMenu"><i class="fas fa-bars"></i></a>
                <a href="#" class="logo"><img src="img/estudio.png" alt="logo"></a>
            </div>
            
            <nav class="menu-principal">
                <a class="scroll-suave" href="#" >INICIO</a>
                <a class="scroll-suave" href="#nosotros">NOSOTROS</a>
                <a class="scroll-suave" href="#servicios">SERVICIOS</a>
                <a class="scroll-suave" href="#referencias">REFERENCIAS</a>
                <a class="scroll-suave" href="#contacto">CONTACTO</a>
            </nav>
        </div>
        <div class="menu-pc">
            <a href="#" class="logo"><img src="img/estudio-w.png" alt="logo"></a>
            <nav>
                <a class="scroll-suave" href="#">INICIO</a>
                <a class="scroll-suave" href="#nosotros">NOSOTROS</a>
                <a class="scroll-suave" href="#servicios">SERVICIOS</a>
                <a class="scroll-suave" href="#referencias">REFERENCIAS</a>
                <a class="scroll-suave" href="#contacto">CONTACTO</a>
            </nav>
            <div class="redes-presupuesto">
                <a href="" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://m.facebook.com/nicolas.lavalle.779" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://instagram.com/estudiodovalle?igshid=f8unfj0veppy" target="_blank"><i class="fab fa-instagram-square"></i></a>
            </div>
        </div>
        <div class="fixed-header" id="fixedHeader">
            <a href="#" class="logo"><img src="img/estudio.png" alt="logo"></a>
            <nav class="menu-principal">
                <a class="scroll-suave" href="#">INICIO</a>
                <a class="scroll-suave" href="#nosotros">NOSOTROS</a>
                <a class="scroll-suave" href="#servicios">SERVICIOS</a>
                <a class="scroll-suave" href="#referencias">REFERENCIAS</a>
                <a class="scroll-suave" href="#contacto">CONTACTO</a>
            </nav>
            <div class="redes-presupuesto">
                <a href="" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="https://m.facebook.com/nicolas.lavalle.779" target="_blank"><i class="fab fa-facebook-square"></i></a>
                <a href="https://instagram.com/estudiodovalle?igshid=f8unfj0veppy" target="_blank"><i class="fab fa-instagram-square"></i></a>
            </div>
      </div>
    </header>
    
    <section class="main">
        <div class="banner-principal">
            <div class="banner" id="banner">

            </div>
            <div class="contenido-banner">
                <div class="logo">
                    <img src="img/logotipo.png" alt="">
                </div>
                <div class="presupuesto">
                    <h2>Solicita tu presupuesto aqui</h2>
                    <form id="formulario" action="enviarMail.php" enctype="multipart/form-data" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNombre">Nombre</label>
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder=" Nombre">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder=" Email@email.com">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="inputTelefono">Telefono</label>
                                <input type="text" class="form-control" name="telefono" id="telefono" placeholder=" Ej. 49428484">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputRubro">Rubro</label>
                                <input type="text" class="form-control" name="rubro" id="rubro" placeholder=" Ej. Gastronomia">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputM2">M2</label>
                                <input type="text" class="form-control" name="m2" id="m2" placeholder=" Ej. 200m2">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDireccion">Direccion</label>
                            <input type="text" class="form-control" name="direccion" id="direccion" placeholder=" Av. Rivadavia 1683">
                        </div>
                        <div class="form-group" style="padding-bottom: 10px;">
                            <label for="inputTramite">Tramite</label>
                            <input type="text" class="form-control" name="tramite" id="tramite" placeholder=" Ej. Habilitacion">
                        </div>
                        <button type="submit" class="boton-form">Enviar</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="servicios" id="servicios">
            <h2 class="text-center tit">Nuestros servicios</h2>
            <div class="nuestros-servicios contenedor">
                <div class="grupo">
                    <div class="servicio">
                        <div class="foto">
                            <i class="fas fa-store"></i>
                        </div>
                        <div class="texto">
                            <h3>Habilitacion de locales comerciales y oficinas</h3>
                        </div>
                    </div>
                    <div class="servicio">
                        <div class="foto">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="texto">
                            <h3>Permisos y avisos de obra</h3>
                        </div>
                    </div>
                    <div class="servicio">
                        <div class="foto">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <div class="texto">
                            <h3>Confeccion y solicitud de planos</h3>
                        </div>
                    </div>
                    <div class="servicio">
                        <div class="foto">
                            <i class="fas fa-fire"></i>
                        </div>
                        <div class="texto">
                            <h3>Servicios de suministro de gas</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="nosotros "id="nosotros" >
            <div class="cuadro">
                <h2 class="text-center">¿Por que elegirnos?</h2>
                <p class="container text-center text-nosotros">Desde estudio Dovalle queremos ayudarte para que puedas cumplir tus sueños y comiences a disfrutarlo.</p>
                <p class="container text-center text-nosotros"> Te aseguramos profesionalismo, eficacia y rapidez en nuestro trabajo para que vos puedas hacer el tuyo sin problemas.</p>
                
            </div>
            <h3 class="text-center">Nuestros profesionales</h3>
            <div class="equipo">
                <div class="persona-equipo">
                    <div class="foto">
                        <img src="img/foto1.jpg" alt="">
                    </div>
                    <div class="texto">
                        <h3>Nicolas Lavalle</h3>
                        <h4>Maestro Mayor de Obras</h4>
                        <p>Matricula CPIC Nº9779</p>
                    </div>
                </div>
                <div class="persona-equipo">
                    <div class="foto">
                        <img src="img/foto2.jpg" alt="">
                    </div>
                    <div class="texto">
                        <h3>Pascual Dopazo</h3>
                        <h4>Maestro Mayor de Obras</h4>
                        <p>Matricula CPIC Nº9939</p>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="contenedor-slider" id="referencias">
            <h2 class="text-center tit">Trabajos realizados</h2>
            <div class="slider" id="slider">
                <?php
                    $img = count(glob("img/slide/{*.jpg}",GLOB_BRACE));
                    $cont = 1;
                    for($k = 0 ; $k < $img ; $k++){  
                ?>
                    <div class="slide">
                        <img class="img-modal" src="img/slide/slide<?=$cont?>.jpg" alt="">
                    </div>
                <?php
                        $cont++;
                    }
                ?>

            </div>
            <div class="btn-anterior" id="btnAnterior">
                <i class="fas fa-arrow-circle-left"></i>
            </div>
            <div class="btn-siguiente" id="btnSiguiente">
                <i class="fas fa-arrow-circle-right"></i>
            </div>
            <div>
            <?php
                $query = "SELECT cliente,rubro,cant FROM `datos`;";
                $resultado = $con->query($query);
                
                foreach ($resultado as $rows) {
                    $cliente = $rows['cliente'];
                    $rubro = $rows['rubro'];
                    $cant = $rows['cant'];
                
            ?>
                <div class="divs <?= "div-cliente".$cant ?> " >
                    <h3 class="text-center <?= "cliente".$cant ?>"><?= $cliente ?></h3>
                    <h4 class="text-center <?= "rubro".$cant ?>" ><?= $rubro ?></h4>
                </div>
            <?php
                }
            ?>
            </div>
        </div>

        
        

        <div class="contactenos" id="contacto">
            <div class="contacto ">
                <div class="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6566.221259006306!2d-58.44048764803089!3d-34.62664450556053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca49af51caed%3A0x93829a1b2bd67c99!2sSan%20Jos%C3%A9%20de%20Calasanz%20635%2C%20C1424%20AHM%2C%20Buenos%20Aires!5e0!3m2!1ses!2sar!4v1587592366628!5m2!1ses!2sar" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="horarios">
                    <h4 class="text-center">Horarios de atencion</h4>
                    <p>Lun. 09:00 - 20:00 Hs.</p>
                    <p>Mar. 09:00 - 20:00 Hs.</p>
                    <p>Mie. 09:00 - 20:00 Hs.</p>
                    <p>Jue. 09:00 - 20:00 Hs.</p>
                    <p>vier. 09:00 - 20:00 Hs.</p>
                    <p>Sab. 09:00 - 20:00 Hs.</p>
                    <p>Dom. cerrado.</p>
                </div>
                <div class="datos">
                    <div class="tit-contacto">
                        <h2>Contacto</h2>
                    </div>
                    <div class="logos-contacto">
                        <div>
                            <i class="fas fa-phone-alt"></i>    
                            <p>4942-8484</p>
                        </div>
                        <div>
                            <i class=" fas fa-mobile-alt" id="celular"></i>
                            <p style="margin-left:10px">+11 2556-6073</p>
                        </div>
                        <div>
                            <i class="fas fa-envelope"></i>
                            <p>estudiodovalle@gmail.com</p>
                        </div>
                        <div class="redes-presupuesto">
                            <a href=""><i class="fab fa-linkedin"></i></a>
                            <a href="https://m.facebook.com/nicolas.lavalle.779" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            <a href="https://instagram.com/estudiodovalle?igshid=f8unfj0veppy" target="_blank"><i class="fab fa-instagram-square"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <br>
        </div>



    </section>
    
    

    <!-- jquery -->
        <script   src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <!-- <script src="js/jQuery-min.js"></script> -->
    <script src="js/script.js"></script>
    <!-- prefix -->
    <script src="js/prefix.js"></script>
</body>
</html> 