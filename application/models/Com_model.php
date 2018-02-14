<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Com_model extends CI_Model
{
	protected $table = 'commentaires';

	public function add_com($user_id, $com, $name, $mail)
	{
		$this->db->set('user_id', $user_id);
		$this->db->set('commentaire', $com);
		$this->db->set('writername', $name);
		$this->db->set('writermail', $mail);

		return $this->db->insert($this->table);
	}
	public function list_com($user_id)
	{
    	$this->db->select('commentaire, writername, writermail')->from('commentaires')->where(array('user_id' => $user_id));;
		$query = $this->db->get();
		return $query->result();
	}
}