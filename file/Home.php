<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	
	public function dashboard()
    {
        $data['instant_req'] = $this->admin_model->getreq();
        $this->load->view('admin/dashboard',$data);
    }
	

	
}
