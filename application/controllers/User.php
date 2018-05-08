<?php
class User extends CI_Controller {
 
public function __construct() {
 parent::__construct();
 $this ->load-> model('country_model');
 
}

public function get_credentials(){


	//get the credentials 
	$user_name=$this->input->post();
	$email=$this->input->post();
	$password=$this->input->post();
	$conservancy=$this->input->post();
	$timestamp=$this->input->post();
	$role=$this->input->post();
	$permissions=$this->input->post();

	//check if there is a session existing already


	//if yes, kill it and start  new one



	//if no session existing save the credentials and start another one.



	// start a session


 }

public function back_to wild(){


}


 public function log_out(){

 	//kill the ssession
 }



