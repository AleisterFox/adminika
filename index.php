<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="ADMINIKA es una empresa de administración de Torres Residenciales, Médicas y Corporativas que nació en Baja California, México. Nuestro objetivo es revolucionar el modelo actual de administración en el país, incorporando la tecnología como principal aliado">
  <link rel="shortcut icon" href="img/logo_white.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/loader.css">
  <link rel="stylesheet" href="css/animate.css" />
  <link rel="shortcut icon" href="img/favicon-d.png" type="image/x-icon" color-scheme="dark">
  <link rel="shortcut icon" href="img/favicon-l.png" type="image/x-icon" color-scheme="light">
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <title>Adminika</title>
</head>

<body>
  <div class="loader__screen" id="loader">
    <div class="loader">
      <div class="box-1"></div>
      <div class="box-2"></div>
      <div class="box-3"></div>
    </div>
  </div>

  <body>
    <header class="main">
      <nav>
        <ul class="menu">
          <li class="active"><a href="index.php">INICIO</a></li>
          <li><a href="origin.php">ORIGEN</a></li>
          <li><a href="manifest.php">MANIFIESTO</a></li>
          <li><a href="founders.php">LIDERES</a></li>
          <li><a href="services.php">SERVICIOS</a></li>
          <li><a href="contact.php">CONTACTO</a></li>
        </ul>
        <i class="fa-solid fa-bars burguer-menu"></i>
      </nav>
    </header>
    <main>
      <div class="container video" style="overflow: hidden; height: 100vh;">
        <div class="fg"></div>
        <video poster="img/video-portada.jpg" preload>
          <source src="img/home.mov" type="video/mp4" />
        </video>
        <div class="content">
          <figure>
            <img src="img/mainLogo.png" alt="" />
          </figure>
          <div class="content__bottom">
            <div class="socials">
              <a href="https://www.instagram.com/adminika_mx/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.facebook.com/profile.php?id=61550882763491&mibextid=LQQJ4d" target="_blank"><i class="fa-brands fa-facebook"></i></a>
            </div>
            <h2>Smartest Choice</h2>
          </div>
        </div>
      </div>
      <a href="origin.php" class="next"><i class="fa-solid fa-chevron-right"></i></a>
    </div>
  </main>
  <script>
    var video = document.querySelector("video");
    var fg = document.querySelector(".fg");
    var figure = document.querySelector("figure");

    video.addEventListener("loadstart", function() {
      video.loop = true;
      video.muted = true;
      setTimeout(function() {
        fg.style.opacity = "0";
        figure.style.opacity = "1";
        video.play();
      }, 1000);
    });
  </script>

  <script>
    var next = document.querySelector('.next');
    var link = next.getAttribute('href');
    next.removeAttribute('href');
    var bodyContent = document.querySelector('body');
    next.addEventListener("click", function() {

      // Ejecuta la animación
      bodyContent.style.animation = 'slide 0.6s ease-in-out';
      // Redirige al enlace de la etiqueta
      setTimeout(function() {
        window.location.href = link;
      }, 400);
    });
  </script>
  <script src="js/index.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="js/loader.js"></script>
</body>

</html>