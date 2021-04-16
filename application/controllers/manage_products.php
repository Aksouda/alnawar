<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class manage_products extends CI_Controller
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
        $this->load->model('product_Model', 'manage_products');
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
        $this->load->view('manage_products',$data);
        echo "test";exit;
    }

    public function get_user_data()
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
        $user=$this->users->getuser($requestData,$flagfilter,$where=null);
        echo $user;
    }
    public function delete_single_user_data()
    {
        $data_id = $_REQUEST['data_id'];
        $this->users->delsingleuser($data_id);
    }
    public function delete_user_data()
    {
        $data_ids = $_REQUEST['data_ids'];
        $this->users->deluser($data_ids);
    }
    public function update_user_status()
    {
        $data_id = $_REQUEST['data_id'];
        $this->users->statususer($data_id);
    }
    public function view_users1($id)
    {
        $Data['data']=$this->users->viewuser($id);
        $arr1=array('9');
        $arr2=array('4','5','6');
        $arr3=array('1','2','3','7','8');
        if(count($Data['data']) >0 )
        {
            foreach($Data['data'] as $booking) {
                if(array_key_exists('status',$booking) &&  in_array($booking['status'],$arr1) )
                {
                    $Data['filter1'][]=$booking;
                    //$Data['limit1'] =

                }
                else if(array_key_exists('status',$booking) &&  in_array($booking['status'],$arr2))
                {
                    $Data['filter2'][]=$booking;
                }
                else if(array_key_exists('status',$booking) &&  in_array($booking['status'],$arr3))
                {
                    $Data['filter3'][]=$booking;
                }
            }

            if(!array_key_exists('filter1',$Data))
            {
                $Data['filter1'] = '';
            }
            if(!array_key_exists('filter2',$Data))
            {
                $Data['filter2'] = '';
            }
            if(!array_key_exists('filter3',$Data))
            {
                $Data['filter3'] = '';
            }
        }
        else
        {
            $Data['filter1']='';
            $Data['filter2']='';
            $Data['filter3']='';
        }
        $Data['rating']=$this->users->ratings($id);
        $this->load->view('user_details',$Data);

        //echo
    }
    public function view_users($id,$type='',$pageNo=0)
    {
        $html='';
        if(isset($_POST['pageNo']) && $_POST['type']=='filter1')
        {
            extract($_POST);
            if ($type == 'filter1')
            {

                if ($pageNo == 0) {
                    $pageNo = 1;
                }

                $offset = ($pageNo - 1) * 10;
                // $Data['filter1'] = $this->users->completed($id, $offset);
                $Data['filter1_count']=$this->users->completedCount($id);
                $Data['variable']='filter1';
                $Data['filter2'] = '';
                $Data['filter2_count']='';
                $Data['filter3'] = '';
                $Data['filter3_count']='';
                $Data['pageNo'] = $_POST['pageNo'];
                $finalData['view']=$this->load->view('user_bookings',$Data,TRUE);
                //$finalData['view_count']=$this->users->completedCount($id);
                echo json_encode($finalData);
            }
        }

        elseif(isset($_POST['pageNo']) && $_POST['type']=='filter2')
        {
            extract($_POST);
            if ($type == 'filter2')
            {

                if ($pageNo == 0) {
                    $pageNo = 1;
                }

                $offset = ($pageNo - 1) * 10;
                $Data['filter1'] = $this->users->cancelled($id, $offset);
                $Data['filter1_count']=$this->users->cancelledCount($id);
                $Data['variable']='filter2';
                $Data['filter2'] = '';
                $Data['filter2_count']='';
                $Data['filter3'] = '';
                $Data['filter3_count']='';
                $Data['pageNo'] = $_POST['pageNo'];
                $finalData['view']=$this->load->view('user_bookings',$Data,TRUE);
                //$finalData['view_count']=$this->users->completedCount($id);
                echo json_encode($finalData);
            }
        }
        elseif(isset($_POST['pageNo']) && $_POST['type']=='filter3')
        {
            extract($_POST);
            if ($type == 'filter3')
            {

                if ($pageNo == 0) {
                    $pageNo = 1;
                }

                $offset = ($pageNo - 1) * 10;
                $Data['filter1'] = $this->users->pending($id, $offset);
                $Data['filter1_count']=$this->users->pendingCount($id);
                $Data['variable']='filter3';
                $Data['filter2'] = '';
                $Data['filter2_count']='';
                $Data['filter3'] = '';
                $Data['filter3_count']='';
                $Data['pageNo'] = $_POST['pageNo'];
                $finalData['view']=$this->load->view('user_bookings',$Data,TRUE);
                //$finalData['view_count']=$this->users->completedCount($id);
                echo json_encode($finalData);
            }
        }
        elseif(isset($_POST['pageNo']) && $_POST['type']=='default')
        {
            extract($_POST);
            if ($type == 'default')
            {

                if ($pageNo == 0) {
                    $pageNo = 1;
                }

                $offset = ($pageNo - 1) * 10;
                $Data['filter1'] = $this->users->viewuser($id, $offset);
                $Data['filter1_count']=$this->users->viewuserCount($id);
                $Data['variable']='default12';
                $Data['filter2'] = '';
                $Data['filter2_count']='';
                $Data['filter3'] = '';
                $Data['filter3_count']='';
                $Data['pageNo'] = $_POST['pageNo'];
                $finalData['view']=$this->load->view('user_bookings',$Data,TRUE);
                //$finalData['view_count']=$this->users->completedCount($id);
                echo json_encode($finalData);
            }
        }
        elseif(isset($_POST['type']) && $_POST['type']=='defaultvar')
        {
            $Data['filter1']=$this->users->completed($id);
            $Data['count']['filter1']=$this->users->completedCount($id);
            $Data['filter2']=$this->users->cancelled($id);
            $Data['count']['filter2']=$this->users->cancelledCount($id);
            $Data['filter3']=$this->users->pending($id);
            $Data['count']['filter3']=$this->users->pendingCount($id);
            $Data['data']=$this->users->viewuser($id);
            $Data['count']['data']=$this->users->viewuserCount($id);
            $Data['rating']=$this->users->ratings($id);
            $finalData['view']=$this->load->view('user_details',$Data,TRUE);
            echo json_encode($finalData);
        }
        else
        {
            $Data['filter1']=$this->users->completed($id);
            $Data['count']['filter1']=$this->users->completedCount($id);
            $Data['filter2']=$this->users->cancelled($id);
            $Data['count']['filter2']=$this->users->cancelledCount($id);
            $Data['filter3']=$this->users->pending($id);
            $Data['count']['filter3']=$this->users->pendingCount($id);
            $Data['data']=$this->users->viewuser($id);
            $Data['count']['data']=$this->users->viewuserCount($id);
            $Data['rating']=$this->users->ratings($id);
            $Data['userDet']=$this->users->userDet($id);
            $Data['transaction']=$this->users->transaction($id);
            $this->load->view('user_details',$Data);
        }
    }
    public function password()
    {
        $password=($_POST['password']!='' && $_POST['password']!=NULL) ? $_POST['password'] : '';
        $id=($_POST['id']!='' && $_POST['id']!=NULL) ? $_POST['id'] : '';
        if($password!='')
        {
            $this->users->changePassword($password,$id);
        }


    }
}