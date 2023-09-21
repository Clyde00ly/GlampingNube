<?php
//LOS FICHEROS AYUDAN A AHORRAR CODIGO
include 'encabezado.php'; //FICHERO 1
?>

  <!-- CARRUSEL/ SLIDER-->
  <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="IMG/index1.png" class="d-block w-100" width="1440px" height="560" alt="...">
      </div>
      <div class="carousel-item">
        <img src="IMG/Index2.png" class="d-block w-100" width="1440px" height="560" alt="...">
      </div>
      <div class="carousel-item">
        <img src="IMG/Index3.png" class="d-block w-100" width="1440px" height="560" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>
  <br>
  <br>
  </div>


  <main>
<div class="container">
    <div id="home" class="row mt-5">
      <div class="col-8">
        <h3 align="center">GLAMPING NUBE TE DA LA BIENVENIDA</h3>
        <p>"Sumérgete en la exclusividad del glamping de lujo" - Descubre una experiencia única que combina el lujo de
          un hotel de primera clase con la conexión íntima con la naturaleza.
          Relájate en nuestras amplias y elegantes tiendas de glamping, diseñadas con atención al detalle y equipadas
          con comodidades de alta gama, como camas king-size, baños privados y terrazas privadas con vistas panorámicas.
          Nuestro personal atento y profesional está dedicado a brindarte un servicio excepcional durante tu estadía.
          Nos aseguraremos de que cada detalle esté cuidado para que puedas relajarte y disfrutar de una experiencia sin
          preocupaciones.
          Haz tu reserva ahora y asegura tu lugar en este refugio de lujo. Nuestro equipo está listo para recibirte y
          brindarte una experiencia inolvidable.
        </p>
      </div>
      <div class="col-4">
        <img src="IMG/53 sin título2_20230601023309.png" alt="" class="img-fluid rounded-3">
      </div>
    </div>
  </div>
  <br><br>
  <div class="container" align="center">
    <h3>¡Mira nuestros increibles domos!</h3>
  </div>



    <!--DOMO UNO-->
    <div class="card md-3" style="max-width: 750px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="IMG/Domogrande.jfif" class="card-img-left" height="235px" width="250px" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">DOMO TRONOS <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                <path
                  d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
              </svg></h5>
            <p class="card-text"><b>Domo familiar</b><br> 2 Pisos y 4 habitaciones <br>
              <font color="green">$500,000 COP</font>
              .
            </p>
            <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>
            <a type="button" class="btn btn-primary btn-sm" href="domofamilliar.php">Más informacion</a>
            <a type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#exampleModal">¡Reservar ya!</a>

          </div>
        </div>
      </div>
    </div>
    <br>
    <br>

    <!--DOMO DOS-->
    <div class="card mb-3" style="max-width: 750px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="IMG/Domograndedos.jfif" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">DOMO SERAFIN <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                <path
                  d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
              </svg></h5>
            <p class="card-text"><b>Domo familiar</b><br> 3 habitaciones <br>
              <font color="green">$400,000 COP</font>
              .
            </p>
            <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>
            <a type="button" class="btn btn-primary btn-sm" href="domoserafin.php">Más informacion</a>
            <a type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#exampleModal">¡Reservar ya!</a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>

    <!--DOMO TRES-->

    <div class="card mb-3" style="max-width: 750px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="IMG/Domomediano.jfif" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">DOMO TENNIN <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                <path
                  d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
              </svg></h5>
            <p class="card-text"><b>Domo luna de miel</b><br> 2 habitaciones <br>
              <font color="green">$300,000 COP</font>
              .
            </p>
            <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>
            <a type="button" class="btn btn-primary btn-sm" href="domotenin.php">Más informacion</a>
            <a type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#exampleModal">¡Reservar ya!</a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>

    <!--DOMO CUATRO-->

    <div class="card mb-3" style="max-width: 750px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="IMG/Domomedianodos.jfif" height="230px" width="250px" class="card-img-left" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">DOMO HAROT <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                <path
                  d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
              </svg></h5>
            <p class="card-text"><b>Domo para una pareja</b><br> 1 habitacion<br>
              <font color="green">$200,000 COP</font>
            </p>
            <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>
            <a type="button" class="btn btn-primary btn-sm" href="domoharot.php">Más informacion</a>
            <a type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#exampleModal">¡Reservar ya!</a>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>

    <!--DOMO CINCO-->

    <div class="card mb-3" style="max-width: 750px;">
      <div class="row g-0">
        <div class="col-md-4">
          <img src="IMG/domopersonal.jfif" class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">DOMO NAKIR <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                <path
                  d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z" />
              </svg></h5>
            <p class="card-text"><b>Personal</b><br>
              <font color="green">$150,000 COP</font>
              .
            </p>
            <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>
            <a type="button" class="btn btn-primary btn-sm" href="domonakir.php">Más informacion</a>
            <a type="button" class="btn btn-info btn-sm"  data-toggle="modal" data-target="#exampleModal">¡Reservar ya!</a>
          </div>
        </div>
      </div>
    </div>
    <br><br>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¡Llama ahora!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>¿Quieres reservar tu experiencia con nosotros ahora mismo? ¡Es más fácil que nunca! Solo tienes que marcar nuestro número especial de reservas</p>
        <img src="IMG/modal.png" alt="">
  <p>Asegura tu lugar en un abrir y cerrar de ojos. No esperes más, llama hoy y prepárate para vivir momentos inolvidables con Glamping Nube. ¡Te estamos esperando!</p>  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">♥ ♥ ♥</button>
      </div>
    </div>
  </div>
</div>
  </main>

  <!--SERVICIOS BASICOS -->
  <br><br>
  <div class="container" align="center">
    <h3>¡Disfruta de nuestros servicios básicos!</h3>
    <br>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <div id="inam" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" style="height: 680px">
            <div class="carousel-item active">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12 col-lg-4">
                    <div class="card" style="width: 300px;margin: auto;">
                      <img src="IMG\Zona wifi.jpg" class="card-img-top">
                      <div class="card-body">
                        <h4 class="card-title">Wifi Gratiuto</h4>
                        <p class="card-text">En la era digital en la que vivimos, el acceso a Internet es esencial. Ofrecer Wi-Fi gratuito en todas las habitaciones es una necesidad para muchos viajeros.</p>
                        <a type="button" class="btn btn-primary btn-sm" href="servicios.php">Ver más servicios</a>
                      </div>

                    </div>

                  </div>
                  <div class="col-sm-12 col-lg-4">
                    <div class="card" style="width: 300px;">
                      <img src="IMG\Sevicioadomicilio.jpg" class="card-img-top">
                      <div class="card-body">
                        <h4 class="card-title">Servicio a domicilio</h4>
                        <p class="card-text">Puedes disfrutar de una cena o un desayuno en la privacidad de su habitación. Ofrecemos un servicio de habitaciones increible.</p>
                        <a type="button" class="btn btn-primary btn-sm" href="servicios.php">Ver más servicios</a>

                      </div>

                    </div>

                  </div>
                  <div class="col-sm-12 col-lg-4">
                    <div class="card" style="width: 300px;">
                      <img src="IMG\jacuzzi.jpg" class="card-img-top">
                      <div class="card-body">
                        <h4 class="card-title">Jacuzzi</h4>
                        <p class="card-text">Sumérjase en aguas tibias y burbujeantes que masajean suavemente su cuerpo, liberando tensiones y calmando el estrés. Nuestro jacuzzi de lujo ofrece una experiencia sensorial inigualable.</p>
                        <a type="button" class="btn btn-primary btn-sm" href="servicios.php">Ver más servicios</a>

                      </div>

                    </div>

                  </div>

                </div>

              </div>


            </div>
            <div class="carousel-item">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12 col-lg-4">
                    <div class="card" style="width: 300px;margin: auto;">
                      <img src="IMG\chimenea.jpg" class="card-img-top">
                      <div class="card-body">
                        <h4 class="card-title">Chimenea</h4>
                        <p class="card-text">Los domos pueden ser una opción de alojamiento única, pero también pueden ser fríos en ciertas épocas del año. Asegurarse de que todas las habitaciones tengan calefacción es importante para garantizar la comodidad de los huéspedes.</p>
                        <a type="button" class="btn btn-primary btn-sm" href="servicios.php">Ver más servicios</a>

                      </div>

                    </div>

                  </div>
                  <div class="col-sm-12 col-lg-4">
                    <div class="card" style="width: 300px;">
                      <img src="IMG\limpieza.jpg" class="card-img-top">
                      <div class="card-body">
                        <h4 class="card-title">Limpieza diaria</h4>
                        <p class="card-text">Los huéspedes esperan que sus habitaciones estén limpias y ordenadas durante su estadía. Ofrecer un servicio de limpieza diario es esencial para garantizar la satisfacción de los huéspedes.</p>
                        <a type="button" class="btn btn-primary btn-sm" href="servicios.php">Ver más servicios</a>

                      </div>

                    </div>

                  </div>
                  <div class="col-sm-12 col-lg-4">
                    <div class="card" style="width: 300px;">
                      <img src="IMG\articulosdebaño.jpg" class="card-img-top">
                      <div class="card-body">
                        <h4 class="card-title">Artículos de baño</h4>
                        <p class="card-text">Proporcionamos artículos de tocador de calidad en todas las habitaciones, como champú, acondicionador, jabón y toallas suaves, para que la estadía sea más cómoda y agradable.</p>
                        <a type="button" class="btn btn-primary btn-sm" href="servicios.php">Ver más servicios</a>

                      </div>

                    </div>

                  </div>

                </div>

              </div>


            </div>

          </div>
          <a href="#inam" class="carousel-control-prev" data-slide="prev">
            <span id="prevm" class="carousel-control-prev-icon"></span>
          </a>
          <a href="#inam" class="carousel-control-next" data-slide="next">
            <span id="nextm" class="carousel-control-next-icon"></span>
          </a>

        </div>

      </div>
    </div>

  </div>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>





    <!-- Aquí continúan las demás secciones de servicios adicionales -->
  <br><br><br><br>
  <!-- LA PATA -->


  <?php
//LOS FICHEROS AYUDAN A AHORRAR CODIGO
include 'pie.php'; //FICHERO 1
?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>