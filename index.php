
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="theme-color" content="#B12A34" />
    <link rel="shortcut icon" href="icons/32.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Valorant-Aim</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link rel="manifest" href="manifest.webmanifest" />
    <link rel="stylesheet" href="css/main-css.css" />
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <script src="app.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand fs-3 fw-bold" style="color: #bd143e"
          >Valorant-Aim</a
        >
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active fw-bold" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="rutinas.html">Rutinas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="amreria.html">Armeria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Iniciar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-6">
          <h1 class="titulo fw-bold">Bievenido al entrenamiento Agente  <?php


print($_SESSION['usuario']['nombre'])
?></h1>
        </div>
        <div class="col-6">
          <p class="patron fw-bold">Gracias a los patrocinadores</p>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <p class="txt-1">
            <span>
              Aquí podras encontrar rutinas para mejorar tu presicion dentro del
              juego, además de diferentes tipos de miras que se adapten a tu
              forma de jugar, te enseñaremos los diferentes tipos de "recoil"
              que tienen las armas y como manejar dicho "recoil", espero que
              puedas disfrutar de esta aplicación tanto como yo disfrute
              haciendola, sientete libre de seguirnos en nuestra redes sociales,
              te agradeceriamos mucho el feedback.
            </span>
          </p>
        </div>
        <div class="col-3">
          <div>
            <img src="img/playerone.jpg" class="playerone" />
            <div>
              <p class="text-playerone fw-bold">@IsKuro</p>
            </div>
          </div>
        </div>
        <div class="col-3">
          <div>
            <img src="img/playertwo.jpg" class="playertwo" />
            <div>
              <p class="text-playertwo fw-bold">@Sswitass</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <iframe
            width="560"
            height="315"
            src="https://www.youtube.com/embed/DeFSBVQmjYg"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
            class="video-1"
          ></iframe>
        </div>
        <div class="col-6">
          <h1 class="consejo-1 fw-bold">Toma este pequeño consejo:</h1>
          <p class="text-2">
            Recuerda que los movimientos cortos deben ser precisos al disparar,
            este video te enseñara lo esencial para dominar el raton, toma en
            cuenta que tienes que ajustar el nivel de sensibilidad dentro del
            juego, por lo que te recomendamos tomarte el tiempo para encontrar
            la mejor sensibilidad para ti.
          </p>
          <hr />
        </div>
      </div>
    </div>
    <div class="container-xl">
      <div class="row">
        <h1 class="version fw-bold">Notas de la versión</h1>
        <div class="col-4">
          <div class="card">
            <img src="img/version1.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="fecha">04/10/2022 . Actualización de juego</p>
              <h5 class="card-title fw-bold">
                Notas de la versión 5.07 de Valorant
              </h5>
              <p class="card-text">
                En esta version remoldeamos fracture, balanceamos el meta de los
                destellos y permitimos administrar mejor tu atención.
              </p>
              <a
                href="https://playvalorant.com/es-mx/news/game-updates/notas-de-la-version-5-07-de-valorant/"
                class="btn btn-success"
                >Versión 5.07</a
              >
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="img/Version2.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="fecha">20/09/2022 . Actualización de juego</p>
              <h5 class="card-title fw-bold">
                Notas de la versión 5.06 de Valorant
              </h5>
              <p class="card-text">
                Pearl recibe una renovacion completa y las actulizaciones a la
                steinger llegan con todo, descubre todo en esta nueva versión
                aquí.
              </p>
              <a
                href="https://playvalorant.com/es-mx/news/game-updates/notas-de-la-version-5-06-de-valorant/"
                class="btn btn-success"
                >Versión 5.06</a
              >
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card">
            <img src="img/Version3.jpg" class="card-img-top" alt="..." />
            <div class="card-body">
              <p class="fecha">07/09/2022 . Actualización de juego</p>
              <h5 class="card-title fw-bold">
                Notas de la versión 5.05 de Valorant
              </h5>
              <p class="card-text">
                Esta versión trae consigo actualizaciones de cuestiones sociales
                pequeñas, pero importantes, la version esta aquí.
              </p>
              <a
                href="https://playvalorant.com/es-mx/news/game-updates/notas-de-la-version-5-05-de-valorant/"
                class="btn btn-success"
                >Versión 5.05</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="pie-pagina">
      <div class="grupo-1">
          <div class="box">
              <figure>
                  <a href="#">
                      <img src="icons/512.png" alt="Logo de SLee Dw">
                  </a>
              </figure>
          </div>
          <div class="box">
              <h2>Siguenos en nuestras redes</h2>
              <p>Recuerda que los más importante es divertise.</p>
              <p>No te exedas con el entrenamiento basta con 20 min al día.</p>
          </div>
          <div class="box">
              <h2>SIGUENOS</h2>
              <div class="red-social">
                  <a href="#" class="fa fa-facebook"></a>
                  <a href="#" class="fa fa-instagram"></a>
                  <a href="#" class="fa fa-twitter"></a>
                  <a href="#" class="fa fa-youtube"></a>
              </div>
          </div>
      </div>
      <div class="grupo-2">
          <small>&copy; 2022 <b>Valorant-Aim</b> - Todos los Derechos Reservados.</small>
      </div>
  </footer>
    <script src="js/bootstrap.js"></script>
  </body>
</html>
