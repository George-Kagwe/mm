<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social extends CI_Controller {


	 public function __construct(){
		parent::__construct();
		
		$this->load->model('mara');
		
		
	}
public function index(){
	$this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	$this->load->view('socialmedia/Social');
	$this->load->view('includes/footer_view');
}

public function facebook(){
	$this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	$this->load->view('socialmedia/facebook');
	$this->load->view('includes/footer_view');

}

public function twitter(){
	$this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	$this->load->view('socialmedia/twitter');
	$this->load->view('includes/footer_view');

}
public function website(){
	$this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	$this->load->view('socialmedia/website');
	$this->load->view('includes/footer_view');

}
public function instagram(){
	$this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	$this->load->view('socialmedia/instagram');
	$this->load->view('includes/footer_view');

}

}