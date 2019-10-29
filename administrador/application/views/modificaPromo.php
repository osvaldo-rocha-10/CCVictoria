<head>
  <title>MODIFICAR | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<div id="modifica" class="container-fluid text-center">
<?php
  if($promo != FALSE){
    foreach ($promo->result() as $row) {
?>
<form class="login text-center" method="POST" action="<?php echo base_url();?>index.php/Welcome/updatePromo">

    <div class="container">

      <h2>ACTUALIZAR DATOS DEL PROMOCION <?php echo $row->NombreP;?></h2>
      <hr>

      <input type="hidden" value="<?php echo $row->idPromocion;?>" name="idP" required>

      <p for="name"><b>Nombre de la Promocion</b></p>
      <input type="text" value="<?php echo $row->NombreP;?>" name="name" required>

      <p for="descripcion"><b>Descripción</b></p>
      <input id="descripcion" type="text" value="<?php echo $row->Descripcion;?>" name="descripcion" required>

      <p for="vigencia"><b>Vigencia</b></p>
      <input id="vigencia" type="text" value="<?php echo $row->Vigencia;?>" name="vigencia" required>

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
  <a href="<?php echo base_url();?>index.php/Welcome/promocion">
    <button type="submit">Cancelar</button>
  </a>
</center>
<hr>

</div>