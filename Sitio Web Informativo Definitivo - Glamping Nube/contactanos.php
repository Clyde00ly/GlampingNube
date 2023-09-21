
<?php
//LOS FICHEROS AYUDAN A AHORRAR CODIGO 
include 'encabezado.php'; //FICHERO 1
?>
<style>
body {
    width: 100%;
    height: 100%;
    display: flex;
    flex-direction: column;
align: center; 
justify-content: center; 
}

.contact-container {
    max-width: 960px;
    margin: auto;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
    -webkit-box-shadow: -2px 3px 22px 3px rgba(228,225,242,1);
-moz-box-shadow: -2px 3px 22px 3px rgba(228,225,242,1);
box-shadow: -2px 3px 22px 3px rgba(228,225,242,1);
border-radius: 0.5rem;
overflow: hidden;
}
.form-container{
    padding: 20px;
}
.form-container h3{
    font-size: 1.8rem;
    font-weight: 600;
    margin-bottom: 1rem; 
}
.contact-form{
    display: grid;
    row-gap: 1rem ;
}
.contact-form input,.contact-form textarea {
    width: 100%;
    border: none;
    outline: none;
    background: #F4F7F5 ;
    padding: 10px;
    font-size: 0.9rem;
    border-radius: 0.4rem;
}
.contact-form textarea {
    resize: none;
    height; 200px; 
}
.contact-form .send-button {
    color: #fff;
    border: none;
    outline: none;
    background: #43d6aa ;
    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    cursor:pointer;
}
.contact-form .send-button:hover {
    background: #15BD8B;
    transition: 0.3s all linear;
}
.map iframe{
    width: 100%;
    height: 100%;

}
/* Responisve*/

@media (max-width: 946px) {
    .contact-container {
        margin: 0 auto;
        width: 90%;
    }
}
@media (max-width: 700px) {
    .contact-container {
        grid-template-columns: 1fr;
        gap: 1em;
        margin-top: 20rem !import;
    }
    .map iframe {
        height: 400px;
    }
}

</style>
<br><br>
<body>
   <section>
    <!--FORMULARIO -->
    <div class="contact-container">
        <div class="form-container">
            <h3>Contactanos</h3>
           <form action="" class="contact-form">
            <input type="text" placeholder="Ingresa tu nombre" required>
            <input type="email" name="" id="" placeholder="Ingresa tu email" required>
            <textarea name="" id="" cols="30" rows="10" placeholder="Ingresa tu mensaje" required></textarea>
           <input type="submit" value="Enviar" class="send-button">
        </form>
        </div>
            <!--MAPA -->
<div class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26716.277506002472!2d-75.77517020235635!3d5.507722216473935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e47abae09ade609%3A0x868c8470969bcf0e!2sRiosucio%20-%20Jardin!5e0!3m2!1ses!2sco!4v1691275954914!5m2!1ses!2sco" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>
    </div>
   </section> 

</body>

        <br><br><br><br>
        <!-- LA PATA -->

        <?php
//LOS FICHEROS AYUDAN A AHORRAR CODIGO 
include 'pie.php'; //FICHERO 1
?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>


</html>