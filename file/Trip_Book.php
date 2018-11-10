<?php
class Trip_Book extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('Trip_Book_model');
				$this->load->library('session');
                //$this->load->helper('url_helper');
				//$this->load->helper('my_helper');
				//echo 'jiii';
                //$this->load->view('view_header');
				}
function index()
{
	$this->load->view('checkout');
}


function checkout()
{
	//echo '<pre />';
	//print_r($this->session->userdata());
	if($this->input->post('checkout'))
	{
		$savedata=array(
					"firstName"=>$this->input->post('firstName'),
					"lastName"=>$this->input->post('lastName'),
					"email"=>$this->input->post('email'),
					"phone"=>$this->input->post('phone'),
					"title"=>$this->input->post('title'),
					"firstName"=>$this->input->post('firstName'),
					"middlename"=>$this->input->post('middlename'),
					"laststName"=>$this->input->post('lastname'),
					"dob"=>$this->input->post('dob'),
					"pob"=>$this->input->post('pob'),
					"passport_number"=>$this->input->post('passport_number'),
					"nationality"=>$this->input->post('nationality'),
					"expiration"=>$this->input->post('expiration'),
					"address"=>$this->input->post('address'),
					"address2"=>$this->input->post('address2'),
					"country"=>$this->input->post('country'),
					"state"=>$this->input-post('state'),
					"zip"=>$this->input->post('zip'),
					
					
					
					);
					$this->load->model('Trip_Book_model');
		$this->Trip_Book_model->SaveData('wix_db',$savedata);
	}
	$this->load->view('checkout');
}

}