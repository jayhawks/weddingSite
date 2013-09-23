<?php

class Model_get extends CI_Model{

	//Purpose: returns associative array
	function getData($page)
	{
		$query = $this->db->get_where("posts" ,array("id" => $page));
			
		return $query->result();
	}
	
	
	//Purpose: to return array of all blog entries (only returns id and title)
	//Implemented: on the content_blog_home page
	function getPages()
	{
		$this->db->select(array('id', 'title'));
		$query = $this->db->get('posts');
		
		return  $query->result();		
	}
}