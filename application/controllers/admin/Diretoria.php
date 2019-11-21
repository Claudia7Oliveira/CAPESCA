<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diretoria extends MY_Controller {
	private $base_url;

	public function __construct(){
		parent::__construct();
		
		$this->load->model('diretoria_model', 'model');

		$this->base_url = base_url("admin/diretoria");
	}

	//parte de cadastro 
	public function index($pular = null, $post_por_pagina = 5)
	{
		$config_paginate['base_url'] = $this->base_url;
		$config_paginate['total_rows'] = $this->model->contar();
		$config_paginate['per_page'] = $post_por_pagina;

		$this->pagination->initialize($config_paginate);

		$data = [
			'links_paginacao' => $this->pagination->create_links(),
			'publicacoes' => $this->model->getAll($pular, $post_por_pagina)
		];

		$this->load->view('backend/template/html-header',$data);
		$this->load->view('backend/template/header');
		$this->load->view('backend/diretoria');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/html-footer');
	}

	public function inserir()
	{
		if ($this->validate() == FALSE) {
			$this->index();
		} else {
			$post = [
				'titulo' => $this->input->post('txt-titulo'),
				'conteudo' => $this->input->post('txt-conteudo'),
				'data' => $this->input->post('txt-data')
			];
			
			$insert_id = $this->model->create($post);

			if($insert_id) {
				if(isset($_FILES['input_image'])) {
					$this->upload_image($insert_id);
				}

				redirect($this->base_url);
			} else {
				echo "Houve um erro no sistema!";
			}
		}
	}

	private function upload_image($id)
	{
		$config = [
			'upload' => [
				'upload_path' => './assets/frontend/img/diretoria',
				'allowed_types' => 'jpg',
				'file_name' => md5($id).".jpg",
				'overwrite' => TRUE
			],
			'image' => [
				'width' => 900,
				'height' => 300,
				'create_thumb' => FALSE,
				'source_image' => './assets/frontend/img/diretoria/'.md5($id).'.jpg'
			]
		];

		$this->load->library('upload', $config['upload']);

		if(!$this->upload->do_upload('input_image')) {
			return $this->upload->display_errors();
		}

		$this->load->library('image_lib', $config['image']);

		if(!$this->image_lib->resize()) {
			return $this->image_lib->display_errors();
		}

		if($this->model->image($id)) {
			redirect($this->base_url);
			return;
		}
		
		return "Houve um erro no sistema!";
	}

	private function validate()
	{
		$this->form_validation->set_rules('txt-titulo', 'Titulo', 'required|min_length[3]');
		$this->form_validation->set_rules('txt-conteudo', 'Conteudo', 'required|min_length[5]');

		return $this->form_validation->run();
	}

	//outros recursos
	

	public function excluir($id){
		if($this->model->excluir($id)){
				redirect(base_url('admin/diretoria'));
			}else{
				echo "Houve um erro no sistema!";
			}
	}
	public function alterar($id){
		$this->load->library('table');
		$dados['publicacoes'] = $this->model->listar_publicacoes($id);
		
		$this->load->view('backend/template/html-header',$dados);
		$this->load->view('backend/template/header');
		$this->load->view('backend/alterar_diretoria');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/html-footer');
	}
	public function salvar_alteracoes($idCrip){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('txt-titulo','Titulo',
			'required|min_length[3]');
		
		$this->form_validation->set_rules('txt-conteudo','Conteudo',
			'required|min_length[5]');
		if ($this->form_validation->run() == FALSE){
			$this->alterar($idCrip);
		}else{
			$titulo= $this->input->post('txt-titulo');
			$conteudo= $this->input->post('txt-conteudo');
			$datapub= $this->input->post('txt-data');
			$id= $this->input->post('txt-id');
			if($this->model->alterar($titulo,$conteudo,$datapub,$id)){
				redirect(base_url('admin/diretoria'));
			}else{
				echo "Houve um erro no sistema!";
			}
		}
	}

	public function nova_foto(){
		$id= $this->input->post('id');
		$config['upload_path']= './assets/frontend/img/diretoria';
		$config['allowed_types']= 'jpg';
		$config['file_name']= $id.".jpg";
		$config['overwrite']= TRUE;
		$this->load->library('upload', $config);

		if(!$this->upload->do_upload()){
			echo $this->upload->display_errors();
		}else{
			$config2['source_image']= './assets/frontend/img/diretoria/'.$id.'.jpg';
			$config2['create_thumb']= FALSE;
			$config2['width']= 900;
			$config2['height']= 300;
			$this->load->library('image_lib', $config2);
			if($this->image_lib->resize()){

				if($this->model->alterar_img($id)){
				redirect(base_url('admin/diretoria/alterar/'.$id));
				}else{
					echo "Houve um erro no sistema!";
				}
				
			}else{
				echo $this->image_lib->display_errors();
			}
		}

	}
}
