<head>
  <title>MODIFICAR | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<form class="login" method="POST" action="<?php echo base_url();?>index.php/Welcome/#">

    <div class="container text-center">
      <?php
        if($tienda != FALSE){
          foreach ($tienda->result() as $row) {
        ?>
			<label for="Tname"><b>Nombre de la Tienda</b></label>
			<input type="text" value="<?php echo $row->Nombre;?>" name="Tname"><?php echo $row->Nombre;?></input>

			<label for="descripcion"><b>Descripción</b></label>
			<input id="descripcion" type="text" value="<?php echo $row->Descripcion;?>" name="descripcion">

			<label for="tel"><b>Telefono</b></label>
			<input id="tel" type="text" value="<?php echo $row->Telefono;?>" name="tel">

			<label for="horario"><b>Horario</b></label>
			<input id="horario" type="text" value="<?php echo $row->Horario;?>" name="horario">

			<label for="local"><b>No. Local</b></label>
			<input id="local" type="text" value="<?php echo $row->No_Local;?>"" name="local">

			<label for="Page"><b>Página Web</b></label>
			<input id="Page" type="text" value="<?php echo $row->Pagina_Web;?>"" name="Page">
        <?php
          }
         }
      ?>
        
      <button type="submit">Actualizar</button>
    </div>
  </form>