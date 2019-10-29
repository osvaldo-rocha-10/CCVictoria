<!-- Container (index Section) -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>event/evento_4.jpg" class="img-responsive" alt="Image">
        </div>
        <div class="carousel-caption">
          <!--<h3><a href="<?php echo base_url();?>index.php/Welcome/evento">Mas Eventos</a></h3>-->
          <h3><a href="#eventos">Mas Eventos</a></h3>
        </div>      
      </div>

      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>event/evento_5.jpg" class="img-responsive" alt="Image">
        </div>
        <div class="carousel-caption">
          <!--<h3><a href="<?php echo base_url();?>index.php/Welcome/evento">Mas Eventos</a></h3>-->
          <h3><a href="#eventos">Mas Eventos</a></h3>
        </div>      
      </div>

      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>promos/promo_3.png" class="img-responsive" alt="Image">
        </div>
        <div class="carousel-caption">
          <!--<h3><a href="<?php echo base_url();?>index.php/Welcome/evento">Mas Eventos</a></h3>-->
          <h3><a href="#eventos">Mas Promociones</a></h3>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (Offers Section) -->  
<div id="promociones" class="container-fluid bg-grey">    
  <h2 class="text-center">PROMOCIONES</h2><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="<?php echo base_url();?>promos/promo_1.jpg" class="img-responsive" alt="Image" width="300px" height="500px">
    </div>
    <div class="col-sm-4"> 
      <img src="<?php echo base_url();?>promos/promo_2.jpg" class="img-responsive" alt="Image" width="300px" height="500px">  
    </div>
    <div class="col-sm-4">
      <div class="well">
       <h6>Vive las compras en Centro Comercial La Victoria y encuentra lo último de la moda en Suburbia</h6>
      </div>
      <div class="well">
       <h6>Encuentra los mejores smarthphones y accesorios en Movistar y Telcel.</h6> 
       <h6>Y para los niños también tenemos Zona de Juegos.</h6>
      </div>
      <div class="well">
       <h6>Vive los sabores en todas las opciones de comida que podemos ofrecerte, desde un delicioso desayuno en Vips, como comida típica en.</h6>
       <h6>Además siempre podrás encontrar espacio para disfrutar de un cremoso helado y como ya las famosas momias.</h6> 
      </div>
    </div>
  </div>
</div><br>

<!-- Container (About Section) -->
<div id="acerca" class="container-fluid">
  <div class="row">
    <div class="col-sm-8">
      <h2>Acerca de nosotros</h2>
      <h4>El Mercado "La Victoria" es un inmueble ubicado en el Centro Histórico de Puebla, en el estado de Puebla, México. Fue construido en 1854 y reconstruido como ahora se conoce en 1914, durante el gobierno del presidente Porfirio Díaz. Sirvió entre 1954 y 1986 como el centro de venta de alimentos perecederos más grande de la capital, hasta que fue desocupado por el gobierno local. Después de ocho años de abandono, en 1994 fue rescatado por la Fundación Amparo, responsable del Museo Amparo. Actualmente funciona como un centro comercial.</h4>
      <p>Desde su apertura, el mercado se consolidó como el principal punto de abastecimiento de alimentos perecederos en Puebla, hasta que el 14 de octubre de 1986 fue clausurado por órdenes del alcalde Jorge Murad Macluf. La idea del alcalde era rescatar el inmueble histórico al desalojar y reubicar a cerca de dos mil comerciantes, debido a que el mercado se había convertido en un foco de infección por la ausencia de medidas sanitarias adecuadas.</p>
      <p>El mercado permaneció cerrado durante ocho años, hasta que en 1994 fue entregado en un comodato por 99 años a la Fundación Amparo para su restauración. En un inicio, se contempló la creación de un museo de arte moderno y un centro de convenciones; sin embargo, el inmueble fue ocupado por diversos comercios, convirtiéndolo en una plaza comercial.</p>
      <br>
      <a href="http://www.fundacionamparo.com" class="btn btn-default btn-lg" role="button">Mas información</a>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-signal logo"></span>
    </div>
  </div>
</div>

<div class="container-fluid bg-grey">
  <div class="row">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-globe logo slideanim"></span>
    </div>
    <div class="col-sm-8">
      <h2>Nuestros Valores</h2><br>
      <h4><strong>MISIÓN:</strong> Nuestra misión es </h4><br>
      <h4><strong>VISIÓN:</strong> Nuestra visión es</h4>
    </div>
  </div>
</div>

<!-- Container (Services Section) -->
<div id="servicios" class="container-fluid text-center">
  <h2>SERVICIOS</h2>
  <h4>Que ofertamos</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-shopping-cart logo-small"></span>
      <h4>TIENDAS</h4>
      <p>Ropa, Joyería, Comida, etc.</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-map-marker logo-small"></span>
      <h4>LOCALIZACIÓN</h4>
      <p>Estamos muy bien ubicados</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-lock logo-small"></span>
      <h4>TRABAJOS</h4>
      <p>Podrás encontrar ofertas de empleo</p>
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-calendar logo-small"></span>
      <h4>EVENTOS</h4>
      <p>Eventos para toda la familia</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-certificate logo-small"></span>
      <h4>CERTIFICADOS</h4>
      <p>Estamos certificados en ISO9000</p>
    </div>
    <div class="col-sm-4">
      <span class="glyphicon glyphicon-knight logo-small"></span>
      <h4 style="color:#303030;">ZONA DE JUEGOS</h4>
      <p>Contamos con zona de juegos para los niños</p>
    </div>
  </div>
</div>

<!-- Container (Shop Section) -->
<div id="tiendas" class="container-fluid text-center bg-grey">
  <h2>TIENDAS</h2>
  <h4>Tiendas que encontrarás</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-2">
      <a href="http://www.suburbia.com.mx"><img src="<?php echo base_url();?>logo_tiendas/logo-suburbia.jpg" width="60px" height="50px" title="Suburbia"></a>
    </div>
    <div class="col-sm-2">
      <img src="<?php echo base_url();?>logo_tiendas/logo-vips.jpg" width="60px" height="50px" title="Vips" data-toggle="modal" data-target="#myModal">
    </div>
    <div class="col-sm-2">
      <img src="<?php echo base_url();?>logo_tiendas/logo-michoacana.png" width="60px" height="50px" title="La Michoacana">
    </div>
    <div class="col-sm-2">
      <a href="http://www.suburbia.com.mx"><img src="<?php echo base_url();?>logo_tiendas/logo-suburbia.jpg" width="60px" height="50px" title="Suburbia"></a>
    </div>
    <div class="col-sm-2">
      <img src="<?php echo base_url();?>logo_tiendas/logo-vips.jpg" width="60px" height="50px" title="Vips">
    </div>
    <div class="col-sm-2">
      <img src="<?php echo base_url();?>logo_tiendas/logo-michoacana.png" width="60px" height="50px" title="La Michoacana">
    </div>
  </div>
  <br><br>
  <div class="row slideanim">
    <div class="col-sm-2">
      <a href="http://www.suburbia.com.mx"><img src="<?php echo base_url();?>logo_tiendas/logo-suburbia.jpg" width="60px" height="50px" title="Suburbia"></a>
    </div>
    <div class="col-sm-2">
      <img src="<?php echo base_url();?>logo_tiendas/logo-vips.jpg" width="60px" height="50px" title="Vips" data-toggle="modal" data-target="#myModal">
    </div>
    <div class="col-sm-2">
      <img src="<?php echo base_url();?>logo_tiendas/logo-michoacana.png" width="60px" height="50px" title="La Michoacana">
    </div>
    <div class="col-sm-2">
      <a href="http://www.suburbia.com.mx"><img src="<?php echo base_url();?>logo_tiendas/logo-suburbia.jpg" width="60px" height="50px" title="Suburbia"></a>
    </div>
    <div class="col-sm-2">
      <img src="<?php echo base_url();?>logo_tiendas/logo-vips.jpg" width="60px" height="50px" title="Vips">
    </div>
    <div class="col-sm-2">
      <img src="<?php echo base_url();?>logo_tiendas/logo-michoacana.png" width="60px" height="50px" title="La Michoacana">
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">VIPS</h4>
        </div>
        <div class="modal-body">
          <img src="<?php echo base_url();?>logo_tiendas/logo-vips.jpg" class="img-responsive" width="100px" height="70px" title="Vips">
          <br>
          <p>Establecimiento de comida para toda la familia</p>
          <p>Telefono: 1234567</p>
          <p>Local No. 2</p>
          <p>Abierto de 8:00 a 22:00</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>

<!-- Container (Portfolio Section) -->
<div id="galeria" class="container-fluid text-center">
  <h2>GALERÍA</h2><br>
  <div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>img/imagen_1.JPG" alt="imagen_1" width="500" height="400">
        </div>
      </div>
      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>img/imagen_2.JPG" alt="imagen_2" width="500" height="400">
        </div>
      </div>
      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>img/imagen_3.JPG" alt="imagen_3" width="500" height="400">
        </div>
      </div>
      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>img/imagen_5.JPG" alt="imagen_5" width="500" height="400">
        </div>
      </div>
      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>img/imagen_6.JPG" alt="imagen_6" width="500" height="400">
        </div>
      </div>
      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>img/imagen_7.JPG" alt="imagen_7" width="500" height="400">
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<!-- Container (Event Section) -->
<div id="eventos" class="container-fluid bg-grey">
  <div class="text-center">
    <h2>EVENTOS</h2>
    <h4>Disfruta de los eventos que realizamos</h4>
  </div>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Obras</h1>
        </div>
        <div class="panel-body">
          <img class="img-responsive" src="<?php echo base_url();?>event/evento_1.jpg" alt="evento_1" width="380px" height="550px">
        </div>
        <div class="panel-footer">
          <button class="btn btn-lg">Mas información</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Navidad</h1>
        </div>
        <div class="panel-body">
          <img class="img-responsive" src="<?php echo base_url();?>event/evento_2.jpg" alt="evento_2" width="380px" height="550px">
        </div>
        <div class="panel-footer">
          <button class="btn btn-lg">Mas información</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Conciertos</h1>
        </div>
        <div class="panel-body">
          <img class="img-responsive" src="<?php echo base_url();?>event/evento_3.jpg" alt="evento_3" width="380px" height="550px">
        </div>
        <div class="panel-footer">
          <button class="btn btn-lg">Mas información</button>
        </div>
      </div>      
    </div>    
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contacto" class="container-fluid">
  <h2 class="text-center">CONTACTANOS</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contactanos y nosotros te atenderemos con gusto.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Av. 3 Norte No. , Col. Centro, Puebla, México</p>
      <p><span class="glyphicon glyphicon-phone"></span> +01 55 2221234567</p>
      <p><span class="glyphicon glyphicon-envelope"></span> jalexisperezromero@gmail.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <!--<div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comentarios" rows="5"></textarea><br>
      <div class="row">
        <div class="col-sm-12 form-group">
          <button class="btn btn-success pull-right" type="submit">Enviar</button>
        </div>
      </div>-->
      <div class="Container">
        <form>
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Nombre" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comentarios" rows="5"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-success pull-right" type="submit">Enviar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Image of location/map -->
<img src="<?php echo base_url();?>img/mapa_CCVictoria_2.jpg" class="w3-image w3-greyscale-min" style="width:100%">
