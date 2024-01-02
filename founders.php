<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="img/logo_white.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/animate.css" />
  <script src="js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>
  <title>Adminika</title>
</head>

<body>
  <header>
    <nav>
      <figure>
        <a href="index.php"><img src="img/Logo header@2x.png" alt="logo Adminika" /></a>
      </figure>
      <ul class="menu">
        <li><a href="index.php">INICIO</a></li>
        <li><a href="origin.php">ORIGEN</a></li>
        <li><a href="manifest.php">MANIFIESTO</a></li>
        <li class="active"><a href="founders.php">LIDERES</a></li>
        <li><a href="services.php">SERVICIOS</a></li>
        <li><a href="contact.php">CONTACTO</a></li>
      </ul>
      <i class="fa-solid fa-bars burguer-menu"></i>
    </nav>
  </header>
  <main>
    <div class="container founders">
      <a href="services.php" class="next"><i class="fa-solid fa-chevron-right"></i></a>
      <div class="content">
        <div class="data">
          <p><strong>CAROLINA MEDRANO.</strong></p>
          <p>CEO FOUNDER</p>
          <p>DIRECTORA GENERAL</p>
        </div>

        <div class="data">
          <p><strong>SHERLIN MORALES</strong></p>
          <p>COO CO-FOUNDER</p>
          <p>DIRECTORA OPERATIVA</p>
        </div>
      </div>
    </div>
  </main>
  <script>
    var next = document.querySelector('.next');
    var link = next.getAttribute('href');
    next.removeAttribute('href');
    var bodyContent = document.querySelector('body');
    next.addEventListener("click", function() {

      // Ejecuta la animación
      bodyContent.style.animation = 'slide 0.6s linear';
      // Redirige al enlace de la etiqueta
      setTimeout(function() {
        window.location.href = link;
      }, 300);
    });

    function slideIn() {
      bodyContent.style.animation = 'slideIn 0.3s ease-in-out'
    }
  </script>
  <script src="js/index.js"></script>
</body>

</html>
