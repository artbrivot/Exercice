<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index()
	{
		$this->load->view('home');
	}

	public function inscription()
	{
		$this->load->view('inscription');
	}

	public function connection()
	{
		$this->load->view('connection');
	}

	public function inscriptionAction()
	{
	$this->form_validation->set_rules('nom', '"Le Nom"', 'trim|required|xss_clean');
	$this->form_validation->set_rules('prenom', '"Le prénom"', 'trim|required|xss_clean');
	$this->form_validation->set_rules('mail', '"Le mail"', 'trim|required|valid_email|is_unique[users.email]|xss_clean');

	if ($this->form_validation->run() == false) 
	{
      redirect('home/inscription');
    }
    else 
    {
    	$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$email = $this->input->post('mail');
		$this->load->model('Users_model', 'Users_model');
		$resultat = $this->Users_model->add_users($nom, $prenom, $email);
		$this->load->view('connection');
    }
	}

	public function connectionAction()
	{
		$nom = $this->input->post('nom');
		$email = $this->input->post('mail');

		$this->load->model('Users_model', 'Users_model');
		$this->form_validation->set_rules('nom', '"Le Nom"', 'trim|required|xss_clean');
		$this->form_validation->set_rules('mail', '"Le mail"', 'trim|required|valid_email|xss_clean');

		$result = $this->Users_model->check_users($nom, $email);

		if ($this->form_validation->run() == false) 
		{
	      redirect('home/connection');
	    }
        elseif($this->form_validation->run() == true && empty($result))
        {
            $this->session->set_flashdata('noconnect', 'Aucun compte ne correspond à vos identifiants ');
            redirect('home/connection');
        }
        else
        {
        	$newdata = array(
        		'username'  => $nom,
        		'email'     => $email,
        		'logged_in' => TRUE
				);
           $this->session->set_userdata($newdata);
           redirect('logged/dashBoardUser');          
        }
	}

}