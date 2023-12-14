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
        <li><a href="origin.php">ORIGEN</a></li>
        <li><a href="manifest.php">MANIFIESTO</a></li>
        <li><a href="founders.php">LIDERES</a></li>
        <li><a href="services.php">SERVICIOS</a></li>
        <li class="active"><a href="contact.php">CONTACTO</a></li>
      </ul>
      <i class="fa-solid fa-bars burguer-menu"></i>
    </nav>
  </header>
  <main>
    <div class="container contact">
      <div class="top">
        <div class="left">
          <h2>Contáctanos hoy</h2>
          <h3>Deja tu mensaje y en breve <br> nos contactaremos contigo</h3>
          <div class="info">
            <p><i class="fa-solid fa-envelope"></i>&nbsp; Contacto@adminika.com.mx</p>
            <p><i class="fa-solid fa-phone"></i>&nbsp; Tel. 333 333 3333</p>
            <p><i class="fa-solid fa-location-pin"></i>&nbsp; Tijuana, b.c México</p>
          </div>
        </div>
        <div class="right">
          <form action="">
            <input type="text" name="" id="" placeholder="CONTACTO">
            <input type="text" name="" id="" placeholder="EMPRESA">
            <input type="tel" name="" id="" placeholder="TELEFONO">
            <input type="email" name="" id="" placeholder="E-MAIL">
            <textarea name="" id="" cols="30" rows="10" placeholder="COMO TE AYUDAMOS"></textarea>
            <button type="submit">Enviar</button>
          </form>
        </div>
      </div>
      <div class="bottom">
        <div class="socials">
          <a href="https://www.instagram.com/adminika_mx/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
          <a href="https://www.facebook.com/profile.php?id=61550882763491&mibextid=LQQJ4d" target="_blank"><i class="fa-brands fa-facebook"></i></a>
        </div>
        <div class="partners">
          <h3>Partners</h3>
          <figure>
            <img src="img/partners.png" alt="Logo Administradores México">
          </figure>
        </div>
        <a href="">TERMINOS Y CONDICIONES</a>
        <a href="">AVISO DE PRIVACIDAD</a>
        <a href="">DERECHOS RESERVADOS 2023</a>
      </div>
    </div>
    </div>
  </main>
  <script>
    var bodyContent = document.querySelector('body');

    function slideIn() {
      bodyContent.style.animation = 'slideIn 0.3s ease-in-out'
    }
  </script>
  <script src="js/index.js"></script>
</body>

</html>