<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bus_M extends CI_Model {

	public function __construct()
	{
      	parent::__construct();
      	$this->load->database();
	}

	public function getBusData($data)
	{
		
  $query = $this->db->get_where('searchbus',array('iSourceId'=> $data['fplace'],'iDestinationId'=> $data['splace']));
	   		//$result = $this->db->select($data)->from('searchbus')->where('fplace', $fplace)->where('splace', $splace)->get();

		// $query = $this->db->get('searchbus')->where('vFrom', $fplace)->where('vTo', $splace);
	 //    $result = $query->result_array();
	 //    return $result

	    // $query = $this -> db
     //       ->select('*')
     //       ->where('vFrom', $fplace)
     //       ->where('vTo', $splace)
     //       ->get('searchbus');	

        $result = $query->result_array();
   
	    return $result ; 	
	}

	 public function getAllSource()
    {
    	$query = $this->db->query('SELECT vSourceName,iSourceId FROM source');
        $result = $query->result_array();

	    return $result ; 

	}

	 public function getAllDesti()
    {
	    $query = $this->db->query('SELECT vDestinationName,iDestinationId FROM destination');
        $result = $query->result_array();

	    return $result ; 
	}

	
        // return $query->result();
    	
        /*
        $query = $this->db->get('location');

        foreach ($query->result() as $row)
        {
            echo $row->description;
        }*/
//         $this->db->from('source');
// $this->db->order_by(' vSourceName');
// $result = $this->db->get();
// $return = array();
// if($result->num_rows() > 0) {
// foreach($result->result_array() as $row) {
// $return[$row['id']] = $row['name'];

 // $this->db->order_by("vSourceName", "ASC");
 //  $query = $this->db->get("source");
 //  return $query->result();
      

        
        //echo 'Total Results: ' . $query->num_rows();
    //}
	
	// public function addModData($data)
	// {
	// 	$result = $this->db->insert('student',$data); 
	// 	return $result;
 // 	}
 // 	public function deleteModData($id)
	// {

	// 	$result = $this->db->where('id', $id)->delete('student');
	//  	return $result;
	// }
}
