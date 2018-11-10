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
				}
function index()
{
//	$this->load->view('register');
}


function register()
{
	echo "string";

	die;
	//echo '<pre />';
	//print_r($this->session->userdata());
	
	  // $data = $this->input->post();
$this->form_validation->set_rules('first_name', 'First Name', 'required');
$this->form_validation->set_rules('last_name', 'Last Name', 'required');
$this->form_validation->set_rules('password', 'Password Confirmation', 'required');
$this->form_validation->set_rules('password_confirmation', 'Password Confirmation', 'required|matches[password]');
$this->form_validation->set_rules('email', 'Email', 'required');
$this->form_validation->set_rules('mobile', 'Mobile', 'required');
if ($this->form_validation->run() == FALSE)
{
     $response = array('status'=>'failed','code'=>'201','message'=>'form error');
}
else
{
  $response = array('status'=>'success','code'=>'200','message'=>'registration sucess');
}

echo json_encode($response);
die;
		// $savedata=array(
		// 	"first_name"=>$this->input->post('first_name'),
		// 	"last_name"=>$this->input->post('last_name'),
		// 	"mobile"=>$this->input->post('mobile'),
		// 	"email"=>$this->input->post('email'),
		// 	"password"=>md5($this->input->post('password')),
		// 	//"confirm_password"=>$this->input->post('confirm_password'),
		// 	);
		// if($savedata){		
		// 	$this->load->model('Normal_Login_model');
		// 	$this->Normal_Login_model->SaveData($savedata);
		// 	redirect('Normal_Login/index');
		// }
		// else{
		// redirect('Normal_Login/index');
		// }
}

function login()
{
 
	            
				$email = $this->input->post('email');
              $password =  md5($this->input->post('password'));
      
     
               $this->load->model('Normal_Login_model');
             

                   if($this->Normal_Login_model->Getdata($email,$password)){

                        $log = array(

                         
                         'email' => $this->input->post('email'),
                         'password' => md5($this->input->post('password')),
                         'email' => $this->input->post('email'),
                         'logged_in' => 'login id'
						 
                                );
                       //  $this->session->set_userdata($log);
                          
						 // $query = $this->db->query('SELECT * FROM user_login LIMIT 1');
                           //  $row = $query->row_array();
                             //echo $row['first_name'];
                               // die();0
                         redirect('Wix_Controller/account');


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