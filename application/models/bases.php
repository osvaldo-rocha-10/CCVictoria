<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class bases extends CI_Model {

  function __construct()
    {parent::__construct();}

  public function GetTienda($data){
    $sql = 'SELECT * FROM tienda WHERE No_Local = "'.$data['id'].'"';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function GetTiendaName($NameTienda){
    $sql = 'SELECT * FROM tienda WHERE Nombre = "'.$NameTienda.'"';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function GetTiendas(){
    //$sql = 'SELECT * FROM tienda';
    $sql = 'SELECT * FROM tienda WHERE idTienda != "1000" AND idTienda != "2000" AND idTienda != "3000" AND idTienda != "4000" ORDER BY Nombre';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function GetEvento(){
    $sql = 'SELECT * FROM evento WHERE Tipo != 2 ORDER BY Nombre';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function GetPromo(){
    $sql = 'SELECT * FROM promocion ORDER BY NombreP';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function GetEmpleos(){
    $sql = 'SELECT * FROM empleo ORDER BY Nombre';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function GetAvisos(){
    $sql = 'SELECT * FROM avisos';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function GetFotos(){
    $sql = 'SELECT * FROM fotos ORDER BY Nombre';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function GetGirosTienda(){
    $sql = 'SELECT * FROM girotienda';
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

  public function GetTiendaEmpleo(){
    $sql = 'SELECT * FROM tiendaempleo';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function GetTiendaLista(){
    $sql = 'SELECT * FROM tienda';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }
    
  public function AgregarComentarios($data){
      $sql =   'INSERT INTO comentarios (idComentarios, Nombre, Email, Descripcion) VALUES (NULL, "'.$data['Nombre'].'", "'.$data['email'].'", "'.$data['comments'].'")';
      $query = $this->db->query($sql);
    
  }

  public function GetPromoID($id_promo){
    $sql = 'SELECT p.idPromocion, p.NombreP, p.Descripcion, p.Imagen, p.Vigencia, t.idTienda, t.Nombre FROM promocion AS p INNER JOIN tienda AS t ON p.Tienda_idTienda=t.idTienda WHERE p.idPromocion = "'.$id_promo.'"';
    //$sql = 'SELECT * FROM promocion WHERE idPromocion = "'.$id_promo.'"';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function GetEventoID($id_evento){
    $sql = 'SELECT * FROM evento WHERE idEvento = "'.$id_evento.'"';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

  public function GetEventoCantidad(){
    $sql = 'SELECT * FROM evento WHERE Tipo = 2';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query->num_rows();
    else
      return FALSE;
  }

  public function GetEventoTipo2(){
    $sql = 'SELECT * FROM evento WHERE Tipo = 2';
    $query = $this->db->query($sql);

    if($query->num_rows() > 0)
      return $query;
    else
      return FALSE;
  }

}
?>