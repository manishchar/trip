<?php
class Normal_Login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Normal_Login_model');
				$this->load->library('session');
                //$this->load->helper('url_helper');
				//$this->load->helper('my_helper');
				//echo 'jiii';
                //$this->load->view('view_header');
                $this->load->model('Normal_Login_model');

				}
function index()
{
	$this->load->view('register');
}


function register()
{
	$this->form_validation->set_rules('first_name', 'First Name', 'required');
$this->form_validation->set_rules('last_name', 'Last Name', 'required');
$this->form_validation->set_rules('password', 'Password Confirmation', 'required');
$this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'required|matches[password]');
$this->form_validation->set_rules('email', 'Email', 'required|is_unique[user_login.email]');
$this->form_validation->set_rules('mobile', 'Mobile', 'required');
if ($this->form_validation->run() == FALSE)
{
	$error = array();
	if(form_error('first_name')){
		$error['first_name'] = form_error('first_name');
	}
	if(form_error('last_name')){
		$error['last_name'] = form_error('last_name');
	}
	if(form_error('password_confirmation')){
		$error['password_confirmation'] = form_error('password_confirmation');
	}
	if(form_error('password')){
		$error['password'] = form_error('password');
	}

	if(form_error('mobile')){
		$error['mobile'] = form_error('mobile');
	}
	if(form_error('email')){
		$error['email'] = form_error('email');
	}
     $response = array('status'=>'failed','code'=>'201','error'=>$error,'message'=>'form error');
}
else
{
	$savedata=array(
			"first_name"=>$this->input->post('first_name'),
			"last_name"=>$this->input->post('last_name'),
			"mobile"=>$this->input->post('mobile'),
			"email"=>$this->input->post('email'),
				"password"=>md5($this->input->post('password')),
			//"confirm_password"=>$this->input->post('confirm_password'),
			);
	if($savedata){		
			
		$this->load->model('Normal_Login_model');
		$last_id = $this->Normal_Login_model->SaveData($savedata);
		if($last_id){
			$user=array(
				'id'=>$last_id,
				'name'=>$this->input->post('first_name'),
				'email'=>$this->input->post('email'),
				'is_login'=>true,
			);
			$this->session->set_userdata('front',$user);
$response = array('status'=>'success','code'=>'200','message'=>'registration sucess');
		}else{
$response = array('status'=>'failed','code'=>'300','message'=>'Database error');	
		}
	}
  
}

echo json_encode($response);
die;

echo "string";

	die;	   
		$savedata=array(
					"first_name"=>$this->input->post('first_name'),
					"last_name"=>$this->input->post('last_name'),
					"mobile"=>$this->input->post('mobile'),
					"email"=>$this->input->post('email'),
		   			"password"=>md5($this->input->post('password')),
					//"confirm_password"=>$this->input->post('confirm_password'),
					);
			if($savedata){		
					
					$this->load->model('Normal_Login_model');
		$this->Normal_Login_model->SaveData($savedata);
	
					redirect('Normal_Login/index');

			}
			else{
				
				redirect('Normal_Login/index');
			}
}

function login()
{
       	$this->load->view('header');

	
				$email = $this->input->post('email');
              $password =  md5($this->input->post('password'));
      

               // admin_login
                             $this->load->model('Admin_model');
$user = $this->Normal_Login_model->Getdata($email,$password);
              if(!empty($user)){

                $data=array(
				'id'=>$user->id,
				'name'=>$user->first_name,
				'email'=>$user->email,
				'is_login'=>true,
			);
			$this->session->set_userdata('front',$data);

                         redirect('User/account');


                           }
                           else{
                            $this->session->set_flashdata('error','invailid Email and password');
                      $this->load->view('login');
                         }
    
	

}

 function logout()
 {
	 session_destroy();
 }
}