<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('bases');
	}

	public function index()
	{
		//echo phpinfo();
		$data['evento'] = $this->bases->GetEventoTipo2();
		$data['aviso'] = $this->bases->GetAvisos();
		$data['tamaño'] = $this->bases->GetEventoCantidad();
		$this->load->view('header');
		$this->load->view('encabezado_principal');
		//$this->load->view('principal');
		$this->load->view('inicio', $data);
		$this->load->view('footer');
	}

	public function acerca()
	{
		$this->load->view('header');
		$this->load->view('encabezado_principal');
		$this->load->view('acercade');
		$this->load->view('footer');
	}

	public function politicas()
	{
		$this->load->view('header');
		$this->load->view('encabezado_principal');
		$this->load->view('politicas_terminos');
		$this->load->view('footer');
	}

	public function servicio()
	{
		$this->load->view('header');
		$this->load->view('encabezado_principal');
		$this->load->view('servicios');
		$this->load->view('footer');
	}

	public function bolsaTrabajo()
	{
		$data['empleo'] = $this->bases->GetEmpleos();
		$data['tiendaempleo'] = $this->bases->GetTiendaEmpleo();
		$data['tienda'] = $this->bases->GetTiendaLista();
		$this->load->view('header');
		$this->load->view('encabezado_principal'); 
		$this->load->view('bolsaDeTrabajo', $data);
		$this->load->view('footer');

	}

	public function tienda2()
	{
			//$data['tienda'] = $this->bases->GetTienda(1); 
			$this->load->view('header');
			$this->load->view('encabezado_principal');
			$this->load->view('tiendas');
			$this->load->view('footer');
	}

	public function tienda()
	{
		$data['id'] = $this->uri->segment(3);
		$id = $data['id'];
		$NameTienda = $this->input->post('busqueda', TRUE);
		//$NameTienda = $_REQUEST['consulta'];
    	$data['NTienda'] = $this->bases->GetTiendaName($NameTienda);
    	$data['tiendas'] = $this->bases->GetTiendas();
    	$data['girosTienda'] = $this->bases->GetGirosTienda();
    	$data['giros'] = $this->bases->GetGiros();
		if ($id != NULL) { 
			$data['tienda'] = $this->bases->GetTienda($data);
			$this->load->view('header');
			$this->load->view('encabezado_principal');
			$this->load->view('tiendas', $data);
			$this->load->view('consultaTienda', $data);
			$this->load->view('footer');
			//echo $id;
		}
		else{
			$this->load->view('header');
			$this->load->view('encabezado_principal');
			$this->load->view('tiendas', $data);
			$this->load->view('footer');
		}	
	}

	public function galeria()
	{
		$data['fotos'] = $this->bases->GetFotos();
		$this->load->view('header');
		$this->load->view('encabezado_principal');
		$this->load->view('galeria', $data);
		$this->load->view('footer');
	}

	public function evento()
	{
		$data['evento'] = $this->bases->GetEvento();
		$this->load->view('header');
		$this->load->view('encabezado_principal');
		$this->load->view('eventos', $data);
		$this->load->view('footer');
	}

	public function contacto()
	{
		$this->load->view('header');
		$this->load->view('encabezado_principal');
		$this->load->view('contacto');
		$this->load->view('footer');
	}

	public function promocion()
	{
		$data['promo'] = $this->bases->GetPromo();
		$this->load->view('header');
		$this->load->view('encabezado_principal');
		$this->load->view('promociones', $data);
		$this->load->view('footer');
	}
    
    public function InsertComment(){
        $Nombre = $this->input->post('Nombre',TRUE);
		$email = $this->input->post('email',TRUE);
		//$descripcion = $this->input->post('comments',TRUE);
		$descripcion = $_POST['comments'];	

		$data = array('Nombre' => $Nombre, 'email' => $email, 'comments' => $descripcion);   
		$this->bases->AgregarComentarios($data);
		//echo $data['descripcion'];
	 	redirect('contacto','location');
	 	

    } 

    public function buscarTienda(){
    	$NameTienda = $this->input->post('busqueda', TRUE);

    	$this->bases->GetTiendaName($NameTienda);
    }
}
