<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exdiretoria_model extends CI_Model {

	private $table;

	public $id; 
	public $titulo;
	public $subtitulo;  
	public $conteudo;
	public $data;
	public $img;
	public $user;
 
	public function __construct(){
		parent::__construct();

		$this->table = 'exdiretoria';
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
			
			$this->db->limit(30); 
		}
		return $this->db->get('exdiretoria')->result();
	}

//pra alteraçoes
	public function listar_publicacoes($id){
		$this->db->where('md5(id)',$id);
		return $this->db->get('exdiretoria')->result();
	}
	public function adicionar($titulo,$datapub){
		$dados['titulo']= $titulo;
		$dados['data']= $datapub;
	
		return $this->db->insert('exdiretoria',$dados);
	}
	
	public function excluir($id){
		$this->db->where('md5(id)',$id);
		return $this->db->delete('exdiretoria');
	}
	public function alterar($titulo,$datapub,$id){
		$dados['titulo']= $titulo;
		$dados['data']= $datapub;
		
		$this->db->where('id',$id);
		return $this->db->update('exdiretoria',$dados);
	}
	public function alterar_img($id){
		$dados['img']= 1;
		$this->db->where('md5(id)',$id);
		return $this->db->update('exdiretoria',$dados);
	}
	public function contar(){
		return $this->db->count_all('exdiretoria');
	}

}
	
