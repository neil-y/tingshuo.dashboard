<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

	public function index()
	{
		$posts = array();
		for($i = 0; $i < 20; $i++){
			$posts[] = array(
				"title" => "hello, hello, hello, hello, hello, hello, " . $i,
				"content" => "hello, hello, hello, hello, hello, " . $i,
				"createtime" => '2013-04-18'
			);
		}
		echo json_encode($posts);	
	}


	public function signin()
	{
	}

	public function signout()
	{
	}

}

