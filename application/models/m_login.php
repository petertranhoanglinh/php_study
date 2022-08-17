<?php
class M_login extends CI_Model {
    public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    public function get_user($name,$pw)
        {
          $this->db->where("name",$name);
          $this->db->where("password",$pw);
          $query=$this->db->get("users");
          $data = $query->num_rows();
          return $data;
        }
      function insertUser($data){
          $result = $this->db->insert('users',$data);
          echo "suscess register";
      }

      function updUser($data,$nameTxt){
        $this->db->where('name',$nameTxt);
        $this->db->update('users',$data);
        echo "update suscess";
    }

      

      public function getAllUser()  
      {  
         //data is retrive from this query  
         $query = $this->db->get('users');  
         return $query;  
      }
      
    }
    
 