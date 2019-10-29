<head>
  <title>INICIAR SESIÓN | CENTRO COMERCIAL LA VICTORIA</title>
</head>

<div class="container-fluid text-center">    
  
    <div class="col-sm-2">
      <!--<p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>-->
    </div>
    <div class="col-sm-8 text-center"> 
      <h2><center>ADMINISTRADOR</center></h2>
      <hr>
      <form class="login" method="POST" action="<?php echo base_url();?>validar" style="width:100%">
        <div class="imgcontainer">
          <img src="<?php echo base_url();?>img/usuario.png" alt="Avatar" class="avatar">
        </div>

        <div class="container-fluid">
          
          <p for="usuario"><b>Usuario</b></p>
          <input type="text" class="input" name="user" placeholder="INGRESE USUARIO" required><br>

          <p for="psw"><b>Contraseña</b></p>
          <input type="password" class="input" name="clave" placeholder="INGRESE CONTRASEÑA" required><br>
              
          <button type="submit">Entrar</button>
          <!--<a href="<?php echo base_url();?>index.php/Welcome/index"><button type="button" class="cancelbtn" width="700px">Cancelar</button></a>-->
          
        </div>
        <div class="text-center">
          <a href="#"><p>¿Olvidaste tu contraseña?</p></a>
        </div>
      </form>
    </div>
    <div class="col-sm-2">
      <!--<div class="well">
        <p>ADS</p>
      </div>
      <div class="well">
        <p>ADS</p>
      </div>-->
    </div>
  
</div>