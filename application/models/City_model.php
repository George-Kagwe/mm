<?php
class City_model extends CI_Model {
 
public function __construct() {
 $this -> load -> database();
 
}
 
function get_cities($country = null){
 $this->db->select('id, city_name');
 
 if($country != NULL){
 $this->db->where('country_id', $country);
 }
 
 $query = $this->db->get('cities');
 
 $cities = array();
 
 if($query->result()){
 foreach ($query->result() as $city) {
 $cities[$city->id] = $city->city_name;
 }
 return $cities;
 }else{
 return FALSE;
 }
}
 
}
?>