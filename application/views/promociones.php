<head>
  <title>PROMOCIONES | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<div class="container text-center">    
  <h3>PROMOCIONES</h3><br>
  <div class="row slideanim">
    <?php if($promo != FALSE){ 
      foreach($promo->result() as $row){?>
        <div class="col-sm-4">
          <a  onclick="document.getElementById('modalPromo<?php echo $row->idPromocion; ?>').style.display='block'">
            <!--<div class="thumbnail" style="border-color: #006244;" >
                <img src="<?php echo base_url();?>promos/<?php echo $row->Imagen; ?>" class="img-responsive fade" alt="Image" style="width:320px; height:450px;" />
              <div class="caption">
                <h4><b><?php echo $row->NombreP; ?></b></h4>
                <p><?php echo $row->Descripcion; ?></p>
              </div>
            </div>-->
            <div class="div-imagen">
              <div class="fondo">
                  <p class="centrado"><b>Ver más</b></p>
              </div>
              <img src="<?php echo base_url();?>promos/<?php echo $row->Imagen; ?>" class="img-responsive desvanecer" alt="" style="width:320px; height:450px;" />
            </div>
          </a>
        </div>

        <!-- MODAL PARA LAS PROMOCIONES -->
        <div id="modalPromo<?php echo $row->idPromocion; ?>" class="modal">
              <?php 
                $promoID = $this->bases->GetPromoID($row->idPromocion);
                foreach ($promoID->result() as $key) { 
              ?>
            <!--<div class="imgcontainer">
              <span onclick="document.getElementById('modalPromo<?php echo $key->idPromocion; ?>').style.display='none'" class="close" title="Close Modal">&times;</span>
            </div>-->
            <div class="modal-header">
              <span onclick="document.getElementById('modalPromo<?php echo $key->idPromocion; ?>').style.display='none'" class="close" title="Close Modal">&times;</span>
              <h4 class="modal-title" style="color: white;"><b><?php echo $key->NombreP; ?></b></h4>
            </div>
            <!--<div class="modal-body">
                <img src="<?php echo base_url();?>promos/<?php echo $key->Imagen; ?>" class="img-responsive" alt="Image" style="width:180px; height:280px;">
                <p><?php echo $key->Descripcion; ?></p>
            </div>-->
            <div class="row slideanim" style="padding-top: 10px; padding-right: 0px; padding-bottom: 10px; padding-left: 10px;">
              <div class="col-sm-4">
                <img src="<?php echo base_url();?>promos/<?php echo $key->Imagen; ?>" class="img-responsive" alt="Image" style="width:170px; height:250px;">
              </div>
              <div class="col-sm-8 text-left">
                <p><b>Descripción de la Promoción:</b></p>
                <p><?php echo $key->Descripcion; ?></p><hr>
                <p><b>Vigencia de la Promoción:</b> <?php echo $key->Vigencia; ?></p>
                <p><b>Tienda: </b><?php echo $key->Nombre; ?></p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" onclick="document.getElementById('modalPromo<?php echo $key->idPromocion; ?>').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
              <?php    
                }
              ?>
        </div>

    <?php }
    }
    else{ ?>
      <div class="col-sm-4"> 
        <img src="https://placehold.it/1200x400?text=IMAGE" class="img-responsive" alt="Image" width="300px" height="500px">
        <p>Promoción 1</p>    
      </div>
      <div class="col-sm-4"> 
        <img src="https://placehold.it/1200x400?text=IMAGE" class="img-responsive" alt="Image" width="300px" height="500px">
        <p>Promoción 2</p>    
      </div>
      <div class="col-sm-4">
        <img src="https://placehold.it/1200x400?text=IMAGE" class="img-responsive" alt="Image" width="300px" height="500px">
        <p>Promoción 3</p> 
      </div>
    <?php } ?>
  </div>
</div>

