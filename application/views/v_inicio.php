<!doctype html>
<html class="no-js" lang="es">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CollbaGats</title>
  <meta name="description" content="collbagats">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Place favicon.ico in the root directory -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href=<?= base_url("/assets/css/normalize.css");?>>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
  <link rel="stylesheet" href=<?= base_url("/assets/css/main.css");?>>

  <meta name="theme-color" content="#fafafa">
</head>

<body>
  
  <header>
    <div class="franja">
      <div class="colocar-iconos contenedor">
        <div class="iconos">
          <a href="https://www.facebook.com/collbagats">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="#">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.instagram.com/gats_de_collbato/">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <div class="iconos">
          
          <a href="mailto:collbagats@gmail.com" class="fab">collbagats@gmail.com</a>
          <a href="<?= base_url("index.php/login/login_v");?>">
            <i  class="fas fa-lock"></i>
          </a>
        </div>
      </div>
    </div>
    <h1 class= "contenedor">
      <img class="logo" src=<?= base_url("assets/img/logo.png");?> alt="logo">
    </h1>
    <div class="franja">
      <nav class="navegacion-principal contenedor">
        <a href="#">Gats de Collbató</a>
        <a href="#">Actualidad</a>
        <a href="#">Colaborar</a>
        <a href="#">Adopciones</a>
        <a href="#">Contacto</a>
      </nav>
    </div>
  </header>
  <script src=<?= base_url("/assets/js/vendor/modernizr-3.11.2.min.js"); ?>></script>
  <script src=<?= base_url("/assets/js/vendor/jquery-3.6.0.min.js"); ?>></script>
  <script src=<?= base_url("/assets/js/plugins.js"); ?>></script>


  
</body>

</html>
