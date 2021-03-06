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

	public function getMedicosByID($ID=NULL)
	{
		if($ID != NULL):
			$this->db->where('ID', $ID);
			$this->db->limit(1);
			$query = $this->db->get("medico");
			return $query->row();
		endif;
	}

	public function attMedicos($dados=NULL, $ID=NULL)
	{

		if ($dados != NULL && $ID != NULL):
			$this->db->update('medico', $dados, array("ID"=>$ID));
		endif;

	}
	public function delMedicos($ID=NULL)
	{
		if ($ID != NULL):
			$this->db->delete('medico', array('ID'=>$ID));
		endif;
	}

	// public function mhe(){
    //     $this->db->select('*');
    //     $this->db->from('medicos');
    //     $this->db->join('medicos_has_especializacao', 'medicos_has_especializacao.ESPEC_ID = especializacao.ID_ESPEC');
    //     $this->db->join('medicos', 'medicos.ID = medicos_has_especializacao.MEDICO_ID ');
	// 	$query = $this->db->get();
	// 	return $query->row();

	// }
	public function listEsp()
    {
        $esp = $this->db->get('especializacao', 'e');
        return $esp->result();
    }
}

