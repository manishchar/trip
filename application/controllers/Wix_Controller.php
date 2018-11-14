<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wix_Controller extends CI_Controller {

	public function index()
	{
		$all['trip'] = $this->db->select('tab1.*,tab2.name')->join('categories as tab2','tab1.category_id=tab2.id')->get('trip_table as tab1')->result();
       
		$this->load->view('header',$all);

     	$this->load->view('index');
		 
		$this->load->view('footer');
		
	
	}
    public function story()
	{
	  $this->load->view('our-story');
	}
	function safari()
	{
	  $this->load->view('safari');
	}

	function kilimanjaro()
	{
	  $this->load->view('kilimanjaro');
	}

	function login()
	{
	  $this->load->view('login');
	}
    function contact()
	{
	  $this->load->view('contact');
	}
	function book()
	{
		$this->load->view('book-now');
	}
	function account()
	{
		$this->load->view('my-profile');
	}
	function register()
	{
		$this->load->view('register');
	}
	function booking()
	{
		$this->load->view('my-booking');
	}
	function payment()
	{
		$this->load->view('payment-history');
	}
	function admin()
	{
		$this->load->view('admin/index');
	}
	
  
}
