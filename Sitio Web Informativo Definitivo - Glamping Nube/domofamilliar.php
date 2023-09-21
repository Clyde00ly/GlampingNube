
<?php
//LOS FICHEROS AYUDAN A AHORRAR CODIGO 
include 'encabezado.php'; //FICHERO 1
?>

<body>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-sm-5">
     
      <h3>Domo Tronos</h3>
      <br>
        <p>Bienvenido al Domo Tronos, un lugar único y fascinante para disfrutar de una experiencia inolvidable en
          medio de la naturaleza. Nuestro hotel se distingue por ofrecer a nuestros huéspedes la oportunidad de
          hospedarse en cómodos domos familiares, fusionando el encanto de la arquitectura moderna con la belleza del
          entorno natural.<br><br>
          Nuestro domo está construido con materiales de alta calidad y cuentan con una estructura resistente que
          garantiza la seguridad y durabilidad. Cada domo familiar está equipado con todas las comodidades necesarias
          para una estancia placentera, incluyendo una sala de estar espaciosa, dormitorios confortables, baños privados
          y una pequeña cocina para preparar comidas familiares.<br><br></p>

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
              <img src="IMG/Domogrande3.jfif" class="d-block w-100" width="1440px" height="530" alt="...">
            </div>
            <div class="carousel-item">
              <img src="IMG/Domogrande1.jfif" class="d-block w-100" width="1440px" height="530" alt="...">
            </div>
            <div class="carousel-item">
              <img src="IMG/Domogrande2.jfif" class="d-block w-100" width="1440px" height="530" alt="...">
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
    </div>
  </div> <br><br><br>

  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <p> Desde el interior de los domos, podrá admirar las impresionantes vistas panorámicas del entorno natural que
          nos rodea. Ya sea que estemos ubicados en medio de un bosque frondoso, en las montañas o cerca de una playa,
          podrás disfrutar de la belleza y tranquilidad de la naturaleza desde la comodidad de tu domo.<br><br>
          Nuestro domo Tronos también ofrece una amplia gama de servicios y actividades para que disfrute al máximo
          su estadía. Podrás explorar senderos naturales, participar en excursiones guiadas, disfrutar de actividades al
          aire libre y relajarte en áreas comunes diseñadas especialmente para el entretenimiento de toda la
          familia.<br><br>
          ¡Te recordamos a descubrir la magia de nuestros domos familiares ya disfrutar de unas vacaciones
          extraordinarias en nuestro hotel!
          .</p>

      </div>
      <div class="col-sm-3">
        <div class="card" style="width: 24rem; height: 28rem;">
          <div class="card-body">
            <h3 class="card-title">Reserva tu estadia hoy</h3>
            <h6 class="card-subtitle mb-2 text-muted">¡Este domo es ideal para que pases tiempo en familia!</h6>
            <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path
                  d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg> Zona sur</h5>
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
    <th colspan="2">DOMO TRONOS</th>

    </tr>
  </thead>
  <tbody>
    <tr >
      <td style="background-color: #ECFFF9;">Tipo</td>
      <td>Domo familiar</td>
    </tr>
    <tr>
      <td style="background-color: #ECFFF9;">Estructura</td>
      <td>Domo de dos pisos con cuatro habitaciones</td>
    </tr>
    <tr>
      <td style="background-color: #ECFFF9;">Precio</td>
      <td>$500,000 COP por noche</td>
    </tr>
    <tr>
    <td colspan="2" style="background-color: #87F1D2;"
>Características Específicas</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">1</td>
    <td>Amplio Espacio para Familias Grandes: Este espacioso domo es perfecto para familias numerosas o grupos de amigos que desean pasar tiempo juntos.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">2</td>
    <td>Cocina Totalmente Equipada: La cocina cuenta con electrodomésticos modernos, utensilios de cocina y espacio de almacenamiento para que puedas preparar tus comidas con facilidad.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">3</td>
    <td>Sala de Estar con Chimenea: Disfruta de noches acogedoras frente a la chimenea en la sala de estar, equipada con cómodos sofás y una televisión de pantalla plana.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">4</td>
    <td>Comedor para 5 Personas: El comedor con capacidad para 5 personas es ideal para comidas familiares o cenas formales.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">5</td>
    <td>Terraza Privada con Parrilla para Barbacoa: Relájate al aire libre en la terraza privada, donde encontrarás una parrilla para barbacoa y muebles de exterior.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">6</td>
    <td>Estacionamiento Privado: Dos espacios de estacionamiento privado están disponibles para tu comodidad.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">7</td>
    <td>Acceso a Piscina privada: Disfruta de un chapuzón en la piscina climatizada.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">8</td>
    <td>Área de Juegos para Niños en el Jardín: Los niños pueden divertirse en un área de juegos dedicada en el jardín.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">9</td>
    <td>Internet de Alta Velocidad: Mantente conectado con Internet de alta velocidad en todo el domo.</td>
  </tr>
  </tbody>
</table>


      </div>
    </div>

    </section>
  </div>


  <!--</div>-->



  </div>







  <!--COMENTARIOS-->
  <br><br>
  <br>
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