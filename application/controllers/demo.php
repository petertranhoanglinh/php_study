<?php
class Demo extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function index(){
        $this->load->database();
        echo "demo controller";
        $query = $this->db->query("select * from users");
        // trả dữ liệu dưới dạng mảng
        $data = $query->result_array();
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        
        // count query
        // đếm số record
        echo $query->num_rows();

        // lấy  1 dòng query->row_array();
    }

    public function index2(){
        $this->load->database();
        // tương đương với select * from users
       
       
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        // search theo điều kiện 
        // tên trường điều kiện theo tên trường
         $this->db->where("name","test");
         // limit gioi han query 
         $this->db->limit(0,3);
         $query=$this->db->get("users");
         $data = $query->result_array();
        echo "<pre>";
        print_r($data);
        echo "</pre>";

    }

    // thực thi việc lấy dữ liệu cách 2 
    // this->db->get("name table database");
    // liệt kê các cột muốn hiển thị
    

}