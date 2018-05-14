<?php
class User extends CI_Controller {
 
public function __construct() {
 parent::__construct();
 $this ->load->library('encryption');
 
}

public function index(){

	$this->load->helper('cookie');

	 //  $name='George'; 
	 //  $role='Regional Admin';
	 //  $email='georgegkagwe@gmail.com';
	 //  $timestamp='2:37pm';
	 //  $conservancy='Naboisho';

	 // $values =array('name' =>$name,
	 //                'role'=>$role,
	 //                'email'=>$email,
	 //                'timestamp'=>$timestamp,
	 //                  'organization'=>$conservancy
	 //                 );
	 // $dataset =json_encode($values);


  //     $cookie = array(
  //                   'name'   => 'data',
  //                   'value'  => $this->encryption->encrypt($dataset),
  //                   'expire' =>  86500,
  //                   'secure' => false
  //               );
  //               $this->input->set_cookie($cookie);
	            $data =array();


                $dataaa = json_decode($_COOKIE['data'], true); 


 // var_dump($dataaa['name']."  ".$dataaa['email']." ".$dataaa['organization']."  ".$dataaa['timestamp']."  ".$dataaa['role']); 

                var_dump($dataaa['first_name']."  ".$dataaa['last_name']."  ".$dataaa['email']." ".$dataaa['organization']."  ".$dataaa['timestamp']."  ".$dataaa['role']); 
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

public function back_to_wild(){


}


 public function log_out(){

 	//kill the ssession
 }



}