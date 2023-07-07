<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <title>Aurora Plaza</title>
</head>

<body>
  <header class="nav-container">
    <?php include("includes/header.html"); ?>
  </header>

  <main>
    <section class="carousel-section">
      <!-- Carousel -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="assets/mall-2.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h1 class="text-primary-emphasis">Aurora Plaza</h1>
              <h2 class="text-secondary-emphasis">¡Únete a nosotros!</h2>
            </div>
          </div>
        </div>
    </section>
    <section class="second-section mb-5" id="aboutus">
      <!-- Contenedor -->
      <div class="container my-4">
        <div class="row">
          <!-- Texto -->
          <div class="col-6 align-self-center">
            <h2 class="text-primary">Sobre nosotros</h2>
            <p class="text-secondary">¡Construimos centros comerciales desde el año 1401 y seguimos aquí! Contamos con muchas sucursales a lo largo de América y Europa. Abre tu local con nosotros y sé parte de nuestro inmenso de equipo y emprendedores que han dado vida a sus negocios con nosotros.</p>
            <p>¿Qué esperas? ¡Abre tu tienda con nosotros!</p>
          </div>
          <!-- Imagen -->
          <div class="col-6">
            <div class="img-container ">
              <img class="img-fluid w-75" src="assets/aboutus2.jpg" alt="aboutus-img">
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="third-section mx-4 my-5">
      <!-- Título de la sección -->
      <div class="third-section-title my-3">
        <h2 class="text-primary text-center py-5">Locales disponibles</h2>
      </div>
      <!-- Carousel -->
      <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner cards-inner">
          <!-- Cartas -->
          <div class="carousel-item cards-item active">
            <div class="card text-white bg-primary">
              <img src="assets/slide1.jpg " class="img-fluid">
              <div class="card-body">
                <h4 class="card-title">Oficina de reuniones</h4>
                <p class="card-text">Acogedor espacio formal para llevar a cabo tus reuniones más importantes.</p>
                <div class="button-container">
                  <a href="#">
                    <button type="button" class="btn btn-info">Ver</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item cards-item">
            <div class="card text-white bg-primary mb-3">
              <img src="assets/slide2.jpg " class="img-fluid">
              <div class="card-body">
                <h4 class="card-title">Estudio</h4>
                <p class="card-text">¡Pequeño estudio para darle vida a tus ideas!.</p>
                <div class="button-container">
                  <a href="#">
                    <button type="button" class="btn btn-info">Ver</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item cards-item">
            <div class="card text-white bg-primary mb-3">
              <img src="assets/slide3.jpg " class="img-fluid">
              <div class="card-body">
                <h4 class="card-title">Conjunto de oficinas</h4>
                <p class="card-text">Hermoso local lleno de escritorios preparado para recibir a todo el equipo.</p>
                <div class="button-container">
                  <a href="#">
                    <button type="button" class="btn btn-info">Ver</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item cards-item">
            <div class="card text-white bg-primary mb-3">
              <img src="assets/slide4.jpg " class="img-fluid">
              <div class="card-body">
                <h4 class="card-title">Oficinas</h4>
                <p class="card-text">Disfruta de nuestras hermosas oficinas en los pisos más altos del edificio, con una hermosa vista.</p>
                <div class="button-container">
                  <a href="#">
                    <button type="button" class="btn btn-info">Ver</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item cards-item">
            <div class="card text-white bg-primary mb-3">
              <img src="assets/slide5.jpg " class="img-fluid">
              <div class="card-body">
                <h4 class="card-title">Sala para eventos</h4>
                <p class="card-text">Reúnete con tu equipo en este hermoso local con espacio suficiente para todos.</p>
                <div class="button-container">
                  <a href="#">
                    <button type="button" class="btn btn-info">Ver</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item cards-item">
            <div class="card text-white bg-primary mb-3">
              <img src="assets/slide6.jpg " class="img-fluid">
              <div class="card-body">
                <h4 class="card-title">Local de 2 pisos</h4>
                <p class="card-text">Haz surgir tu negocio en este local de dos pisos, cuenta con una distribución excelente para un restaurant.</p>
                <div class="button-container">
                  <a href="#">
                    <button type="button" class="btn btn-info">Ver</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item cards-item">
            <div class="card text-white bg-primary mb-3">
              <img src="assets/slide7.jpg " class="img-fluid">
              <div class="card-body">
                <h4 class="card-title">Salón para proyectos</h4>
                <p class="card-text">Ven con todo tu equipo de trabajo a darle vida a sus ideas con este espacioso local.</p>
                <div class="button-container">
                  <a href="#">
                    <button type="button" class="btn btn-info">Ver</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item cards-item active">
            <div class="card text-white bg-primary">
              <img src="assets/slide8.jpg " class="img-fluid">
              <div class="card-body">
                <h4 class="card-title">Oficina</h4>
                <p class="card-text">Acogedor local amueblado listo para ser puesto en marcha.</p>
                <div class="button-container">
                  <a href="#">
                    <button type="button" class="btn btn-info">Ver</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item cards-item active">
            <div class="card text-white bg-primary">
              <img src="assets/slide9.jpg " class="img-fluid">
              <div class="card-body">
                <h4 class="card-title">Conjunto de oficinas</h4>
                <p class="card-text">Cómodo local amueblado para ser utilizado como un conjunto de oficinas por todo el equipo.</p>
                <div class="button-container">
                  <a href="#">
                    <button type="button" class="btn btn-info">Ver</button>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Controles -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
  </main>

  <footer class="footer-section d-flex flex-column align-items-center bg-primary row">
    <?php include("includes/footer.html") ?>
  </footer>
  <script src="js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="index.js"></script>
</body>

</html>