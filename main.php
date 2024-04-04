<?php include 'conexion/conexion.php';

$query1 = "SELECT * FROM productos";
$consulta1 = mysqli_query($conexion, $query1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Tubos Oasis</title>
  <link rel="shortcut icon" href="Fotos/logo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="footer/footer.css">
  <link rel="stylesheet" href="pagina-principal/main.css">
  <link rel="stylesheet" href="navbar/navbar.css">
</head>

<body>
  <!-- Navbar -->
  </style>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="main.php">TUBOS OASIS</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="main.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="products/products.php">Nuestros Tubos</a>
          </li>
        </ul>
        <a href="login/login.html" type="button" style="width: 50px;" class="btn btn-light btn-admin">
          <i class="fa-solid fa-right-to-bracket"></i>
        </a>
      </div>
    </div>
  </nav>
  <!-- Main -->
  <div class="container">
    <div class="swiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide" style="background-image: url('Fotos/imagen1.jpg')"></div>
        <div class="swiper-slide" style="background-image: url('Fotos/imagen2.jpg')"></div>
        <div class="swiper-slide" style="background-image: url('Fotos/imagen3.jpg')"></div>
        <div class="swiper-slide" style="background-image: url('Fotos/imagen4.jpg')"></div>
        <div class="swiper-slide" style="background-image: url('Fotos/imagen5.jpg')"></div>
        <div class="swiper-slide" style="background-image: url('Fotos/imagen6.jpg')"></div>
      </div>
    </div>
  </div>
  <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d25675.957022500446!2d-75.37851202916534!3d6.184701724918077!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e6!4m3!3m2!1d6.1528184999999995!2d-75.3900922!4m5!1s0x8e46b156a39aee53%3A0x9e7a4e7c10f874d1!2stubos%20oasis!3m2!1d6.1850543!2d-75.375627!5e0!3m2!1ses!2sco!4v1711562484210!5m2!1ses!2sco" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <iframe class="mapa2" src="https://www.google.com/maps/embed?pb=!3m2!1ses!2sco!4v1711819446704!5m2!1ses!2sco!6m8!1m7!1sZQRd1qF3FuzJJ7X-cZSMaA!2m2!1d6.185062084837486!2d-75.37589003725147!3f44.29057632615014!4f-7.924641719172087!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  <!-- Footer -->
  <footer class="pie-pagina">
    <div class="grupo-1">
      <div class="box">
        <figure>
          <a href="#">
            <img src="Fotos/logo1.jpeg" class="logo" alt="Logo de SLee Dw" />
          </a>
        </figure>
      </div>
      <div class="box">
        <h2>SOBRE NOSOTROS</h2>
        <p>
          "Ofrecemos tubos de concreto prefabricados de excelente calidad y
          material, de diferentes pulgadas y precios, pueden servir para
          alcantarillado, pozos, puentes. Manejamos medio de trasporte para el
          lugar que se necesite"
        </p>
        <p>Telefono: +57 310 5057275</p>
      </div>
      <div class="box">
        <h2>SIGUENOS</h2>
        <div class="red-social">
          <a href="https://maps.app.goo.gl/Mdq4WBaN3fqWjGN17" class="fa-solid fa-map-location-dot" target="_blank"></a>
          <a href="https://www.instagram.com/reinaldoalzateagudelo?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="fa fa-instagram" target="_blank"></a>
        </div>
      </div>
    </div>
  </footer>

  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="pagina-principal/main.js"></script>
  <script src="https://kit.fontawesome.com/73c11b743b.js" crossorigin="anonymous"></script>
</body>

</html>