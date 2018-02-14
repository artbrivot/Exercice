<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class logged extends CI_Controller {

	public function dashBoardUser()
	{
		$this->load->model('Users_model', 'Users_model');
		$users = $this->Users_model->list_users();

		$this->load->view('dashBoardUser', compact('users'));
	}

	public function comment($id)
	{
		$data['id'] = $id;
		$this->load->view('comment', $data);
	}

	public function commentAction()
	{
		$this->form_validation->set_rules('com', '"Le Commentaire"', 'trim|required|xss_clean');
		$this->form_validation->set_rules('test', '"L\'id"', 'required|xss_clean');
		$this->form_validation->set_rules('mail', '"L\'id"', 'required|xss_clean');
		$this->form_validation->set_rules('name', '"L\'id"', 'required|xss_clean');
		if ($this->form_validation->run() == false) 
		{
      		redirect('logged/dashBoardUser');
    	}
    	else
    	{
    		$com = $this->input->post('com');
    		$id = $this->input->post('test');
    		$mail = $this->input->post('mail');
    		$name = $this->input->post('name');
    		$this->load->model('Com_model', 'Com_model');
			$resultat = $this->Com_model->add_com($id, $com, $name, $mail);
      		redirect('logged/dashBoardUser');
    	}
	}

	public function commentary_user($user_id)
	{
		$this->load->model('Com_model', 'Com_model');
		$coms = $this->Com_model->list_com($user_id);
		$this->load->view('commentary_user', compact('coms'));
	}
}