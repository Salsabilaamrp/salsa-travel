<?php
class User extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model("user_m");
	}

	public function index(){		
		$data['user'] = $this->user_m->gets();   
		$this->load->view('user_data', $data);
	}

	public function form()
	{
		$this->load->view('form_user_v');
	}

	public function edit($id){
		$data['user'] = $this->user_m->get($id);
		$this->load->view('form_user_v', $data);
	}

	public function add()
	{
		$data = array(
			"username" => $this->input->post("username"),
			"password" => $this->input->post("password"),
			"fullname" => $this->input->post("fullname"),
			"level" => $this->input->post("level")
			);
		
		$this->user_m->add($data);
		redirect('user');
	}

	public function save_edit(){
		$id = $this->input->post("oldid");
		$data = array(
			"username" => $this->input->post("username"),
			"password" => $this->input->post("password"),
			"fullname" => $this->input->post("fullname"),
			"level" => $this->input->post("level")
			);
		$this->user_m->edit($id, $data);
		redirect('user');
	}
	
	public function del($id){
		$this->user_m->del($id);  
		redirect('user');
	}
	
	public function detail($id){}
	
}