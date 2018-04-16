<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	 public function __construct(){
		parent::__construct();
		
		$this->load->model('mara');
		
		
	}


public function index(){
	$get_totals['summary'] = $this->mara->get_totals();
	$population['population'] = $this->mara->population_totals();
	$data =array_merge($get_totals,$population);

	$this->load->view('includes/header_view');
	$this->load->view('includes/home_nav');
   $this->load->view('home/home',$data);
	$this->load->view('includes/footer_view');

}
public function home(){
	$get_totals['summary'] = $this->mara->get_totals();
	$population['population'] = $this->mara->population_totals();
	$data =array_merge($get_totals,$population);
	
	$this->load->view('includes/header_view');
	$this->load->view('includes/home_nav');
   $this->load->view('home/home',$data);
	$this->load->view('includes/footer_view');

}

public function dahsboard_design(){
	$this->load->view('dashboard/includes/header_view');
	$this->load->view('dashboard/includes/side_bar');
   $this->load->view('dashboard/includes/top_nav');
   $this->load->view('dashboard/includes/landing_page');
   $this->load->view('dashboard/includes/footer_view');

}

public function version2(){
	$this->load->view('production/index');
	

}

public function facebook(){
	$this->load->view('design/facebook');
	

}
public function website(){
	$this->load->view('design/website');
	

}
public function twitter(){
	$this->load->view('design/twitter');
	

}
public function instagram(){
	$this->load->view('design/instagram');
	

}

}