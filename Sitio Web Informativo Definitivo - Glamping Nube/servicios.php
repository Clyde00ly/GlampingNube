<?php
//LOS FICHEROS AYUDAN A AHORRAR CODIGO 
include 'encabezado.php'; //FICHERO 1
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>


<section id="services" class="pt-5 pb-5">
  <div class="container">
    <div class="row">
      <h3 class="section-title text-center text-colored">Servicios increibles</h3>
    </div>

    <div class="row pt-5">
      <aside class="col-md-2">
        <nav id="nav_aside" class="nav nav-pills flex-column nav-service">
          <button type="button" data-bs-toggle="tab" data-bs-target="#airelibre" class="text-start nav-link text-colored nav-service-item active">
            Aire libre</button>
          <button type="button" data-bs-toggle="tab" data-bs-target="#relajacion" class="text-start nav-link text-colored nav-service-item">
            Relajación</button>
          <button type="button" data-bs-toggle="tab" data-bs-target="#hair" class="text-start nav-link text-colored nav-service-item">
            Familiar</button>
        </nav>
      </aside>
      <div class="col-md-10">
        <div class="tab-content">
          <div class="tab-pane active" id="airelibre">
            <div class="row">
              <div class="col-md-5">
                <img class="d-block w-100" src="IMG/viajero-masculino-que-brilla-linterna-cielo-estrellado-noche.jpg" alt="service1" />
                <h5 class="text-colored fw-bold mt-2">Observacion de estrellas</h5>
                <font color="green">$60,000 COP por persona</font><br>
                <p>La observación de estrellas es una experiencia mágica. Con la ayuda de telescopios y guías de astronomía, podrás descubrir constelaciones, estrellas y otros objetos celestes. Disfruta de una noche llena de asombro y conexión con el universo.   
</p>
                
              </div>
              <div class="col-md-5">
                <img class="d-block w-100" src="IMG/cyclists-1534907_1280.jpg"  alt="service1" />
                <h5 class="text-colored fw-bold mt-2">Paseo en bicicleta</h5>
                <font color="green">$40,000 COP por persona</font><br>
                <p>Disfruta de la libertad y la emoción de recorrer los alrededores en un paseo en bicicleta. Descubre paisajes encantadores, pedalea a tu propio ritmo y sumérgete en la naturaleza mientras te deleitas con el aire fresco.</p>
              </div>
              <div class="col-md-5">
                <img class="d-block w-100" src="IMG/man-731900_1280.jpg" alt="service1" />
                <h5 class="text-colored fw-bold mt-2">Senderismo</h5>
                <font color="green">$50,000 COP por persona</font><br>
                <p>Embárcate en una aventura en medio de la naturaleza. Explora senderos escénicos, adéntrate en bosques frondosos y descubre paisajes impresionantes mientras te sumerges en un ambiente de tranquilidad y serenidad.</p>
              </div>
              <div class="col-md-5">
                <img class="d-block w-100"  src="IMG/horse-6192190_640.jpg" alt="service1" />
                <h5 class="text-colored fw-bold mt-2">Paseo en caballo</h5>
                <font color="green">$20,000 COP por persona</font><br>
                <p>Embárcate en una experiencia única y apacible. Disfruta de la belleza de la naturaleza mientras te desplazas suavemente sobre el lomo de un noble compañero equino.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="relajacion">
            <div class="row">
              <div class="col-md-5">
                <img class="d-block w-100" src="IMG/yoga-2587066_640.jpg" alt="service1" />
                <h5 class="text-colored fw-bold mt-2">Clases de Yoga</h5>
                <font color="green">$20,000 COP por persona</font><br>
                <p>Relájate, revitaliza tu cuerpo y encuentra la armonía interior, te ofrecemos la oportunidad de participar en sesiones guiadas, donde podrás enfocarte en el bienestar de tu mente, cuerpo y espíritu.</p>
              </div>
              <div class="col-md-5">
                <img class="d-block w-100" src="IMG/red-wine-2443699_640.jpg" alt="service1" />
                <h5 class="text-colored fw-bold mt-2">Degustacion de vinos</h5>
                <font color="green">$80,000 COP por persona</font><br>
                <p>Sumérgete en el mundo de la enología mientras pruebas una selección de vinos artesanales locales. Podrás apreciar las características únicas de cada vino, aprender sobre las variedades de uva y las técnicas de elaboración</p>
              </div>
              <div class="col-md-5">
                <img class="d-block w-100" src="IMG/beneficios-masajes-733.png" alt="service1" />
                <h5 class="text-colored fw-bold mt-2">Masaje de lujo</h5>
                <font color="green">$100,000 COP por persona</font><br>
                <p>Nuestro servicio de masaje en el hotel de lujo ofrece una experiencia de relajación incomparable. Nuestros terapeutas expertos combinan técnicas exclusivas para rejuvenecer su cuerpo y mente, brindando serenidad absoluta.</p>
              </div>
            </div>
          </div>
          <div class="tab-pane" id="hair">
            <div class="row">
              <div class="col-md-5">
                <img class="d-block w-100" src="IMG\stick-bread-4276977_640.jpg" alt="service1" />
                <h5 class="text-colored fw-bold mt-2">Fogatas</h5>
                <font color="green">$20,000 COP por persona</font><br>
                <p>Relájate y sumérgete en el ambiente acogedor mientras el resplandor del fuego ilumina la noche. Además de crear un ambiente íntimo y relajante, la fogata también te permite asar malvaviscos o preparar deliciosos s'mores.</p>
              </div>
              <div class="col-md-5">
                <img class="d-block w-100" src="IMG\houses-4093227_640.jpg" alt="service1" />
                <h5 class="text-colored fw-bold mt-2">Excursion a lugares cercanos</h5>
                <font color="green">$150,000 COP por persona</font><br>
                <p>Embárcate en una emocionante excursión a lugares cercanos y descubre los tesoros ocultos de la región. Te llevará a explorar paisajes impresionantes, monumentos históricos, pintorescos pueblos y lugares de interés cultural.</p>
              </div>
              <div class="col-md-5">
                <img class="d-block w-100" src="IMG\children-956676_640.jpg" alt="service1" />
                <h5 class="text-colored fw-bold mt-2">Actividades para niños</h5>
                <font color="green">$30,000 COP por persona</font><br>
                <p>Con nuestras actividades para niños, garantizamos que tus hijos se diviertan y disfruten al máximo durante su estancia. Organizamos una variedad de actividades interactivas que estimulan su creatividad y promueven el juego al aire libre.</p>
              </div>
              <div class="col-md-5">
                <img class="d-block w-100" src="IMG\restaurante.webp" alt="service1" />
                <h5 class="text-colored fw-bold mt-2">Servicios de restaurante</h5>
                <font color="green">$60,000 COP por persona, Menú completo</font><br>
                <p>
Nuestro restaurante ofrece una experiencia culinaria excepcional con platos exquisitos preparados por chefs de renombre. Disfruta de sabores únicos en un ambiente elegante y acogedor. ¡Te esperamos para deleitarte!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>
 <!-- Adiccion de servicios -->
 <br><br><br><br>
         <div class="card">
          <div class="card-body">
            <p> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-plus"
                viewBox="0 0 16 16">
                <path fill-rule="evenodd"
                  d="M8 7.5a.5.5 0 0 1 .5.5v1.5H10a.5.5 0 0 1 0 1H8.5V12a.5.5 0 0 1-1 0v-1.5H6a.5.5 0 0 1 0-1h1.5V8a.5.5 0 0 1 .5-.5z" />
                <path
                  d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
              </svg> Para nosotros es muy importante tu comodidad ¡Si deseas adicionar algun servicio, Dinoslo!!</p>
            <div class="content">
              <h3 class="text-center">Adicionar servicios</h3>
              <div class="container text-left">
                <div class="row justify-content-center">
                  <div class="col-md-5">
      
      
      
                    <select class="selectpicker form-control" multiple data-max-options="10">
                      <option value="AL">Observacion de estrellas</option>
                      <option value="AK">Paseo en bicicleta</option>
                      <option value="AZ">Senderismo</option>
                      <option value="AR">Paseo en caballo</option>
                      <option value="CA">Clases de Yoga</option>
                      <option value="CO">Degustacion de vinos</option>
                      <option value="CT">Masaje de lujo</option>
                      <option value="DE">Fogatas</option>
                      <option value="FL">Excursion a lugares cercanos</option>
                      <option value="GA">Actividades para niños</option>
                      <option value="HI">Servicios de restaurante</option>
                    </select>
       
                    <br>
                    <div class="text-center" >
                    <br>

                 <a type="button" class="btn btn-primary btn-lg"  data-toggle="modal" data-target="#exampleModal">¡Reservar ya!</a>
</div>
                  </div>
                </div>
              </div>
            </div>
      
      
          </div>
        </div>
      
        </div>
   
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
        <script src="jquery-3.3.1.min.js"></script>
        <script src="popper.min.js"></script>
        <script src="bootstrap.min.js"></script>
        <script src="bootstrap-select.min.js"></script>
      
        <script src="main.js"></script>
       
         </div>
      <br><br><br><br>
<?php
//LOS FICHEROS AYUDAN A AHORRAR CODIGO 
include 'pie.php'; //FICHERO 1
?>