<head>
  <title>CONTACTO | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<!-- Container (Contact Section) -->
<div id="contacto" class="container-fluid">
  <h2 class="text-center">CONTACTANOS</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contactanos y nosotros te atenderemos con gusto.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Calle 5 Mayo No. 409A, Col. Centro, Puebla, México</p> <!-- Dirreccion -->
      <p><span class="glyphicon glyphicon-phone"></span> +01 55 222 2326868</p>
      <p><span class="glyphicon glyphicon-envelope"></span> correo@gmail.com</p>
    </div>
  <form method="POST" action="<?php echo base_url(); ?>index.php/Welcome/InsertComment">
    <div class="col-sm-7 slideanim">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="Nombre" placeholder="Nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <!--<input class="form-control" id="comments" name="comments" placeholder="Comentarios" style="width: 800px; height: 150px;" required><br>-->
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentarios" rows="5" required></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-success pull-right" type="submit">Enviar</button>
        </div>
      </div>
    </div>
  </form>
    </div>
</div>

<!-- Image of location/map -->
<div id="ubicacion">
  <center><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1WkenFvfiKO8yfGZUU4ToBv8S8CqLNakY" width="640" height="480"></iframe></center>
</div>
<br><br>