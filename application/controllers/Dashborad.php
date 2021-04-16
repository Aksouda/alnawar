<?php
error_reporting(0);
class Dashborad extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        //$this->load->model('Size_model', 'size');
        $this->load->database();
        if ($this->session->userdata['loggedIn'] == TRUE) {
            //do something
        } else {
            redirect('login'); //if session is not there, redirect to login page
        }

    }
    public function index()
    {
        $this->load->model('Dashboard_model');
        $wait = $this->Dashboard_model->get_now_waiting('WAITING');
        $PROCESSED = $this->Dashboard_model->get_now_waiting('PROCESSED');
        $cencel = $this->Dashboard_model->get_now_waiting('CANCEL');
        $all = $this->Dashboard_model->get_now_waiting();
        $draft = $this->Dashboard_model->get_now_PUBLISH(1);
        $pub = $this->Dashboard_model->get_now_PUBLISH(0);
        $Available = $this->Dashboard_model->get_now_Status('READY STOCK');
        $inactive = $this->Dashboard_model->get_now_Status('SUSPEND');
        $out = $this->Dashboard_model->get_now_Status('OUT OF STOCK');
        $cat_draft = $this->Dashboard_model->Cat_draft(1);
        $cat_publish = $this->Dashboard_model->Cat_draft(0);
        $ad_data = $this->Dashboard_model->adminpanel_config();
        //$all_years  = $this->Dashboard_model->chart_time();
        $chart_r = $this->Dashboard_model->get_data(date("Y"),1);
        $chart_g = $this->Dashboard_model->get_data(date("Y"),2);
        $this->load->view('Dashboard_view',array('wait'=>$wait,'proceed'=>$PROCESSED,'cencel'=>$cencel,'all'=>$all,'draft'=>$draft,'pub'=>$pub,'avail'=>$Available,'out'=>$out,'inactive'=>$inactive,'cat_draft'=>$cat_draft,'cat_publish'=>$cat_publish,'ad_config'=>$ad_data,'chart_r'=>$chart_r,'chart_g'=>$chart_g));
    }

    public function Chartjs($years)
    {
        $this->load->model('Dashboard_model');
        $chart_g = $this->Dashboard_model->get_data($years,2);
        $chart_r = $this->Dashboard_model->get_data($years,1);
        /*$chart_g = Array
        (
            'Jan' => 10,
            'Feb' => 20,
            'Mar' => 20,
            'Apr' => 30,
            'May' => 40,
            'Jun' => 30,
            'Jul' => 20,
            'Aug' => 05,
            'Sep' => 40,
            'Oct' => 10,
            'Nov' => 20,
            'Dec' => 30
        );*/
        $t_g = array_sum($chart_g);
        $t_r = array_sum($chart_r);
        print_r(json_encode(array('guest'=>array_values($chart_g),'user'=>array_values($chart_r),'total_g'=>$t_g,'total_r'=>$t_r)));
    }

    public function Order_way($years)
    {
        $this->load->model('Dashboard_model');
        $chart_g = $this->Dashboard_model->get_order_list_chart($years);
        print_r(json_encode(array('order'=>array_values($chart_g))));
    }
}
