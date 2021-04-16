<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Brand extends CI_Controller
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
        $this->load->model('Brand_Model', 'brand');
        $this->load->database();
        if ($this->session->userdata['loggedIn'] == TRUE) {
            //do something
        } else {
            redirect('login'); //if session is not there, redirect to login page
        }

    }

    public function index()
    {
        $this->load->view('Brand');
    }
    public function get_brand_data()
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
        $user=$this->brand->getbrand($requestData,$flagfilter,$where=null);
        echo $user;
    }
    public function delete_single_brand_data()
    {
        $data_id = $_REQUEST['data_id'];
        $this->brand->delsinglebrand($data_id);
    }
    public function delete_brand_data()
    {
        $data_ids = $_REQUEST['data_ids'];
        $this->brand->delbrand($data_ids);
    }
    public function View_Brand()
    {
        $this->load->view('view_brand');
        if(isset($_REQUEST['save']))
        {
            $brand_name=$_REQUEST['brand_name'];
            $brand_name_ar=$_REQUEST['brand_name_ar'];
            $category_id=$_REQUEST['category_id'];
            $brand_id=$_REQUEST['brand_id'];
            $data = array(
                'brand_name' => $brand_name,
                'brand_name_ar' => $brand_name_ar,
                'category_id' => $category_id
            );

            $this->db->where('brand_id', $brand_id);
            $this->db->update('brand', $data);
            redirect(base_url('Brand'));
        }
    }

    public function brand_for_cat($id)
    {
        $this->db->limit(isset($_REQUEST['length'])?$_REQUEST['length']:10,isset($_REQUEST['start'])?$_REQUEST['start']:0);
        $search = array(1=>'brand_name');
        if(isset($_REQUEST['order'][0]['column'])){
            if($_REQUEST['order'][0]['column'] == 0){
                $this->db->order_by('brand_id','DESC');
            }else {
                $this->db->order_by($search[$_REQUEST['order'][0]['column']], $_REQUEST['order'][0]['dir']);
            }
        }
        if(isset($_REQUEST['search']["value"])){
            if($_REQUEST['search']["value"] != '' ){
                $x = 0;
                foreach ($search as $each){
                    if($x == 0){
                        $this->db->like($each, $_REQUEST['search']["value"]);
                    }else{
                        $this->db->or_like($each, $_REQUEST['search']["value"]);
                    }
                    $x++;
                }
            }
        }
        $data = $this->db->get_where('brand',['category_id'=>$id])->result_array();
        $x = 0;
        foreach ($data as $ech){
            $data[$x]['check'] = '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline"><input type="radio" class="checkboxes" name="brand_id" value="'.$ech['brand_id'].'"><span></span>
</label>';
            $x++;
        }
        print_r(json_encode(array("recordsTotal"=> count($data),"recordsFiltered"=> count($data),'data'=>$data)));
    }
}
?>


