<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();

	}

	

	public function index()
	{
		
		//a home
		$this->load->model('home_model','modelhome');
		$dados['publicacoes'] = $this->modelhome->mostra_home();		


		$this->load->view('frontend/template/html-header',$dados);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/home');
		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');
	}

	

	
}
