<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos extends CI_Controller {
	
	public $data;

	public function __construct(){
		parent::__construct();
		$this->load->model('contactos_model');			
	}

	public function editar_contacto_header(){
		$contactos = $this->input->post();
		foreach ($contactos as $pos => $contacto) {
			$this->contactos_model->update_header($pos, array('contacto' => $contacto) );
		}
		echo "Cambios guardados, recarge la página para visualizar.";
	}

	public function editar_contacto_formulario(){
		$contacto = $this->input->post();
		$this->contactos_model->update_email( $contacto );

		echo "Cambios guardados.";
	}

	public function editar_contacto_footer(){
		$contactos = json_decode($this->input->post('contactos'));
		foreach ($contactos as $pos => $contacto) {
			$this->contactos_model->update_footer($contacto->id_fc, array('contacto' => $contacto->contacto, 'tipo' => $contacto->tipo) );
			
		}
		echo "Cambios guardados, recarge la página para visualizar.";
	}
	
}
