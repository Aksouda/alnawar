<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Language extends CI_Controller {

    public function __construct(){
        parent::__construct();
        }
        
    public function index($var) {
        // $segs = $this->uri->segment_array();
        // echo end($segs);

        if($var == "en")
        {
            $lang = "english";
        }
        else
        {
            $lang = "arabic";
        }
        // $lang = $this->input->post('langs');
        $data=array(
        'lang'=>$lang
        );
        $this->session->set_userdata('site_lang', $lang);
        $this->lang->load('content', $lang);
        // $this->load->view('front/index');
        redirect('Front');
    }

}