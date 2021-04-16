<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tag extends CI_Controller
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
        $this->load->model('Tag_model', 'tag');
        $this->load->database();
        if ($this->session->userdata['loggedIn'] == TRUE) {
            //do something
        } else {
            redirect('login'); //if session is not there, redirect to login page
        }

    }

    public function index()
    {
        $this->load->view('Tag');
    }
    public function get_tag_data()
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
        $user=$this->tag->gettag($requestData,$flagfilter,$where=null);
        echo $user;
    }
    public function delete_single_tag_data()
    {
        $data_id = $_REQUEST['data_id'];
        $this->tag->delsingletag($data_id);
    }
    public function delete_tag_data()
    {
        $data_ids = $_REQUEST['data_ids'];
        $this->tag->deltag($data_ids);
    }
    public function View_Tag()
    {
        $this->load->view('view_tag');
        if(isset($_REQUEST['save']))
        {
            $tag_name=$_REQUEST['tag_name'];
            $tag_name_ar=$_REQUEST['tag_name_ar'];
            $category_id=$_REQUEST['category_id'];
            $tag_id=$_REQUEST['tag_id'];
            $data = array(
                'tag_name' => $tag_name,
                'tag_name_ar' => $tag_name_ar,
                'category_id' => $category_id
            );

            $this->db->where('tag_id', $tag_id);
            $this->db->update('tag', $data);
            redirect(base_url('Tag'));
        }
    }
}
?>