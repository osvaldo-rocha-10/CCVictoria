<head>
  <title>EVENTOS | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<!-- Container (Event Section) -->
<div id="eventos" class="container-fluid">
  <div class="text-center">
    <h2>EVENTOS</h2>
  </div>
  <div class="row slideanim text-center">
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
          <th align="center" bgcolor="#000000" style="color:white">LUGAR</th>
          <th align="center" bgcolor="#000000" style="color:white">DESCRIPCIÓN</th>
          <th align="center" bgcolor="#000000" style="color:white">FECHA</th>
          <th align="center" bgcolor="#000000" style="color:white">HORARIO</th>
          <th align="center" bgcolor="#000000" style="color:white">TIPO</th>
        </tr>
      </thead>
      <?php
        if($evento != FALSE){
          foreach ($evento->result() as $row) {
      ?>
      <tr>
        <td><?php echo $row->Nombre; ?></td>
        <td><?php echo $row->Lugar; ?></td>
        <td><?php echo $row->Descripcion; ?></td>
        <td><?php echo $row->FechaEvento; ?></td>
        <td><?php echo $row->Horario; ?></td>
        <td><?php echo $row->Tipo; ?></td>
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
  
  <form class="modal-content animate add" enctype="multipart/form-data" method="POST" action="<?php echo base_url();?>index.php/Welcome/ingresaEvento">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalAdd').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>
    <center>
      <h6 style="font-size: 15px">* Datos Requeridos</h6>
    </center>
    <div class="container">
      <label for="name"><b>Nombre del evento *</b></label>
      <input id="name" type="text" placeholder="Ingresa Nombre" name="name" required>

      <label for="lugar"><b>Lugar *</b></label>
      <input id="lugar" type="text" placeholder="Ingresa Responsable" name="lugar" required>

      <label for="descripcion"><b>Descripción</b></label>
      <input id="descripcion" type="text" placeholder="Descripción" name="descripcion">

      <label for="fecha"><b>Fecha *</b></label>
      <input id="fecha" type="text" placeholder="DD/MM/AAAA" name="fecha" required>

      <label for="horario"><b>Horario *</b></label>
      <input id="horario" type="text" placeholder="9:00 - 21:00" name="horario" required>

      <label for="vimagen"><b>Imagen Evento *</b></label>
      <input id="vimagen" type="file" name="vimagen" onChange="ver(form.file.value)" required>

      <label for="tipo"><b>Tipo *</b></label>
      <select name="tipo" id="tipo" required>
        <option value="1">1 (Sección Eventos)</option>
        <option value="2">2 (Sección Inicio)</option>
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
  
  <form class="modal-content animate add" method="POST" action="<?php echo base_url();?>index.php/Welcome/eliminaEvento">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalDelete').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="deleteEvento"><b>Buscar Evento a Eliminar</b></label>
      <select name="deleteEvento" id="deleteEvento">
        <?php
        if($evento != FALSE){
          foreach ($evento->result() as $row) {
        ?>
        <option value="<?php echo $row->idEvento?>">
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
  
  <form class="modal-content animate add" method="POST" action="<?php echo base_url();?>index.php/Welcome/modificaEvento/#modifica">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalEdit').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="editEvento"><b>Buscar Evento para Modificar</b></label>
      <select name="editEvento" id="editEvento">
        <?php
        if($evento != FALSE){
          foreach ($evento->result() as $row) {
        ?>
        <option value="<?php echo $row->idEvento?>">
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
