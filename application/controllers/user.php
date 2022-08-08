<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        echo "dir : admin , controller: User, action :index";
    }

    // chỉ hỗ trợ phân cấp 1 forder trong 1 controller 
}