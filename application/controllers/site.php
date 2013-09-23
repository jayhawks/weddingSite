<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{
		//redirect to home to make navigation as easy as possible
		// i.e. foo.com and foo.com/index are the same thing
		$this->home();
	}

	function home()
	{
		$data['title'] = "Home";

		$this->load->view("site_header", $data);
		$this->load->view("site_nav");
		$this->load->view("content_home");
		$this->load->view("site_footer");
	}
	
	function about()
	{
		$data['title'] = "About";
		
		$this->load->view("site_header", $data);
		$this->load->view("site_nav");
		$this->load->view("content_about");
		$this->load->view("site_footer");
	}
	
	function wedding_info()
	{
		$data['title'] = "Wedding Information";
		
		$this->load->view("site_header", $data);
		$this->load->view("site_nav");
		$this->load->view("content_wedding_info");
		$this->load->view("site_footer");
	}
}
