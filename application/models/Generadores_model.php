<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Generadores_model extends CI_Model {

	public function get_generadores(){
		$generadores = $this->db->get('generadores');
		return $generadores->result_object();
	}

	public function get_generadores_volvo(){
		$this->db->where('engine','Volvo Penta');
		$volvo =$this->db->get('generadores');
		return $volvo->result_object();
	}

	public function get_generadores_scania(){
		$this->db->where('engine','Scania');
		$scania = $this->db->get('generadores');
		return $scania->result_object();	
	}
	public function get_generadores_cummins(){
		$this->db->where('engine','Cummins');
		$cummins =$this->db->get('generadores');
		return $cummins->result_object();
	}
	public function get_generadores_by_generador_id($id_generador){
		$this->db->where('id_generador',$id_generador);
		$generadores =$this->db->get('generadores');

		return $generadores->row();
	}

	public function get_generadores_by_internal_id($id_generador){
		$this->db->where('internal_id',$id_generador);
		$generadores =$this->db->get('generadores');

		return $generadores->result_object();
	}
}