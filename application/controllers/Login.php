<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('date');
        $this->load->helper('file');
        $this->load->library('session');
        $this->load->library('image_lib');
        $this->load->helper('cookie');
        //$this->session->unset_userdata('loggedIn');
        if (isset($this->session->userdata['loggedIn']) && $this->session->userdata['loggedIn'] == TRUE)
        {
            redirect('Dashborad');
        }

        //echo $_COOKIE['username'];exit;
        //delete_cookie($cookie1);
        //delete_cookie($cookie2);
        //echo $_COOKIE['username'];exit;
        //setcookie('username', "", time()-3600);
        //session_set_cookie_params(0);
        //session_start();
        $this->load->model('Login_Model', 'login');
        $this->load->database();

    }
    public function index()
    {
        $this->load->view('login');
    }
    public function submitMethod()
    {

        extract($_POST);
        $data=$this->login->checkLogin($username,$password);
        if(count($data)>0)
        {
            $this->session->set_userdata('username', $username);
            $this->session->set_userdata('image', $data[0]['image']);
            $this->session->set_userdata('loggedIn', TRUE);

        if(isset($remember) && $remember=='1')
        {



            set_cookie('username',$username,'3600');
            set_cookie('password',base64_encode($password),'3600');
            set_cookie('remember',$remember,'3600');
        }
        else{

            delete_cookie('username');
            delete_cookie('password');
            delete_cookie('remember');
            //set_cookie('remember',$remember,time()-3600);
        }



            echo 'login';
        }

        else{
            echo 'not login';
             $this->session->set_flashdata('login', 'Wrong username or password');
        }
    }

}
