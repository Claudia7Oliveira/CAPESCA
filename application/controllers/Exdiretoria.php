<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Exdiretoria extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		
		$this->load->model('exdiretoria_model', 'modelexdiretoria');

	}

	public function index($pular=null,$post_por_pagina=null)
	{
		$this->load->helper('funcoes');
		$this->load->library('table');
		$this->load->library('pagination');

		$config['base_url'] = base_url("admin/exdiretoria");
		$config['total_rows'] = $this->modelexdiretoria->contar();
		$post_por_pagina = 5;
		$config['per_page'] = $post_por_pagina;

		$this->pagination->initialize($config);

		$dados['links_paginacao'] = $this->pagination->create_links();


		
		$dados['publicacoes'] = $this->modelexdiretoria->listar_publicacao($pular,$post_por_pagina);
		// Dados a serem enviados para o Cabeçalho
		
		
		
		$this->load->view('frontend/template/html-header',$dados);
		$this->load->view('frontend/template/header');
		$this->load->view('frontend/exdiretoria');
		$this->load->view('frontend/template/footer');
		$this->load->view('frontend/template/html-footer');
	}







}
