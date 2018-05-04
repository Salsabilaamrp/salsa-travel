<?php

class User extends CI_Controller {
	

	function __construct(){
		parent::__construct();
		$this->load->model("user_m");

		$data['tbuser'] = $this->user_m->gets();

		$this->load->view('user_data', $data);
	}

	function form()
	{
		$this->load->view('form_user_v');
	}

	function add()
	{
		$data = array(
			"username" => $this->input->post("username"),
			"password" => $this->input->post("password"),
			"fullname" => $this->input->post("fullname"),
			"level" => $this->input->post("level")
			);
		
		var_dump($data);
		$this->user_m->add($data);
	}

	function index(){		
		$data['tbuser'] = $this->user_m->gets();   
		$this->load->view('user_data', $data);
	}
	function del($id){
		$this->user_m->del($id);  
		redirect('user');
	}

	function edit($id){}
	function detail($id){}
	
}