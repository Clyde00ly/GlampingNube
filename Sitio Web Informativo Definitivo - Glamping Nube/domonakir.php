<?php
//LOS FICHEROS AYUDAN A AHORRAR CODIGO 
include 'encabezado.php'; //FICHERO 1
?>

<body>

<br>
    <div class="container">
        <div class="row">
          <div class="col-sm-5">
          <h3>Domo Nakir</h3>
          <br>
                <p>Bienvenido a "Nakir", un domo diseñado especialmente para brindarte un espacio personal y acogedor. Este encantador domo está pensado para ofrecerte un refugio único donde podrás disfrutar de tranquilidad, privacidad y confort en tu propia compañía.<br><br>                   
                    La habitación principal de "Nakir" está equipada con una cama individual, proporcionando un lugar perfecto para descansar y recargar energías. La ropa de cama suave y las almohadas mullidas garantizan una noche de sueño reparador. Además, el domo cuenta con una pequeña área de estar donde podrás relajarte, leer un libro o simplemente disfrutar de un momento de tranquilidad contigo mismo.<br><br>
     
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
                  <img src="IMG/nakir3.jfif" class="d-block w-100" width="1440px" height="530" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="IMG/nakir2.jfif" class="d-block w-100" width="1440px" height="530" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="IMG/nakir1.jfif" class="d-block w-100" width="1440px" height="530" alt="...">
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
   <br><bR><bR>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <p>
                    La privacidad es esencial en "Nakir", por lo que el domo está ubicado en un entorno tranquilo y apartado, permitiéndote disfrutar de tu espacio personal sin distracciones externas. Las amplias ventanas permiten la entrada de luz natural y te conectan con la belleza de los alrededores, creando una sensación de armonía con la naturaleza.<br><br>
                    "Nakir" es el lugar perfecto para aquellos que buscan un espacio personal y tranquilo donde puedan reconectarse consigo mismos y disfrutar de momentos de paz y reflexión. Cada detalle ha sido cuidadosamente diseñado para brindarte una experiencia única y satisfactoria. Permítete sumergirte en este espacio acogedor y disfrutar de un tiempo precioso contigo mismo en "Nakir".
                   </p>
            </div>
            <div class="col-sm-3">
            <div class="card" style="width: 24rem; height: 28rem;">
          <div class="card-body">
            <h3 class="card-title">Reserva tu estadia hoy</h3>
            <h6 class="card-subtitle mb-2 text-muted">¡Este domo es ideal para que pases tiempo contigo mismo</h6>
            <p class="card-text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-geo-alt" viewBox="0 0 16 16">
                <path
                  d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
              </svg> Zona norte</h5>
              <h6 class="card-subtitle mb-2 text-muted">También puedes adicionar servicios para una experiencia aún mejor. Descubre nuestros servicios </h6>

            <br> <br> 
            <a type="button" id="boton_servicios" class="btn btn-outline-primary btn-lg"  href="servicios.php">Ver servicios</a>
          </div>
        </div>
        <br><br>

        </div>

        <div class="row">
<div class="col-sm-12">
<table class="customTable">
  <thead>
    <tr >
    <th colspan="2">DOMO NAKIR</th>

    </tr>
  </thead>
  <tbody>
    <tr >
      <td style="background-color: #ECFFF9;">Tipo</td>
      <td>Domo personal</td>
    </tr>
    <tr>
      <td style="background-color: #ECFFF9;">Estructura</td>
      <td>Domo de una habitacion</td>
    </tr>
    <tr>
      <td style="background-color: #ECFFF9;">Precio</td>
      <td>$150,000 COP por noche</td>
    </tr>
    <tr>
    <td colspan="2" style="background-color: #87F1D2;"
>Características Específicas</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">1</td>
    <td>Cocina Totalmente Equipada: La cocina cuenta con electrodomésticos modernos, utensilios de cocina y espacio de almacenamiento para que puedas preparar tus comidas con facilidad.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">2</td>
    <td>Estacionamiento Privado: Espacio de estacionamiento privado están disponibles para tu comodidad.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">3</td>
    <td>Acceso a Piscina compartida: Disfruta de un chapuzón en la piscina climatizada con otros huéspedes.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">4</td>
    <td>Zona de Lectura y Descanso: En el interior, encontrarás una zona de lectura con una selección de libros para relajarte y disfrutar de momentos de tranquilidad.</td>
  </tr>
  </tbody>
</table>

</div>
        </div>
        <br><br><br>
        
      </div>
    
      </div>
    
    
    
    
    
    
      <script src="jquery-3.3.1.min.js"></script>
      <script src="popper.min.js"></script>
      <script src="bootstrap.min.js"></script>
      <script src="bootstrap-select.min.js"></script>
    
      <script src="main.js"></script>
     
    
      <br><br><br><br>
      <!-- LA PATA -->
    
      <?php
//LOS FICHEROS AYUDAN A AHORRAR CODIGO 
include 'pie.php'; //FICHERO 1
?>
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>