<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda_model extends CI_Model {

	private $table;

	public $id; 
	public $titulo;
	public $conteudo;
	public $data;
	public $img;
	public $user;
 
	public function __construct(){
		parent::__construct();

		$this->table = 'agenda';
	}

	public function getAll($offset = 0, $limit = 0)
	{
		$this->db->from($this->table);
		$this->db->order_by('data', 'DESC');
		$this->db->limit($limit);
		$this->db->offset($offset);

		return $this->db->get()->result();
	}

	public function create($data)
	{
		$insert = $this->db->insert($this->table, $data);

		if(!$insert) return false;

		return $this->db->insert_id();
	}

	public function image($id)
	{
		$this->db->set('img', 1);
		$this->db->where('id', $id);
		return $this->db->update($this->table);
	}

	public function listar_publicacao($pular=null,$post_por_pagina=null){
		$this->db->order_by('data','DESC');
		if($pular && $post_por_pagina){

			$this->db->limit($post_por_pagina,$pular);

		}else{
			
			$this->db->limit(5);
		}
		return $this->db->get('agenda')->result();
	}

//pra alteraçoes
	public function listar_publicacoes($id){
		$this->db->where('md5(id)',$id);
		return $this->db->get('agenda')->result();
	}
	public function adicionar($titulo,$conteudo,$datapub){
		$dados['titulo']= $titulo;
		$dados['conteudo']= $conteudo;
		$dados['data']= $datapub;
	
		return $this->db->insert('agenda',$dados);
	}
	
	public function excluir($id){
		$this->db->where('md5(id)',$id);
		return $this->db->delete('agenda');
	}
	public function alterar($titulo,$conteudo,$datapub,$id){
		$dados['titulo']= $titulo;
		$dados['conteudo']= $conteudo;
		$dados['data']= $datapub;
		
		$this->db->where('id',$id);
		return $this->db->update('agenda',$dados);
	}
	public function alterar_img($id){
		$dados['img']= 1;
		$this->db->where('md5(id)',$id);
		return $this->db->update('agenda',$dados);
	}
	public function contar(){
		return $this->db->count_all('agenda');
	}

}
	
