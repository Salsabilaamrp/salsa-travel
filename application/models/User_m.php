<?php

class User_m extends CI_Model{
	function gets(){
		return $this->db->get('user')->result();
	}
	 
	function get($id){}
	public function add($data){
		$this->db->insert("user",$data); 
	}
	function edit($id){} 
	function del($id){
		$this->db->delete('user', ["id"=>$id]);
	}
}