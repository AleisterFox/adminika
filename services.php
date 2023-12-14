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
        <li class="active"><a href="services.php">SERVICIOS</a></li>
        <li><a href="contact.php">CONTACTO</a></li>
      </ul>
      <i class="fa-solid fa-bars burguer-menu"></i>
    </nav>
  </header>
  <main>
    <div class="container services">
      <a href="contact.php" class="next"><i class="fa-solid fa-chevron-right"></i></a>
      <h2>Nuestros servicios</h2>
      <div class="wrapper">

        <div class="service adm">
          <a href="contact.php">
            <figure><img src="img/administracion.jpg" alt="" /></figure>
            <div class="content">
              <span>1</span>
              <h3>Administracion</h3>
            </div>
          </a>
        </div>
        <div class="service mtn">
          <a href="contact.php">
            <figure><img src="img/mantenimiento.jpg" alt="" /></figure>
            <div class="content">
              <span>2</span>
              <h3>Mantenimiento</h3>
            </div>
          </a>
        </div>
        <div class="service lgl">
          <a href="contact.php">
            <figure><img src="img/legales.jpg" alt="" /></figure>
            <div class="content">
              <span>3</span>
              <h3>Legales</h3>
            </div>
          </a>
        </div>
        <div class="service ads">
          <a href="contact.php">
            <figure><img src="img/adicionales.jpg" alt="" /></figure>
            <div class="content">
              <span>4</span>
              <h3>Adicionales</h3>
            </div>
          </a>
        </div>

        <div class="full__service adm">
          <div class="content">
            <span>1</span>
            <h3>Administracion</h3>
          </div>
          <div class="bottom">
            <div class="left">
              <p>
                - Bienvenida a condominios
              </p>
              <p>
                - Implementación de sistema de cobro
              </p>
              <p>
                - Gestión de ingresos y egresos
              </p>
              <p>
                - Reportes financieros
              </p>
            </div>
            <div class="right">
              <p>
                - Programación de juntas de asamblea
              </p>
              <p>
                - Vigilar y hacer cumplir acuerdos establecidos en la asamblea
              </p>
              <p>
                - Control y gestión de accesos y estacionamientos
              </p>
              <p>
                - Manejo de incidencias entre condominios
              </p>
            </div>
          </div>
        </div>

        <div class="full__service mtn">
          <div class="content">
            <span>2</span>
            <h3>Mantenimiento</h3>
          </div>
          <div class="bottom">
            <div class="left">
              <p>
                - Calendarización y gestión de mantenimiento preventivo y correctivo
              </p>
              <p>
                - Implementación de sistema para reportes de incidencias y su seguimiento
              </p>
            </div>
            <div class="right">
              <p>
                - Manejo de proveedores externos
              </p>
              <p>
                - Cuidado y armonización de áreas comunes y amenidades
              </p>
              <p>
                - Servicio de seguridad 24/7
              </p>
            </div>
          </div>
        </div>

        <div class="full__service lgl">
          <div class="content">
            <span>3</span>
            <h3>Legales</h3>
          </div>
          <div class="bottom">
            <div class="left">
              <p>
                - Creación de asociaciones civiles con apertura de cuentas
              </p>
              <p>
                - Asesoría para creación de escritura constitutiva
              </p>
              <p>
                - Implementación de manuales y reglamento interno
              </p>
            </div>
            <div class="right">
              <p>
                - Modificación a escritura constitutiva ante notario
              </p>
              <p>
                - Entrega de régimen de condominios
              </p>
              <p>
                - Manejo de trámites para entrega de unidad privativa y escrituración
              </p>
            </div>
          </div>
        </div>

        <div class="full__service ads">
          <div class="content">
            <span>4</span>
            <h3>Adicionales</h3>
          </div>
          <div class="bottom">
            <div class="left">
              <p>
                - Integración de consejo de vigilancia
              </p>
              <p>
                - Inactivacion de comunidades
              </p>
            </div>
            <div class="right">
              <p>
                - Recepción de mensajería
              </p>
              <p>
                - Sistema para reporte de incidencias vía app
              </p>
            </div>
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