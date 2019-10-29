<head>
  <title>MODIFICAR | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<div id="modifica" class="container-fluid text-center">
<?php
  if($tienda != FALSE){
    foreach ($tienda->result() as $row) {
?>
<form class="login text-center" method="POST" action="<?php echo base_url();?>index.php/Welcome/updateTienda">

    <div class="container">

      <h2>ACTUALIZAR DATOS DE TIENDA <?php echo $row->Nombre;?></h2>
      <hr>

      <input type="hidden" value="<?php echo $row->idTienda;?>" name="idT" required>

      <p for="Tname"><b>Nombre de la Tienda</b></p>
      <input type="text" value="<?php echo $row->Nombre;?>" name="Tname" required>

      <p for="descripcion"><b>Descripción</b></p>
      <input id="descripcion" type="text" value="<?php echo $row->Descripcion;?>" name="descripcion">

      <p for="tel"><b>Telefono</b></p>
      <input id="tel" type="text" value="<?php echo $row->Telefono;?>" name="tel">

      <p for="horario"><b>Horario</b></p>
      <input id="horario" type="text" value="<?php echo $row->Horario;?>" name="horario">

      <p for="local"><b>No. Local</b></p>
      <input id="local" type="text" value="<?php echo $row->No_Local;?>" name="local" required>

      <p for="Page"><b>Página Web</b></p>
      <input id="Page" type="text" value="<?php echo $row->Pagina_Web;?>" name="Page">

      <p for="facebook"><b>Facebook</b></p>
      <input id="facebook" type="text" value="<?php echo $row->Facebook;?>" name="facebook">

      <p for="twitter"><b>Twitter</b></p>
      <input id="twitter" type="text" value="<?php echo $row->Twitter;?>" name="twitter">

      <p for="instagram"><b>Instagram</b></p>
      <input id="instagram" type="text" value="<?php echo $row->Instagram;?>" name="instagram">
        
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
  <a href="<?php echo base_url();?>index.php/Welcome/tienda">
    <button type="submit">Cancelar</button>
  </a>
</center>
<hr>
</div>