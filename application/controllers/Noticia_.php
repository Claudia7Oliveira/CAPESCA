<?php

defined('BASEPATH') OR exit('No direct script access allowed');
 
class Noticia_ extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		  
		$this->load->model('noticia__model', 'modelnoticia');

	}

	public function index($id)
	{
		
		
		
		$dados['publicacoes'] = $this->modelnoticia->listar_publicacao($id);
		
				
		$this->load->view('frontend/template/html-header',$dados);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/noticia_');
		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');
	}

}

