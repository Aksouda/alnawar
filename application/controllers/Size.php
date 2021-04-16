<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Size extends CI_Controller
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
        $this->load->model('Size_model', 'size');
        $this->load->database();
        if ($this->session->userdata['loggedIn'] == TRUE) {
            //do something
        } else {
            redirect('login'); //if session is not there, redirect to login page
        }

    }

    public function index()
    {
        $this->load->view('size');
    }
    public function get_size_data()
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
        $user=$this->size->getuser($requestData,$flagfilter,$where=null);
        echo $user;
    }
    public function delete_single_size_data()
    {
        $data_id = $_REQUEST['data_id'];
        $this->size->delsinglesize($data_id);
    }
    public function delete_size_data()
    {
        $data_ids = $_REQUEST['data_ids'];
        $this->size->delsize($data_ids);
    }
    public function View_Size()
    {
        $this->load->view('view_size');
        if(isset($_REQUEST['save']))
        {
            $size_name=$_REQUEST['size_name'];
            $size_name_ar=$_REQUEST['size_name_ar'];
            $category_id=$_REQUEST['category_id'];
            $size_id=$_REQUEST['size_id'];
            $data = array(
                'name' => $size_name,
                'name_ar' => $size_name_ar,
                'category_id' => $category_id
            );
            $this->db->where('size_id', $size_id);
            $this->db->update('size', $data);
            redirect(base_url('size'));
        }
    }
}
?>