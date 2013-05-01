<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Staff extends CI_Controller {


	public function form()
	{
		$data['menu'] = 'staff';
		$data['sub_menu'] = 'staff_form';
		$this->load->view('_header');
		$this->load->view('_left', $data);
		$this->load->view('staff_form');
		$this->load->view('_footer');
	}

}

