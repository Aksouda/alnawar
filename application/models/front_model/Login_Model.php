<?php
class Login_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function checkLogin($email,$password)
    {
        $data=$this->db->query('SELECT * FROM app_user WHERE email="'.$email.'" AND password="'.md5($password).'" AND status=1')->result_array();
        return $data;
    }
}
