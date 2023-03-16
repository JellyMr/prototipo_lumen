<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Lumen</title>

    <?php
    include("links-meta.html");
    ?>
  </head>
<body> 

<!-- Header -->
<?php
    include("header.html");
  ?>
<!-- FIN Header -->
<!-- boton estatico -->

<a href="https://api.whatsapp.com/send?phone=524773042192" class="btn-wsp" target="_blank"><i class="icon-whatsapp"></i></a>

<!-- FIN boton estatico -->

<!-- Productos -->
<div class="p-4 p-md-5 mb-4 text-bg-dark shadow" id="prod">
    <h2 style="text-align: center;">FAMILIA DE PRODUCTOS Y SERVICIOS
    </h2>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" id="tarjetas">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">LABORATORIO Y
            QUÍMICOS</h3>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
            additional content.</p>
          <a href="productos.html" class="stretched-link">Ver más productos</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="img/Productos/lyq.jpg" alt="" height="250">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" id="tarjetas">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">REFACCIONES Y
            MECANICAS ELÉCTRICAS
          </h3>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.
          </p>
          <a href="productos.html" class="stretched-link">Ver más productos</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="img/Productos/refa.jpg" alt="" height="250">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" id="tarjetas">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">EQUIPO DE MEDICIÓN Y
            CALIDAD</h3>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
            additional content.</p>
          <a href="productos.html" class="stretched-link">Ver más productos</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="img/Productos/calidad.jpg" alt="" height="250">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" id="tarjetas">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">REFACCIONES NEUMATICAS E HIDRAULICAS</h3>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.
          </p>
          <a href="productos.html" class="stretched-link">Ver más productos</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="img/Productos/hidra.png" alt="" height="250">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" id="tarjetas">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">EQUIPO DE PROTECCION
            PERSONAL E
            INDUSTRIAL</h3>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to
            additional content.</p>
          <a href="productos.html" class="stretched-link">Ver más productos</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="img/Productos/prote.jpg" alt="" width="350" height="250" style="position: relative;">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" id="tarjetas">
        <div class="col p-4 d-flex flex-column position-static">
          <h3 class="mb-0">FERRETERIA Y
            HERRAMENTALES</h3>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.
          </p>
          <a href="productos.html" class="stretched-link">Ver más productos</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="img/Productos/ferre.jfif" alt="" height="250">
        </div>
      </div>
    </div>
  </div>
  <!-- FIN PRODUCTOS -->


    <!-- Footer -->  
    <br><br>
    <footer class="footer mt-auto py-3 bg-light">
      <div class="container">
        <span class="text-muted">Lumen © <script>document.write(new Date().getFullYear())</script> </span>
      </div>
    </footer>
 
     <!-- Archivo JS Bootstrap 5 -->  
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>