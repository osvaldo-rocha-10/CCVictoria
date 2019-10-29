<head>
  <title>PROMOCIONES | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<!-- Container (Offers Section) -->
<div id="promocion" class="container-fluid text-center">
  <h2>PROMOCIONES</h2>
  <div class="row">
    <p>Da clic para ir a la página de <a href="http://192.168.1.7/CCVictoria" target="__blank">Centro Comercial La Victoria</a></p>
    <hr>
    <div class="row slideanim">
      <div class="col-sm-4 text-center">
          <img src="<?php echo base_url();?>img/nuevo_2.png" width="150px" height="150px" />
          <br><br>
          <button class="btn btn-primary" onclick="document.getElementById('modalAdd').style.display='block'" style="width:auto;">Agregar</button>
      </div>
      <div class="col-sm-4 text-center">
          <img src="<?php echo base_url();?>img/editar_2.png" width="150px" height="150px" />
          <br><br>
          <button class="btn btn-primary" onclick="document.getElementById('modalEdit').style.display='block'" style="width:auto;">Editar</button>
      </div>
      <div class="col-sm-4 text-center">
          <img src="<?php echo base_url();?>img/elimina_2.png" width="150px" height="150px" />
          <br><br>
          <button class="btn btn-primary" onclick="document.getElementById('modalDelete').style.display='block'" style="width:auto;">Eliminar</button>   
      </div>
    </div>
  </div>
  <div class="row slideanim">

    <table border="2px">
      <thead>
        <tr>
          <th align="center" bgcolor="#000000" style="color:white">NOMBRE</th>
          <th align="center" bgcolor="#000000" style="color:white">DESCRIPCIÓN</th>
          <th align="center" bgcolor="#000000" style="color:white">VIGENCIA</th>
          <th align="center" bgcolor="#000000" style="color:white">TIENDA</th>
        </tr>
      </thead>
      <?php
        if($promo != FALSE){
          foreach ($promo->result() as $row) {
      ?>
      <tr>
        <td><?php echo $row->NombreP; ?></td>
        <td><?php echo $row->Descripcion; ?></td>
        <td><?php echo $row->Vigencia; ?></td>
        <td><?php echo $row->Nombre; ?></td>
      </tr>
      <?php
          }
        }
      ?>
    </table>

  </div>
</div>


<!-- Modal For Add -->
<div id="modalAdd" class="modal">
  
  <form class="modal-content animate add" enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>index.php/Welcome/ingresaPromo">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalAdd').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
     <center>
      <h6 style="font-size: 15px">* Datos Requeridos</h6>
    </center>
    <div class="container">
      <label for="name"><b>Nombre de la promoción *</b></label>
      <input id="name" type="text" placeholder="Ingresa Nombre" name="name" required>
      
      <label for="descripcion"><b>Descripción</b></label>
      <input id="descripcion" type="text" placeholder="Descripción" name="descripcion">
	  
      <label for="vimagen"><b>Imagen Promoción *</b></label>
      <input id="vimagen" type="file" name="vimagen" onChange="ver(form.file.value)" required>

      <label for="vigencia"><b>Vigencia *</b></label>
      <input id="vigencia" type="text" placeholder="Del DD/MM/AAAA al DD/MM/AAAA" name="vigencia" required>

  	  <label for="Tname"><b>Tienda *</b></label>
  	  <select name="Tname" id="Tname">
  		  <?php
  			if($tienda != FALSE){
  			  foreach ($tienda->result() as $row) {
  		  ?>
  			<option value="<?php echo $row->idTienda?>">
  			<?php
  				echo $row->Nombre;
  			?>
  			</option>
  		  <?php
  			  }
  		   }
  		  ?>
  	  </select>
	    
      <button type="submit">Agregar</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('modalAdd').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<!-- Modal For Dalete -->
<div id="modalDelete" class="modal">
  
  <form class="modal-content animate add" method="POST" action="<?php echo base_url();?>index.php/Welcome/eliminaPromo">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalDelete').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="deletePromo"><b>Buscar Promoción a Eliminar</b></label>
      <select name="deletePromo" id="deletePromo">
        <?php
        if($promo != FALSE){
          foreach ($promo->result() as $row) {
        ?>
        <option value="<?php echo $row->idPromocion?>">
        <?php
          echo $row->NombreP;
        ?>
        </option>
        <?php
          }
         }
        ?>
      </select>
        
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('modalDelete').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<!-- Modal For Edit -->
<div id="modalEdit" class="modal">
  
  <form class="modal-content animate add" method="POST" action="<?php echo base_url();?>index.php/Welcome/modificaPromo/#modifica">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalEdit').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="editPromo"><b>Buscar Promoción para Modificar</b></label>
      <select name="editPromo" id="editPromo">
        <?php
        if($promo != FALSE){
          foreach ($promo->result() as $row) {
        ?>
        <option value="<?php echo $row->idPromocion?>">
        <?php
          echo $row->NombreP;
        ?>
        </option>
        <?php
          }
         }
        ?>
      </select>
        
      <button type="submit">Buscar</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('modalEdit').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
