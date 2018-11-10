<?php
class Contact extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Contact_model');
				$this->load->library('session');
                //$this->load->helper('url_helper');
				//$this->load->helper('my_helper');
				//echo 'jiii';
                //$this->load->view('view_header');
				}
function index()
{
	$this->load->view('contact');
}


function contact()
{
	//echo '<pre />';
	//print_r($this->session->userdata());
	$data = $this->input->post();
	   
		$savedata=array(
					'name'=>$this->input->post('name'),
					'email'=>$this->input->post('email'),
					'subject'=>$this->input->post('subject'),
					'message'=>$this->input->post('message'),
					
					);					
			if($savedata){		
					
					$this->load->model('Contact_model');
		$this->Contact_model->Ssave($savedata);
	
				$this->load->view('contact');

			}
}
}