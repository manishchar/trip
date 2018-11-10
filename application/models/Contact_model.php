<?php
class Contact_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


public function Ssave($data)
{
    return $this->db->insert('contact_us', $data);
	return $query;
}
}
