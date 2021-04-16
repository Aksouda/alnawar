<?php

/**
 * Created by PhpStorm.
 * User: Yash
 * Date: 20/6/17
 * Time: 5:22 PM
 */
class Setting extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->model('Setting_model');
        $other_appli = $this->Setting_model->get_config();
        $user = $this->Setting_model->get_user();
        $currency = $this->Setting_model->get_currency();
        $rows_cat = $this->Setting_model->cat_list();
        $new_cat = $this->Setting_model->best_cat_list();
        $this->load->view('Setting_view',array('currency'=>$currency,'other_appli'=>$other_appli,'user'=>$user,'rows_cat'=>$rows_cat,'new_cat'=>$new_cat));
        if(isset($_POST['submit'])){
            $currency = $_POST['currency'];
            $tax = $_POST['tax'];
            $f_news = $_POST['f_news'];
            $catlog = implode(',',$_POST['cat']);
            $this->Setting_model->update_config(['CURRENCY'=>$currency,'TAX'=>$tax,'FEATURED_NEWS'=>$f_news,'Category'=>$catlog]);
            redirect(base_url('Setting'));
        }
        if(isset($_POST['update'])){
            foreach ($_POST as $post){
                if($post == ''){
                    echo '<script>sweetAlert("Oops...", "Something Wrong!", "error");</script>';
                    return false;
                }
            }
            $_POST['password'] = md5($_POST['password']);
            unset($_POST['update']);
            $this->Setting_model->update_user($_POST,1);
            redirect(base_url('Setting'));
        }
    }

    public function temp()
    {
        $this->load->model('Setting_model');
        $new_cat = $this->Setting_model->best_cat_list();
        print_r($new_cat);
    }
}