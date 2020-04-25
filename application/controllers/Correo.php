<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Correo extends CI_Controller {

	public function enviar(){
        $this->load->model('admin_model');
        $ajustes = $this->admin_model->cargar_ajustes();
		
        date_default_timezone_set('America/Santiago');
		$hora = date('Y-m-d H:i:s');
		$nombre = $this->input->post('nombre');
		$correo = $this->input->post('correo');
		$empresa = $this->input->post('empresa');
		$telefono = $this->input->post('telefono');
		$mensaje = $this->input->post('mensaje');
		$mensaje = str_replace(array('\r\n', '\n\r', '\r', '\n'), '<br />', $mensaje);

		$to = $ajustes->correo_formulario;
		$subject = "Formulario Web Contacto";
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "From: ". $correo . "\r\n" . "Content-type:text/html;charset=UTF-8" . "\r\n";
		 
		$message = "
		<html>
		<head>
        <meta charset='utf-8'>
		<title>HTML</title>
		</head>
		<body>
		<div style='background-color: #ddd; padding: 0px; margin: 0px;'>
        <table style='min-width: 400px; max-width: 600px; padding: 0; margin:0 auto; border-collapse: collapse;'>
        <tr>
            <td style='font-family: Arial, sans-serif; background-color: #F39736; text-align: center; color: #fff; padding: 0px'>
                <h3 style='font-weight: 400'>TECH-MARINE LOGISTIC</h3>
            </td>
            <td style='background-color: #F39736;'>
                
            </td>
            
        </tr>

        
        <tr>
            <td colspan='2' style='font-family: sans-serif; font-size: .8rem; background-color: #fff; text-align: right; padding-right: 20px; padding-top: 0px; padding-bottom: 40px;'>
                <p>
                    Mensaje enviado el ".$hora."
                </p>
            </td>
        </tr>
        <tr style='font-family: sans-serif; font-size: .9rem; background-color: #fff;  padding-left: 40px; padding-top: 40px;'>
            <td style='text-align: left; padding-left: 40px;'>Nombre: ".$nombre."</td>
            <td style='text-align: left;'>Correo: ".$correo."</td>
        </tr>
        <tr style='font-family: sans-serif; font-size: .9rem; background-color: #fff; padding-left: 40px; padding-top: 40px;'>
            <td style='text-align: left; padding-left: 40px;'>Empresa: ".$empresa."</td>
            <td style='text-align: left;'>Telefono: ".$telefono."</td>    
        </tr>
                
        <tr>
            <td colspan='2' style='background-color: #fff; padding-left: 40px; padding-right: 40px;'>
                <div style='background-color: #fff; margin-top: 20px; border-top-style: solid; border-top-width: 1px; border-top-color: #ddd;'></div>
            </td>
        </tr>
        <tr>
            <td colspan='2' style='font-family: sans-serif; font-weight: 500; background-color: #fff; font-size: .85rem; text-align: left; padding-left: 90px; padding-right: 90px; padding-top: 50px; padding-bottom: 50px;'>
                <p style='word-break: break-all;'>
                    ".$mensaje."
                </p>
            </td>
        </tr>
        <tr>
            <td colspan='2' style='font-family: sans-serif; font-size: 11px; background-color: #ecf0f1; text-align: center; padding: 40px'>
                <p>
                    Si se presenta algún problema con el correo recibido, por favor contactarse<br>con los desarrolladores al email javier.pizarro.vasquez95@gmail.com   
                </p>
            </td>
        </tr>
        <tr>
            <td colspan='2' style='font-family: Arial, sans-serif; font-size: 1.1rem; background-color: #000040; color: #fff; text-align: center; padding: 0px'>
                <h6 style='font-weight: 300'>TMLOGISTIC, DERECHOS RESERVADOS &copy;. Valparaíso, Chile.</h6>
            </td>
        </tr>
        
        
        </table>
        </div>

		</body>
		</html>";
		 
		mail($to, $subject, $message, $headers);
        
        echo "Consulta enviada con éxito.";	

	}
	public function previsualizar(){
		$this->load->view('correo');
	}
	
	
}
