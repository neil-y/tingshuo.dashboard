<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['menu'] = 'welcome';
		$data['sub_menu'] = 'welcome_index';
		$this->load->view('_header');
		$this->load->view('_left', $data);
		$this->load->view("index");
		$this->load->view('_footer');
	}

	public function signin()
	{
		$this->load->view('signin');
	}

	public function signout()
	{
		$this->load->view('signin');
	}

}

