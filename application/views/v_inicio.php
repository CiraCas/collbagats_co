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
  <!-- bx slider -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" defer></script>
  <script src="https://cdn.jsdelivr.net/bxslider/4.2.12/jquery.bxslider.min.js" defer></script>
  <!-- slick slider -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" defer integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 

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
      <a href="<?= base_url("index.php");?>">
        <img class="logo-principal" src=<?= base_url("assets/img/logo.png");?> alt="logo">
      </a>
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
  <main >
    <section >
      <?php $this->load->view($public_main);?>
    </section>
  
  </main>

  <script src=<?= base_url("/assets/js/vendor/modernizr-3.11.2.min.js"); ?>></script>
  <script src=<?= base_url("/assets/js/vendor/jquery-3.6.0.min.js"); ?>></script>
  <script src=<?= base_url("/assets/js/plugins.js"); ?>></script>
  <script src=<?= base_url("/assets/js/principal.js"); ?>></script>



  
</body>

</html>
