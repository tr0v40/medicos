<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Medicos_model extends CI_Model 
{
	public function getMedicos()
	{
		$query = $this->db->get('medico');
		return $query->result();
	}	
}
