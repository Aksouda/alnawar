<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
        $this->load->model('Dashboard_Model', 'dashboard');
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

        $data['userCount'] = $this->dashboard->countUsers();
        $data['driverCount'] = $this->dashboard->countDrivers();
        $data['ridesCount'] = $this->dashboard->countRides();
        $data['profitEarned'] = $this->dashboard->profitEarned();
        $data['successfullRideCount'] = $this->dashboard->successfulRides();
        $data['pendingRideCount'] = $this->dashboard->pendingRides();
        $data['userCancelCount'] = $this->dashboard->userCancelled();
        $data['userComments'] = $this->dashboard->userComments();
        $data['driverComments'] = $this->dashboard->driverComments();
        $data['latestRides'] = $this->dashboard->latestRides();
        $data['user'] = $this->dashboard->monthlyRegisteredUser();
        if(isset($_POST['year_user']) && $_POST['year_user']!='')
        {


            $finalArray['JAN']=array('JAN','0');
            $finalArray['FEB']=array('FEB','0');
            $finalArray['MAR']=array('MAR','0');
            $finalArray['APR']=array('APR','0');
            $finalArray['MAY']=array('MAY','0');
            $finalArray['JUN']=array('JUN','0');
            $finalArray['JUL']=array('JUL','0');
            $finalArray['AUG']=array('AUG','0');
            $finalArray['SEP']=array('SEP','0');
            $finalArray['OCT']=array('OCT','0');
            $finalArray['NOV']=array('NOV','0');
            $finalArray['DEC']=array('DEC','0');
            $year=(isset($_POST['year_user'])) ? $_POST['year_user'] : date("Y");

            $data['user'] = $this->dashboard->monthlyRegisteredUser($year);
            foreach ($data['user'] as $rides)
            {
                $finalArray[$rides['registered_month']] = array($rides['registered_month'],$rides['user_count']);
            }
            $userArray=array_values($finalArray);

            echo json_encode($userArray);
            exit();
            //$this->load->view('dashboard',$data);
        }





        $data['revenue'] = $this->dashboard->monthlyRevenueEarned();
        if(isset($_POST['year']) && $_POST['year']!='')
        {

            $finalArray1['JAN']=array('JAN','0');
            $finalArray1['FEB']=array('FEB','0');
            $finalArray1['MAR']=array('MAR','0');
            $finalArray1['APR']=array('APR','0');
            $finalArray1['MAY']=array('MAY','0');
            $finalArray1['JUN']=array('JUN','0');
            $finalArray1['JUL']=array('JUL','0');
            $finalArray1['AUG']=array('AUG','0');
            $finalArray1['SEP']=array('SEP','0');
            $finalArray1['OCT']=array('OCT','0');
            $finalArray1['NOV']=array('NOV','0');
            $finalArray1['DEC']=array('DEC','0');
            $year=(isset($_POST['year'])) ? $_POST['year'] : date("Y");
            $data['revenue'] = $this->dashboard->monthlyRevenueEarned($year);
            foreach ($data['revenue'] as $rides)
            {
                $finalArray1[$rides['registered_month']] = array($rides['registered_month'],$rides['revenue']);
            }
            $revenueArray=array_values($finalArray1);
            echo json_encode($revenueArray);
            exit();
            //$this->load->view('dashboard',$data);
        }



        $data['sums'] = $this->dashboard->sums();
        $data['usersStatus'] = $this->dashboard->users();
        $data['driverStatus'] = $this->dashboard->drivers();


        //$finalArray=array();
        $finalArray['JAN']=array('JAN','0');
        $finalArray['FEB']=array('FEB','0');
        $finalArray['MAR']=array('MAR','0');
        $finalArray['APR']=array('APR','0');
        $finalArray['MAY']=array('MAY','0');
        $finalArray['JUN']=array('JUN','0');
        $finalArray['JUL']=array('JUL','0');
        $finalArray['AUG']=array('AUG','0');
        $finalArray['SEP']=array('SEP','0');
        $finalArray['OCT']=array('OCT','0');
        $finalArray['NOV']=array('NOV','0');
        $finalArray['DEC']=array('DEC','0');

        $finalArray1['JAN']=array('JAN','0');
        $finalArray1['FEB']=array('FEB','0');
        $finalArray1['MAR']=array('MAR','0');
        $finalArray1['APR']=array('APR','0');
        $finalArray1['MAY']=array('MAY','0');
        $finalArray1['JUN']=array('JUN','0');
        $finalArray1['JUL']=array('JUL','0');
        $finalArray1['AUG']=array('AUG','0');
        $finalArray1['SEP']=array('SEP','0');
        $finalArray1['OCT']=array('OCT','0');
        $finalArray1['NOV']=array('NOV','0');
        $finalArray1['DEC']=array('DEC','0');

        foreach ($data['user'] as $rides)
        {
            $finalArray[$rides['registered_month']] = array($rides['registered_month'],$rides['user_count']);
        }
        $userArray=array_values($finalArray);
        $data['userChart']=json_encode($userArray);

        foreach ($data['revenue'] as $rides)
        {
            $finalArray1[$rides['registered_month']] = array($rides['registered_month'],$rides['revenue']);
        }
        $revenueArray=array_values($finalArray1);
        $data['revenueChart']=json_encode($revenueArray);

        $data['transaction']=$this->dashboard->transaction();

        $this->load->view('dashboard',$data);
    }
public function update_transaction()
{
    if(isset($_POST['transaction'] ) && $_POST['transaction']!='' )
    {
        extract($_POST);
        $this->dashboard->updateFlag($id,$transaction);
    }
}
    public function ActDeactStatus()
    {
        extract($_POST);

        $this->dashboard->actdactStatus($status, $id,$param);

        $echo = ($status == 'Active') ? 'Status activated' : 'Status deactivated';
        echo $echo;
    }

}