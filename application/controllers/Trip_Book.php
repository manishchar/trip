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
function trip_show(){


   	  $query= $this->db->query('select * from trip_table');
      $all['trip'] =$query->result();
      $this->load->view('book-now',$all);
   }
   function machame_trek()
	{


		                           

                $id = $this->uri->segment(3);
         // print_r($id);
         // die();
           $course = $this->db->query ("select * from trip_table where id=".$id);



            $data['trip']=$course->result();
// print_r( $data);die();  

   
		$this->load->view('machame-6-day-trek',$data );
	}
	function book()
	{

   $this->load->view('header');
		                           

                $id = $this->uri->segment(3);
         // print_r($id);
         // die();
           $course = $this->db->query ("select * from trip_table where id=".$id);



            $data['trip']=$course->result();
// print_r( $data);die();  

   
		$this->load->view('trip-book',$data );
	}



function checkout()
{
	//echo '<pre />';
	//print_r($this->session->userdata());
	//$rec = $this->input->post();
	//print_r($rec);
	//die();
	
		$savedata=array(
					'firstName'=>$this->input->post('firstName'),
					'lastName'=>$this->input->post('lastName'),
					'email'=>$this->input->post('email'),
					'phone'=>$this->input->post('phone'),
					'title'=>$this->input->post('title'),
					'fName'=>$this->input->post('fName'),
					'middlename'=>$this->input->post('middlename'),
					'lName'=>$this->input->post('lName'),
					'dob'=>$this->input->post('dob'),
					'pob'=>$this->input->post('pob'),
					'passport_number'=>$this->input->post('passport_number'),
					'nationality'=>$this->input->post('nationality'),
					'expiration'=>$this->input->post('expiration'),
					'address'=>$this->input->post('address'),
					'address2'=>$this->input->post('address2'),
					'country'=>$this->input->post('country'),
					'state'=>$this->input->post('state'),
					'zip'=>$this->input->post('zip'),
					
					);
						if($savedata){		
					
					$this->load->model('Trip_Book_model');
		$this->Trip_Book_model->SaveData($savedata);
	  
					redirect('Wix_Controller/review');

			}
			else{
				$this->session->set_flashdata('error','Unsuccess full');
				redirect('Trip_Book/index');
			}

}
}
