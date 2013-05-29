<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Img_Model extends CI_Model
{

	public function save($img)
	{
		$this->db->insert('img_upload', $user);	
		$id = $this->db->insert_id();
		return $this->findbyid($id);
	}

	public function listAll()
	{
		$user = $this->db->get("user");	
		return $user->result_array();
	}

	public function findbyrenrenid($renren_id)
	{
		$this->db->where('renren_id', $renren_id);	
		$query = $this->db->get('user');
		return $query->row_array();
	}

	public function findbyid($id)
	{
		$this->db->where('id', $id);	
		$query = $this->db->get('user');
		return $query->row_array();
	}
}
