<head>
  <title>TIENDAS | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<!-- Container (Shop Section) -->
<div id="tiendas" class="container-fluid text-center ">
  <h2>TIENDAS</h2>
  <div class="row slideanim">
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
  <div class="row slideanim text-center">
    <hr>
    <table border="2px">
      <thead>
        <tr>
          <th align="center" bgcolor="#000000" style="color:white">NOMBRE</th>
          <th align="center" bgcolor="#000000" style="color:white">DESCRIPCIÓN</th>
          <th align="center" bgcolor="#000000" style="color:white">TELEFONO</th>
          <th align="center" bgcolor="#000000" style="color:white">HORARIO</th>
          <th align="center" bgcolor="#000000" style="color:white">NO. LOCAL</th>
          <th align="center" bgcolor="#000000" style="color:white">PAGINA WEB</th>
          <th align="center" bgcolor="#000000" style="color:white">FACEBOOK</th>
          <th align="center" bgcolor="#000000" style="color:white">TWITTER</th>
          <th align="center" bgcolor="#000000" style="color:white">INSTAGRAM</th>
        </tr>
      </thead>
      <?php
        if($tienda != FALSE){
          foreach ($tienda->result() as $row) {
      ?>
      <tr>
        <td><?php echo $row->Nombre; ?></td>
        <td><?php echo $row->Descripcion; ?></td>
        <td><?php echo $row->Telefono; ?></td>
        <td><?php echo $row->Horario; ?></td>
        <?php if($row->No_Local == 5000 || $row->No_Local == 6000){ ?>
          <td>S/N</td>
        <?php }
        else{ ?>
          <td><?php echo $row->No_Local; ?></td>
        <?php } ?>
        <td><a href="http://<?php echo $row->Pagina_Web; ?>" target="__blank"><?php echo $row->Pagina_Web; ?></a></td>
        <td><a href="http://<?php echo $row->Facebook; ?>" target="__blank"><?php echo $row->Facebook; ?></a></td>
        <td><a href="http://<?php echo $row->Twitter; ?>" target="__blank"><?php echo $row->Twitter; ?></a></td>
        <td><a href="http://<?php echo $row->Instagram; ?>" target="__blank"><?php echo $row->Instagram; ?></a></td>
      </tr>
      <?php
          }
        }
      ?>
    </table>
    <hr>
  </div>
</div>


<!-- Modal For Add -->
<div id="modalAdd" class="modal">
  
  <form class="modal-content animate add" enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>index.php/Welcome/ingresaTienda">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalAdd').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>}
    <center>
      <h6 style="font-size: 15px">* Datos Requeridos</h6>
    </center>
    <div class="container">
      <label for="Tname"><b>Nombre de la Tienda *</b></label>
      <input type="text" placeholder="Ingresa Nombre" name="Tname" required>

      <label for="descripcion"><b>Descripción</b></label>
      <input id="descripcion" type="text" placeholder="Descripción" name="descripcion">

      <label for="tel"><b>Telefono</b></label>
      <input id="tel" type="text" placeholder="Ingresa Telefono" name="tel">

      <label for="horario"><b>Horario *</b></label>
      <input id="horario" type="text" placeholder="9:00 - 21:00" name="horario" required>

      <label for="vimagen"><b>Imagen Logo *</b></label>
      <!--<input id="vimagen" type="text" name="vimagen" required>-->
	    <input id="vimagen" type="file" name="vimagen" onChange="ver(form.file.value)" required>

      <label for="local"><b>No. Local *</b></label>
      <!--<input id="local" type="text" placeholder="Ingresa No. Local" name="local" required>-->
      <select name="local" id="local" required>
        <?php
        if($locales != FALSE){
          foreach ($locales->result() as $key) {
        ?>
        <option value="<?php echo $key->NombreL;?>">
        <?php
          echo $key->NombreL;
        ?>
        </option>
        <?php
          }
         }
        ?>
      </select>

      <label for="Page"><b>Página Web</b></label>
      <input id="Page" type="text" placeholder="Ingresa Página Web" name="Page">

      <label for="facebook"><b>Facebook</b></label>
      <input id="facebook" type="text" placeholder="Ingresa Facebook" name="facebook">

      <label for="twitter"><b>Twitter</b></label>
      <input id="twitter" type="text" placeholder="Ingresa Twitter" name="twitter">

      <label for="instagram"><b>Instagram</b></label>
      <input id="instagram" type="text" placeholder="Ingresa Instagram" name="instagram">

      <label for="giro"><b>Giro Comercial *</b></label>
      <select name="giro" id="giro" required>
        <?php
        if($giros != FALSE){
          foreach ($giros->result() as $key) {
        ?>
        <option value="<?php echo $key->idGiro;?>">
        <?php
          echo $key->Categoria;
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
  
  <form class="modal-content animate add" method="POST" action="<?php echo base_url();?>index.php/Welcome/eliminaTienda">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalDelete').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="deleteTienda"><b>Buscar Tienda a Eliminar</b></label>
      <select name="deleteTienda" id="deleteTienda">
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
        
      <button type="submit" class="btn btn-danger">Eliminar</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('modalDelete').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<!-- Modal For Edit -->
<div id="modalEdit" class="modal">
  
  <form class="modal-content animate add" method="POST" action="<?php echo base_url();?>index.php/Welcome/modificaTienda">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalEdit').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="editTienda"><b>Buscar Tienda para Modificar</b></label>
      <select name="editTienda" id="editTienda">
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
        
      <button type="submit">Buscar</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('modalEdit').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
