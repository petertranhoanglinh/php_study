<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function signIndex()
    {
        $this->load->helper('url');
        $data['main_content'] = $this->load->view('register', '', true);
        $this->load->view('register', $data);
    }
    // chỉ hỗ trợ phân cấp 1 forder trong 1 controller 

    public function signIn()
    {

        $name = $this->input->post('name', true);
        $password = $this->input->post('password', true);
        $level = $this->input->post('level', true);
        $address = $this->input->post('address', true);
        $email = $this->input->post('email', true);
        $data = array(
            'name' => $name,
            'password' => $password,
            'level' => $level,
            'address' => $address,
            'email' => $email,

        );
        $this->M_login->insertUser($data);

        return 1;
    }

    public function index()
    {
        //load the database  
        $this->load->database();
        //load the model  tạo data có tên là H trong wiew
        $data['h'] = $this->M_login->getAllUser();
        //load the method of model  
        $this->load->view('select_view', $data);
    }

    public function edit()
    {
        $name = $_GET['user'];
        $this->load->database();
        $this->db->where("name", $name);
        $query = $this->db->get("users");
        $data['e'] =  $query;
        $this->load->view('edit', $data);
    }
    public function editPost()
    {
        $nameTxt = $this->input->post('nameTxt', true);
        $password = $this->input->post('password', true);
        $level = $this->input->post('level', true);
        $address = $this->input->post('address', true);
        $email = $this->input->post('email', true);
        $data = array(
            'password' => $password,
            'level' => $level,
            'address' => $address,
            'email' => $email,
        );
        $this->M_login->updUser($data, $nameTxt);
    }

    function delete()
    {
        $name = $_GET['user'];
        $this->load->database();
        $this->db->where("name", $name);
        $this->db->delete("users");
        echo "delete suscess";
    }
}
