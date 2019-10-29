<head>
  <title>GALERÍA | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<!-- Container (Gallery Section) -->
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
          <img src="<?php echo base_url();?>administrador/galeriaFotos/imagen_1.JPG" alt="imagen_1" style="width: 2500px; height: 1000px;">
        </div>
      </div>
      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>administrador/galeriaFotos/imagen_2.JPG" alt="imagen_2" style="width: 2500px; height: 1000px;">
        </div>
      </div>
      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>administrador/galeriaFotos/imagen_3.JPG" alt="imagen_3" style="width: 2500px; height: 1000px;">
        </div>
      </div>
      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>administrador/galeriaFotos/imagen_5.JPG" alt="imagen_5" style="width: 2500px; height: 1000px;">
        </div>
      </div>
      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>administrador/galeriaFotos/imagen_6.JPG" alt="imagen_6" style="width: 2500px; height: 1000px;">
        </div>
      </div>
      <div class="item">
        <div class="thumbnail">
          <img src="<?php echo base_url();?>administrador/galeriaFotos/imagen_7.JPG" alt="imagen_7" style="width: 2500px; height: 1000px;">
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

  <div class="row">
    <?php if($fotos != FALSE) { 
      foreach($fotos->result() as $row) { ?>
      <div class="col-sm-3">
        <a href="<?php echo base_url();?>administrador/galeriaFotos/<?php echo $row->Nombre;?>" target="_blank">
          <img src="<?php echo base_url();?>administrador/galeriaFotos/<?php echo $row->Nombre;?>" class="img-responsive fade" style="width:100%; height: 350px; padding-top: 30px;" alt="Image">
        </a>
      </div>
    <?php }
    } ?>
    <!--<div class="col-sm-3">
      <a href="<?php echo base_url();?>administrador/galeriaFotos/imagen_1.JPG" target="_blank">
        <img src="<?php echo base_url();?>administrador/galeriaFotos/imagen_1.JPG" class="img-responsive fade" style="width:100%; height: 350px;" alt="Image">
      </a>
    </div>
    <div class="col-sm-3"> 
      <a href="<?php echo base_url();?>administrador/galeriaFotos/imagen_2.JPG" target="_blank">
        <img src="<?php echo base_url();?>administrador/galeriaFotos/imagen_2.JPG" class="img-responsive fade" style="width:100%; height: 350px;" alt="Image">
      </a>
    </div>
    <div class="col-sm-3"> 
      <a href="<?php echo base_url();?>administrador/galeriaFotos/imagen_3.JPG" target="_blank">
        <img src="<?php echo base_url();?>administrador/galeriaFotos/imagen_3.JPG" class="img-responsive fade" style="width:100%; height: 350px;" alt="Image">
      </a>
    </div>
    <div class="col-sm-3"> 
      <a href="<?php echo base_url();?>administrador/galeriaFotos/imagen_4.JPG" target="_blank">
        <img src="<?php echo base_url();?>administrador/galeriaFotos/imagen_4.JPG" class="img-responsive fade" style="width:100%; height: 350px;" alt="Image">
      </a>
    </div>-->
  </div>
</div>