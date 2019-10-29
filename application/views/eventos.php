<head>
  <title>EVENTOS | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<!-- Container (Event Section) -->
<div id="eventos" class="container-fluid">
  <div class="text-center">
    <h2>EVENTOS</h2>
    <hr>
    <!--<h4>Eventos que se llevan a cabo</h4>-->
  </div>
  <?php if($evento == FALSE){ ?>
  <div class="row slideanim">
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Evento 1</h1>
        </div>
        <div class="panel-body">
          <img class="img-responsive" src="https://placehold.it/1200x400?text=IMAGE" alt="evento_1" width="380px" height="550px">
        </div>
        <div class="panel-footer">
          <button class="btn btn-lg">Mas información</button>
        </div>
      </div>      
    </div>     
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Evento 2</h1>
        </div>
        <div class="panel-body">
          <img class="img-responsive" src="https://placehold.it/1200x400?text=IMAGE" alt="evento_2" width="380px" height="550px">
        </div>
        <div class="panel-footer">
          <button class="btn btn-lg">Mas información</button>
        </div>
      </div>      
    </div>       
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1>Evento 3</h1>
        </div>
        <div class="panel-body">
          <img class="img-responsive" src="https://placehold.it/1200x400?text=IMAGE" alt="evento_3" width="380px" height="550px">
        </div>
        <div class="panel-footer">
          <button class="btn btn-lg">Mas información</button>
        </div>
      </div>      
    </div>    
  </div>
       
<?php }
else{ 
  ?>
  <div class="row slideanim">
    <?php foreach($evento->result() as $row) {  ?>
    <div class="col-sm-4 col-xs-12">
      <div class="panel panel-default text-center">
        <div class="panel-heading">
          <h1><?php echo $row->Nombre; ?></h1>
        </div>
        <div class="panel-body">
          <center>
            
            <div class="div-imagen" onclick="document.getElementById('modalEvento<?php echo $row->idEvento; ?>').style.display='block'">
              <div class="fondo">
                  <p class="centrado"><b>Más Información</b></p>
              </div>
              <img class="img-responsive fade" src="<?php echo base_url();?>event/<?php echo $row->Imagen; ?>" alt="evento_1" style="width: 380px; height: 550px;">
            </div>
          </center>
        </div>
        <!--<div class="panel-footer">
          <button class="btn btn-lg" onclick="document.getElementById('modalEvento<?php echo $row->idEvento; ?>').style.display='block'">Mas información</button>
        </div>-->
      </div>      
    </div>

    <div id="modalEvento<?php echo $row->idEvento; ?>" class="modal modalevent">
              <?php 
                $eventoID = $this->bases->GetEventoID($row->idEvento);
                foreach ($eventoID->result() as $key) { 
              ?>
            <div class="modal-header">
              <span onclick="document.getElementById('modalEvento<?php echo $key->idEvento; ?>').style.display='none'" class="close" title="Close Modal">&times;</span>
              <h4 class="modal-title text-center" style="color: white;"><b><?php echo $key->Nombre; ?></b></h4>
            </div>
            <div class="row slideanim"  style="padding: 20px;">
              <div class="col-sm-4">
                <img src="<?php echo base_url();?>event/<?php echo $key->Imagen; ?>" class="img-responsive" alt="Image" style="width:180px; height:270px;">
              </div>
              <div class="col-sm-4 text-left">
                <p><b>Descripción del Evento:</b></p>
                <p><?php echo $key->Descripcion; ?></p><hr>
                <p><b>Fecha: </b><?php echo $key->FechaEvento; ?></p>
                <p><b>Horario: </b><?php echo $key->Horario; ?></p>
                <p><b>Lugar: </b><?php echo $key->Lugar; ?></p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" onclick="document.getElementById('modalEvento<?php echo $key->idEvento; ?>').style.display='none'" class="cancelbtn">Cancel</button>
            </div>
              <?php    
                }
              ?>
        </div> 
    <?php } ?>        
  </div>
<?php
} ?>
</div>

<hr>