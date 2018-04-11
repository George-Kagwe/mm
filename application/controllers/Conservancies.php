<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Conservancies extends CI_Controller {


	 public function __construct(){
		parent::__construct();
		
		$this->load->model('mara');
		
		
	}

public function data(){
	$data = $this->mara->get_facebook();

	echo json_encode($data);
}


public function column(){
	 $this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	$this->load->view('conservancies/column');
	 

}
public function treemap(){
	//  $this->load->view('includes/header_view');
	// $this->load->view('includes/nav_view');
	$this->load->view('conservancies/tree_map');
	 

}
public function dashboard(){
	 $this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	$this->load->view('conservancies/conservancy_dashboard');
	 $this->load->view('includes/footer_view');

}
public function threed(){
	 $this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	$this->load->view('conservancies/3dpie');
	 $this->load->view('includes/footer_view');

}
public function big(){
	 $this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	$this->load->view('conservancies/bigPie');
	 $this->load->view('includes/footer_view');

}
public function nested(){
	 $this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	$this->load->view('conservancies/nested');
	 $this->load->view('includes/footer_view');

}
public function scatter(){
	 $this->load->view('includes/header_view');
 $this->load->view('includes/nav_view');
	$this->load->view('conservancies/scatter');
	 $this->load->view('includes/footer_view');

}
public function scatter2(){
	 $this->load->view('includes/header_view');
 $this->load->view('includes/nav_view');
	$this->load->view('conservancies/scatter2');
	 $this->load->view('includes/footer_view');

}
public function compare(){
	 $this->load->view('includes/header_view');
	 $this->load->view('includes/nav_view');
	$this->load->view('conservancies/compare');
	$this->load->view('includes/footer_view');

}
public function texture(){
	 $this->load->view('includes/header_view');
 $this->load->view('includes/nav_view');
	$this->load->view('conservancies/texture');
	 $this->load->view('includes/footer_view');

}
public function customized(){
	 $this->load->view('includes/header_view');
	 $this->load->view('includes/nav_view');
	$this->load->view('conservancies/customized');
	 $this->load->view('includes/footer_view');

}

public function combined(){
	 $this->load->view('includes/header_view');
	 $this->load->view('includes/nav_view');
	$this->load->view('conservancies/combined');
	 $this->load->view('includes/footer_view');

}

public function d3(){
	 $this->load->view('includes/header_view');
	 $this->load->view('includes/nav_view');
	$this->load->view('conservancies/echarts');
	$this->load->view('includes/footer_view');

}
public function pie(){
	 $this->load->view('includes/header_view');
	 $this->load->view('includes/nav_view');
	$this->load->view('conservancies/pie');
	 $this->load->view('includes/footer_view');

}

public function sizes(){
	 $this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	$this->load->view('conservancies/conservancy_sizes');
	$this->load->view('includes/footer_view');

}
public function rainbow(){
	 $this->load->view('includes/header_view');
	 $this->load->view('includes/nav_view');
	$this->load->view('conservancies/rainbow');
	 $this->load->view('includes/footer_view');

}
public function tree(){
	 $this->load->view('includes/header_view');
	 $this->load->view('includes/nav_view');
	$this->load->view('conservancies/tree');
	$this->load->view('includes/footer_view');

}
public function index(){
	$this->load->view('includes/header_view');
	$this->load->view('includes/con_nav_view');
	$this->load->view('conservancies/tabbed_conservancy');
	$this->load->view('includes/footer_view');

}

public function sizess(){
	$this->load->view('includes/header_view');
	$this->load->view('includes/nav_view');
	$this->load->view('conservancies/Conservancies');
	$this->load->view('includes/footer_view');
	

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