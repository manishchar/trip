<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()  
      { 
	  
		$session = $this->session->userdata('front');
		$email = $session['email'];

          $course = $this->db->query("select * from user_login where email= '.$email.' ");
		  $user['user_p'] =$course->result_array();
		  //print_r($user);
		  //die();
		  $this->load->view('my-profile', $user);
		  
      }
      public function account()  
      { 
      	$this->load->view('header');
	  
	$session = $this->session->userdata('front');
		$email = $session['email'];
         $course = $this->db->query("select * from user_login where email= '$email'");
		  $user['user_p'] =$course->result();
		  // print_r($user);
		  // die();
		  $this->load->view('my-profile', $user);
		  
      } 
      public function profile()

	{     
	       	$this->load->view('header');
 
	 //$email = $this->session->userdata('email');
	
		 $course = $this->db->query('select * from user_login ');
		$couse = $query =$this->db->select('user_login', $data);
		 $this->session->set_userdata($course);
		 //print_r($course);
		 //die();
		 $user['data'] = $course->result_array();
		
		 $this->load->view('my-profile',$user);

	}

      function payment_history()
		{
			
			//$data['users']= $this->Payment_model->Getdata('user_payment_history');
			$course = $this->db->query("select * from user_payment_history");
			
			$user['data'] = $course->result_array();
			
			$this->load->view('payment-history', $user);
			
        }
	function my_booking()
	{
		$course = $this->db->query("select * from user_booking");
		
		$user['data'] = $course->result_array();
		
		$this->load->view('my-booking',$user);
	}	
	 function logout(){
                    //$this->session->unset_userdata(array("role"=>"","password"=>"","email"=>"","logged_in" =>""));
                    //$this->session->unset_userdata('front',array());
                    $this->session->sess_destroy();
                    redirect('Wix_Controller/index');
       }

	
}
