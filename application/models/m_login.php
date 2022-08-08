<?php
class M_login extends CI_Model {
    public function __construct()
    {
      parent::__construct();
    }
    public function get_user($name,$pw)
        {
          $this->load->database();
          $this->db->where("name",$name);
          $this->db->where("password",$pw);
          $query=$this->db->get("users");
          $data = $query->num_rows();
          return $data;
        } 
    }
 