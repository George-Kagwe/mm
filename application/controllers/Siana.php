<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siana extends CI_Controller {

public function __construct()
	 	{
	 		parent::__construct();
			$this->load->helper('url');
	 		$this->load->model('book_model');
	 	}

public function index()
	{
 
		  $data['siana']=$this->book_model->get_all_books();
		  $this->load->view('includes/header_view');
	      $this->load->view('includes/nav_view');
		  $this->load->view('leases/lease',$data);
	}

	public function book_add()
		{
			$data = array(
					'PARNO' => $this->input->post('PARNO'),
					'NAME' => $this->input->post('NAME'),
					'Location' => $this->input->post('Location'),
					'HA' => $this->input->post('HA'),
					'A' => $this->input->post('Acres')

				);
			$insert = $this->book_model->book_add($data);
			//var_dump($data);die();
			echo json_encode(array("status" => TRUE));

		}


	public function ajax_edit($id)
		{
			$data = $this->book_model->get_by_id($id);
 
 
 
			echo json_encode($data);
		}


	public function book_update()
	{
		$data = array(
				    'PARNO' => $this->input->post('PARNO'),
					'NAME' => $this->input->post('NAME'),
					'Location' => $this->input->post('Location'),
					'HA' => $this->input->post('HA'),
					'A' => $this->input->post('Acres')
			);
		$this->book_model->book_update(array('id' => $this->input->post('id')), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function book_delete($id)
	{
		$this->book_model->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}

}