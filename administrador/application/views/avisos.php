<head>
	<title>AVISOS | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<div id="aviso" class="container-fluid text-center">
	<h2>AVISOS</h2>
	<div class="container">
		<p>Da clic para ir a la página de <a href="http://192.168.1.7/CCVictoria" target="__blank">Centro Comercial La Victoria</a></p>
    	<hr>
    	<form class="login" method="POST" action="<?php echo base_url();?>index.php/Welcome/ingresaAviso">
    		<p for="contenido"><b>Contenido del Aviso</b></p>
      		<textarea id="contenido" type="text" placeholder="Ingrese el aviso" name="contenido" style="width: 700px;" rows="5" required></textarea><br>

   			<button type="submit">Agregar</button>
   		</form>
   	</div>
   	<hr>
	<div class="container">
    	<table border="2px">
		    <thead>
			    <tr>
		          <th align="center" bgcolor="#000000" style="color:white">CONTENIDO DEL AVISO</th>
		          <th align="center" bgcolor="#000000" style="color:white"></th>
		        </tr>
		    </thead>
		    <?php
		        if($aviso != FALSE){
		          foreach ($aviso->result() as $row) {
		    ?>
		    <tr>
		        <td><?php echo $row->Contenido; ?></td>
		        <!--<td><a href="<?php echo base_url();?>index.php/Welcome/aviso/<?php echo $row->idAvisos;?>/#aviso" class="btn btn-danger">Eliminar</a></td>-->
		        <td><a href="javascript:confirmacion_borrar('<?php echo base_url();?>Welcome/aviso/<?php echo $row->idAvisos;?>/#aviso');" class="btn btn-danger">Eliminar</a></td>
		    </tr>
		    <?php
		    	    }
		        }
		    ?>
		</table>
	</div>
</div>