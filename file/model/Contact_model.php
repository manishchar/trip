<?php
class Contact_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }


public function SaveData($table,$data)
{
    return $this->db->insert($table, $data);
}
}
