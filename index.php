<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Final-Front</title>
</head>
<body>  
  <?php
    include("menu.php");
  ?>
    
    <section class="carusel">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active c-item" data-bs-interval="10000">
                <img src="./img/ba1.jpg" class="d-block w-100 c-img" alt="...">
              </div>
              <div class="carousel-caption">
                <h2 class="text-right">Conf Bs As</h2>
                <p class="text-right">Buenos Aires llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad
                  el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a 
                  conocer a miembros del evento, otros estudiantes de Codo a Codo y los oradores de primer nivel
                  que tenemos para ti. Te esperamos!
                </p>
                <div class="container-buttons mt-2">
                  <button type="button" class="btn btn-outline-light mb-3">Quiero ser orador</button>
                  <a href="form.html" type="button" target="_blank" class="btn btn-success mb-3">Comprar tickets</a>
                </div>
              </div>
              <div class="carousel-item c-item" data-bs-interval="10000">
                <img src="./img/ba2.jpg" class="d-block w-100 c-img" alt="...">
              </div>
              <div class="carousel-caption">
                <h2 class="text-right">Conf Bs As</h2>
                <p class="text-right">Buenos Aires llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad
                  el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a 
                  conocer a miembros del evento, otros estudiantes de Codo a Codo y los oradores de primer nivel
                  que tenemos para ti. Te esperamos!
                </p>
                <div class="container-buttons mt-2">
                  <button type="button" class="btn btn-outline-light mb-3">Quiero ser orador</button>
                  <a href="form.html" type="button" target="_blank" class="btn btn-success mb-3">Comprar tickets</a>
                </div>
              </div>
              <div class="carousel-item c-item" data-bs-interval="10000">
                <img src="./img/ba3.jpg" class="d-block w-100 c-img" alt="...">
              </div>
              <div class="carousel-caption">
                <h2 class="text-right">Conf Bs As</h2>
                <p class="text-right">Buenos Aires llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad
                  el conocimiento y experiencia de los expertos que están creando el futuro de Internet. Ven a 
                  conocer a miembros del evento, otros estudiantes de Codo a Codo y los oradores de primer nivel
                  que tenemos para ti. Te esperamos!
                </p>
                <div class="container-buttons mt-2">
                  <button type="button" class="btn btn-outline-light mb-3">Quiero ser orador</button>
                  <a href="form.html" type="button" target="_blank" class="btn btn-success mb-3">Comprar tickets</a>
                </div>
              </div>
            </div>  
        </div>
        
    </section>
    <section class="grid-section mt-4" id="oradores">
        <div class="container text-center my-5">
            <h6 class="text-black-50">CONOCE A LOS</h6>
            <h2>ORADORES</h2>
        </div>
            <div class="container mb-5">
              <div class="row gy-3">
                <div class="col-md-4">
                  <div class="card">
                    <img src="./img/steve.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="badges d-flex">
                        <h6><span class="badge bg-warning text-black mr-2">Javascript</span></h6>
                        <h6><span class="badge bg-info ml-10">React</span></h6>
                      </div>
                      <h5 class="card-title">Steve Jobs</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                      <img src="./img/bill.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h6><span class="badge bg-warning text-black">Javascript</span><span class="badge bg-info">React</span></h6>
                        <h5 class="card-title">Bill Gates</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                 
                      </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="card">
                    <img src="./img/ada.jpeg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h6><span class="badge bg-secondary">Negocios</span><span class="badge bg-danger">Startups</span></h6>
                      <h5 class="card-title">Ada Lovelace</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
    </section>
    <section id="Octubre" class="d-flex">
      <a name="fecha"></a>
      <div class="card">
        <div class="row bg-secondary">
          <div class="col-6">
            <img src="./img/honolulu.jpg" class="img-fluid" alt="...">
          </div>
          <div class="col-6 text-white">
            <h2 class="card-title mt-2">Bs As - Octubre</h2>
            <p class="card-text">Buenos Aires es la provincia y localidad más grande del estado de Argentina, en los Estados Unidos,
              Honolulu es la más sureña de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu
              se refiere al área urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han
              formado una ciudad-condado consolidada que cubre toda la ciudad (aproximadamente 600 km² de superficie).
            </p>
            <button type="button" class="btn btn-outline-light mb-2">Conocé más</button>
          </div>
        </div>
      </div>
    </section>
    <section class="formulario">
      <a name="inscripcion"></a>
      <div class="container d-flex align-items-center flex-column">
        <div class="container text-center my-3">
          <h6 class="text-black-50">CONVIÉRTETE EN UN</h6>
          <h2>ORADOR</h2>
          <h6 class="fw-light">Anótate como orador para dar una charla ignite. Cuéntanos de qué quieres hablar!</h6>
        </div>
        <form action="">
          <div class="row">
            <div class="col-6">
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre">
            </div>
            <div class="col-6">
              <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Apellido">
            </div>
          </div>
          <div class="row">
            <div class="col-12 my-3">
              <textarea class="form-control fs-3" id="exampleFormControlTextarea1" rows="3" placeholder="Sobre qué quieres hablar?"></textarea>
            </div>
            <div class="form-text">Recuerda incluir un título para tu charla</div>
          </div>
          <button type="submit" class="btn btn-success col-12 my-3 p-2" >Enviar</button>
        </form>
      </div>
    </section>
    <?php 
      include("footer.php");
     ?> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="scripts.js"></script>
</body>
</html>