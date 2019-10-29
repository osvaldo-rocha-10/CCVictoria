<head>
	<title>COMENTARIOS | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<div id="comentario" class="container-fluid text-center">
	<h2>COMENTARIOS</h2>
	<div class="row">
    	<p>Da clic para ir a la página de <a href="http://192.168.1.7/CCVictoria" target="__blank">Centro Comercial La Victoria</a></p>
    	<hr>
    	<table border="2px">
	      <thead>
	        <tr>
	          <th align="center" bgcolor="#000000" style="color:white">NOMBRE</th>
	          <th align="center" bgcolor="#000000" style="color:white">DESCRIPCIÓN</th>
	          <th align="center" bgcolor="#000000" style="color:white">EMAIL</th>
	          <th align="center" bgcolor="#000000" style="color:white"></th>
	        </tr>
	      </thead>
	      <?php
	        if($comment != FALSE){
	          foreach ($comment->result() as $row) {
	      ?>
	      <tr>
	        <td><?php echo $row->Nombre; ?></td>
	        <td><?php echo $row->Descripcion; ?></td>
	        <td><?php echo $row->Email; ?></td>
	        <!--<td><a href="<?php echo base_url();?>index.php/Welcome/comentarios/<?php echo $row->idComentarios;?>/#comentario" class="btn btn-danger">Eliminar</a></td>-->
	        <td><a href="javascript:confirmacion_borrar('<?php echo base_url();?>index.php/Welcome/comentarios/<?php echo $row->idComentarios;?>/#comentario');" class="btn btn-danger">Eliminar</a></td>
	      </tr>
	      <?php
	          }
	        }
	      ?>
	    </table>
	</div>
</div>