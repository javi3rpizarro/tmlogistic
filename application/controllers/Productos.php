<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
	
	public $data;

	public function __construct(){
		parent::__construct();
		$this->load->model('contactos_model');
		$this->load->model('productos_model');
		$this->load->model('generadores_model');
		$this->data['generadores_volvo'] = $this->generadores_model->get_generadores_volvo();
		$this->data['generadores_scania'] = $this->generadores_model->get_generadores_scania();
		$this->data['generadores_cummins'] = $this->generadores_model->get_generadores_cummins();
		$this->data['contactos_header'] = $this->contactos_model->get_header();
		$this->data['contactos_footer'] = $this->contactos_model->get_footer();
			
	}
	public function generadores(){
		if($this->session->language === 'es' || $this->session->language == false){
			$this->load->view('header');
			$this->load->view('navbar', $this->data);
			$this->load->view('generadores', $this->data);
			$this->load->view('formulario_contacto');
			$this->load->view('footer', $this->data);
		}
		if($this->session->language === 'en'){
			$this->load->view('header');
			$this->load->view('navbar_english', $this->data);
			$this->load->view('generadores_english', $this->data);
			$this->load->view('formulario_contacto_english');
			$this->load->view('footer_english', $this->data);
		}
	}

	public function obtener_generador_por_id( $id_generador ){
		$generadores = $this->generadores_model->get_generadores_by_generador_id($id_generador);
		echo json_encode($generadores);
	}

	public function editar_generador($id_generador){
		$generador = array(
			'internal_id' => $this->input->post('internal_id'),
			'engine' => $this->input->post('engine'),
			'alternator' => $this->input->post('alternator'),
			'prime_power' => $this->input->post('prime_power'),
			'voltage' => $this->input->post('voltage'),
			'frequency' => $this->input->post('frequency'),
			'combustible' => $this->input->post('combustible'),
			'contenerizado' => $this->input->post('contenerizado')
		);
		$this->productos_model->editar_generador($id_generador , $generador);

		redirect( base_url() . 'admin' );
		//$this->load->view('success/generador_editado');
		//echo 'generador actualizado';
	}
	public function agregar_generador(){
		$generador = array(
			'engine' => $this->input->post('engine'),
			'alternator' => $this->input->post('alternator'),
			'prime_power' => $this->input->post('prime_power'),
			'voltage' => $this->input->post('voltage'),
			'frequency' => $this->input->post('frequency'),
			'combustible' => $this->input->post('combustible'),
			'contenerizado' => $this->input->post('contenerizado')
		);
		$this->productos_model->agregar_generador($generador);
		//echo "generador agregado";
	}
	public function eliminar_generador($id_generador){
		$this->productos_model->eliminar_generador($id_generador);

	}
}
