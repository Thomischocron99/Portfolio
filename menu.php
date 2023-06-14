<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olicafe</title>
    <!--CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <!-- CSS Propio -->
    <link rel="stylesheet" href="./style.css">
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
    
  <!--PIPA Y PRIMERA SECCION-->
  <?php
      if(isset($_SESSION['cliente'])) {
    ?>

   <!--CARRUSEL-->
   <main>
    <div class="galeria">
      <div class="card">
        <img src="imagenes/bagel.jpg" alt="">
      <div class="cuerpo-imagenes">
          <h3>Bagel</h3>
          <p>Bagel de queso crema, salmón y rúcula </p>
    </div>
    </div>
    <div class="card">
        <img src="imagenes/frenchori.jpg">
    <div class="cuerpo-imagenes">
          <h3>French Toast</h3>
          <p> Tostadas francesas de pan integral con frutas</p>
    </div>
    </div>
    <div class="card">
        <img src="imagenes/yogurthori.jpg">
    <div class="cuerpo-imagenes">
          <h3>Yogurt con frutas </h3>
          <p>Yogurt natural con frutas de estación.</p>
    </div>
    </div>
    <div class="card">
        <img src="imagenes/sconhori.jpg">
    <div class="cuerpo-imagenes">
        <h3>Scon de queso</h3>
        <p>Pan con sabor a queso.</p>
    </div>
    </div>
    <div class="card">
      <img src="imagenes/clubsand.jpg">
    <div class="cuerpo-imagenes">
      <h3>Club Sandwich</h3>
      <p>Pan de molde, lechuga, jamón y queso.</p>
    </div>
    </div>
    <div class="card">
        <img src="imagenes/croquehori.jpg">
    <div class="cuerpo-imagenes">
        <h3>Croque Madame</h3>
        <p>Tostado con jamón y queso y huevo y salsa.</p>
    </div>
    </div>
 
  </div>
  </main>

  
<section id="cont_inicio" class="cont_inicio">
  <img src="imagenes/medialuncita.png" alt="pipa" width="280" height="280"/>
  <label for="search" class="buscador_inicio">
    <input id="search" placeholder="Buscá tu favorito" />
    <svg
      width="24"
      height="24"
      viewBox="0 0 24 24"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M20.4498 19.05L15.2504 13.8497C16.0501 12.7997 16.5001 11.4497 16.5001 9.99938C16.5001 6.39938 13.6004 3.49969 10.0004 3.49969C6.4004 3.49969 3.49976 6.40033 3.49976 10.0003C3.49976 13.6003 6.39944 16.5 9.99944 16.5C11.4498 16.5 12.7491 16.05 13.8498 15.2503L19.0501 20.4507C19.2498 20.6503 19.5001 20.7507 19.7504 20.7507C20.0007 20.7507 20.2501 20.6503 20.4507 20.4507C20.8501 20.0503 20.8501 19.4503 20.4498 19.05L20.4498 19.05ZM10.0004 14.5003C7.50008 14.5003 5.5004 12.5007 5.5004 10.0003C5.5004 7.50001 7.50008 5.50033 10.0004 5.50033C12.5007 5.50033 14.5004 7.50001 14.5004 10.0003C14.5004 12.4997 12.4998 14.5003 10.0004 14.5003Z"
        fill="black"
      />
    </svg>
  </label>
</section>
    <?php         
      } else {  
    ?>
      <p>¡Registrarte para ver nuestro menu!</p>
          <p><a href="registrate.php" class="link-opacity-20-hover" style="color:black; border-style: none; font-size:20px; margin-left: 30px;">Ingresar</a></p>
    <?php  } ?>
    
    <?php 
      if(isset($_SESSION['cliente'])) { ?>
      <p><a href="salir.php" class="btn btn-success" style="background-color: yellow; border-style: none; font-size: 20px;  margin-left: 30px; color: black;">Cerrar Sesion</a></p>
      <?php } ?>
  

   
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