<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index(){
		$this->load->view('admin/index');
	}
	// function admin()
	// {
	// 	$this->load->view('admin/index');
	// }

function login(){
	$this->session->userdata();
	$email = $this->input->post('email');
	$password =  ($this->input->post('password'));
	$this->load->model('Admin_model');
	if($this->Admin_model->Getdata($email,$password)){
	$session_data = array(
	'email' => $this->input->post('email'),
	'password' =>$this->input->post('password'),
	'logged_in' => 'login id'
	);
	$this->session->set_userdata($session_data);
	// echo "string";
	// die;
	redirect(base_url('admin/dashboard'));
	}
	else{
$this->session->set_flashdata('error','invalid email or password');
	redirect(base_url('admin'));
	}
}
public function logout(){
	
    $this->session->unset_userdata(array("role"=>"","password"=>"","email"=>"","logged_in" =>""));
    $this->session->sess_destroy();
    redirect('admin/index');
}

public function dashboard()
{
	$data['title'] = 'Dashboard';	
   $this->session->userdata('email'); 
   $this->load->view('admin/admin_dashboard',$data);
   }

function change_password(){
  $password = $this->input->post('password');
  $newpassword =  ($this->input->post('newpassword'));
  $this->load->model('Admin_model');
  if($this->Admin_model->change_pass($password)){
    $new = array('password'=>$newpassword);
    $this->load->model('Admin_model');
    $this->Admin_model->pass_save($password,$new);
    $this->session->set_flashdata('success_change',' password changed success');
    redirect('admin/profile');
  }
  else {
    $this->session->set_flashdata('no_change','incorrect current password');
    redirect('admin/profile');
  }
}

function profile(){
	$this->session->userdata();

	$this->load->view('admin/includes/admin_header');
	$this->load->view('admin/includes/admin_sidebarmenu');
	$query_a= $this->db->query('select * from admins');
	$a['admin_data'] =$query_a->result();


	$this->load->view('admin/admin_change-password',$a);
}

function add_trip(){
	$data['title'] = 'Add Trip';
  $this->session->userdata('email'); 
  $data['cities'] = $this->db->where('active','1')->get('cities')->result();
  $data['categories'] = $this->db->where('active','1')->get('categories')->result();
  if($this->input->post()){
    $this->form_validation->set_rules('trip_title', 'Title', 'required',array('required'=>'%s required'));
    $this->form_validation->set_rules('price', 'Price', 'required',array('required'=>'%s required'));
    $this->form_validation->set_rules('start_date', 'start_date', 'required',array('required'=>'%s required'));
    $this->form_validation->set_rules('end_date', 'end_date', 'required',array('required'=>'%s required'));
      if ($this->form_validation->run() == FALSE)
      {
         $this->load->view('admin/add_trip',$data);
      }
      else
      {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = $this->input->post('trip_file');
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('trip_file'))
        {
          $error = array('error' => $this->upload->display_errors());
        }
        else
        {
          $file_name = $this->upload->data('file_name');
        }

        $trip_data = array('trip_title'=>$this->input->post('trip_title'),
          'trip_description'  =>$this->input->post('trip_discription'),
          'Trip_start_date'   =>date('Y-m-d H:i:s',strtotime($_POST['start_date'])),
          'Trip_end_date'     =>date('Y-m-d H:i:s',strtotime($_POST['end_date'])),
          'extra_price'       =>$_POST['extra_price'],
          'category_id'       =>$_POST['category_id'],
          'Trip_extra_date'   =>$this->input->post('extra_date'),
          'person_price'      =>$this->input->post('price'),
          'image'             =>$file_name,
          'hotel_price'       =>$this->input->post('hotel_price'),
          'day_count'         =>$this->input->post('day_count'),
          'picup_price'       =>$this->input->post('Airport_pickup_price'),
          'drop_off_price'    =>$this->input->post('Airport_drop_price'),
        );
        // print_r($_POST);
        // print_r($trip_data);
        // die;
        if($trip_data){
        $this->load->model('Admin_model');
        $this->Admin_model->trip_insert($trip_data);

        $this->session->set_flashdata('s','trip added successfully');

        redirect(base_url('admin/add_trip'));
        } 
        else{
        $this->session->set_flashdata('e','trip added unsuccessfully');

        redirect(base_url('admin/add_trip'));

        }
      }
  }else{
      
    $this->load->view('admin/add_trip',$data);    
  }
}


	function manage_trip(){
	  $this->session->userdata();
	  $data['title'] = "Trip List";
	  //$this->load->view('admin/includes/admin_header');
	  //$this->load->view('admin/includes/admin_sidebarmenu');
	  $query= $this->db->query('select * from trip_table');
	  $data['trip'] =$query->result();
	  $this->load->view('admin/manage_trip',$data);
	}
	function registered_users(){
	  $this->session->userdata();
	  $data['title'] ="User List";
	  $query_user= $this->db->query('select * from user_login');
	  $data['user'] =$query_user->result();
	  $this->load->view('admin/registered_users',$data);
	}

    function booking_history(){
      $query_booking= $this->db->query('select * from booking');
      $data['history'] =$query_booking->result();
      $data['title'] ="Booking History";
      $this->load->view('admin/booking_history',$data);
    }
	function update_trip(){
		$data['title']='Edit Trip';
		$id = $this->uri->segment(3);
	  $course = $this->db->query ("select * from trip_table where id=".$id);
	  $data['trip']=$course->row();
    $data['categories'] = $this->db->where('active','1')->get('categories')->result();
	if($this->input->post()){
	    $this->form_validation->set_rules('trip_title', 'Title', 'required',array('required'=>'%s required'));
	    $this->form_validation->set_rules('price', 'Price', 'required',array('required'=>'%s required'));
	    $this->form_validation->set_rules('start_date', 'start_date', 'required',array('required'=>'%s required'));
	    $this->form_validation->set_rules('end_date', 'end_date', 'required',array('required'=>'%s required'));
      if ($this->form_validation->run() == FALSE)
      {
         $this->load->view('admin/update_trip',$data);
      }
      else
      {
      	$config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = $this->input->post('trip_file');
        $file_name = '';
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('trip_file'))
        {
          $error = array('error' => $this->upload->display_errors());
        }
        else
        {
          $file_name = $this->upload->data('file_name');
        }
        // print_r($_FILES);
        // print_r($_POST);
        // print_r($error);
        // echo $file_name;
        // die;
        if($file_name ==''){
        	$file_name = $this->input->post('old_image');	
        }
        $id = $this->input->post('id');
        $trip_data = array('trip_title'=>$this->input->post('trip_title'),
          'trip_description'  =>$this->input->post('trip_discription'),
          'Trip_start_date'   =>date('Y-m-d H:i:s',strtotime($_POST['start_date'])),
          'Trip_end_date'     =>date('Y-m-d H:i:s',strtotime($_POST['end_date'])),
          'category_id'       =>$_POST['category_id'],
          'extra_price'       =>$_POST['extra_price'],
          'Trip_extra_date'   =>$this->input->post('extra_date'),
          'person_price'      =>$this->input->post('price'),
          'image'             =>$file_name,
          'hotel_price'       =>$this->input->post('hotel_price'),
          'picup_price'       =>$this->input->post('Airport_pickup_price'),
          'drop_off_price'    =>$this->input->post('Airport_drop_price'),
        );
        // print_r($_POST);
        // print_r($trip_data);
        // die;
$this->load->model('Admin_model');
$flag = $this->Admin_model->trip_save($id,$trip_data);
if($flag){
$this->session->set_flashdata('message','Trip Update successfully');	
}else{
	$this->session->set_flashdata('error','Trip Update Failed');
}

	redirect('admin/update_trip/'.$id);
        //print_r($trip_data);
      }
	}else{
		 $this->load->view('admin/update_trip', $data );
	}

	  
	 
	}
	function delete_trip(){
		$id = $this->uri->segment(3);
		$this->db->query ("delete  from trip_table where id=".$id);
		redirect('admin/manage_trip' );
	}

}
?>