<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Post_Model');
		$this->load->model('User_Model');
	}

	public function index()
	{
		$posts = $this->Post_Model->listAll();
		echo json_encode($posts);
	}

	public function create()
	{
		$content = $this->input->post('content');	
		$user_id = $this->input->post('user_id');
		$user = $this->User_Model->findbyid($user_id);
		$type = $this->input->post('type');
		$type = $type ? $type : 0; 

		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = '100';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		  
		$this->load->library('upload', $config);
		$this->upload->do_upload();

		$post = array(
			'content' => $content,
			'user_id' => $user_id,
			'createtime' => date('Y-m-d H:m:s'),
			'post_avator' => $user['avator_s_url'],
			'type' => $type,
			);
		$post = $this->Post_Model->save($post);
		echo json_encode($post);
	}
}

