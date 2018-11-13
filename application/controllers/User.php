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
      public function change_password()  
      { 
	  
		$session = $this->session->userdata('front');
		$email = $session['email'];
         $course = $this->db->query("select * from user_login where email= '$email'");
		  $user['user_p'] =$course->result();
		  if($this->input->post()){
		  	$this->session->set_flashdata('message','Password Change Success');
		  	redirect(base_url().'user/change_password');
		  }else{
		  	$this->load->view('change-password', $user);	
		  }
		  
		  
      }
      public function update(){


      }

      function email_check($email)
{
	$id = $this->session->userdata('front')['id'];
	$count = $this->db->query("SELECT * from `user_login` where `id` != $id AND  `email`='$email'")->row();
	// echo $this->db->last_query();
	// echo $email;
	// print_r($this->session->userdata('front'));
	// print_r($count);die;
   if($count){
   	$this->form_validation->set_message('email_check', 'Aleady Exist');
        return FALSE;
    }else{

        return TRUE;
    }      

}

      public function account()  
      { 
      	$this->load->view('header');
		$session = $this->session->userdata('front');
		$email = $session['email'];
         $course = $this->db->query("select * from user_login where email= '$email'");
		  $user['user_p'] =$course->result();
	
	if($this->input->post()){
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
$this->form_validation->set_rules('last_name', 'Last Name', 'required');
$this->form_validation->set_rules('email', 'Email', 'required|callback_email_check');
$this->form_validation->set_rules('mobile', 'Mobile', 'required');
if ($this->form_validation->run() == FALSE)
{
	$this->load->view('my-profile', $user);
}else{
$id = $this->session->userdata('front')['id'];
	$savedata=array(
			"first_name"=>$this->input->post('first_name'),
			"last_name"=>$this->input->post('last_name'),
			"mobile"=>$this->input->post('mobile'),
			"email"=>$this->input->post('email'),
			//"password"=>md5($this->input->post('password')),
			);
	$flag = $this->db->where('id',$id)->update('user_login',$savedata);
	if($flag){
$this->session->set_flashdata('message','Profile Update Success');
	}else{
	$this->session->set_flashdata('error','Profile Update Failed');	
	}
 	
      	redirect(base_url().'user/account');
     
}
	}else{
		$this->load->view('my-profile', $user);
	}	  
		  
		  
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
                    redirect(base_url());
       }

	
}
