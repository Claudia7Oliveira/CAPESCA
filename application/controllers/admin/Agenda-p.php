<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}
		
		$this->load->model('agenda_model', 'modelagenda');

	}

	public function index($pular=null,$post_por_pagina=null)
	{
		$this->load->helper('funcoes');
		$this->load->library('table');
		$this->load->library('pagination');

		$config['base_url'] = base_url("admin/agenda");
		$config['total_rows'] = $this->modelagenda->contar();
		$post_por_pagina = 5;
		$config['per_page'] = $post_por_pagina;

		$this->pagination->initialize($config);

		$dados['links_paginacao'] = $this->pagination->create_links();


		
		$dados['publicacoes'] = $this->modelagenda->listar_publicacao($pular,$post_por_pagina);
		// Dados a serem enviados para o Cabeçalho
		
		
		
		$this->load->view('backend/template/html-header',$dados);
		$this->load->view('backend/template/header');
		$this->load->view('backend/agenda');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/html-footer');
	}

	public function inserir(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-titulo','Titulo',
			'required|min_length[3]');
		
		$this->form_validation->set_rules('txt-conteudo','Conteudo',
			'required|min_length[20]');
		if ($this->form_validation->run() == FALSE){
			$this->index();
		}else{
			$titulo= $this->input->post('txt-titulo');
			$conteudo= $this->input->post('txt-conteudo');
			$datapub= $this->input->post('txt-data');
			
			if($this->modelagenda->adicionar($titulo,$conteudo,$datapub)){
				redirect(base_url('admin/agenda'));
			}else{
				echo "Houve um erro no sistema!";
			}
		}
	}

	public function excluir($id){

		if($this->modelagenda->excluir($id)){
				redirect(base_url('admin/agenda'));
			}else{
				echo "Houve um erro no sistema!";
			}
	}

	public function alterar($id){
		$this->load->library('table');
		$dados['publicacoes'] = $this->modelagenda->listar_publicacoes($id);
		
		$this->load->view('backend/template/html-header',$dados);
		$this->load->view('backend/template/header');
		$this->load->view('backend/alterar_agenda');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/html-footer');
	}

	public function salvar_alteracoes($idCrip){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-titulo','Titulo',
			'required|min_length[3]');
		$this->form_validation->set_rules('txt-conteudo','Conteudo',
			'required|min_length[20]');
		if ($this->form_validation->run() == FALSE){
			$this->alterar($idCrip);
		}else{
			$titulo= $this->input->post('txt-titulo');
			$conteudo= $this->input->post('txt-conteudo');
			$datapub= $this->input->post('txt-data');
			
			$id= $this->input->post('txt-id');
			if($this->modelagenda->alterar($titulo,$conteudo,$datapub,$id)){
				redirect(base_url('admin/agenda'));
			}else{
				echo "Houve um erro no sistema!";
			}
		}
	}

	public function nova_foto(){
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}

		$id= $this->input->post('id');
		$config['upload_path']= './assets/frontend/img/agenda';
		$config['allowed_types']= 'jpg';
		$config['file_name']= $id.".jpg";
		$config['overwrite']= TRUE;
		$this->load->library('upload', $config);

		if(!$this->upload->do_upload()){
			echo $this->upload->display_errors();
		}else{
			$config2['source_image']= './assets/frontend/img/agenda/'.$id.'.jpg';
			$config2['create_thumb']= FALSE;
			$config2['width']= 900;
			$config2['height']= 300;
			$this->load->library('image_lib', $config2);
			if($this->image_lib->resize()){

				if($this->modelagenda->alterar_img($id)){
				redirect(base_url('admin/agenda/alterar/'.$id));
				}else{
					echo "Houve um erro no sistema!";
				}
				
			}else{
				echo $this->image_lib->display_errors();
			}
		}

	}




}
