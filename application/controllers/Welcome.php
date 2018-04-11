<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	 public function __construct(){
		parent::__construct();
		$this->load->model('mara');
		
		
	}

	public function index()
	{
     		$this->load->view('includes/ajax');
	}
    
   
    public function facebook()
	{
			$data = $this->mara->get_facebook();
			 
			$category = array();
			$category['name'] = 'Category';
			 
			$series1 = array();
			$series1['name'] = 'Likes';
			 
			$series2 = array();
			$series2['name'] = 'Posts';
			 
			$series3 = array();
			$series3['name'] = 'Views';
			
			$series4 = array();
			$series4['name'] = 'Reach';
			$series5 = array();
			$series5['name'] = 'Engagements';
			 
			foreach ($data as $row)
			{
			$category['data'][] = $row->month;
			$series1['data'][] = $row->likes;
			$series2['data'][] = $row->posts;
			$series3['data'][] = $row->views;
			$series4['data'][] = $row->reach;
			$series5['data'][] = $row->engagements;
			}
			 
			$result = array();
			array_push($result,$category);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			 
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	  public function twitter()
	{
			$data = $this->mara->get_twitter();
			 
			$category = array();
			$category['name'] = 'Category';
			 
			$series1 = array();
			$series1['name'] = 'Tweets';
			 
			$series2 = array();
			$series2['name'] = 'Impressions';
			 
			$series3 = array();
			$series3['name'] = 'Profile visits';
			
			$series4 = array();
			$series4['name'] = 'Mentions';
			$series5 = array();
			$series5['name'] = 'New followers';
			$series6 = array();
			$series6['name'] = 'Total followers';
			 
			foreach ($data as $row)
			{
			$category['data'][] = $row->month;
			$series1['data'][] = $row->tweets;
			$series2['data'][] = $row->impressions;
			$series3['data'][] = $row->profile_visits;
			$series4['data'][] = $row->mentions;
			$series5['data'][] = $row->new_followers;
			$series6['data'][] = $row->total_followers;
			}
			 
			$result = array();
			array_push($result,$category);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			 
			print json_encode($result, JSON_NUMERIC_CHECK);
	}


	  public function website()
	{
			$data = $this->mara->get_website();
			 
			$category = array();
			$category['name'] = 'Category';
			 
			$series1 = array();
			$series1['name'] = 'PERCENTAGE NEW VISITS';
			 
			$series2 = array();
			$series2['name'] = 'AVERAGE TIME';
			 
			$series3 = array();
			$series3['name'] = 'BOUNCE RATE(% SINGLE VISITS)';
			$series4 = array();
			$series4['name'] = 'TOTAL VISITS';
			
			
			 
			foreach ($data as $row)
			{
			$category['data'][] = $row->period;
			$series1['data'][] = $row->new_visits;
			$series2['data'][] = $row->average_time;
			$series3['data'][] = $row->bounce_rates;
			$series4['data'][] = $row->visits;
			
			}
			 
			$result = array();
			array_push($result,$category);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			
			 
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	  public function website2()
	{
			$data = $this->mara->get_website2();
			 
			$category = array();
			$category['name'] = 'Category';
			 
			$series1 = array();
			$series1['name'] = 'New visits';
			 
			$series2 = array();
			$series2['name'] = 'Average time';
			 
			$series3 = array();
			$series3['name'] = 'Bounce rates';
			
			
			 
			foreach ($data as $row)
			{
			$category['data'][] = $row->period;
			$series1['data'][] = $row->new_visits;
			$series2['data'][] = $row->average_time;
			$series3['data'][] = $row->bounce_rates;
			
			}
			 
			$result = array();
			array_push($result,$category);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			
			 
			print json_encode($result, JSON_NUMERIC_CHECK);
	}


	 public function instagram()
	{
			$data = $this->mara->get_instagram();
			 
			$category = array();
			$category['name'] = 'Category';
			 
			$series1 = array();
			$series1['name'] = 'Total followers';
			 
			$series2 = array();
			$series2['name'] = 'Views';
			 
			$series3 = array();
			$series3['name'] = 'Total impressions';
			
			$series4 = array();
			$series4['name'] = 'Totalreach';
			 
			foreach ($data as $row)
			{
			$category['data'][] = $row->period;
			$series1['data'][] = $row->followers;
			$series2['data'][] = $row->views;
			$series3['data'][] = $row->total_impressions;
			$series4['data'][] = $row->total_reach;
			
			}
			 
			$result = array();
			array_push($result,$category);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			
			 
			print json_encode($result, JSON_NUMERIC_CHECK);
	}

	 public function population($conservancy='')
	{       

		    $conservancy=$this->input->post("location");

		    if ($conservancy ==''){
             
             $conservancies="";
		    }else{
		    	$conservancies=implode(",", $conservancy);
		    }


             

            
			$data = $this->mara->get_population_filter($conservancies);
			
			
			$category = array();
			$category['name'] = 'Category';
			 
			// $series1 = array();
			// $series1['name'] = 'locations';
			 
			$series1 = array();
			$series1['name'] = 'Male population';
			 
			$series2 = array();
			$series2['name'] = 'Female';
			
			$series3 = array();
			$series3['name'] = 'Total';

			$series4 = array();
			$series4['name'] = 'households';

			$series5 = array();
			$series5['name'] = 'Area_in_Sq_km';

			$series6 = array();
			$series6['name'] = 'Density';
			 
			foreach ($data as $row)
			{
			$category['data'][] = $row->locations;

			$series1['data'][] = $row->Male;
			$series2['data'][] = $row->Female;
			$series3['data'][] = $row->Total;
			$series4['data'][] = $row->households;
			$series5['data'][] = $row->Area_in_Sq_km;
			$series6['data'][] = $row->Density;
			
			}
			 
			$result = array();
			array_push($result,$category);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			
			 
			print json_encode($result, JSON_NUMERIC_CHECK);
	}
	

	 public function conservancies()
	{       

		   
             

            
			$data = $this->mara->get_conservancies();
			
			
			$category = array();
			$category['name'] = 'Category';
				 
			// $series1 = array();
			// $series1['name'] = 'Conservancy';
			 
			$series1 = array();
			$series1['name'] = 'Year Established';
			
			$series2 = array();
			$series2['name'] = 'Acres';

			$series3 = array();
			$series3['name'] = 'Total Camps';

			$series4 = array();
			$series4['name'] = 'Supporting Camps';

			$series5 = array();
			$series5['name'] = 'Bed';

			$series6 = array();
			$series6['name'] = 'Land Owners';

			$series7 = array();
			$series7['name'] = 'Women Land Owners';
			 
			$series8 = array();
			$series8['name'] = 'Male Loc';

			$series9 = array();
			$series9['name'] = 'Female Loc';

			$series10 = array();
			$series10['name'] = 'Rangers';

			$series11 = array();
			$series11['name'] = 'Trained';
			 
			$series12 = array();
			$series12['name'] = 'Roads';

			$series13= array();
			$series13['name'] = 'Registered Leases';

			$series14= array();
			$series14['name'] = 'Leased Acres';
			

			$series15= array();
			$series15['name'] = 'Leasehold Fees';


			$series16= array();
			$series16['name'] = 'Direct Employment';


			$series17= array();
			$series17['name'] = 'Population Around';


			$series18= array();
			$series18['name'] = 'Cattles';


			$series19= array();
			$series19['name'] = 'water pans';

			$series20= array();
			$series20['name'] = 'Springs ';


			$series21= array();
			$series21['name'] = 'Rivers';

			$series22= array();
			$series22['name'] = 'Bursaries';

			$series23= array();
			$series23['name'] = 'Budget';


			 
			 
			 
			 
			 
			 
			foreach ($data as $row)
			{
			$category['data'][] = $row->Firm_Name;

			$series1['data'][] = $row->Year;
			$series2['data'][] = $row->Acres;
			$series3['data'][] = $row->Total_Camps;
			$series4['data'][] = $row->Supporting_Camps;
			$series5['data'][] = $row->Bed;
			$series6['data'][] = $row->Land_Owners;
			$series7['data'][] = $row->Women_Land_Owners;
			$series8['data'][] = $row->Male_Loc;
			$series9['data'][] = $row->Female_Loc;
			$series10['data'][] = $row->Rangers;
			$series11['data'][] = $row->Trained;
			$series12['data'][] = $row->Roads;
			$series13['data'][] = $row->Reg_Leases;
			$series14['data'][] = $row->Lease_Acre;
			$series15['data'][] = $row->Leasehold_Fees;
			$series16['data'][] = $row->Direct_Employment;
			$series17['data'][] = $row->Population_Around;
			$series18['data'][] = $row->Cattles;
			$series19['data'][] = $row->Waterpans;
			$series20['data'][] = $row->Springs;
			$series21['data'][] = $row->Rivers;
			$series22['data'][] = $row->Bursary;
			$series23['data'][] = $row->Budget;
			
			
			}
			 
			$result = array();
			array_push($result,$category);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);	
			array_push($result,$series9);
			array_push($result,$series10);	
			array_push($result,$series11);
			array_push($result,$series12);	
			array_push($result,$series13);
			array_push($result,$series14);	
			array_push($result,$series15);
			array_push($result,$series16);	
			array_push($result,$series17);
			array_push($result,$series18);
			array_push($result,$series19);
			array_push($result,$series20);
			array_push($result,$series21);
			array_push($result,$series22);
			array_push($result,$series23);
			 
			print json_encode($result, JSON_NUMERIC_CHECK);
	}


	 public function loc()
	{       

		   
             

            
			$data = $this->mara->loc();
			
			
			$category = array();
			$category['name'] = 'Category';
				 
			// $series1 = array();
			// $series1['name'] = 'Conservancy';
			 
			$series1 = array();
			$series1['name'] = 'Year Established';
			
			$series2 = array();
			$series2['name'] = 'Acres';

			$series3 = array();
			$series3['name'] = 'Total Camps';

			$series4 = array();
			$series4['name'] = 'Supporting Camps';

			$series5 = array();
			$series5['name'] = 'Bed';

			$series6 = array();
			$series6['name'] = 'Land Owners';

			$series7 = array();
			$series7['name'] = 'Women Land Owners';
			 
			$series8 = array();
			$series8['name'] = 'Male Loc';

			$series9 = array();
			$series9['name'] = 'Female Loc';

			$series10 = array();
			$series10['name'] = 'Rangers';

			$series11 = array();
			$series11['name'] = 'Trained';
			 
			$series12 = array();
			$series12['name'] = 'Roads';

			$series13= array();
			$series13['name'] = 'Registered Leases';

			$series14= array();
			$series14['name'] = 'Leased Acres';
			

			$series15= array();
			$series15['name'] = 'Leasehold Fees';


			$series16= array();
			$series16['name'] = 'Direct Employment';


			$series17= array();
			$series17['name'] = 'Population Around';


			$series18= array();
			$series18['name'] = 'Cattles';


			$series19= array();
			$series19['name'] = 'water pans';

			$series20= array();
			$series20['name'] = 'Springs ';


			$series21= array();
			$series21['name'] = 'Rivers';

			$series22= array();
			$series22['name'] = 'Bursaries';

			$series23= array();
			$series23['name'] = 'Budget';


			 
			 
			 
			 
			 
			 
			foreach ($data as $row)
			{
			$category['data'][] = $row->Firm_Name;

			$series1['data'][] = $row->Year;
			$series2['data'][] = $row->Acres;
			$series3['data'][] = $row->Total_Camps;
			$series4['data'][] = $row->Supporting_Camps;
			$series5['data'][] = $row->Bed;
			$series6['data'][] = $row->Land_Owners;
			$series7['data'][] = $row->Women_Land_Owners;
			$series8['data'][] = $row->Male_Loc;
			$series9['data'][] = $row->Female_Loc;
			$series10['data'][] = $row->Rangers;
			$series11['data'][] = $row->Trained;
			$series12['data'][] = $row->Roads;
			$series13['data'][] = $row->Reg_Leases;
			$series14['data'][] = $row->Lease_Acre;
			$series15['data'][] = $row->Leasehold_Fees;
			$series16['data'][] = $row->Direct_Employment;
			$series17['data'][] = $row->Population_Around;
			$series18['data'][] = $row->Cattles;
			$series19['data'][] = $row->Waterpans;
			$series20['data'][] = $row->Springs;
			$series21['data'][] = $row->Rivers;
			$series22['data'][] = $row->Bursary;
			$series23['data'][] = $row->Budget;
			
			
			}
			 
			$result = array();
			array_push($result,$category);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);	
			array_push($result,$series9);
			array_push($result,$series10);	
			array_push($result,$series11);
			array_push($result,$series12);	
			array_push($result,$series13);
			array_push($result,$series14);	
			array_push($result,$series15);
			array_push($result,$series16);	
			array_push($result,$series17);
			array_push($result,$series18);
			array_push($result,$series19);
			array_push($result,$series20);
			array_push($result,$series21);
			array_push($result,$series22);
			array_push($result,$series23);
			 
			print json_encode($result, JSON_NUMERIC_CHECK);
	}
	 public function get_camps()
	{       

		   
             

            
			$data = $this->mara->get_camps();
			
			
			$category = array();
			$category['name'] = 'Category';
				 
			// $series1 = array();
			// $series1['name'] = 'Conservancy';
			 
			$series1 = array();
			$series1['name'] = 'Year Established';
			
			$series2 = array();
			$series2['name'] = 'Acres';

			$series3 = array();
			$series3['name'] = 'Total Camps';

			$series4 = array();
			$series4['name'] = 'Supporting Camps';

			$series5 = array();
			$series5['name'] = 'Bed';

			$series6 = array();
			$series6['name'] = 'Land Owners';

			$series7 = array();
			$series7['name'] = 'Women Land Owners';
			 
			$series8 = array();
			$series8['name'] = 'Male Loc';

			$series9 = array();
			$series9['name'] = 'Female Loc';

			$series10 = array();
			$series10['name'] = 'Rangers';

			$series11 = array();
			$series11['name'] = 'Trained';
			 
			$series12 = array();
			$series12['name'] = 'Roads';

			$series13= array();
			$series13['name'] = 'Registered Leases';

			$series14= array();
			$series14['name'] = 'Leased Acres';
			

			$series15= array();
			$series15['name'] = 'Leasehold Fees';


			$series16= array();
			$series16['name'] = 'Direct Employment';


			$series17= array();
			$series17['name'] = 'Population Around';


			$series18= array();
			$series18['name'] = 'Cattles';


			$series19= array();
			$series19['name'] = 'water pans';

			$series20= array();
			$series20['name'] = 'Springs ';


			$series21= array();
			$series21['name'] = 'Rivers';

			$series22= array();
			$series22['name'] = 'Bursaries';

			$series23= array();
			$series23['name'] = 'Budget';


			 
			 
			 
			 
			 
			 
			foreach ($data as $row)
			{
			$category['data'][] = $row->Firm_Name;

			$series1['data'][] = $row->Year;
			$series2['data'][] = $row->Acres;
			$series3['data'][] = $row->Total_Camps;
			$series4['data'][] = $row->Supporting_Camps;
			$series5['data'][] = $row->Bed;
			$series6['data'][] = $row->Land_Owners;
			$series7['data'][] = $row->Women_Land_Owners;
			$series8['data'][] = $row->Male_Loc;
			$series9['data'][] = $row->Female_Loc;
			$series10['data'][] = $row->Rangers;
			$series11['data'][] = $row->Trained;
			$series12['data'][] = $row->Roads;
			$series13['data'][] = $row->Reg_Leases;
			$series14['data'][] = $row->Lease_Acre;
			$series15['data'][] = $row->Leasehold_Fees;
			$series16['data'][] = $row->Direct_Employment;
			$series17['data'][] = $row->Population_Around;
			$series18['data'][] = $row->Cattles;
			$series19['data'][] = $row->Waterpans;
			$series20['data'][] = $row->Springs;
			$series21['data'][] = $row->Rivers;
			$series22['data'][] = $row->Bursary;
			$series23['data'][] = $row->Budget;
			
			
			}
			 
			$result = array();
			array_push($result,$category);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);	
			array_push($result,$series9);
			array_push($result,$series10);	
			array_push($result,$series11);
			array_push($result,$series12);	
			array_push($result,$series13);
			array_push($result,$series14);	
			array_push($result,$series15);
			array_push($result,$series16);	
			array_push($result,$series17);
			array_push($result,$series18);
			array_push($result,$series19);
			array_push($result,$series20);
			array_push($result,$series21);
			array_push($result,$series22);
			array_push($result,$series23);
			 
			print json_encode($result, JSON_NUMERIC_CHECK);
	}
	 public function get_employment()
	{       

		   
             

            
			$data = $this->mara->get_employment();
			
			
			$category = array();
			$category['name'] = 'Category';
				 
			// $series1 = array();
			// $series1['name'] = 'Conservancy';
			 
			$series1 = array();
			$series1['name'] = 'Year Established';
			
			$series2 = array();
			$series2['name'] = 'Acres';

			$series3 = array();
			$series3['name'] = 'Total Camps';

			$series4 = array();
			$series4['name'] = 'Supporting Camps';

			$series5 = array();
			$series5['name'] = 'Bed';

			$series6 = array();
			$series6['name'] = 'Land Owners';

			$series7 = array();
			$series7['name'] = 'Women Land Owners';
			 
			$series8 = array();
			$series8['name'] = 'Male Loc';

			$series9 = array();
			$series9['name'] = 'Female Loc';

			$series10 = array();
			$series10['name'] = 'Rangers';

			$series11 = array();
			$series11['name'] = 'Trained';
			 
			$series12 = array();
			$series12['name'] = 'Roads';

			$series13= array();
			$series13['name'] = 'Registered Leases';

			$series14= array();
			$series14['name'] = 'Leased Acres';
			

			$series15= array();
			$series15['name'] = 'Leasehold Fees';


			$series16= array();
			$series16['name'] = 'Direct Employment';


			$series17= array();
			$series17['name'] = 'Population Around';


			$series18= array();
			$series18['name'] = 'Cattles';


			$series19= array();
			$series19['name'] = 'water pans';

			$series20= array();
			$series20['name'] = 'Springs ';


			$series21= array();
			$series21['name'] = 'Rivers';

			$series22= array();
			$series22['name'] = 'Bursaries';

			$series23= array();
			$series23['name'] = 'Budget';


			 
			 
			 
			 
			 
			 
			foreach ($data as $row)
			{
			$category['data'][] = $row->Firm_Name;

			$series1['data'][] = $row->Year;
			$series2['data'][] = $row->Acres;
			$series3['data'][] = $row->Total_Camps;
			$series4['data'][] = $row->Supporting_Camps;
			$series5['data'][] = $row->Bed;
			$series6['data'][] = $row->Land_Owners;
			$series7['data'][] = $row->Women_Land_Owners;
			$series8['data'][] = $row->Male_Loc;
			$series9['data'][] = $row->Female_Loc;
			$series10['data'][] = $row->Rangers;
			$series11['data'][] = $row->Trained;
			$series12['data'][] = $row->Roads;
			$series13['data'][] = $row->Reg_Leases;
			$series14['data'][] = $row->Lease_Acre;
			$series15['data'][] = $row->Leasehold_Fees;
			$series16['data'][] = $row->Direct_Employment;
			$series17['data'][] = $row->Population_Around;
			$series18['data'][] = $row->Cattles;
			$series19['data'][] = $row->Waterpans;
			$series20['data'][] = $row->Springs;
			$series21['data'][] = $row->Rivers;
			$series22['data'][] = $row->Bursary;
			$series23['data'][] = $row->Budget;
			
			
			}
			 
			$result = array();
			array_push($result,$category);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);	
			array_push($result,$series9);
			array_push($result,$series10);	
			array_push($result,$series11);
			array_push($result,$series12);	
			array_push($result,$series13);
			array_push($result,$series14);	
			array_push($result,$series15);
			array_push($result,$series16);	
			array_push($result,$series17);
			array_push($result,$series18);
			array_push($result,$series19);
			array_push($result,$series20);
			array_push($result,$series21);
			array_push($result,$series22);
			array_push($result,$series23);
			 
			print json_encode($result, JSON_NUMERIC_CHECK);
	}
    
     public function Budget()
	{       

		   
             

            
			$data = $this->mara->budget();
			
			
			$category = array();
			$category['name'] = 'Category';
				 
			// $series1 = array();
			// $series1['name'] = 'Conservancy';
			 
			$series1 = array();
			$series1['name'] = 'Year Established';
			
			$series2 = array();
			$series2['name'] = 'Acres';

			$series3 = array();
			$series3['name'] = 'Total Camps';

			$series4 = array();
			$series4['name'] = 'Supporting Camps';

			$series5 = array();
			$series5['name'] = 'Bed';

			$series6 = array();
			$series6['name'] = 'Land Owners';

			$series7 = array();
			$series7['name'] = 'Women Land Owners';
			 
			$series8 = array();
			$series8['name'] = 'Male Loc';

			$series9 = array();
			$series9['name'] = 'Female Loc';

			$series10 = array();
			$series10['name'] = 'Rangers';

			$series11 = array();
			$series11['name'] = 'Trained';
			 
			$series12 = array();
			$series12['name'] = 'Roads';

			$series13= array();
			$series13['name'] = 'Registered Leases';

			$series14= array();
			$series14['name'] = 'Leased Acres';
			

			$series15= array();
			$series15['name'] = 'Leasehold Fees';


			$series16= array();
			$series16['name'] = 'Direct Employment';


			$series17= array();
			$series17['name'] = 'Population Around';


			$series18= array();
			$series18['name'] = 'Cattles';


			$series19= array();
			$series19['name'] = 'water pans';

			$series20= array();
			$series20['name'] = 'Springs ';


			$series21= array();
			$series21['name'] = 'Rivers';

			$series22= array();
			$series22['name'] = 'Bursaries';

			$series23= array();
			$series23['name'] = 'Budget';


			 
			 
			 
			 
			 
			 
			foreach ($data as $row)
			{
			$category['data'][] = $row->Firm_Name;

			$series1['data'][] = $row->Year;
			$series2['data'][] = $row->Acres;
			$series3['data'][] = $row->Total_Camps;
			$series4['data'][] = $row->Supporting_Camps;
			$series5['data'][] = $row->Bed;
			$series6['data'][] = $row->Land_Owners;
			$series7['data'][] = $row->Women_Land_Owners;
			$series8['data'][] = $row->Male_Loc;
			$series9['data'][] = $row->Female_Loc;
			$series10['data'][] = $row->Rangers;
			$series11['data'][] = $row->Trained;
			$series12['data'][] = $row->Roads;
			$series13['data'][] = $row->Reg_Leases;
			$series14['data'][] = $row->Lease_Acre;
			$series15['data'][] = $row->Leasehold_Fees;
			$series16['data'][] = $row->Direct_Employment;
			$series17['data'][] = $row->Population_Around;
			$series18['data'][] = $row->Cattles;
			$series19['data'][] = $row->Waterpans;
			$series20['data'][] = $row->Springs;
			$series21['data'][] = $row->Rivers;
			$series22['data'][] = $row->Bursary;
			$series23['data'][] = $row->Budget;
			
			
			}
			 
			$result = array();
			array_push($result,$category);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			array_push($result,$series7);
			array_push($result,$series8);	
			array_push($result,$series9);
			array_push($result,$series10);	
			array_push($result,$series11);
			array_push($result,$series12);	
			array_push($result,$series13);
			array_push($result,$series14);	
			array_push($result,$series15);
			array_push($result,$series16);	
			array_push($result,$series17);
			array_push($result,$series18);
			array_push($result,$series19);
			array_push($result,$series20);
			array_push($result,$series21);
			array_push($result,$series22);
			array_push($result,$series23);
			 
			print json_encode($result, JSON_NUMERIC_CHECK);
	}


	 public function populations($conservancy='')
	{       

		    $conservancy=$this->input->post("location");

		    if ($conservancy ==''){
             
             $conservancies="";
		    }else{
		    	$conservancies=implode(",", $conservancy);
		    }


             

            
			$data = $this->mara->get_population_filter($conservancies);
			
			
			$category = array();
			$category['name'] = 'Category';
			 
			// $series1 = array();
			// $series1['name'] = 'locations';
			 
			$series1 = array();
			$series1['name'] = 'Male population';
			 
			$series2 = array();
			$series2['name'] = 'Female';
			
			$series3 = array();
			$series3['name'] = 'Total';

			$series4 = array();
			$series4['name'] = 'households';

			$series5 = array();
			$series5['name'] = 'Area_in_Sq_km';

			$series6 = array();
			$series6['name'] = 'Density';
			 
			foreach ($data as $row)
			{
			$category['data'][] = $row->locations;

			$series1['data'][] = $row->Male;
			$series2['data'][] = $row->Female;
			$series3['data'][] = $row->Total;
			$series4['data'][] = $row->households;
			$series5['data'][] = $row->Area_in_Sq_km;
			$series6['data'][] = $row->Density;
			
			}
			 
			$result = array();
			array_push($result,$category);
			array_push($result,$series1);
			array_push($result,$series2);
			array_push($result,$series3);
			array_push($result,$series4);
			array_push($result,$series5);
			array_push($result,$series6);
			
			 
			print json_encode($result, JSON_NUMERIC_CHECK);
	}
	

	public function conserve(){
		$data = $this->mara->conserve();
             
		echo json_encode($data,true);
	}

	public function years(){
		$data= $this->mara->years();

		echo json_encode($data);
	}

	public function clean(){
			$data = $this->mara->conserve();
           
          
			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(($row->name),floatval($row->value ) );
			}

		

			echo json_encode($JsonArray);
			
			}

	public function cleaner(){
			$data = $this->mara->conserve();
           
          
			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(floatval($row->Year),floatval($row->value ),($row->name) );
			}

			

			echo json_encode($JsonArray);
			
	}

	public function reg_leases(){
			$data = $this->mara->reg_leases();
           

			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(($row->name),floatval($row->value ) );
			}


			echo json_encode($JsonArray);
			
	}

	public function Leasehold_Fees(){
			$data = $this->mara->Leasehold_Fees();
           
         
			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(($row->name),floatval($row->value ) );
			}

			
			echo json_encode($JsonArray);
			
	}
	public function Leasehold_Fee(){
			$data = $this->mara->Leasehold_Fee();

			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(($row->name),floatval($row->y),floatval($row->z) );
			}
           
           

			echo json_encode( $data,JSON_NUMERIC_CHECK);
			
	}

	public function Lease_Acre(){
			$data = $this->mara->Lease_Acre();
           
          
			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(($row->name),floatval($row->value ) );
			}

			

			echo json_encode($JsonArray);
			
	}
    public function women_land_owners(){
			$data = $this->mara->Women_Land_Owners();
           
          
			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(($row->name),floatval($row->value ) );
			}

			
			echo json_encode($JsonArray);
			
	}
	public function land_owners(){
			$data = $this->mara->land_owners();
           
          
			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(($row->name),floatval($row->value ) );
			}

			
			echo json_encode($JsonArray);
			
	}

	public function employment(){
			$data = $this->mara->employment();
           
           
			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(($row->name),floatval($row->value ) );
			}

			echo json_encode($JsonArray);
			
	}

	public function budgets(){
			$data = $this->mara->budget();
           
         
			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(($row->name),floatval($row->value ) );
			}

			echo json_encode($JsonArray);
			
	}

	public function bursaries(){
			$data = $this->mara->bursaries();
           
			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(($row->name),floatval($row->value ) );
			}

			
			echo json_encode($JsonArray);
			
	}

	public function get_cumulative(){
			$data = $this->mara->get_cumulative();
           
          
			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(($row->year),floatval($row->conservancies ) );
			}

			echo json_encode($JsonArray);
			
	}

	public function get_beds(){
			$data = $this->mara->get_beds();
           
          
			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(($row->name),floatval($row->value ) );
			}

			echo json_encode($JsonArray);
			
	}

    public function get_rangers(){
			$data = $this->mara->get_rangers();
           
          
			$json_Array    = array();

			foreach ($data as $row){
			
			    $JsonArray[] = array(($row->name),floatval($row->value ) );
			}

			echo json_encode($JsonArray);
			
	}

	public function get_totals(){
		$data = $this->mara->get_totals();
           
			

			echo json_encode($data,JSON_NUMERIC_CHECK) ;

	}





       
	


}
