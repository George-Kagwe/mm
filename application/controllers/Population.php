<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class population extends CI_Controller {


	 public function __construct(){
		parent::__construct();
		
		$this->load->model('mara');
		
		
	}


public function index(){

			$location ['locations']= $this->mara->get_population();
			$all['all']= $this->mara->get_population_id();
                
                // echo json_encode($location);
		        
				$data =array_merge($location,$all);
		
	$this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	 $this->load->view('population/population',$data);
	$this->load->view('includes/footer_view');

}


public function filter(){

			$conservancy=$this->input->post("location");
 
			$conservancies=implode(",", $conservancy);
var_dump($conservancies);die();

			$data= $this->mara->get_population_filter($conservancies);
		
				$data =array_merge($location,$all);
		
	$this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	 $this->load->view('population/population',$data);
	$this->load->view('includes/footer_view');
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