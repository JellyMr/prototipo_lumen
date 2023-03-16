<!DOCTYPE html>
<html lang="es">

<head>

  <title>Lumen</title>

  <?php
  include("links-meta.html");
  ?>

</head>

<body>

  <?php
  include("header.html");
  ?>
  <!-- botones estaticos -->

  <!-- Whatsapp 
    <a href="https://api.whatsapp.com/send?phone=524773042192" class="btn-wsp" target="_blank"><i class="icon-whatsapp"></i></a>
    -->
  <!-- FIN botones estaticos -->
  <!-- Carrusel -->
  <div id="myCarousel" class="carousel slide shadow" data-bs-ride="carousel">

    <div class="carousel-inner /*rounded-5*/ shadow-4-strong">
      <div class="carousel-item active">
        <img src="img/carrusel/1.jpg" alt="No Found" width="100%" height="100%" class="bg-opacity">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Conoce nuestros productos.</h1>
            <br><br><br><br>
            <button id="btnh">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <a href="productos.html" style="color: #fff; text-decoration: none;">Ver más</a>
            </button>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/carrusel/2.jpg" alt="No Found" width="100%" height="100%" class="bg-opacity">
        <div class="container">
          <div class="carousel-caption">
            <h1>Conocenos</h1>
            <br><br><br><br>
            <button id="btnh">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <a href="quienes somos.html" style="color: #fff; text-decoration: none;">Ver más</a>
            </button>
          </div>
        </div>
      </div>
      <div class="carousel-item" >
        <img src="img/carrusel/3.jpg" alt="No Found" width="100%" height="100%" class="bg-opacity">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Familias de marca y distribución</h1>
            <br><br><br><br>
            <button id="btnh">
              <span></span>
              <span></span>
              <span></span>
              <span></span>
              <a href="distribuidoras.html" style="color: #fff; text-decoration: none;">Ver más</a>
            </button>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--FIN Carrusel -->

  <!--Inicio Slider marcas-->
  <div class="container-flex mt-5" style="background:#fff">
    <div class="container container-slider h-100">
      <div class="row align-items-center h-100">
        <div class="container rounded">
          <h1 class="text-center font-weight-normal">Marcas que manejamos</h1>
          <div class="slider">
            <div class="logos">
              <img src="img/Logos_distribuidoras/image1.png" alt="">
              <img src="img/Logos_distribuidoras/image2.png" alt="">
              <img src="img/Logos_distribuidoras/image3.png" alt="">
              <img src="img/Logos_distribuidoras/image4.png" alt="">
              <img src="img/Logos_distribuidoras/image5.png" alt="">
            </div>
            <div class="logos">
              <img src="img/Logos_distribuidoras/image1.png" alt="">
              <img src="img/Logos_distribuidoras/image2.png" alt="">
              <img src="img/Logos_distribuidoras/image3.png" alt="">
              <img src="img/Logos_distribuidoras/image4.png" alt="">
              <img src="img/Logos_distribuidoras/image5.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>
  <!--Fin Slider Marcas-->

  <!-- Footer -->
  <br><br>
  <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
      <span class="text-muted">Lumen ©
        <script>
          document.write(new Date().getFullYear())
        </script>
      </span>
    </div>
  </footer>

  <!-- Archivos JS Bootstrap 5 -->
  <script src="js/scripts.js"></script>
  <script src="js/bootstrap.bundle.js"></script>

  <!--Script para el chatbot-->
  <script>
    window.addEventListener('mouseover', initLandbot, {
      once: true
    });
    window.addEventListener('touchstart', initLandbot, {
      once: true
    });
    var myLandbot;

    //ChatBot
    function initLandbot() {
      if (!myLandbot) {
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.addEventListener('load', function() {
          var myLandbot = new Landbot.Livechat({
            configUrl: 'https://storage.googleapis.com/landbot.online/v3/H-1485456-VY0FZT0ROMP8B498/index.json',
          });
        });
        s.src = 'https://cdn.landbot.io/landbot-3/landbot-3.0.0.js';
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
      }
    }
  </script>


</body>

</html>