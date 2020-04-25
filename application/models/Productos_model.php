<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos_model extends CI_Model {


	public function agregar_generador( $generador ){
		$this->db->trans_start();
		$this->db->insert('generadores', $generador);
		$this->db->trans_complete();
		if($this->db->affected_rows() > 0)
			return true;
		return false;
	}
	public function editar_generador( $id_generador , $generador){
		$this->db->trans_start();
		$this->db->where('id_generador', $id_generador);
		$this->db->update('generadores', $generador);
		$this->db->trans_complete();
		return; 
	}
	public function eliminar_generador($id_ppk){
		$this->db->trans_start();
		$this->db->where('id_generador', $id_ppk);
		$this->db->delete('generadores');
		$this->db->trans_complete();
		if($this->db->affected_rows() > 0)
			return true;
		return false;
	}
	

}