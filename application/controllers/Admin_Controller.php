<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {


    
    function show_trip(){
        $this->session->userdata();

        $this->load->view('Admin/includes/admin_header');
        $this->load->view('admin/includes/admin_sidebarmenu');
        $query= $this->db->query('select * from trip_table');
        $all['trip'] =$query->result();
        $this->load->view('',$all);
    }
     
                                                      
  
}
