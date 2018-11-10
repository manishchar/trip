<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Controller extends CI_Controller {

	
	public function index()
	{
                            $this->session->userdata('email'); 

				
		                   $this->load->view('Admin/includes/admin_header');
		                   $this->load->view('Admin/admin_dashboard');
		                   $this->load->view('admin/includes/admin_sidebarmenu');
                         
   }
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
                          redirect('Admin_Controller/index');
                               }
                           else{

                           	$this->load->view('admin/index');
                           }

                       }
  function profile(){
                             $this->session->userdata();

                          $this->load->view('Admin/includes/admin_header');
                            $this->load->view('admin/includes/admin_sidebarmenu');
                                        $query_a= $this->db->query('select * from admins');
                            $a['admin_data'] =$query_a->result();
                         
      
                         	$this->load->view('admin/admin_change-password',$a);
                   }
  function change_password(){
                          //   $n=$this->input->post();
                          // print_r($n);
                          // die();
                          //
                               $password = $this->input->post('password');
                           $newpassword =  ($this->input->post('newpassword'));
                           $this->load->model('Admin_model');
                         if($this->Admin_model->change_pass($password)){

                               $new = array('password'=>$newpassword);
                          
                            $this->load->model('Admin_model');
                            $this->Admin_model->pass_save($password,$new);
                            $this->session->set_flashdata('success_change',' password changed success');

                            redirect('Admin_Controller/profile');

                               }
                           else {
                            $this->session->set_flashdata('no_change','incorrect current password');
                          redirect('Admin_Controller/profile');

                           }


  }



  function add_trip(){
                      $this->session->userdata('email'); 
//echo "string";die;

		                    $this->load->view('Admin/includes/admin_header');
                            $this->load->view('admin/includes/admin_sidebarmenu');
   					        $this->load->view('admin/add_trip');
                         }
   function manage_trip(){
                         $this->session->userdata();

		                    $this->load->view('Admin/includes/admin_header');
                            $this->load->view('admin/includes/admin_sidebarmenu');
                            $query= $this->db->query('select * from trip_table');
                            $all['trip'] =$query->result();
                            $this->load->view('admin/manage_trip',$all);
                          }
   function update_trip(){
                         $this->session->userdata();
                         $this->load->view('Admin/includes/admin_header');
                            $this->load->view('admin/includes/admin_sidebarmenu');
                        
		                      $id = $this->uri->segment(3);
                              $course = $this->db->query ("select * from trip_table where id=".$id);
                              $data['trip']=$course->result();
// print_r( $data);die();  
                              $this->load->view('admin/update_trip', $data );

                            }
   function trip_update_save(){
   	                          $id=$this->input->post('id');

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
                                  $data = $this->upload->data('file_name');
         
                                  }
                                 $trip_save = array('trip_title'=>$this->input->post('trip_title'),
                                  'trip_description'=>$this->input->post('trip_discription'),
                                  'Trip_start_date'=>$this->input->post('start_date'),
                                  'Trip_end_date'=>$this->input->post('end_date'),
                                  'Trip_extra_date'=>$this->input->post('extra_date'),
                                  'person_price'=>$this->input->post('price'),
                                  'image'=>$data,
                                  'hotel_price'=>$this->input->post('hotel_price'),
                                  'day_count'=>$this->input->post('day_count'),
                                  'picup_price'=>$this->input->post('Airport_pickup_price'),
                                  'drop_off_price'=>$this->input->post('Airport_drop_price'),
                                   );
                                if($trip_save){
         	                       $this->load->model('Admin_model');
         	                       $this->Admin_model->trip_save($id,$trip_save);
                                   $this->session->set_flashdata('s','trip added successfully');
                                    redirect('Admin_Controller/manage_trip');

                                   }
                                }
   function delete_trip(){
                
                                 $id = $this->uri->segment(3);
                                 $this->db->query ("delete  from trip_table where id=".$id);
                                 redirect('Admin_Controller/manage_trip' );

                                 }
   function add_trip_insert(){
                          
            
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
                               $data = $this->upload->data('file_name');
                 }
   
                               $trip_data = array('trip_title'=>$this->input->post('trip_title'),
                                'trip_description'=>$this->input->post('trip_discription'),
                                'Trip_start_date'=>$this->input->post('start_date'),
                                'Trip_end_date'=>$this->input->post('end_date'),
                                'Trip_extra_date'=>$this->input->post('extra_date'),
                                'person_price'=>$this->input->post('price'),
                                'image'=>$data,
                                'hotel_price'=>$this->input->post('hotel_price'),
                                'day_count'=>$this->input->post('day_count'),
                                'picup_price'=>$this->input->post('Airport_pickup_price'),
                                'drop_off_price'=>$this->input->post('Airport_drop_price'),
                                );

                              if($trip_data){
         	                    $this->load->model('Admin_model');
         	                    $this->Admin_model->trip_insert($trip_data);

         	                    $this->session->set_flashdata('s','trip added successfully');

         	                     redirect('Admin_Controller/add_trip');
                                   } 
                             else{
                                $this->session->set_flashdata('e','trip added unsuccessfully');

         	                   redirect('add_trip');

                                 }
                                }
   function show_trip(){
                             $this->session->userdata();

   	                            $this->load->view('Admin/includes/admin_header');
   	                            $this->load->view('admin/includes/admin_sidebarmenu');
                                $query= $this->db->query('select * from trip_table');
                                $all['trip'] =$query->result();
                                $this->load->view('',$all);
                              }
   function registered_users(){
                                 $this->session->userdata();

                          $this->load->view('Admin/includes/admin_header');
                            $this->load->view('admin/includes/admin_sidebarmenu');
                            $query_user= $this->db->query('select * from user_login');
                            $u['user'] =$query_user->result();
                         
      
                          $this->load->view('admin/registered_users',$u);
                              } 

   function booking_history(){
                            $this->load->view('Admin/includes/admin_header');
                            $this->load->view('admin/includes/admin_sidebarmenu');
                             $query_booking= $this->db->query('select * from booking');
                            $all_booking['history'] =$query_booking->result();
                             //$all_count['count'] =$query_booking->rows_count();
                            $this->load->view('admin/booking_history',$all_booking);
          
   }                                                      
   function logout(){
                    $this->session->unset_userdata(array("role"=>"","password"=>"","email"=>"","logged_in" =>""));
                    $this->session->sess_destroy();
                    redirect('Wix_Controller/index');
       }


}
