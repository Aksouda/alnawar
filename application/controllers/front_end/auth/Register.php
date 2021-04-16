<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

     public function __construct()
     {
         parent::__construct();
         $this->lang->load('content', $this->session->userdata('site_lang'));
        if($this->session->userdata('loggedIn_front'))
        {
            redirect('Front');
        }

         $this->load->model('front_model/register_Model', 'register');
         $this->load->database();
     }

    function index()
    {
        $this->load->view('front/register');
    }

    function submit_register()
    {      

        $this->form_validation->set_rules('user_name', 'Name', 'required');
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');
        if($this->form_validation->run())
        {
            $user_name = $this->input->post('user_name');
            $user_email = $this->input->post('user_email');
            $password = $this->input->post('user_password');

            $record = array("name" => $user_name,
                            "email" => $user_email,
                            "password" => md5($password));
            
            $result = $this->register->insert_register($record);

            if($result != null)
            {
                $this->session->set_userdata('name', $result->name);
                $this->session->set_userdata('email', $result->email);
                $this->session->set_userdata('loggedIn_front', TRUE);
                redirect('Front');
            }
            else
            {
                $this->session->set_flashdata('message',$result);
                $this->index();
            }
        }
        else
        {
            $this->index();
        }
    }

}

?>