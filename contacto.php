<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

    <!-- CSS propio-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="container" id="cabecera_inicio">
        <div class="row" id="modulo1">
            <div class="col-sm-4 col-lg-2" id="logo">
                <a href= "index.html"><img src="imagenes/logo.png" alt="" class="img-fluid"> </a>
            </div>
            
           <!-- Botonera Bootstrap -->
           <nav class="col-sm-8 col-lg-10 navbar navbar-expand-md" id="botonera"> 
            <div class="container-fluid">

              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" href="aboutus.html">QUIENES SOMOS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="menu.php">MENÚ</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contacto.php">CONTACTO</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="registrate.php">REGISTRATE</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
           <!-- Fin Botonera Bootstrap -->
          
        </div>
    </header>
    
   

    <section class="container" id="seccion_inicio">
      <article class="row" id="modulo5">
        <div class="col" id="contacto1">
            <p class="h1">¿QUERÉS RECIBIR INFORMACIÓN SEMANAL DE OLI CAFÉ?</p>
            <p class="h3">¡ANOTATE EN NUESTRO NEWSLETTER!</p>
        </div>
    </article>
      <div class="row justify-content-center" id="modulo5">
         <div class="row">
            <div class="col-md-5 order-2" id="mapa">
              <h2>¿Cómo llegar?</h2>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13138.567258176361!2d-58.38311099999999!3d-34.587928700000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb568b018e969%3A0x92c141d8fb0735c7!2zT2xpIGNhZsOp!5e0!3m2!1ses!2sar!4v1682514114333!5m2!1ses!2sar" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-sm-7" id="formulario">
              <h2>Contacto</h2>
              <!--Formulario Bootstrap-->
              <form action="enviar_consulta.php" method="POST" >
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" required id="floatingInput" placeholder="nombre" required maxlength="30" name="nombre">
                  <label for="floatingInput">Nombre</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" required id="floatingInput" placeholder="Apellido" required maxlength="50" name="apellido">
                  <label for="floatingInput">Apellido</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" required id="floatingInput" placeholder="nombre@ejemplo.com" required maxlength="100" name="correo">
                  <label for="floatingInput">Mail</label>
                </div>
               
                <textarea placeholder="Dejanos tu Comentario" class="form-control" rows="5" name="consulta"></textarea>
                <input id="botonformulario" type="submit" value="ENVIAR" class="btn btn-outline-dark">
              </form>
                <!-- Fin formulario Bootstrap-->
                <?php
                      if(isset($_GET['ok'])) {  ?> 
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                       <p>Consulta enviada!</p>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                      <?php
                       }
                      ?> 
        </div>
  </div>
      </div>
    </section>
            </div>
          </div>
    

          <footer class="container-fluid" id="footerinicio" style="background-color:  rgb(219, 224, 71);">
            <div class="row align-items-end">
                <div class="col-sm-5" id="ubi">
                    <p style="font-size: 15px ; color: black; margin-top: 15px;">DIRECCIÓN: Costa Rica 6020, C1414 CABA</p>
                    <p style="font-size: 15px ; color: black;"> HORARIO: De 9hs a 19hs - Martes cerrados</p>
                </div>
                <div class="col-sm-5 offset-sm-2" id="redes">
                  <li><a href="https://www.instagram.com/olicafe__/" target="new" ><img src="imagenes/instagram1.png" class="img-fluid" id="instagram" alt="instagram" /></a></li>
                  <li><a href="https://open.spotify.com/playlist/3GKnJJDae3mlYcztoqh9AZ?si=vV1Oqvb9S-qkkP9mk39Vtg&nd=1" target="new" ><img src="imagenes/spotify1.png" class="img-fluid" id="spotify" alt="spotify" /></a></li>
                </div>
            </div>
        </footer>

    
<!-- JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>


