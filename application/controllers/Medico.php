<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medico extends CI_Controller {

	
	public function index()
	{

		$data['titulo'] = 'Médicos';
		//Carregar model Medicos
		$this->load->model('Medicos_model','medicos');
		// Cria um array dde dados para armazenar medicos
		//Executa função medicos_model getMedicos
		$data['medicos'] = $this->medicos->getMedicos();
		$this->load->helper('funcoes_helper');
		// Carrega a view Lista de Medico e passa como 
		// parametros a array Medicos
		$this->load->view('layout/topo', $data);
		$this->load->view('listarmedicos');
		$this->load->view('layout/rodape');
	}
	// pagina de adicionar Medico
	public function add()
	{
		$data['titulo'] = 'Cadastro de Médicos';
	// carrga o Model Medicos
	$this->load->model('Medicos_model', 'medicos');

	//carrega a view
	$this->load->view('layout/topo', $data);
	$this->load->view('addmedicos');
	$this->load->view('layout/rodape');
	}

	public function salvar()
	{
			$this->load->model('medicos_model', 'medico');
			
			$dados['NOME'] = $this->input->post('NOME');
			$dados['CRM'] = $this->input->post('CRM');
			$dados['TEL'] = $this->input->post('TEL');
			$dados['ESTADO'] = $this->input->post('ESTADO');
			$dados['CIDADE'] = $this->input->post('CIDADE');
			
			if($this->input->post('ID') != NULL)
			{
				
				$this->medico->attMedicos($dados, $this->input->post('ID'));
			}else{

			$this->medico->addMedicos($dados);
			}

			redirect("/");
		}

	//Atualizar cadastros
	public function att($ID=NULL)
	{
		if ($ID == NULL)
		{
			redirect("/");
		}
		$data['titulo'] = 'Alterar Cadastro';
		$this->load->model('medicos_model', 'medicos');

		$query = $this->medicos->getMedicosByID($ID);

		if ($query == NULL)
			{
				redirect("/");
			}
			$dados['medico'] = $query;
			$this->load->view('layout/topo', $data);
			$this->load->view('attmedicos', $dados);
			$this->load->view('layout/rodape');
		}

	public function apagar($ID=NULL)
	{
		if($ID == NULL){
			redirect("/");
		}
		$this->load->model('medicos_model', 'medicos');

		$query = $this->medicos->getMedicosByID($ID);
		
		if($query != NULL){

			$this->medicos->delMedicos($query->ID);
			redirect("/");

		} else {

			redirect("/");

		}
	}
}