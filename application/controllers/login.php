
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
            $this->load->model('M_login');
        }
        public function loginIndex()
        {
            $this-> load-> helper ('url');
            $data['main_content'] = $this->load->view('wiewlogin', '', true);
            $this->load->view('wiewlogin', $data);
        }
    
        public function customer_login()
        {
           
            $name = $this->input->post('name', true);
            
            $pw = $this->input->post('password', true);
            $user_result = $this->M_login->get_user($name,$pw);
        
            if ($user_result > 0) //active user record is present
            {
               
                echo "login suscess";
                
            } else {
                echo "password or username does not exist ";
            }
        }
        
        public function billing()
        {
        $this->load->view('user_billing_dashboard');
        }
        
    }

