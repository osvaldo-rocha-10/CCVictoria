<head>
  <title>EMPLEOS | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<!-- Container (About Section) -->
<div id="empleos" class="container-fluid text-center">
  <h2>EMPLEOS</h2>
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
          <th align="center" bgcolor="#000000" style="color:white">VACANTE</th>
          <th align="center" bgcolor="#000000" style="color:white">DESCRIPCIÓN</th>
          <th align="center" bgcolor="#000000" style="color:white">TIENDA</th>
          <th align="center" bgcolor="#000000" style="color:white">SUELDO</th>
          <th align="center" bgcolor="#000000" style="color:white">HORARIO</th>
          <th align="center" bgcolor="#000000" style="color:white">HORARIO DE ENTREVISTAS</th>
        </tr>
      </thead>
      <?php
        if($empleo != FALSE){
          foreach ($empleo->result() as $row) {
      ?>
      <tr>
        <td><?php echo $row->Nombre; ?></td>
        <td><?php echo $row->Descripcion; ?></td>
        <?php foreach ($tiendaempleo->result() as $lista) {
          if($lista->Empleos_idEmpleos == $row->idEmpleos){
            foreach ($tienda->result() as $listaTiendas) {
              if($listaTiendas->idTienda == $lista->Tienda_idTienda){
        ?>
        <td><?php echo $listaTiendas->Nombre; ?></td>
        <?php
              }
            }
          }
        } ?>
        <td><?php echo $row->Sueldo; ?></td>
        <td><?php echo $row->Horario; ?></td>
        <td><?php echo $row->Atencion; ?></td>
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
  
  <form class="modal-content animate add" method="POST" action="<?php echo base_url();?>index.php/Welcome/ingresaEmpleo">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalAdd').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="vacante"><b>Vacante</b></label>
      <input id="vacante" type="text" placeholder="Ingresa Vacante" name="vacante" required>

      <label for="Tname"><b>Tienda</b></label>
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

      <label for="descripcion"><b>Descripción</b></label>
      <input id="descripcion" type="text" placeholder="Descripción" name="descripcion" required>

      <label for="sueldo"><b>Sueldo</b></label>
      <input id="sueldo" type="text" placeholder="Ingrese Sueldo" name="sueldo" required>

      <label for="horario"><b>Horario de Trabajo</b></label>
      <input id="horario" type="text" placeholder="9:00 - 21:00" name="horario" required>

      <label for="atencion"><b>Horario de Atención</b></label>
      <input id="atencion" type="text" placeholder="9:00 - 21:00" name="atencion" required>

      <button type="submit">Agregar</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('modalAdd').style.display='none'" class="cancelbtn">Cancel</button>
    </div>
  </form>
</div>

<!-- Modal For Dalete -->
<div id="modalDelete" class="modal">
  
  <form class="modal-content animate add" method="POST" action="<?php echo base_url();?>index.php/Welcome/eliminaEmpleo">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalDelete').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="deleteEmpleo"><b>Buscar Vacante a Eliminar</b></label>
      <select name="deleteEmpleo" id="deleteEmpleo">
        <?php
        if($empleo != FALSE){
          foreach ($empleo->result() as $row) {
        ?>
        <option value="<?php echo $row->idEmpleos?>">
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
  
  <form class="modal-content animate add" method="POST" action="<?php echo base_url();?>index.php/Welcome/modificaEmpleo/#modifica">
    <div class="imgcontainer">
      <span onclick="document.getElementById('modalEdit').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="editEmpleo"><b>Buscar Vacante para Modificar</b></label>
      <select name="editEmpleo" id="editEmpleo">
        <?php
        if($empleo != FALSE){
          foreach ($empleo->result() as $row) {
        ?>
        <option value="<?php echo $row->idEmpleos?>">
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
