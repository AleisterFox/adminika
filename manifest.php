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
        <li class="active"><a href="manifest.php">MANIFIESTO</a></li>
        <li><a href="founders.php">LIDERES</a></li>
        <li><a href="services.php">SERVICIOS</a></li>
        <li><a href="contact.php">CONTACTO</a></li>
      </ul>
      <i class="fa-solid fa-bars burguer-menu"></i>
    </nav>
  </header>
  <main>
    <div class="container manifest">
      <a href="founders.php" class="next"><i class="fa-solid fa-chevron-right"></i></a>

      <div class="lists">
        <ul>
          <li>
            Tenemos el poder de crear la vida que deseamos<span>1</span>
          </li>
          <li>La gratitud mantiene las puertas abiertas<span>2</span></li>
          <li>Ama lo que haces<span>3</span></li>
          <li>Ser coherente en cada palabra y acción<span>4</span></li>
          <li>Da lo mejor, espera lo mejor<span>5</span></li>
          <li>Jamás dejar de aprender<span>6</span></li>
        </ul>
        <ul>
          <li>
            La fuerza mas poderosa del universo
            es la voluntad<span>7</span>
          </li>
          <li>
            Enfocarse en el presente sin perder la visión hacia el futuro<span>8</span>
          </li>
          <li>La integridad es invaluable<span>9</span></li>
          <li>Busca vivir en abundancia<span>10</span></li>
          <li>
            Ser valiente es necesario, rendirse <br />
            no es una opción<span>11</span>
          </li>
          <li>Trascender, de eso se trata la vida<span>12</span></li>
        </ul>
      </div>
      <div class="why">
        <p>¿Por qué elegirnos?</p>
        <div class="content">
          <div class="reason">
            <p>
              <strong>Personal certificado</strong> y con amplia experiencia
              para la administración de inmuebles
            </p>
          </div>
          <div class="reason">
            <p>
              Integración de procesos, lo que nos permite mantener altos
              <strong>estándares de calidad y servicio</strong>
            </p>
          </div>
          <div class="reason">
            <p>
              <strong>Atención personalizada 24/7</strong>
              Atendiendo incidencias, quejas y requerimientos de condóminos
            </p>
          </div>
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