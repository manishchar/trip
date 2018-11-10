<?php
class Normal_Login_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


public function SaveData($data)
{
    return $this->db->insert('user_login', $data);
}
public function tdata($email,$password)
{
    $this->db->where('email',$email);
    $this->db->where('password',$password);

	$r= $this->db->get('user_login');

	if($r->num_rows() >0){

		return true;
	}
	else{
		return false;
	}
}
public function Getdata($email,$password)
{
    $this->db->where('email',$email);
    $this->db->where('password',$password);

	return $this->db->get('user_login')->row();

}

public function Updatedata($table,$id,$data)
{
	$this->db->where('id',$id);
	return $this->db->update($table, $data);
}
public function getUserData($id)
{
	return $this->db->get_where('wix_db',array('id'=>$id))->result_array();
}


}