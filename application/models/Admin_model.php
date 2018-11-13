<?php
class Admin_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


        public function SaveData($table,$data)
        {
           $this->db->insert($table, $data);
           return $this->db->inset_id();
        }
public function Getdata($email,$password)
                                        {
                                      $this->db->where('email',$email);
                                      $this->db->where('password',$password);

	                                  $r= $this->db->get('admins');

	                                 if($r->num_rows() >0){

		                                  return true;
	                                  }
	                                 else{
	                                  	   return false;
	                                  }
                                     }
public function change_pass($password)
                                        {
                                      
                                      $this->db->where('password',$password);

                                    $p= $this->db->get('admins');

                                   if($p->num_rows() >0){

                                      return true;
                                    }
                                   else{
                                         return false;
                                    }
                                     }
public function pass_save($password,$new){
                                         $this->db->where('password', $password);

                                        $this->db->update('admins',$new);

                                        }                                                                          
public function trip_insert($trip_data){
	                                   $trip_data_query =$this->db->insert('trip_table',$trip_data);
	                                   return $trip_data_query;

                                       }

function trip_save($id,$trip_save){
  $this->db->where('id', $id);
  return $this->db->update('trip_table', $trip_save);

  }
public function getUserData($id)
                               {
	                              return $this->db->get_where('wix_db',array('id'=>$id))->result_array();
                                }


}