<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// FUNCIONA SÓ NO BACKEND
//é diferente das outras controllers e models
class Usuarios_model extends CI_Model {

	public $id;
	public $nome;
	public $email;
	public $user;
	public $senha;

	public function __construct(){
		parent::__construct();
	}


	public function listar_autores(){
		$this->db->select('id,nome,email');
		$this->db->from('usuario');
		$this->db->order_by('nome','ASC');
		return $this->db->get()->result();
	}

	public function adicionar($nome,$email,$user,$senha){
		$dados['nome']= $nome;
		$dados['email']= $email;
		
		$dados['user']= $user;
		$dados['senha']=$senha;
		return $this->db->insert('usuario',$dados);
	}

	public function excluir($id){
		$this->db->where('id',$id);
		return $this->db->delete('usuario');
	}

	public function listar_usuario($id){
		$this->db->select('id,nome,email,user');
		$this->db->from('usuario');
		$this->db->where('id',$id);
		return $this->db->get()->result();
	}

	public function alterar($nome,$email,$user,$senha,$id){
		$dados['nome']= $nome;
		$dados['email']= $email;
		
		$dados['user']= $user;
		// Verifica se o campo senha foi digitado
		if($senha != ""){
		$dados['senha']= $senha;
		}
		$this->db->where('id',$id);
		return $this->db->update('usuario',$dados);
	}

	

}
