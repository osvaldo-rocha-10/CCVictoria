<head>
  <title>CENTRO COMERCIAL LA VICTORIA</title>
</head>

<?php
$i = 0;
if($tamaño != FALSE){
?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
    <ol class="carousel-indicators">
      <?php while($i != $tamaño) {
      if($i == 0) { ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>" class="active"></li>
      <?php } else { ?>
        <li data-target="#myCarousel" data-slide-to="<?php echo $i; ?>"></li>
      <?php }
      $i = $i + 1;
      } 
      $i = 0; ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <?php //while($i != $tamaño) {
        foreach($evento->result() as $row) {
        if($i == 0){
      ?>
      <div class="item active">
        <center>
          <img src="<?php echo base_url();?>event/<?php echo $row->Imagen;?>" alt="Image" style="width: 1700px; height: 600px;">
        </center>
        <div class="carousel-caption">
          <h3><a href="<?php echo base_url();?>evento">Más Eventos</a></h3>
        </div>      
      </div>
      <?php }
      else { 
      ?>
      <div class="item">
        <center>
          <img src="<?php echo base_url();?>event/<?php echo $row->Imagen;?>" alt="Image" style="width: 1700px; height: 600px;">
        </center>
        <div class="carousel-caption">
          <h3><a href="<?php echo base_url();?>evento">Más Eventos</a></h3>
        </div>      
      </div>
      <?php }
      $i = $i + 1; 
      } ?>
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

<?php } ?>


<!--<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators 
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides 
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <center>
          <img src="<?php echo base_url();?>event/evento_4.jpg" alt="Image" style="width: 1700px; height: 600px;">
        </center>
        <div class="carousel-caption">
          <h3><a href="<?php echo base_url();?>index.php/Welcome/evento">Más Eventos</a></h3>
        </div>      
      </div>

      <div class="item">
        <center>
          <img src="<?php echo base_url();?>event/evento_5.jpg" alt="Image" style="width: 1700px; height: 600px;">
        </center>
        <div class="carousel-caption">
          <h3><a href="<?php echo base_url();?>index.php/Welcome/evento">Más Eventos</a></h3>
        </div>      
      </div>
    </div>

    <!-- Left and right controls 
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>-->
  
<div class="container text-center">
          <?php if ($aviso != FALSE) { ?>
          <hr>
          <div class="well col-sm-12" style="background-color: #006244;">
             <h4 style="color: white;"><b>AVISOS</b></h4>
                <?php foreach ($aviso->result() as $key) { ?>
                  <h6 style="color: white;"><?php echo $key->Contenido."\n"; ?></h6>
                <?php } ?>
          </div>
          <?php } ?>
          
</div>
<hr>
<div id="acerca" class="container-fluid">
  <div class="row">
    <div class="col-sm-8 ">
      <h2>CONÓCENOS</h2>
      <h4 align="JUSTIFY">El Mercado "La Victoria" es un inmueble ubicado en el Centro Histórico de Puebla, en el estado de Puebla, México. Fue construido en 1854 y reconstruido como ahora se conoce en 1914, durante el gobierno del presidente Porfirio Díaz. Sirvió entre 1954 y 1986 como el centro de venta de alimentos perecederos más grande de la capital, hasta que fue desocupado por el gobierno local. Después de ocho años de abandono, en 1994 fue rescatado por la Fundación Amparo, responsable del Museo Amparo. Actualmente funciona como un centro comercial.</h4>
      <p align="JUSTIFY">Desde su apertura, el mercado se consolidó como el principal punto de abastecimiento de alimentos perecederos en Puebla, hasta que el 14 de octubre de 1986 fue clausurado por órdenes del alcalde Jorge Murad Macluf. La idea del alcalde era rescatar el inmueble histórico al desalojar y reubicar a cerca de dos mil comerciantes, debido a que el mercado se había convertido en un foco de infección por la ausencia de medidas sanitarias adecuadas.</p>
      <p align="JUSTIFY">El mercado permaneció cerrado durante ocho años, hasta que en 1994 fue entregado en un comodato por 99 años a la Fundación Amparo para su restauración. En un inicio, se contempló la creación de un museo de arte moderno y un centro de convenciones; sin embargo, el inmueble fue ocupado por diversos comercios, convirtiéndolo en una plaza comercial.</p>
      <br>
      <a href="<?php echo base_url();?>Historia_CCV.pdf" target="_blank" class="btn btn-default btn-lg" role="button"><i class='far fa-file-pdf' style='font-size:25px;color:red'></i> Descargar PDF</a>
    </div>
    <div class="col-sm-4">
      <!--<span class="glyphicon glyphicon-signal logo"></span>-->
      <div class="well" style="background-color: #006244;">
          <h6 style="color: white;">Vive las compras en Centro Comercial La Victoria.</h6>
          <h6 style="color: white;">Encuentra los mejores smarthphones y accesorios en Movistar y Telcel.</h6> 
          <h6 style="color: white;">Y para los niños también tenemos Zona de Juegos.</h6>
      </div>
      <div class="well" style="background-color: #006244;">
          <h6 style="color: white;">Vive los sabores en todas las opciones de comida que podemos ofrecerte, desde un delicioso desayuno en Vips, como comida típica en.</h6>
          <h6 style="color: white;">Además siempre podrás encontrar espacio para disfrutar de un cremoso helado y las conocidas momias.</h6> 
      </div>
    </div>
  </div>
</div>
<hr>

<!--<div class="container-fluid">
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
</div>-->
