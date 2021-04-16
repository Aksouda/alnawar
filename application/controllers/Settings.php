<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller
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
        $this->load->model('Settings_Model', 'settings');
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
    public function update_settings()
    {
        $data['row11']=$this->settings->update_settings();
        $this->load->view('update_settings',$data);
    }
    public function update_details()
    {
        $country = $this->input->post('country');
        $currency= $this->input->post('currency');
        $language=$this->input->post('language');
        $driver_status=$this->input->post("driver_status");
        $data=array('country' =>$country,
            'currency' =>$currency,
            'languagetr' =>$language,
            'driver_status' =>$driver_status);

$this->settings->updateDetail($data);

            redirect('update_settings');

    }
    public function fix_price_area()
    {
        $this->load->view('manage_fix_price_area');
    }
    public function get_area_data()
    {
        // storing  request (ie, get/post) global array to a variable
        $requestData= $_REQUEST;
        $area=$this->settings->getarea($requestData,$where=null);
        echo $area;
    }
    public function submitMethod()
    {
        $car_type = $this->input->post('car_type');
        $car_tmp = explode('~#-',$car_type);
        $car_type_name = $car_tmp[0];
        $car_type_id = $car_tmp[1];
        $geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($this->input->post('areaTitle')).'&sensor=false');
        $geo = json_decode($geo, true);
        if ($geo['status'] = 'OK')
        {
            $latitude = $geo['results'][0]['geometry']['location']['lat'];
            $longitude = $geo['results'][0]['geometry']['location']['lng'];
        }
        $data=array(
            'area_title' =>$this->input->post('areaTitle'),
            'area_range' =>$this->input->post('areaRange'),
            'price' =>$this->input->post('areaPrice'),
            'car_type_id'=> $car_type_id,
            'car_type_name'=>$car_type_name,
            'latitude'=>$latitude,
            'longitude'=>$longitude
        );
        $this->settings->insertRecord($data);
        redirect('fix_price_area');
    }
    public function delete_area_data()
    {
        $data_ids = $_REQUEST['data_ids'];
        $this->settings->delarea($data_ids);
    }

    //delete single area data call
    public function delete_single_area_data()
    {
        $data_id = $_REQUEST['data_id'];
        $this->settings->delsinglearea($data_id);
    }
    public function getRecord()
    {
        $id=$_POST['id'];
        $data=$this->settings->getRecord($id);
        $record=$data[0];
        echo json_encode($record);
    }
    public function updated()
    {
        $car_type = $this->input->post('car_type');
        $id=$this->input->post('areaid');

        $car_tmp = explode('~#-',$car_type);
        $car_type_name = $car_tmp[0];
        $car_type_id = $car_tmp[1];
        $geo = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.urlencode($this->input->post('areaTitle')).'&sensor=false');
        $geo = json_decode($geo, true);
        if ($geo['status'] = 'OK')
        {
            $latitude = $geo['results'][0]['geometry']['location']['lat'];
            $longitude = $geo['results'][0]['geometry']['location']['lng'];
        }
        $data=array(
            'area_title' =>$this->input->post('areaTitle'),
            'area_range' =>$this->input->post('areaRange'),
            'price' =>$this->input->post('areaPrice'),
            'car_type_id'=> $car_type_id,
            'car_type_name'=>$car_type_name,
            'latitude'=>$latitude,
            'longitude'=>$longitude
        );
        $this->settings->updateRecord($data,$id);
        redirect('fix_price_area');
    }
    public function day_time()
    {
        $data['row']=$this->settings->daytimedata();
        $this->load->view('manage_day_time',$data);

    }
    public function get_time_type_data()
    {
        // storing  request (ie, get/post) global array to a variable
        $requestData= $_REQUEST;
        $user=$this->settings->gettimetype($requestData,$where=null);
        echo $user;
    }
    public function updateDayTime()
    {
       $id=$this->input->post('id');
       $data=array('day_start_time' => $this->input->post('start_time'),
           'day_end_time' =>$this->input->post('end_time')
       );
        $this->settings->updateDaytime($data,$id);
        redirect('day_time');
    }
    public function update_web_commission()
    {
        $data['row11']=$this->settings->getWebCommissionData();
        $this->load->view('update_web_commission',$data);
    }
    public function webcommissionUpdate()
    {
        $data=array('commision_type' =>$this->input->post('commision_type'),
            'commision_value' =>$this->input->post('commision_value'));

        $this->settings->updateWebCommission($data,$this->input->post('id'));
        redirect('update_web_commission');

    }
}