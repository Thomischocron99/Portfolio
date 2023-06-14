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

    <div class="col-md-12" id="sesion">
    <H1>Iniciar Sesión</H1>
  
  <form action="validar_usuario.php" method="POST">
  <div class="form-floating mb-3">
          <input type="email" class="form-control" required id="floatingInput" placeholder="Nombre@ejemplo.com" maxlength="100" name="correo">
          <label for="floatingInput">Correo Electronico</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" required id="floatingInput" placeholder="Contraseña" maxlength="60" name="contrasenia">
          <label for="floatingInput">Contraseña</label>
        </div>
    
    <input type="submit" value="Iniciar Sesión" class="btn btn-outline-dark">
  </form>
  </div>

      <div class="col-md-12" id="sesion">
      <div><H1>  Registrate gratis aca! </H1></div>

      <form action="enviar_registro.php" method="POST" >
        <div class="form-floating mb-3">
          <input type="text" class="form-control" required id="floatingInput" placeholder="Nombre" maxlength="30"  name="nombre">
          <label for="floatingInput">Nombre</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" required id="floatingInput" placeholder="Apellido" maxlength="50" name="apellido">
          <label for="floatingInput">Apellido</label>
        </div>
        <div class="form-floating mb-3">
          <input type="email" class="form-control" required id="floatingInput" placeholder="Nombre@ejemplo.com" maxlength="100" name="correo">
          <label for="floatingInput">Correo Electronico</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" required id="floatingInput" placeholder="Contrasenia" maxlength="60" name="contrasenia">
          <label for="floatingInput">Contraseña</label>
        </div>
        <div class="form-floating mb-3">
          <input type="password" class="form-control" required id="floatingInput" placeholder="Contrasenia" maxlength="60" name="contrasenia2">
          <label for="floatingInput">Repetir Contraseña</label>
        </div>
        <input id="botonformulario" type="submit" value="Registrate" class="btn btn-outline-dark">
      </form>
    </div>
    
    <?php 
if(isset($_GET['ok'])) { ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <p>Usuario cargado correctamente</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php }

if(isset($_GET['error'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p>Las contraseñas no coinciden</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php }
?>

<?php
if(isset($_GET['error_ingreso'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p>Usuario no registrado</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php }
?>

<?php
if(isset($_GET['error_validar'])) { ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <p>Contraseña incorrecta</p>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php }
?>
    

    

       <div class="col-12" id="seguinos">
        <h2>Mirá nuestros posts</h2>
        <!--INICIO CARDS-->
        <div class="card-group">
          <div class="card border-warning">
            <img src="imagenes/post.JPG" class="card-img-top" alt="..." >
            <div class="card-body">
              <h5>@olicafe__</h5>
              <p class="card-title">Bienvenido el otoño!
                Arranca una nueva temporada ✨
                Foto @jimenahon
              </p>
            </div>
            <div class="cardfooter">
              <small class="text-body-secondary"><button type="button" id="botonfooter" class="btn btn-warning"><a href="https://www.instagram.com/olicafe__/" target="new" >POST</a></button></small>
            </div>
          </div>
          <div class="card border-warning">
            <img src="imagenes/grupo.JPG" class="card-img-top" alt="...">
            <div class="card-body">
              <h5>@oliviasaal</h5>
              <p class="card-title">Tenemos la playlist inspirada en la ambientación de nuestro coffee shop! Para que nos tengas siempre cerca!</p>
            </div>
            <div class="cardfooter">
              <small class="text-body-secondary"><button type="button" id="botonfooter" class="btn btn-warning"><a href="https://open.spotify.com/playlist/3GKnJJDae3mlYcztoqh9AZ?si=vV1Oqvb9S-qkkP9mk39Vtg&nd=1" target="new">PLAYLIST</a></button></small>
            </div>
          </div>
          <div class="card border-warning">
            <img src="imagenes/pablo.JPG" class="card-img-top" alt="...">
            <div class="card-body">
              <h5>@olicafe__</h5>
              <p class="card-title">Hoy celebramos a @pabloneptuno nuestro general manager. Indudablemente uno de los que hacen de OLI, el lugar al que querés venir todos los días. Gracias Pabli, te queremos, feliz cumple</p>
            </div>
            <div class="cardfooter">
              <small class="text-body-secondary"><button type="button" id="botonfooter" class="btn btn-warning"><a href="https://www.instagram.com/olicafe__/" target="new">POST</a></button></small>
            </div>
          </div>
        </div>
        <!--FINAL CARDS BOOTSTRAP-->
      </div>
    
  </section>

   
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

   <!-- JS Boostrap --> 
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
  </html>
