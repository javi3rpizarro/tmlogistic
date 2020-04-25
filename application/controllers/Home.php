<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public $data;

	public function __construct(){
		parent::__construct();
		$this->load->model('contactos_model');
		$this->data['contactos_header'] = $this->contactos_model->get_header();
		$this->data['contactos_footer'] = $this->contactos_model->get_footer();
			
	}

	public function index(){
		$this->load->view('header');
		$this->load->view('navbar', $this->data);
		$this->load->view('home');
		$this->load->view('formulario_contacto');
		$this->load->view('footer', $this->data);
	}
	
	public function empresa(){
		$this->load->view('header');
		$this->load->view('navbar', $this->data);
		$this->load->view('empresa');
		$this->load->view('footer', $this->data);
	}

	public function servicios(){
		$this->load->view('header');
		$this->load->view('navbar', $this->data);
		$this->load->view('servicios');
		$this->load->view('formulario_contacto');
		$this->load->view('footer', $this->data);
	}
	public function proyectos(){
		$this->load->view('header');
		$this->load->view('navbar', $this->data);
		$this->load->view('proyectos');
		$this->load->view('footer', $this->data);
	}
	public function clientes(){
		$this->load->view('header');
		$this->load->view('navbar', $this->data);
		$this->load->view('clientes');
		$this->load->view('footer', $this->data);
	}
}
