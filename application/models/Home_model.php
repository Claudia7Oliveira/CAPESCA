<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public $id;
	public $titulo;
	public $conteudo;
	public $img;
	public $user;

	public function __construct(){
		parent::__construct();
	}

	public function mostra_home(){
	
		return $this->db->get('home')->result();
	}
	
	public function excluir($id){
		$this->db->where('md5(id)',$id);
		return $this->db->delete('home');
	}

	public function alterar($titulo,$conteudo,$id){
		$dados['titulo']= $titulo;
		$dados['conteudo']= $conteudo;
		$this->db->where('id',$id);
		return $this->db->update('home',$dados);
	}

	public function alterar_img($id){
		$dados['img']= 1;
		$this->db->where('md5(id)',$id);
		return $this->db->update('home',$dados);
	}

}  
             

