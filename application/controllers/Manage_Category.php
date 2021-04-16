<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_Category extends CI_Controller
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
        $this->load->model('Manage_Category_Model', 'category');
        $this->load->database();
        if ($this->session->userdata['loggedIn'] == TRUE)
        {
            //do something
        }
        else
        {
            redirect('login'); //if session is not there, redirect to login page
        }

    }
    public function index()
    {
        if($this->input->get('flag')){
            $filter='flag';
            $data['query']=$filter;
        }
        else{
            $data['query']= NULL;
        }
        $this->load->view('manage_category',$data);
    }

    public function get_category_data()
    {
        // storing  request (ie, get/post) global array to a variable
        $requestData= $_REQUEST;
        $filterData=$_POST['data_id'];
        if($filterData=='yes'){
            $flagfilter=$filterData;
        }
        else{
            $flagfilter='';
        }
        $user=$this->category->getcategory($requestData,$flagfilter,$where=null);
        echo $user;
    }
    public function delete_single_user_data()
    {
        $data_id = $_REQUEST['data_id'];
        $this->category->delsingleuser($data_id);
    }
    public function delete_user_data()
    {
        $data_ids = $_REQUEST['data_ids'];
        $this->category->deluser($data_ids);
    }
    public function update_user_status()
    {
        $data_id = $_REQUEST['data_id'];
        $this->category->statususer($data_id);
    }
    public function view_users($id,$type='',$pageNo=0)
    {
        $html='';
        $this->load->view('user_details');
    }

}