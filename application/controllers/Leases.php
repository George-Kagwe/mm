<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Leases extends CI_Controller {


	public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('book_model');
	 	}


public function index(){
	$data['siana']=$this->book_model->get_all_books();
	$this->load->view('includes/header_view');
	$this->load->view('includes/leases');
	$this->load->view('land_leases_allocations/land_leases',$data);
	$this->load->view('includes/footer_view');

}



}