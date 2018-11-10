<?php
class Payment_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
		}
  		
public function Getdata($table,$data)
{
	return $this->db->get($table)->result_arrey();
} 
 
		
}		
