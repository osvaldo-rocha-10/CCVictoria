<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bases extends CI_Model {

  function __construct()
    {parent::__construct();}


  /* FUNCIÓN PARA VALIDAR EL USUARIO */
  public function validaUsuario($data){
  	$sql = 'SELECT User, pass FROM usuario WHERE User="'.$data['user'].'" AND pass="'.$data['clave'].'"';
  	$query = $this->db->query($sql);

  	if($query->num_rows() > 0)
  		return $query;
  	else
  		return FALSE;
  }

  /* FUNCIONES PARA INGRESAR DATOS A LA BASE DE DATOS (PARTE DEL MODELO) */
  public function ingresaTienda($data){
  	$sql = 'INSERT INTO tienda (idTienda, Nombre, Descripcion, Telefono, Horario, Imagen, No_Local, Pagina_Web, Facebook, Twitter, Instagram) VALUES (NULL, "'.$data['Tname'].'", "'.$data['descripcion'].'", "'.$data['tel'].'", "'.$data['horario'].'", "'.$data['vimagen'].'", "'.$data['local'].'", "'.$data['Page'].'", "'.$data['facebook'].'","'.$data['twitter'].'", "'.$data['instagram'].'")';
  	$query = $this->db->query($sql);
  }
  
  public function ingresaPromo($data){
  	$sql = 'INSERT INTO promocion (idPromocion, NombreP, Descripcion, Imagen, Vigencia, Tienda_idTienda) VALUES (NULL, "'.$data['name'].'", "'.$data['descripcion'].'", "'.$data['vimagen'].'", "'.$data['vigencia'].'", "'.$data['Tname'].'")';
  	$query = $this->db->query($sql);
  }

  public function ingresaEvento($data){
  	$sql = 'INSERT INTO evento (idEvento, Nombre, Lugar, Descripcion, FechaEvento, Horario, Imagen, Tipo) VALUES (NULL, "'.$data['name'].'", "'.$data['lugar'].'", "'.$data['descripcion'].'", "'.$data['fecha'].'", "'.$data['horario'].'", "'.$data['vimagen'].'", "'.$data['tipo'].'")';
  	$query = $this->db->query($sql);
  }

  public function ingresaEmpleo($data){
  	$sql = 'INSERT INTO empleo (idEmpleos, Nombre, Descripcion, Horario, Sueldo, Atencion) VALUES (NULL, "'.$data['vacante'].'", "'.$data['descripcion'].'", "'.$data['horario'].'", "'.$data['sueldo'].'", "'.$data['atencion'].'")';
  	$query = $this->db->query($sql);
  }

  public function ingresaAviso($data){
    $sql = 'INSERT INTO avisos (idAvisos, Contenido) VALUES (NULL, "'.$data['contenido'].'")';
    $query = $this->db->query($sql);
  }

  public function ingresaGiroTienda($data){
    $sql = 'INSERT INTO girotienda (Giro_idGiro, Tienda_idTienda) VALUES ("'.$data['Giro'].'", "'.$data['idTienda'].'")';
    $query = $this->db->query($sql);
  }

  public function ingresaFoto($data){
    $sql = 'INSERT INTO fotos (idFotos, Nombre) VALUES (NULL, "'.$data['vimagen'].'")';
    $query = $this->db->query($sql);
  }
  
  /* FUNCIONES PARA ELIMINAR DATOS A LA BASE DE DATOS (PARTE DEL MODELO) */
  public function eliminaTienda($data){
  		$sql = 'DELETE FROM tienda WHERE idTienda = "'.$data['deleteTienda'].'"';
  		$query = $this->db->query($sql);
  }

  public function eliminaGiroTienda($data){
      $sql = 'DELETE FROM girotienda WHERE Tienda_idTienda = "'.$data['deleteTienda'].'"';
      $query = $this->db->query($sql);
  }

  public function eliminaEvento($data){
  	/*$sql = 'SELECT * FROM promocion WHERE Nombre = "'.$data['deletePromo'].'"';
  	$query = $this->db->query($sql);
  	
  	if ($query->num_rows() > 0) {*/
  		$sql = 'DELETE FROM evento WHERE idEvento = "'.$data['deleteEvento'].'"';
  		$query = $this->db->query($sql);
  		
  		/*if($query->num_rows() > 0){
  			return $query;
  		}
  		else{
  			return FALSE;
  		}
  	}*/
    	
  }
  
  public function eliminaPromo($data){
  	/*$sql = 'SELECT * FROM promocion WHERE Nombre = "'.$data['deletePromo'].'"';
  	$query = $this->db->query($sql);
  	
  	if ($query->num_rows() > 0) {*/
  		$sql = 'DELETE FROM promocion WHERE idPromocion = "'.$data['deletePromo'].'"';
  		$query = $this->db->query($sql);
  		
  		/*if($query->num_rows() > 0){
  			return $query;
  		}
  		else{
  			return FALSE;
  		}
  	}*/
  	
  }

  public function eliminaEmpleo($data){
  	/*$sql = 'SELECT * FROM promocion WHERE Nombre = "'.$data['deletePromo'].'"';
  	$query = $this->db->query($sql);
  	
  	if ($query->num_rows() > 0) {*/
  		$sql = 'DELETE FROM empleo WHERE idEmpleos = "'.$data['deleteEmpleo'].'"';
  		$query = $this->db->query($sql);
  		
  		/*if($query->num_rows() > 0){
  			return $query;
  		}
  		else{
  			return FALSE;
  		}
  	}*/
  	
  }

  public function eliminaComentario($deleteID){
    /*$sql = 'SELECT * FROM promocion WHERE Nombre = "'.$data['deletePromo'].'"';
    $query = $this->db->query($sql);
    
    if ($query->num_rows() > 0) {*/
      $sql = 'DELETE FROM comentarios WHERE idComentarios = "'.$deleteID.'"';
      $query = $this->db->query($sql);
      
      /*if($query->num_rows() > 0){
        return $query;
      }
      else{
        return FALSE;
      }
    }*/
    
  }

  public function eliminaAviso($deleteID){
    /*$sql = 'SELECT * FROM promocion WHERE Nombre = "'.$data['deletePromo'].'"';
    $query = $this->db->query($sql);
    
    if ($query->num_rows() > 0) {*/
      $sql = 'DELETE FROM avisos WHERE idAvisos = "'.$deleteID.'"';
      $query = $this->db->query($sql);
      
      /*if($query->num_rows() > 0){
        return $query;
      }
      else{
        return FALSE;
      }
    }*/
    
  }

  public function eliminaFoto($deleteID){
    /*$sql = 'SELECT * FROM promocion WHERE Nombre = "'.$data['deletePromo'].'"';
    $query = $this->db->query($sql);
    
    if ($query->num_rows() > 0) {*/
      $sql = 'DELETE FROM fotos WHERE idFotos = "'.$deleteID.'"';
      $query = $this->db->query($sql);
      
      /*if($query->num_rows() > 0){
        return $query;
      }
      else{
        return FALSE;
      }
    }*/
    
  }
  
  /* FUNCIONES PARA OBTENER DATOS DE LA BASE DE DATOS */
  public function getTiendas(){
  	$sql = 'SELECT * FROM tienda WHERE idTienda != "1000" AND idTienda != "2000" AND idTienda != "3000" AND idTienda != "4000" ORDER BY Nombre';
  	$query = $this->db->query($sql);
  	
  	if($query->num_rows() > 0)
    		return $query;
    	else
    		return FALSE;
  }

  public function getPromos(){
    //$sql = 'select p.idPromocion, p.Nombre, p.Descripcion, p.Vigencia, t.idTienda, t.Nombre from promocion as p inner join tienda as t on p.Tienda_idTienda=t.idTienda order by p.Nombre';
  	$sql = 'SELECT p.idPromocion, p.NombreP, p.Descripcion, p.Vigencia, t.idTienda, t.Nombre FROM promocion AS p INNER JOIN tienda AS t ON p.Tienda_idTienda=t.idTienda ORDER BY p.NombreP';
  	$query = $this->db->query($sql);
  	
  	if($query->num_rows() > 0)
    		return $query;
    	else
    		return FALSE;
  }

  public function getEventos(){
  	$sql = 'SELECT * FROM evento ORDER BY Nombre';
  	$query = $this->db->query($sql);
  	
  	if($query->num_rows() > 0)
    		return $query;
    	else
    		return FALSE;
  }

  public function getEmpleos(){
  	$sql = 'SELECT * FROM empleo ORDER BY Nombre';
  	$query = $this->db->query($sql);
  	
  	if($query->num_rows() > 0)
    		return $query;
    	else
    		return FALSE;
  }

  public function getComentarios(){
    $sql = 'SELECT * FROM comentarios ORDER BY Nombre';
    $query = $this->db->query($sql);
    
    if($query->num_rows() > 0)
        return $query;
      else
        return FALSE;
  }

   public function getAvisos(){
    $sql = 'SELECT * FROM avisos ORDER BY idAvisos';
    $query = $this->db->query($sql);
    
    if($query->num_rows() > 0)
        return $query;
      else
        return FALSE;
  }

  public function getLocales(){
    $sql = 'SELECT * FROM local ORDER BY idLocal';
    $query = $this->db->query($sql);
    
    if($query->num_rows() > 0)
        return $query;
      else
        return FALSE;
  }

  public function getFotos(){
    $sql = 'SELECT * FROM fotos ORDER BY Nombre';
    $query = $this->db->query($sql);
    
    if($query->num_rows() > 0)
        return $query;
      else
        return FALSE;
  }

  /* FUNCIONES PARA ACTUALIZAR LOS DATOS DE LA BASE (PARTE DEL MODELO) */
  public function updateTienda($data){
  	$sql = 'UPDATE tienda SET Nombre = "'.$data['Tname'].'", Descripcion = "'.$data['descripcion'].'", Telefono = "'.$data['tel'].'", Horario = "'.$data['horario'].'", No_Local = "'.$data['local'].'", Pagina_Web = "'.$data['Page'].'", Facebook = "'.$data['facebook'].'", Twitter = "'.$data['twitter'].'", Instagram = "'.$data['instagram'].'" WHERE idTienda = "'.$data['idT'].'"';
  	$query = $this->db->query($sql);
  }

  public function updateEmpleo($data){
  	$sql = 'UPDATE empleo SET Nombre = "'.$data['vacante'].'", Descripcion = "'.$data['descripcion'].'", Horario = "'.$data['horario'].'", Sueldo = "'.$data['sueldo'].'", Atencion = "'.$data['atencion'].'" WHERE idEmpleos = "'.$data['idE'].'"';
  	$query = $this->db->query($sql);
  }

  public function updatePromo($data){
    $sql = 'UPDATE promocion SET NombreP = "'.$data['name'].'", Descripcion = "'.$data['descripcion'].'", Vigencia = "'.$data['vigencia'].'" WHERE idEmpleos = "'.$data['idP'].'"';
    $query = $this->db->query($sql);
  }

  public function updateEvento($data){
    $sql = 'UPDATE evento SET Nombre = "'.$data['name'].'", Lugar = "'.$data['lugar'].'", Descripcion = "'.$data['descripcion'].'", FechaEvento = "'.$data['fecha'].'", Horario = "'.$data['horario'].'", Tipo = '.$data['tipo'].' WHERE idEvento = "'.$data['idE'].'"';
    $query = $this->db->query($sql);
  }

  /* CONSULTAS EXTRAS */
  public function getEmpleoNombre($data){
  	$sql = 'SELECT idEmpleos FROM empleo WHERE Nombre = "'.$data['vacante'].'"';
  	$query = $this->db->query($sql);
  	
  	if($query->num_rows() > 0)
    		return $query;
    	else
    		return FALSE;
  }

  public function ingresaEmpleoTienda($data){
  	$sql = 'INSERT INTO tiendaempleo (Tienda_idTienda, Empleos_idEmpleos) VALUES ("'.$data['Tname'].'", "'.$data['id_Empleo'].'")';
  	$query = $this->db->query($sql);
  }

  public function updateEmpleoTienda($data){
  	$sql = 'UPDATE tiendaempleo SET Tienda_idTienda = "'.$data['Tname'].'" WHERE Empleos_idEmpleos = "'.$data['idE'].'"';
  	$query = $this->db->query($sql);
  }

  public function getTiendaID($id_tienda){
  	$sql = 'SELECT * FROM tienda WHERE idTienda = "'.$id_tienda.'"';
  	$query = $this->db->query($sql);
  	
  	if($query->num_rows() > 0)
    		return $query;
    	else
    		return FALSE;
  }

  public function getTiendaName($data){
    $sql = 'SELECT * FROM tienda WHERE Nombre = "'.$data['Tname'].'"';
    $query = $this->db->query($sql);
    
    if($query->num_rows() > 0)
        return $query;
      else
        return FALSE;
  }

  public function GetTiendaEmpleoID($id_empleo){
    $sql = 'SELECT * FROM tiendaempleo WHERE Empleos_idEmpleos = "'.$id_empleo.'"';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function GetTiendaEmpleo(){
    $sql = 'SELECT * FROM tiendaempleo';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function GetGiros(){
    $sql = 'SELECT * FROM giro';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function getEmpleoID($id_empleo){
  $sql = 'SELECT * FROM empleo WHERE idEmpleos = "'.$id_empleo.'"';
  $query = $this->db->query($sql);
  
  if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function getPromosID($id_promo){
    $sql = 'SELECT * FROM promocion WHERE idPromocion = "'.$id_promo.'"';
    $query = $this->db->query($sql);
    
    if($query->num_rows() > 0)
        return $query;
      else
        return FALSE;
  }

  public function getEventosID($id_evento){
    $sql = 'SELECT * FROM evento WHERE idEvento = "'.$id_evento.'"';
    $query = $this->db->query($sql);
    
    if($query->num_rows() > 0)
        return $query;
      else
        return FALSE;
  }

}
?>