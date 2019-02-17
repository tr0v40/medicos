<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medico extends CI_Controller {

	
	public function index()
	{
		//Carregar model Medicos
		$this->load->model('Medicos_model','medicos');

		// Cria um array dde dados para armazenar medicos
		//Executa função medicos_model getMedicos
		$data['medicos'] = $this->medicos->getMedicos();
		
		// Carrega a view Lista de Medico e passa como 
		// parametros a array Medicos
		$this->load->view('listarmedicos', $data);
	}
	// pagina de adicionar Medico
	public function add()
	{
	// carrga o Model Medicos
	$this->load->model('Medicos_model', 'medicos');

	//carrega a view
	$this->load->view('addmedicos');
	}

	public function salvar()
	{
		if($this->input->post('NOME') == NULL)
		{
			echo 'O campo Nome é obrigatório';
			echo '<a href="../medico/add" title="voltar">Voltar</a>';
		} else {

			$this->load->model('medicos_model', 'medico');
			
			$dados['NOME'] = $this->input->post('NOME');
			$dados['CRM'] = $this->input->post('CRM');

			if($this->input->post('ID') != NULL)
			{
				$this->medico->attMedicos($dados, $this->input->post('ID'));
			}else{

			$this->medico->addMedicos($dados);
			}

			redirect("/");
		}
	}

	//Atualizar cadastros
	public function att($ID=NULL)
	{
		if ($ID == NULL)
		{
			redirect("/");
		}
	
	
		$this->load->model('medicos_model', 'medicos');

		$query = $this->medicos->getMedicosByID($ID);

		if ($query == NULL)
			{
				redirect("/");
			}
			$dados['medico'] = $query;

			$this->load->view('attmedicos', $dados);
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