<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        // cần có thuộc tính này để không overide lên lớp cha Ci controller
        parent::__construct();
    }

    public function index()
    {
        // return biến cho wiew
        $data = array(
            "title" => "code framwork",
            "author" => "kenney"
        );

        // tạo mảng trong wiew
        $data['data_info'] = array(
            "name" => "kenney",
            "level" => "2",
            "email" => "kenney@gamil.com"
        );


        // hàm load trong ci_controller 
        $this->load->view('login', $data);
    }

    public function demo()
    {
        echo "this is demo";
    }

    // path sẽ là index.php/nameController/tên method trong controller
}