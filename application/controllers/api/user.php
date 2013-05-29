<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct()
	{
		parent::__construct();	
		$this->load->model("User_Model");
	}

	public function tmp()
	{
		$this->load->view('tmp');	
	}

	public function signup()
	{
		$name = $this->input->post("name");	
		$renren_id = $this->input->post('renren_id');
		$avatar_s_url = $this->input->post('avatar_s_url');

		$user = $this->User_Model->findbyrenrenid($renren_id);
		if(empty($user))
		{
			$user = array(
				"name" => $name,
				'renren_id' => $renren_id,
				'avator_s_url' => $avatar_s_url,
				"createtime" => date("Y-m-d H:m:s") 
				);
			$user = $this->User_Model->save($user);
			echo json_encode($user);
		} else {
			echo json_encode($user);	
		}
	}
}

