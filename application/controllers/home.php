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
      $this->load->view('inscription');
    }
    else 
    {
    	$nom = $this->input->post('nom');
		$prenom = $this->input->post('prenom');
		$email = $this->input->post('mail');
		$this->load->model('Users_model', 'Users_model');
		$resultat = $this->Users_model->add_users($nom, $prenom, $email);
    }
	}
}