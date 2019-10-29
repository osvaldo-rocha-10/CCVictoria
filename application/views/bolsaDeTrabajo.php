<head>
  <title>BOLSA DE TRABAJO | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<!-- Container (Work Section) -->
<div id="empleos" class="container-fluid text-center">
  <h2>BOLSA DE TRABAJO</h2>
  <hr>
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
        <!--<td><a href="<?php echo base_url();?>index.php/Welcome/horasUser/<?php echo $row->ID; ?>"><?php echo $row->Nombre; ?></a></td>-->
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
  <hr>
  <div class="row slideanim">
    
  </div>
</div>