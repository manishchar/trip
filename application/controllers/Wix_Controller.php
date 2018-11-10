<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wix_Controller extends CI_Controller {

	public function index()
	{
		$query= $this->db->query('select * from trip_table');
      $all['trip'] =$query->result();
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
