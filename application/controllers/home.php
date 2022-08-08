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
        // hàm load trong ci_controller 
        $this->load->view('login');
    }

    public function demo()
    {
        echo "this is demo";
    }

    // path sẽ là index.php/nameController/tên method trong controller
}