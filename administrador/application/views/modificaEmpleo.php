<head>
  <title>MODIFICAR | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<div id="modifica" class="container-fluid text-center">
<?php
  if($empleo != FALSE){
    foreach ($empleo->result() as $row) {
?>
<form class="login text-center" method="POST" action="<?php echo base_url();?>index.php/Welcome/updateEmpleo">

    <div class="container">

      <h2>ACTUALIZAR DATOS DEL EMPLEO <?php echo $row->Nombre;?></h2>
      <hr>

      <input type="hidden" value="<?php echo $row->idEmpleos;?>" name="idE" required>

      <p for="vacante"><b>Nombre de la Vacante</b></p>
      <input type="text" value="<?php echo $row->Nombre;?>" name="vacante" required>

      <p for="descripcion"><b>Descripción</b></p>
      <input id="descripcion" type="text" value="<?php echo $row->Descripcion;?>" name="descripcion" required>

      <p for="horario"><b>Horario</b></p>
      <input id="horario" type="text" value="<?php echo $row->Horario;?>" name="horario" required>

      <p for="sueldo"><b>Sueldo</b></p>
      <input id="sueldo" type="text" value="<?php echo $row->Sueldo;?>" name="sueldo" required>

      <p for="atencion"><b>Horario de Atención</b></p>
      <input id="atencion" type="text" value="<?php echo $row->Atencion;?>" name="atencion" required>
        
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
  <a href="<?php echo base_url();?>index.php/Welcome/empleo">
    <button type="submit">Cancelar</button>
  </a>
</center>
<hr>
</div>