<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model
{
	protected $table = 'users';
	
	public function add_users($nom, $prenom, $mail)
	{
		$this->db->set('nom', $nom);
		$this->db->set('prenom', $prenom);
		$this->db->set('email', $mail);

		return $this->db->insert($this->table);
	}
}