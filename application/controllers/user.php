<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('_header');
		$this->load->view('_left');
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

