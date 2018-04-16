<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mara extends CI_Model {

	
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

	function get_cumulative()
	{
	$this->db->select('year, conservancies');
	$this->db->from('cumulative_growth');

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
	
		$get="      SELECT  month,tweets,impressions,profile_visits,mentions, new_followers,
	 	total_followers

            FROM 
    twitter  where tweets != 0 
    ";
     $result = $this->db->query($get);
    return $result->result();
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
    $result = $this->db->query($get);
    return $result->result();
	}

	function get_population_totals()
	{
	$get="      SELECT  
	           sum(Male) as Male,
	           sum(Female) as Female,
	           sum(Total) as Total,
	           sum(Households) as Households,
	           count(locations) as locations


            FROM 
    populations   ";
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
	public function loc(){
		$get="      SELECT  Firm_ID,Firm_Name,Year,Acres,Total_Camps,Supporting_Camps,Bed,Land_Owners,
		Women_Land_Owners,Male_Loc,Female_Loc,Rangers,Trained,Roads,Reg_Leases,Lease_Acre,Leasehold_Fees,Direct_Employment,Population_Around,Cattles,Waterpans,Springs,Rivers,Vegetation,Mammals,Birds,Training_Sessions,Legal_Gov,Bursary,Budget

            FROM 
    firm  where Male_Loc >1
    order by Male_Loc ASC";
     $result = $this->db->query($get);
    return $result->result();
	}
	public function get_camps(){
		$get="      SELECT  Firm_ID,Firm_Name,Year,Acres,Total_Camps,Supporting_Camps,Bed,Land_Owners,
		Women_Land_Owners,Male_Loc,Female_Loc,Rangers,Trained,Roads,Reg_Leases,Lease_Acre,Leasehold_Fees,Direct_Employment,Population_Around,Cattles,Waterpans,Springs,Rivers,Vegetation,Mammals,Birds,Training_Sessions,Legal_Gov,Bursary,Budget

            FROM 
    firm  where Total_Camps != 0 
    order by Total_Camps ASC";
     $result = $this->db->query($get);
    return $result->result();
	}
	public function get_employment(){
		$get="      SELECT  Firm_ID,Firm_Name,Year,Acres,Total_Camps,Supporting_Camps,Bed,Land_Owners,
		Women_Land_Owners,Male_Loc,Female_Loc,Rangers,Trained,Roads,Reg_Leases,Lease_Acre,Leasehold_Fees,Direct_Employment,Population_Around,Cattles,Waterpans,Springs,Rivers,Vegetation,Mammals,Birds,Training_Sessions,Legal_Gov,Bursary,Budget

            FROM 
    firm  where Direct_Employment != 0 and Population_Around !=0
    order by Direct_Employment ASC";
     $result = $this->db->query($get);
    return $result->result();
	}

  public function employment(){
		$get="      SELECT  Firm_Name as name ,Direct_Employment as value

            FROM 
    firm  where Direct_Employment != 0 
    order by Direct_Employment ASC";
     $result = $this->db->query($get);
    return $result->result();
	}
	public function budget(){
		$get="      SELECT  Firm_Name as name ,Budget as value

            FROM 
    firm  where Budget!= 0 
    order by Budget ASC";
     $result = $this->db->query($get);
    return $result->result();
	}
	public function bursaries(){
		$get="      SELECT  Firm_Name as name ,Bursary as value

            FROM 
    firm  where Bursary!= 0 
    order by Bursary ASC";
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
	public function Leasehold_Fee(){
		$get="      SELECT  Firm_Name as name ,Acres as y, Year as z
            FROM  firm
            
     order by Acres DESC ";
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



public function get_beds(){
		$get="      SELECT Firm_Name as name , bed  as value 

            FROM 
    firm    where bed >0
    order by bed asc";
     $result = $this->db->query($get);
    return $result->result();
	}

public function get_rangers(){
		$get="      SELECT Firm_Name as name , Rangers  as value 

            FROM 
    firm    where Rangers >0
    order by Rangers asc";
     $result = $this->db->query($get);
    return $result->result();
	}

 public function get_totals(){
 	$get ="SELECT
 	      count(*) as all_conservancies,
 	      sum(acres) as total_acres,
 	      sum(Total_Camps) as Total_Camps,
 	      sum(Supporting_Camps) as Supporting_Camps,
 	      sum(Land_Owners) as Land_Owners,
 	      sum(Women_Land_Owners) as Women_Land_Owners,
 	      sum(Male_Loc) as Male_Loc,
 	      sum(Female_Loc) as Female_Loc,
 	      sum(Rangers) as Rangers,
 	      sum(Trained) as Trained,
 	      sum(Roads) as Roads,
 	      sum(Reg_Leases) as Reg_Leases,
 	      sum(Lease_Acre) as Lease_Acre,
 	      sum(Leasehold_Fees) as Leasehold_Fees,
 	      sum(Direct_Employment) as Direct_Employment,
 	      sum(Population_Around) as Population_Around,
 	      sum(Cattles) as Cattles,
 	      sum(Budget) as Budget,
 	      sum(Bursary) as Bursary
 	      from firm" ;
 	 $result = $this->db->query($get);
    return $result->result();
 }

	
public function population_totals(){
	$get ="SELECT
      count(*) as total_villages,
      sum(male) as male_population,
      sum(Female) as female_population,
      sum(Households) as Households,
      sum(Area_in_Sq_km) as total_area,
      sum(Density) as Density,
       sum(total) as total
      from populations";

       $result = $this->db->query($get);
    return $result->result();
	
}



}
