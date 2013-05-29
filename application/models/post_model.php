<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Post_Model extends CI_Model
{

	public function save($post)
	{
		$this->db->insert('post', $post);	
		$id = $this->db->insert_id();
		return $this->findbyid($id);
	}

	public function listAll()
	{
		$post = $this->db->get("post");	
		return $post->result_array();
	}

	public function findbyid($id)
	{
		$this->db->where('id', $id);	
		$query = $this->db->get('post');
		return $query->row_array();
	}
}
