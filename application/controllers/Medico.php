<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medico extends CI_Controller {

	public function index()
	{
		//Carregar model Medicos
		$this->load->model('Medicos_model','medicos');

		$data['medicos'] = $this->medicos->getMedicos();
		
		$this->load->view('listarmedicos', $data);
	}
}
