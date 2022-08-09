<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        echo "dir : admin , controller: User, action :index";
    }
    
    public function signIndex(){
        $this-> load-> helper ('url');
        $data['main_content'] = $this->load->view('register', '', true);
        $this->load->view('register', $data);
    }
    // chỉ hỗ trợ phân cấp 1 forder trong 1 controller 

    public function signIn(){

        $name=$this->input->post('name',true);
        $password=$this->input->post('password',true);
        $level=$this->input->post('level',true);
        $address = $this->input->post('address',true);
        $email = $this->input->post('email',true);
        $data = array(
            'name'=>$name,
            'password'=>$password,
            'level'=>$level,
            'address'=>$address,
            'email'=>$email,

        );
        $this->M_login->insertUser($data);

        return 1;
    }
}