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
    }
}