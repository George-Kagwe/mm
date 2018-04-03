<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mara extends CI_Model {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
	$this->load->view('chart');
	}
	public function get()
	{
		$get = "select * from mara";

	    $result = $this->db->query($get);
	    return $result->result_array();

	}

	function get_data()
	{
	$this->db->select('month, wordpress, codeigniter, highcharts');
	$this->db->from('demo');

	$query = $this->db->get();
	return $query->result();
	}

	

	function get_facebook()
	{
	$this->db->select('month,posts,likes,views,reach, engagements,year');
	$this->db->from('facebook');
	$query = $this->db->get();
	return $query->result();
	}

	function get_twitter()
	{
	$this->db->select('month,tweets,impressions,profile_visits,mentions, new_followers,
		total_followers');
	$this->db->from('twitter');
	$query = $this->db->get();
	return $query->result();
	}
	function get_website()
	{
	$this->db->select('period,new_visits,average_time,bounce_rates,visits');
	$this->db->from('website');
	$query = $this->db->get();
	return $query->result();
	}
	function get_instagram()
	{
	$this->db->select('period,followers,total_reach,total_impressions,views');
	$this->db->from('instagram');
	$query = $this->db->get();
	return $query->result();
	}

	function get_population()
	{
	$this->db->select('id,locations,Male,Female,Total,households,Area_in_Sq_km,Density');
	$this->db->from('populations');
	// $this->db->where('locations','mara');
	$query = $this->db->get();
	return $query->result();

	// $get="      SELECT 
 //                  distinct(locations) id,Male,Female,Total,households,Area_in_Sq_km,Density

 //            FROM 
 //    populations   limit 10  ";


    $result = $this->db->query($get);
    return $result->result();
	}

	function get_population_filter($filter)
	{
	  if($filter !='')
	  {
	$get="      SELECT  id,locations,Male,Female,Total,households,Area_in_Sq_km,Density

            FROM 
    populations   WHERE id in($filter) ";
     $result = $this->db->query($get);
    return $result->result();
    }
    else{
    	$get="      SELECT  id,locations,Male,Female,Total,households,Area_in_Sq_km,Density

            FROM 
    populations    ";
     $result = $this->db->query($get);
    return $result->result();
    }
	}

	function get_population_id()
	{
	$this->db->select('id');
	$this->db->from('populations');
	// $this->db->where('locations','mara');
	$query = $this->db->get();
	return $query->result();
	}

	public function get_conservancies(){
		$get="      SELECT  Firm_ID,Firm_Name,Year,Acres,Total_Camps,Supporting_Camps,Bed,Land_Owners,
		Women_Land_Owners,Male_Loc,Female_Loc,Rangers,Trained,Roads,Reg_Leases,Lease_Acre,Leasehold_Fees,Direct_Employment,Population_Around,Cattles,Waterpans,Springs,Rivers,Vegetation,Mammals,Birds,Training_Sessions,Legal_Gov,Bursary,Budget

            FROM 
    firm  where Women_Land_Owners >= 0 
    order by Acres ASC";
     $result = $this->db->query($get);
    return $result->result();
	}
	public function budget(){
		$get="      SELECT  Firm_ID,Firm_Name,Year,Acres,Total_Camps,Supporting_Camps,Bed,Land_Owners,
		Women_Land_Owners,Male_Loc,Female_Loc,Rangers,Trained,Roads,Reg_Leases,Lease_Acre,Leasehold_Fees,Direct_Employment,Population_Around,Cattles,Waterpans,Springs,Rivers,Vegetation,Mammals,Birds,Training_Sessions,Legal_Gov,Bursary,Budget

            FROM 
    firm  where Budget!= 0 
    order by Acres ASC";
     $result = $this->db->query($get);
    return $result->result();
	}

	public function conserve(){
		$get="      SELECT  Firm_Name as name ,acres as value,Year

            FROM 
    firm  order by acres ASC ";
     $result = $this->db->query($get);
    return $result->result();
	}

public function Lease_Acre(){
		$get="      SELECT  Firm_Name as name ,Lease_Acre as value

            FROM 
    firm  
    where Lease_Acre!=0 
    order by Lease_Acre ASC ";
     $result = $this->db->query($get);
    return $result->result();
	}


public function Leasehold_Fees(){
		$get="      SELECT  Firm_Name as name ,Leasehold_Fees as value
            FROM  firm
             where Leasehold_Fees !=0
     order by Leasehold_Fees ASC ";
     $result = $this->db->query($get);
    return $result->result();
	}


public function reg_leases(){
		$get="      SELECT  Firm_Name as name ,reg_leases as value

            FROM 
    firm  where reg_leases !=0
     order by reg_leases ASC ";
     $result = $this->db->query($get);
    return $result->result();
	}

public function Women_Land_Owners(){
		$get="      SELECT  Firm_Name as name ,Women_Land_Owners as value

            FROM 
    firm  where Women_Land_Owners !=0
     order by Women_Land_Owners ASC ";
     $result = $this->db->query($get);
    return $result->result();
	}
public function  Land_Owners(){
		$get="      SELECT  Firm_Name as name ,Land_Owners as value

            FROM 
    firm  where Land_Owners !=0
     order by Land_Owners ASC ";
     $result = $this->db->query($get);
    return $result->result();
	}





public function years(){
		$get="      SELECT Year , acres  

            FROM 
    firm   ";
     $result = $this->db->query($get);
    return $result->result();
	}



	




}
