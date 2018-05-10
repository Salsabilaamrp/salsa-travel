<?php
class User_m extends CI_Model{
	function gets(){
		return $this->db->get('user')->result();
	}
	 
	function get($id){
		$this->db->where(array("id" => $id));
		return $this->db->get('user')->result();
	}
	public function add($data){
		$this->db->insert("user",$data); 
	}
	function edit($id, $data){
		$this->db->where(array("id" => $id));
		$this->db->update("user", $data);
	} 
	function del($id){
		$this->db->delete('user', ["id"=>$id]);
	}
}