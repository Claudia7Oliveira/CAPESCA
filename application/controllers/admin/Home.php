
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('logado')){
			redirect(base_url('admin/login'));
		}
	}
	

	public function index()
	{
		
		$this->load->view('backend/template/html-header');
		$this->load->view('backend/template/header');
		$this->load->view('backend/home');
		$this->load->view('backend/template/footer');
		$this->load->view('backend/template/html-footer');
	}
/* nesse momento você deve estar estressado depois de tentar entender o que eu codifiquei
	tome um café e volte mais tarde :) 

	atenciosamente:  a desenvolvedora
	*/
	
}
