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
		if($this->session->language === 'es' || $this->session->language == false){
			$this->load->view('header');
			$this->load->view('navbar', $this->data);
			$this->load->view('home');
			$this->load->view('formulario_contacto');
			$this->load->view('footer', $this->data);
		}
		if($this->session->language === 'en'){
			$this->load->view('header');
			$this->load->view('navbar_english', $this->data);
			$this->load->view('home_english');
			$this->load->view('formulario_contacto_english');
			$this->load->view('footer_english', $this->data);
		}
	}
	
	public function empresa(){
		if($this->session->language === 'es' || $this->session->language == false){
			$this->load->view('header');
			$this->load->view('navbar', $this->data);
			$this->load->view('empresa');
			$this->load->view('footer', $this->data);
		}
		if($this->session->language === 'en'){
			$this->load->view('header');
			$this->load->view('navbar_english', $this->data);
			$this->load->view('empresa_english');
			$this->load->view('footer_english', $this->data);
		}
	}

	public function servicios(){
		if($this->session->language === 'es' || $this->session->language == false){
			$this->load->view('header');
			$this->load->view('navbar', $this->data);
			$this->load->view('servicios');
			$this->load->view('formulario_contacto');
			$this->load->view('footer', $this->data);
		}
		if($this->session->language === 'en'){
			$this->load->view('header');
			$this->load->view('navbar_english', $this->data);
			$this->load->view('servicios_english');
			$this->load->view('formulario_contacto_english');
			$this->load->view('footer_english', $this->data);
		}
	}
	public function proyectos(){
		if($this->session->language === 'es' || $this->session->language == false){
			$this->load->view('header');
			$this->load->view('navbar', $this->data);
			$this->load->view('proyectos');
			$this->load->view('footer', $this->data);
		}
		if($this->session->language === 'en'){
			$this->load->view('header');
			$this->load->view('navbar_english', $this->data);
			$this->load->view('proyectos_english');
			$this->load->view('footer_english', $this->data);
		}
	}
	public function clientes(){
		if($this->session->language === 'es' || $this->session->language == false){
			$this->load->view('header');
			$this->load->view('navbar', $this->data);
			$this->load->view('clientes');
			$this->load->view('footer', $this->data);
		}
		if($this->session->language === 'en'){
			$this->load->view('header');
			$this->load->view('navbar_english', $this->data);
			$this->load->view('clientes_english');
			$this->load->view('footer_english', $this->data);
		}
	}
}
