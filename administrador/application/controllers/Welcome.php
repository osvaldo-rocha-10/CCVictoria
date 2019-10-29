<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('bases');
		$this->load->helper('file');
		$this->load->helper('download');
		$this->load->library('zip');
	}

	/* FUNCIÓN PARA REALIZAR UN BACKUP A LA BASE DE DATOS */
	public function database_backup(){
		$this->load->dbutil();
		$db_format = array('format' => 'zip', 'filename' => 'ccvictoria_backup.sql');
		$backup =& $this->dbutil->backup($db_format);
		$dbname = 'backup-on-'.date('Y-m-d').'.zip';
		$save = 'assets/db_backup/'.$dbname;
		write_file($save, $backup);
		force_download($dbname, $backup);
	}

	/* FUNCIONES PARA ABRIR LAS PAGINAS */
	public function index()
	{
		if (isset($_SESSION['useradmi'])) {
			redirect('panel_administrador', 'location');
		}
		else{
			$this->load->view('header');
			$this->load->view('encabezado_principal');
			$this->load->view('login');
			$this->load->view('footer');
		}
		
	}

	public function panel_administrador()
	{
		if (isset($_SESSION['useradmi'])) {
			$this->load->view('header');
			$this->load->view('encabezado_panel');
			$this->load->view('panel_admi');
			$this->load->view('footer');
		}
		else{
			redirect('index', 'location');
		}
	}

	public function tienda()
	{
		if (isset($_SESSION['useradmi'])) {
			$data['tienda'] = $this->bases->getTiendas();
			$data['locales'] = $this->bases->getLocales();
			$data['giros'] = $this->bases->GetGiros();
			$this->load->view('header');
			$this->load->view('encabezado_admi');
			$this->load->view('tiendas', $data);
			$this->load->view('footer');
		}
		else{
			redirect('index', 'location');
		}
	}

	public function evento()
	{
		if (isset($_SESSION['useradmi'])) {
			$data['evento'] = $this->bases->getEventos();
			$this->load->view('header');
			$this->load->view('encabezado_admi');
			$this->load->view('eventos', $data);
			$this->load->view('footer');
		}
		else{
			redirect('index', 'location');
		}
	}

	public function promocion()
	{
		if (isset($_SESSION['useradmi'])) {
			$data['tienda'] = $this->bases->getTiendas();
			$data['promo'] = $this->bases->getPromos();
			$this->load->view('header');
			$this->load->view('encabezado_admi');
			$this->load->view('promociones', $data);
			$this->load->view('footer');
		}
		else{
			redirect('index', 'location');
		}
	}

	public function empleo()
	{
		if (isset($_SESSION['useradmi'])) {
			$data['tienda'] = $this->bases->getTiendas();
			$data['empleo'] = $this->bases->getEmpleos();
			$data['tiendaempleo'] = $this->bases->GetTiendaEmpleo();
			$this->load->view('header');
			$this->load->view('encabezado_admi');
			$this->load->view('empleos', $data);
			$this->load->view('footer');
		}
		else{
			redirect('index', 'location');
		}
	}

	public function foto()
	{
		if (isset($_SESSION['useradmi'])) {
			$deleteID = $this->uri->segment(3);
			$this->bases->eliminaFoto($deleteID);
			$data['fotos'] = $this->bases->getFotos();
			$this->load->view('header');
			$this->load->view('encabezado_admi');
			$this->load->view('galeria', $data);
			$this->load->view('footer');
		}
		else{
			redirect('index', 'location');
		}
	}

	public function aviso()
	{
		if (isset($_SESSION['useradmi'])) {
			$deleteID = $this->uri->segment(3);
			$this->bases->eliminaAviso($deleteID);
			$data['aviso'] = $this->bases->getAvisos();
			$this->load->view('header');
			$this->load->view('encabezado_admi');
			$this->load->view('avisos', $data);
			$this->load->view('footer');
		}
		else{
			redirect('index', 'location');
		}
	}

	public function comentarios()
	{
		if (isset($_SESSION['useradmi'])) {
			$deleteID = $this->uri->segment(3);
			$this->bases->eliminaComentario($deleteID);
			$data['comment'] = $this->bases->getComentarios();
			$this->load->view('header');
			$this->load->view('encabezado_admi');
			$this->load->view('comentario', $data);
			$this->load->view('footer');
		}
		else{
			redirect('index', 'location');
		}
	}

	public function politicas()
	{
		if (isset($_SESSION['useradmi'])) {
			$this->load->view('header');
			$this->load->view('encabezado_admi');
			$this->load->view('politicas_terminos');
			$this->load->view('footer');
		}
		else{
			$this->load->view('header');
			$this->load->view('encabezado_principal');
			$this->load->view('politicas_terminos');
			$this->load->view('footer');
		}
	}	


	/* FUNCIONES PARA VALIDAR Y CERRAR USUARIO */
	public function validaUsuario(){
		$user = $this->input->post('user',TRUE);
		$pass = $this->input->post('clave',TRUE);
		$data = array('user' => $user, 'clave' => $pass);
		$data['user'] = $this->bases->validaUsuario($data);

		if ($data['user'] == FALSE) {
			redirect('index','location');
		}
		else{
		    session_start();
		    $_SESSION['useradmi'] = $user;
		    $_SESSION['pass'] = $pass;
		    redirect('panel_administrador','location');
            
		}
	}

	public function cerrar_session(){
		session_start();
		session_unset();
		session_destroy();
		redirect('index','location');
	}

	/* FUNCIONES PARA INGRESAR DATOS A LA BASE DE DATOS (PARTE DEL CONTROLADOR) */
	public function ingresaTienda(){
		$Nombre = $this->input->post('Tname',TRUE);
		$Descripcion = $this->input->post('descripcion',TRUE);
		$Telefono = $this->input->post('tel',TRUE);
		$Horario = $this->input->post('horario',TRUE);
		//$Imagen = $this->input->post('vimagen',TRUE);
		$NoLocal = $this->input->post('local',TRUE);
		$Web = $this->input->post('Page',TRUE);
		$Facebook = $this->input->post('facebook',TRUE);
		$Twitter = $this->input->post('twitter',TRUE);
		$Instagram = $this->input->post('instagram',TRUE);
		$Giro = $this->input->post('giro',TRUE);
		$Imagen = $_FILES['vimagen']['name'];
		
		$data = array('Tname' => $Nombre, 'descripcion' => $Descripcion, 'tel' => $Telefono, 'horario' => $Horario, 'vimagen' => $Imagen, 'local' => $NoLocal, 'Page' => $Web, 'facebook' => $Facebook, 'twitter' => $Twitter, 'instagram' => $Instagram, 'Giro' => $Giro);
		$this->bases->ingresaTienda($data);

		$datosTienda = $this->bases->getTiendaName($data);
		foreach ($datosTienda->result() as $key) {
			$id_tienda = $key->idTienda;
		}

		$data = array('Giro' => $Giro, 'idTienda' => $id_tienda);
		$this->bases->ingresaGiroTienda($data);

		$dir_imagen = "C:/xampp/htdocs/CCVictoria/logo_tiendas/";
		$dir_subida = $dir_imagen.basename($_FILES['vimagen']['name']);
		move_uploaded_file($_FILES['vimagen']['tmp_name'], $dir_subida);

		//echo $data['descripcion'];
		redirect('tienda/#tiendas','location');

	}
	
	public function ingresaPromo(){
		$Nombre = $this->input->post('name',TRUE);
		$Descripcion = $this->input->post('descripcion',TRUE);
		//$Imagen = $this->input->post('vimagen',TRUE);
		$Vigencia = $this->input->post('vigencia',TRUE);
		$Tienda = $this->input->post('Tname',TRUE);
		$Imagen = $_FILES['vimagen']['name'];

		$data = array('name' => $Nombre, 'descripcion' => $Descripcion, 'vimagen' => $Imagen, 'vigencia' => $Vigencia, 'Tname' => $Tienda);
		$this->bases->ingresaPromo($data);

		$dir_imagen = "C:/xampp/htdocs/CCVictoria/promos/";
		$dir_subida = $dir_imagen.basename($_FILES['vimagen']['name']);
		move_uploaded_file($_FILES['vimagen']['tmp_name'], $dir_subida);

		//echo $data['descripcion'];
		redirect('promocion/#promocion','location');

	}

	public function ingresaEvento(){
		$Nombre = $this->input->post('name',TRUE);
		$Lugar = $this->input->post('lugar',TRUE);
		$Descripcion = $this->input->post('descripcion',TRUE);
		$Fecha = $this->input->post('fecha',TRUE);
		$Horario = $this->input->post('horario',TRUE);
		$Tipo = $this->input->post('tipo',TRUE);
		//$Imagen = $this->input->post('vimagen',TRUE);
		$Imagen = $_FILES['vimagen']['name'];

		$data = array('name' => $Nombre, 'lugar' => $Lugar, 'descripcion' => $Descripcion, 'fecha' => $Fecha, 'horario' => $Horario, 'tipo' => $Tipo, 'vimagen' => $Imagen);
		$this->bases->ingresaEvento($data);

		$dir_imagen = "C:/xampp/htdocs/CCVictoria/event/";
		$dir_subida = $dir_imagen.basename($_FILES['vimagen']['name']);
		move_uploaded_file($_FILES['vimagen']['tmp_name'], $dir_subida);

		//echo $data['descripcion'];
		redirect('evento/#eventos','location');

	}

	public function ingresaEmpleo(){
		$Vacante = $this->input->post('vacante',TRUE);
		$Tienda = $this->input->post('Tname',TRUE);
		$Descripcion = $this->input->post('descripcion',TRUE);
		$Sueldo = $this->input->post('sueldo',TRUE);
		$Horario = $this->input->post('horario',TRUE);
		$Atencion = $this->input->post('atencion',TRUE);		

		$data = array('vacante' => $Vacante, 'Tname' => $Tienda, 'descripcion' => $Descripcion, 'sueldo' => $Sueldo, 'horario' => $Horario, 'atencion' => $Atencion);
		$this->bases->ingresaEmpleo($data);

		$Empleo = $this->bases->getEmpleoNombre($data);

		foreach ($Empleo->result() as $key) {
			$idEmpleo = $key->idEmpleos;
		}

		$data = array('Tname' => $Tienda, 'id_Empleo' => $idEmpleo);
		$this->bases->ingresaEmpleoTienda($data);

		//echo $data['descripcion'];
		redirect('empleo','location');

	}

	public function ingresaAviso(){
		$Contenido = $_POST['contenido'];

		$data = array('contenido' => $Contenido);
		$this->bases->ingresaAviso($data);
		//echo $data['descripcion'];
		redirect('aviso/#aviso','location');

	}

	public function ingresaFoto(){
		$Imagen = $_FILES['vimagen']['name'];

		$data = array('vimagen' => $Imagen);

		$this->bases->ingresaFoto($data);

		$dir_imagen = "C:/xampp/htdocs/CCVictoria/administrador/galeriaFotos/";
		$dir_subida = $dir_imagen.basename($_FILES['vimagen']['name']);
		move_uploaded_file($_FILES['vimagen']['tmp_name'], $dir_subida);

		redirect('foto/#galeria', 'location');
	}
	
	/* FUNCIONES PARA ELIMINAR DATOS A LA BASE DE DATOS (PARTE DEL CONTROLADOR) */
	public function eliminaTienda(){
		$Nombre = $this->input->post('deleteTienda',TRUE);
		
		$data = array('deleteTienda' => $Nombre);
		$this->bases->eliminaGiroTienda($data);
		$fila = $this->bases->eliminaTienda($data);
		//echo $fila;
		redirect('tienda/#tiendas','location');

	}
	
	public function eliminaPromo(){
		$Nombre = $this->input->post('deletePromo',TRUE);
		
		$data = array('deletePromo' => $Nombre);
		$this->bases->eliminaPromo($data);
		//echo $fila;
		redirect('promocion/#promocion','location');

	}

	public function eliminaEvento(){
		$Nombre = $this->input->post('deleteEvento',TRUE);
		
		$data = array('deleteEvento' => $Nombre);
		$this->bases->eliminaEvento($data);
		//echo $fila;
		redirect('evento/#eventos','location');

	}

	public function eliminaEmpleo(){
		$Nombre = $this->input->post('deleteEmpleo',TRUE);
		
		$data = array('deleteEmpleo' => $Nombre);
		$this->bases->eliminaEmpleo($data);
		//echo $fila;
		redirect('empleo','location');

	}

	/* FUNCIONES PARA MODIFICAR DATOS EN LA BASE DE DATOS (PARTE DEL CONTROLADOR) */
	public function modificaTienda()
	{
		if (isset($_SESSION['useradmi'])) {
			$id_tienda = $this->input->post('editTienda', TRUE);
			$data['tienda'] = $this->bases->getTiendaID($id_tienda);
			$this->load->view('header');
			$this->load->view('encabezado_admi');
			$this->load->view('modificaTienda', $data);
			$this->load->view('footer');
		}
		else{
			redirect('index', 'location');
		}
	}

	public function updateTienda(){
		$id_tienda = $this->input->post('idT', TRUE);
		$Nombre = $this->input->post('Tname',TRUE);
		$Descripcion = $this->input->post('descripcion',TRUE);
		$Telefono = $this->input->post('tel',TRUE);
		$Horario = $this->input->post('horario',TRUE);
		//$Imagen = $this->input->post('vimagen',TRUE);
		$NoLocal = $this->input->post('local',TRUE);
		$Web = $this->input->post('Page',TRUE);
		$Facebook = $this->input->post('facebook',TRUE);
		$Twitter = $this->input->post('twitter',TRUE);
		$Instagram = $this->input->post('instagram',TRUE);

		//$data = array('Tname' => $Nombre, 'descripcion' => $Descripcion, 'tel' => $Telefono, 'horario' => $Horario, 'vimagen' => $Imagen, 'local' => $NoLocal, 'Page' => $Web);
		$data = array('idT' => $id_tienda, 'Tname' => $Nombre, 'descripcion' => $Descripcion, 'tel' => $Telefono, 'horario' => $Horario, 'local' => $NoLocal, 'Page' => $Web, 'facebook' => $Facebook, 'twitter' => $Twitter, 'instagram' => $Instagram);
		$this->bases->updateTienda($data);
		//echo $data['descripcion'];
		redirect('tienda/#tiendas','location');

	}

	public function modificaEmpleo()
	{
		if (isset($_SESSION['useradmi'])) {
			$id_empleo = $this->input->post('editEmpleo', TRUE);
			$data['empleo'] = $this->bases->getEmpleoID($id_empleo);
			$data['tienda'] = $this->bases->getTiendas();
			$data['tiendaempleo'] = $this->bases->GetTiendaEmpleoID($id_empleo);
			$this->load->view('header');
			$this->load->view('encabezado_admi');
			$this->load->view('modificaEmpleo', $data);
			$this->load->view('footer');
		}
		else{
			redirect('index', 'location');
		}
	}

	public function updateEmpleo(){
		$id_empleo = $this->input->post('idE',TRUE);
		$Vacante = $this->input->post('vacante',TRUE);
		//$Tienda = $this->input->post('Tname',TRUE);
		$Descripcion = $this->input->post('descripcion',TRUE);
		$Sueldo = $this->input->post('sueldo',TRUE);
		$Horario = $this->input->post('horario',TRUE);
		$Atencion = $this->input->post('atencion',TRUE);		

		//$data = array('idE' => $id_empleo, 'vacante' => $Vacante, 'Tname' => $Tienda, 'descripcion' => $Descripcion, 'sueldo' => $Sueldo, 'horario' => $Horario, 'atencion' => $Atencion);
		$data = array('idE' => $id_empleo, 'vacante' => $Vacante, 'descripcion' => $Descripcion, 'sueldo' => $Sueldo, 'horario' => $Horario, 'atencion' => $Atencion);
		$this->bases->updateEmpleo($data);

		redirect('empleo','location');

	}

	public function modificaPromo()
	{
		if (isset($_SESSION['useradmi'])) {
			$id_promo = $this->input->post('editPromo', TRUE);
			//$data['tienda'] = $this->bases->getTiendas();
			$data['promo'] = $this->bases->getPromosID($id_promo);
			$this->load->view('header');
			$this->load->view('encabezado_admi');
			$this->load->view('modificaPromo', $data);
			$this->load->view('footer');
		}
		else{
			redirect('index', 'location');
		}
	}

	public function updatePromo(){
		$id_promo = $this->input->post('idP',TRUE);
		$Nombre = $this->input->post('name',TRUE);
		$Descripcion = $this->input->post('descripcion',TRUE);
		//$Imagen = $this->input->post('vimagen',TRUE);
		$Vigencia = $this->input->post('vigencia',TRUE);
		//$Tienda = $this->input->post('Tname',TRUE);

		//$data = array('name' => $Nombre, 'descripcion' => $Descripcion, 'vimagen' => $Imagen, 'vigencia' => $Vigencia, 'Tname' => $Tienda);
		$data = array('idP' => $id_promo, 'name' => $Nombre, 'descripcion' => $Descripcion, 'vigencia' => $Vigencia);
		$this->bases->updatePromo($data);
		//echo $data['descripcion'];
		redirect('promocion/#promocion','location');

	}

	public function modificaEvento()
	{
		if (isset($_SESSION['useradmi'])) {
			$id_evento = $this->input->post('editEvento', TRUE);
			$data['evento'] = $this->bases->getEventosID($id_evento);
			$this->load->view('header');
			$this->load->view('encabezado_admi');
			$this->load->view('modificaEvento', $data);
			$this->load->view('footer');
		}
		else{
			redirect('index', 'location');
		}
	}

	public function updateEvento(){
		$id_evento = $this->input->post('idE',TRUE);
		$Nombre = $this->input->post('name',TRUE);
		$Lugar = $this->input->post('lugar',TRUE);
		$Descripcion = $this->input->post('descripcion',TRUE);
		$Fecha = $this->input->post('fecha',TRUE);
		$Horario = $this->input->post('horario',TRUE);
		$Tipo = $this->input->post('tipo',TRUE);
		//$Imagen = $this->input->post('vimagen',TRUE);

		$data = array('idE' => $id_evento, 'name' => $Nombre, 'lugar' => $Lugar, 'descripcion' => $Descripcion, 'fecha' => $Fecha, 'horario' => $Horario, 'tipo' => $Tipo);
		$this->bases->updateEvento($data);
		//echo $data['descripcion'];
		redirect('evento/#eventos','location');

	}
	
}
