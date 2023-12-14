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
        <a href="index.php"><img src="img/logo_white-removebg-preview.png" alt="logo Adminika" /></a>
      </figure>
      <ul class="menu">
        <li><a href="index.php">HOME</a></li>
        <li class="active"><a href="origin.php">ORIGEN</a></li>
        <li><a href="manifest.php">MANIFIESTO</a></li>
        <li><a href="founders.php">LIDERES</a></li>
        <li><a href="services.php">SERVICIOS</a></li>
        <li><a href="contact.php">CONTACTO</a></li>
      </ul>
      <i class="fa-solid fa-bars burguer-menu"></i>
    </nav>
  </header>
  <main>
    <div class="container origin">
      <div class="left">
        <div class="socials">
          <a href="https://www.instagram.com/adminika_mx/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.facebook.com/profile.php?id=61550882763491&mibextid=LQQJ4d" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        </div>
        <div class="content">
          <h2>
            Sobre <br />
            Nosotros
          </h2>
          <p>
            <strong>ADMINIKA</strong> es una empresa que nace en Baja
            California, Méx. Dedicada a la administración de Torres
            Residenciales, Médicas y Corporativas, cuyo proposito es
            revolucionar el modelo actual de administración en el país,
            incorporando la tecnología como principal aliado.
          </p>
          <br />
          <br />
          <p>
            En <strong>ADMINIKA</strong> estamos enfocados en brindar un
            servicio de excelencia, gestionando de manera inteligente,
            transparente y de forma asertiva cada proyecto, generando armonía
            entre la comunidad, optimizando recursos e incrementando la
            plusvalía.
          </p>
        </div>
      </div>
      <div class="right">
        <a href="manifest.php" class="next"><i class="fa-solid fa-chevron-right"></i></a>
        <div class="content">
          <h3>MISION</h3>
          <p>
            <strong>Contribuir</strong> con el desarrollo de la comunidad,
            empleando las mejores prácticas de administración inmobiliaria a
            traves de nuestros servicios, buscando la
            <strong>practicidad y la eficiencia</strong> en todos nuestros
            procesos
          </p>
        </div>
        <div class="content">
          <h3>VISION</h3>
          <p>
            Consolidarnos como la <strong>empresa</strong> de Administración
            inmobiliaria
            <strong>más reconocida, confiable y disruptiva</strong> a nivel
            nacional, posicionando a nuestras comunidades como modelo de
            excelencia y aporte a la sociedad.
          </p>
        </div>
        <div class="content">
          <h3>VALORES</h3>
          <p>
            <strong>Integridad, Transparencia, Compromiso y Versatilidad.</strong>
          </p>
        </div>
      </div>
    </div>
  </main>
  <script>
    var next = document.querySelector(".next");
    var link = next.getAttribute("href");
    next.removeAttribute("href");
    var bodyContent = document.querySelector("body");
    next.addEventListener("click", function() {
      // Ejecuta la animación
      bodyContent.style.animation = "slide 0.6s linear";
      // Redirige al enlace de la etiqueta
      setTimeout(function() {
        window.location.href = link;
      }, 300);
    });

    function slideIn() {
      bodyContent.style.animation = "slideIn 0.3s ease-in-out";
    }
  </script>

  <script src="js/index.js"></script>
</body>

</html>