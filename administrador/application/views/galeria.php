<head>
  <title>GALERIA | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<!-- Container (Gallery Section) -->
<div id="galeria" class="container-fluid text-center">
  <h2>GALERÍA</h2><br>
  <div class="row">
    <p>Da clic para ir a la página de <a href="http://192.168.1.7/CCVictoria" target="__blank">Centro Comercial La Victoria</a></p>
    <hr>
    <div class="row slideanim">
      <!--<div class="col-sm-6 text-center">
          <img src="<?php echo base_url();?>img/nuevo_2.png" width="150px" height="150px" />
          <br><br>
          <button class="btn btn-primary" onclick="document.getElementById('modalAdd').style.display='block'" style="width:auto;">Agregar</button>
      </div>
      <div class="col-sm-6 text-center">
          <img src="<?php echo base_url();?>img/elimina_2.png" width="150px" height="150px" />
          <br><br>
          <button class="btn btn-primary" onclick="document.getElementById('modalDelete').style.display='block'" style="width:auto;">Eliminar</button>
      </div>-->
      <form class="login" enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>Welcome/ingresaFoto">
        <p for="vimagen"><b>Selecciona Imagen</b></p>
          <center>
            <input type="file" name="vimagen" required>
            <br>
          </center>
        <button type="submit" style="width: 30%;">Agregar</button>
      </form>
    </div>
  </div>


<div class="row slideanim">

    <table border="2px">
      <thead>
        <tr>
          <!--<th align="center" bgcolor="#000000" style="color:white">ID FOTO</th>-->
          <th align="center" bgcolor="#000000" style="color:white">NOMBRE</th>
          <th align="center" bgcolor="#000000" style="color:white">IMAGEN</th>
          <th align="center" bgcolor="#000000" style="color:white"></th>
        </tr>
      </thead>
      <?php
        if($fotos != FALSE){
          foreach ($fotos->result() as $row) {
      ?>
      <tr>
        <!--<td><?php echo $row->idFotos; ?></td>-->
        <td><?php echo $row->Nombre; ?></td>
        <td><img src="<?php echo base_url();?>galeriaFotos/<?php echo $row->Nombre; ?>" style="width: 100px; height: 90px;"></td>
        <td><a href="javascript:confirmacion_borrar('<?php echo base_url();?>Welcome/foto/<?php echo $row->idFotos;?>/#galeria');" class="btn btn-danger" style="">Eliminar</a></td>
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
  
  <form class="modal-content animate add" action="#">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalAdd').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">

      <label for="vimagen"><b>Foto</b></label>
      <input id="vimagen" type="text" name="vimagen" required>
        
      <button type="submit">Agregar</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('modalAdd').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<!-- Modal For Dalete -->
<div id="modalDelete" class="modal">
  
  <form class="modal-content animate add" action="#">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalDelete').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="deleteFoto"><b>Buscar Foto a Eliminar</b></label>
      <input id="deleteFoto" type="text" name="deleteFoto" required>
        
      <button type="submit">Buscar</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('modalDelete').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>
