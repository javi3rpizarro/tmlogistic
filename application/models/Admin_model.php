<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function iniciar_sesion( $correo, $contrasena ){

		$this->db->select('correo');
		$this->db->where('contrasena', $contrasena); 
		$this->db->where('correo', $correo);
		$this->db->from('admin_log');
		$admin_log = $this->db->get();
    	if( $admin_log->num_rows() == 0 ){	
   			return null;
		}else{
			return $admin_log->row();
		}

	
	}

	public function cargar_ajustes(){
		$ajustes = $this->db->get('ajustes');
		return $ajustes->row();
	}

}