<?php
//LOS FICHEROS AYUDAN A AHORRAR CODIGO
include 'encabezado.php'; //FICHERO 1
?>

<body>
<br>

    <div class="container">
        <div class="row">
          <div class="col-sm-5">
          <h3>Domo Harot</h3>
          <br>
                <p>Bienvenidos a "Harot", un mágico y encantador domo diseñado exclusivamente para parejas que buscan una experiencia íntima y romántica. Con su ambiente acogedor y su diseño elegante, Harot te brinda el refugio perfecto para disfrutar de momentos inolvidables junto a tu ser amado.<br><br>
                    Al ingresar a Harot, te encontrarás con un espacio cuidadosamente decorado y diseñado para crear un ambiente romántico y relajante. La habitación cuenta con una cama queen-size, con sábanas suaves y lujosas que invitan al descanso y la intimidad. Además, el domo cuenta con amplios ventanales que ofrecen vistas panorámicas de la naturaleza circundante, permitiéndote disfrutar de hermosos amaneceres y atardeceres desde la comodidad de tu propio espacio.<br><br>
                   </p>
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
                  <img src="IMG/pareja2.jfif" class="d-block w-100" width="1440px" height="530" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="IMG/pareja4.jfif" class="d-block w-100" width="1440px" height="530" alt="...">
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
                  <p> Harot es el lugar ideal para parejas que desean escapar de la rutina y disfrutar de momentos de intimidad y romance. Cada detalle ha sido cuidadosamente diseñado para crear una experiencia única y memorable. Permítete sumergirte en este espacio encantador y disfrutar de un tiempo precioso junto a tu pareja en Harot. <br> <br>
                  Bienvenidos a Glamping Nube, donde los sueños de amor florecen y cada momento se convierte en una historia inolvidable. Sumérgete en la magia y la serenidad de este rincón de romance y descubre lo que el amor auténtico realmente significa. ¡Bienvenidos al paraíso del amor y la tranquilidad!</p>
                    

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
              </svg> Zona norte</h5>
              <h6 class="card-subtitle mb-2 text-muted">También puedes adicionar servicios para una experiencia aún mejor. Descubre nuestros servicios </h6>

            <br> <br> 
            <a type="button" id="boton_servicios" class="btn btn-outline-primary btn-lg"  href="servicios.php">Ver servicios</a>
          </div>
        </div>

      </div>

        </div>
        <br> <br>
        <div class="row">
<div class="col-sm-12">
<table class="customTable">
  <thead>
    <tr >
    <th colspan="2">DOMO HAROT</th>
    </tr>
  </thead>
  <tbody>
    <tr >
      <td style="background-color: #ECFFF9;">Tipo</td>
      <td>Domo para una pareja</td>
    </tr>
    <tr>
      <td style="background-color: #ECFFF9;">Estructura</td>
      <td>Domo de una habitacion</td>
    </tr>
    <tr>
      <td style="background-color: #ECFFF9;">Precio</td>
      <td>$200,000 COP por noche</td>
    </tr>
    <tr>
    <td colspan="2" style="background-color: #87F1D2;"
>Características Específicas</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">1</td>
    <td>Ambiente Romántico con Velas: El Domo Harot está meticulosamente decorado con velas aromáticas que crean un ambiente íntimo y romántico en todo momento.</td>
  </tr>
  <tr>
    <td style="background-color: #ECFFF9;">2</td>
    <td>Sala de Estar con Chimenea: Disfruta de noches acogedoras frente a la chimenea en la sala de estar, equipada con cómodos sofás y una televisión de pantalla plana.</td>
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


    <br><br><br><br>
    <?php
//LOS FICHEROS AYUDAN A AHORRAR CODIGO
include 'pie.php'; //FICHERO 1
?>
      <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>