<?php
//LOS FICHEROS AYUDAN A AHORRAR CODIGO 
include 'encabezado.php'; //FICHERO 1
?>

<body>
  <br>


  <div class="container">
    <div class="row">
      <div class="col-sm-5">
      <h3>Domo Tennin</h3>
      <br>
        <p>Bienvenidos a "Tennin", nuestro romántico y encantador domo diseñado especialmente para lunas de miel y
          escapadas románticas. Con su estética única y su ubicación privilegiada, Tennin te transportará a un mundo de
          intimidad y serenidad, brindándote la escapada perfecta para celebrar el amor y crear recuerdos
          inolvidables.<br><br>
          El domo "Tennin" se inspira en la belleza y la magia de la naturaleza, combinando un diseño elegante y
          vanguardista con una conexión armoniosa con el entorno. Su forma característica en forma de cúpula, revestida
          de materiales transparentes, te permitirá contemplar las estrellas y sumergirte en la majestuosidad del cielo
          nocturno desde la comodidad de tu cama.


      </div>

      <div class="col-sm-7">
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
              <img src="IMG/pareja1.jfif" class="d-block w-100" width="1440px" height="530" alt="...">
            </div>
            <div class="carousel-item">
              <img src="IMG/pareja2.jfif" class="d-block w-100" width="1440px" height="530" alt="...">
            </div>
            <div class="carousel-item">
              <img src="IMG/pareja3.jfif" class="d-block w-100" width="1440px" height="530" alt="...">
            </div>
          </div>
          <button id="next" class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button id="next" class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
      <!--<div class="col-sm-4">
            <img src="img/descarga (1).jpeg">
          </div>-->

    </div>
  </div>

  <br>

  <div class="container">
    <div class="row">
      <div class="col-sm-8">

        <p>  Al ingresar a Tennin, serás recibido por una espaciosa habitación cuidadosamente decorada y equipada con todas
          las comodidades necesarias para una experiencia de luna de miel inolvidable. En el centro de la habitación,
          encontrarás una cama king-size con sábanas suaves y lujosas, rodeada de velas y pétalos de rosa, creando un
          ambiente romántico y acogedor. Además, para complementar la experiencia, Tennin cuenta con una bañera de
          hidromasaje privada donde podrás relajarte y disfrutar de momentos de tranquilidad junto a tu ser querido.
<br> <br>
          El Domo Tennin es un refugio excepcional donde los eventos especiales en pareja se convierten en momentos memorables. Ya sea que estés celebrando el amor, la unión o simplemente buscando una escapada romántica, este domo ofrece un ambiente excepcional y encantador que superará tus expectativas. En el Domo Tennin, los eventos especiales se transforman en experiencias extraordinarias.
        </p>

      </div>
      <div class="col-sm-3">
      <div class="card" style="width: 24rem; height: 28rem;">
          <div class="card-body">
            <h3 class="card-title">Reserva tu estadia hoy</h3>
            <h6 class="card-subtitle mb-2 text-muted">¡Este domo es ideal para que pases tiempo con tu pareja!</h6>
            <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path
                  d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg> Zona oeste</h5>
              <h6 class="card-subtitle mb-2 text-muted">También puedes adicionar servicios para una experiencia aún mejor. Descubre nuestros servicios </h6>

            <br> <br> 
            <a type="button" id="boton_servicios" class="btn btn-outline-primary btn-lg"  href="servicios.php">Ver servicios</a>
          </div>
        </div>

      </div>

    </div>
    <br><br>
    <div class="row">
      <div class="col-sm-12">
      <table class="customTable">
      <thead>
    <tr >
      <th colspan="2">DOMO TENNIN</th>
    </tr>
  </thead>
  <tbody>
    <tr >
      <td style="background-color: #ECFFF9;">Tipo</td>
      <td>Domo para una pareja</td>
    </tr>
    <tr>
      <td style="background-color: #ECFFF9;">Estructura</td>
      <td>Domo de dos habitaciones</td>
    </tr>
    <tr>
      <td style="background-color: #ECFFF9;">Precio</td>
      <td>$300,000 COP por noche</td>
    </tr>
    <tr>
    <td colspan="2" style="background-color: #87F1D2;"
>Características Específicas</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">1</td>
    <td>Ambiente Romántico con Velas: El Domo Harot está meticulosamente decorado con velas aromáticas y cama king-size que crean un ambiente íntimo y romántico en todo momento.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">2</td>
    <td>Sala de Estar con Chimenea: Disfruta de noches acogedoras frente a la chimenea en la sala de estar, equipada con cómodos sofás y una televisión de pantalla plana.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">3</td>
    <td>Acceso a Piscina privada: Disfruta de un chapuzón en la piscina climatizada.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">4</td>
    <td>Decoración Temática Opcional: Si deseas una decoración temática específica para una ocasión especial, podemos personalizar la habitación según tus preferencias.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">5</td>
    <td>Una bañera de hidromasaje: Para dos personas te espera, donde puedes sumergirte en un baño burbujeante y rejuvenecedor.</td>
  </tr>
  </tbody>
</table>

      </div>
    </div>
 

    </section>
 
  </div>

  </div>

  </div>






  <script src="jquery-3.3.1.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
  <script src="bootstrap-select.min.js"></script>

  <script src="main.js"></script>

  </div>
  <br><br><br><br>
  <!-- LA PATA -->

  <?php
//LOS FICHEROS AYUDAN A AHORRAR CODIGO 
include 'pie.php'; //FICHERO 1
?>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>
</body>

</html>