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

	public function check_users($nom, $mail)
	{
    	return $this->db->select('nom, email')
    	            ->from($this->table)
    	            ->where('email', $mail)
    	            ->where('nom', $nom)
    	            ->get()
    	            ->result();
	}

	public function list_users()
	{
    $query = $this->db->get('users');
    return $query->result();
	}
}