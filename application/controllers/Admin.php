<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public $data;

	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
		$this->load->model('contactos_model');
		$this->load->model('generadores_model');
		$this->data['ajustes'] = $this->admin_model->cargar_ajustes();
		$this->data['contactos_header'] = $this->contactos_model->get_header();
		$this->data['contactos_footer'] = $this->contactos_model->get_footer();
		$this->data['generadores'] = $this->generadores_model->get_generadores();		
	}

	public function index(){
		if( $this->session->logueado == false ){
			redirect( base_url() . 'admin/login' );
		}else{	
			$this->load->view('header');
			$this->load->view('navbar', $this->data);
			$this->load->view('admin',  $this->data);
			$this->load->view('footer', $this->data);		
		}
	}

	public function login(){
		if( $this->session->logueado == true ){
			redirect( base_url() . 'admin' );
		}else{
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer', $this->data);
		}
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect( base_url() );
	}
	public function validate_login(){
		$this->load->model('admin_model');
		$res = $this->admin_model->iniciar_sesion( $this->input->post('correo') , $this->input->post('contrasena') );
		if( $res ){
			$this->session->logueado = true;
		}
		
		redirect( base_url() . 'admin');
	}
	public function get_generadores_by_internal_id($generador){
		$this->load->model('admin_model');
		$this->db->where('internal_id',$generador['internal_id']);
		$row =$this->db->get('generadores');
		return $row->result_object();
	}
}