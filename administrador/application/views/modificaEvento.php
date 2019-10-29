<head>
  <title>MODIFICAR | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<div id="modifica" class="container-fluid text-center">
<?php
  if($evento != FALSE){
    foreach ($evento->result() as $row) {
?>
<form class="login text-center" method="POST" action="<?php echo base_url();?>index.php/Welcome/updateEvento">

    <div class="container">

      <h2>ACTUALIZAR DATOS DEL EVENTO <?php echo $row->Nombre;?></h2>
      <hr>

      <input type="hidden" value="<?php echo $row->idEvento;?>" name="idE" required>

      <p for="name"><b>Nombre del Evento</b></p>
      <input type="text" value="<?php echo $row->Nombre;?>" name="name" required>

      <p for="lugar"><b>Lugar</b></p>
      <input type="text" value="<?php echo $row->Lugar;?>" name="lugar" required>

      <p for="descripcion"><b>Descripción</b></p>
      <input id="descripcion" type="text" value="<?php echo $row->Descripcion;?>" name="descripcion" required>

      <p for="fecha"><b>Fecha</b></p>
      <input type="text" value="<?php echo $row->FechaEvento;?>" name="fecha" required>

      <p for="horario"><b>Horario</b></p>
      <input id="horario" type="text" value="<?php echo $row->Horario;?>" name="horario" required>

      <p for="tipo"><b>Tipo *</b></p>
      <select name="tipo" id="tipo" required>
        <?php if($row->Tipo == 1){ ?>
          <option value="<?php echo $row->Tipo;?>"><?php echo $row->Tipo;?></option>
          <option value=2>2</option>
        <?php }
        else { ?>
          <option value="<?php echo $row->Tipo;?>"><?php echo $row->Tipo;?></option>
          <option value=1>1</option>
        <?php } ?>
      </select>

      <!--<p for="vimagen"><b>Imagen</b></p>
      <input id="vimagen" type="file" value="<?php echo $row->Imagen;?>" name="vimagen" required>-->
        
      <button type="submit">Actualizar</button><br>
    </div>
</form>
<?php
    }
  }
  else{
?>
<h2><b>SIN DATOS</b></h2>

<?php
  }
?>
<hr>
<center>
  <a href="<?php echo base_url();?>index.php/Welcome/evento">
    <button type="submit">Cancelar</button>
  </a>
</center>
<hr>
</div>