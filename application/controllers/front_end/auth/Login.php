<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->lang->load('content', $this->session->userdata('site_lang'));
        if($this->session->userdata('loggedIn_front') == true)
        {
            redirect('Front');
        }

        $this->load->model('front_model/Login_Model', 'login');
        $this->load->database();
    }

    function index()
    {
        $this->load->view('front/login');
        
    }

    function validation()
    {       
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        if($this->form_validation->run())
        {
            
            $user_email = $this->input->post('user_email');
            $password = $this->input->post('user_password');
            

            $result = $this->login->checkLogin($user_email, $password);

            if(count($result)>0)
            {
                $this->session->set_userdata('name', $data[0]['name']);
                $this->session->set_userdata('email', $data[0]['email']);
                $this->session->set_userdata('loggedIn_front', TRUE);
                redirect('Front');
            }
            else
            {
                $error_msg = "Enter correct email or password";
                $this->session->set_flashdata('message',$error_msg);
                redirect('front_end/auth/login');
            }
        }
        else
        {
            $this->index();
        }
    }

}

?>