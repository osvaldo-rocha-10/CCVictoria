
  <?php if($tienda != FALSE){ ?>
  <div id="InfoTienda" class="container-fluid text-center" style="background: #006244; color: white;">
    <div class="row text-center">
      <?php foreach ($tienda->result() as $row) { 
        if($row->Nombre == "KIOSKO" || $row->Nombre == "TREN" || $row->Nombre == "BAÑOS/ESCALERAS" || $row->Nombre == "MAQUINA DE REFRESCOS"){?>
          <h2 style="color: white; border: 2px solid white; padding: 10px;"><span><?php echo $row->Nombre; ?></span></h2>
          <center>
            <img src="<?php echo base_url();?>logo_tiendas/<?php echo $row->Imagen; ?>" class="img-responsive" width="100px" height="70px" title="<?php echo $row->Nombre; ?>">
          </center>
          <hr>
          <span>
            <p><?php echo $row->Descripcion; ?></p>
          </span>
        <?php }
        else{ ?>
          <h2 style="color: white; border: 2px solid white; padding: 10px;"><span><?php echo $row->Nombre; ?></span></h2>
          <center>
            <img src="<?php echo base_url();?>logo_tiendas/<?php echo $row->Imagen; ?>" class="img-responsive" width="100px" height="70px" title="<?php echo $row->Nombre; ?>">
          </center>
          <hr>
          <span>
            <p><?php echo $row->Descripcion; ?></p>
            <p>Telefono: <?php echo $row->Telefono; ?></p>
            <?php if($row->No_Local == 5000 || $row->No_Local == 6000){ ?>
              <p>No. Local: S/N</p>
            <?php }
            else{ ?>
              <p>No. Local: <?php echo $row->No_Local; ?></p>
          <?php } ?>
            <p>Abierto de: <?php echo $row->Horario; ?></p>
          <?php 
          if($row->Pagina_Web != NULL){ ?>
            <p style="font-size: 20px;"><a href="http://<?php echo $row->Pagina_Web; ?>" target="__blank"><?php echo $row->Pagina_Web; ?></a></p>
          <?php }
          if($row->Facebook != NULL){ ?>
            <a href="http://<?php echo $row->Facebook; ?>" target="__blank" title="Facebook: <?php echo $row->Nombre;?>"><img src="<?php echo base_url();?>img/facebook.png" style="width: 30px; height: 30px;"></a>
          <?php }
          if($row->Twitter != NULL){ ?>
            <a href="http://<?php echo $row->Twitter; ?>" target="__blank" title="Twitter: <?php echo $row->Nombre;?>"><img src="<?php echo base_url();?>img/twitter.png" style="width: 30px; height: 30px;"></a>
          <?php }
          if($row->Instagram != NULL){ ?>
            <a href="http://<?php echo $row->Instagram; ?>" target="__blank" title="Instagram: <?php echo $row->Nombre;?>"><img src="<?php echo base_url();?>img/instagram.png" style="width: 30px; height: 30px;"></a>
          <?php } ?>
          </span>
      <?php }
      } ?>
    </div>
  </div>
  <?php }
  else { ?>
  <div id="InfoTienda" class=" text-center" style="background: #006244; color: white;">
    <div class="row text-center">
        <h2 style="color: white; border: 2px solid white; padding: 10px;"><span>Nombre de Tienda</span></h2>
        <center>
          <img src="https://placehold.it/1200x400?text=IMAGE" class="img-responsive" width="100px" height="70px" title="Image">
        </center>
        <hr>
        <span>
          <p><?php echo "Descripcion"; ?></p>
          <p>Telefono: </p>
          <p>Local No. </p>
          <p>Abierto de: </p>
          <p style="font-size: 20px;"><a href="#" target="__blank">Pagina Web</a></p>
        </span>
    </div>
  </div>
  <?php } ?>