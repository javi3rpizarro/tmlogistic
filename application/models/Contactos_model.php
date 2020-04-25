<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactos_model extends CI_Model {

	public function get_header(){
		$header = $this->db->get('header_contacto');
		return $header->result_object();
	}
	public function get_footer(){
		$header = $this->db->get('footer_contacto');
		return $header->result_object();
	}
	public function update_header($id_hc , $contacto){
		$this->db->where('id_hc', $id_hc);
		$this->db->update('header_contacto', $contacto);
		return;
	}	
	public function update_footer($id_fc , $contacto){
		$this->db->where('id_fc', $id_fc);
		$this->db->update('footer_contacto', $contacto);
		return;
	}
	public function update_email($correo){
		$this->db->update('ajustes', $correo);
		return;
	}		
}
