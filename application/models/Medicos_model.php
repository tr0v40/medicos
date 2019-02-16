<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicos_model extends CI_Model 
{
	public function getMedicos()
	{
		$query = $this->db->get('medico');
		return $query->result();
	}	

	// adiciona um novo produto na tabela Medico
	//caso os campos nao forem nulos
	public function addMedicos($dados=NULL)
	{
		if ($dados != NULL):
			$this->db->insert('medico', $dados);
		endif;
	}
}

