<?php
class Login_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function checkLogin($username,$password)
    {
        $data=$this->db->query('SELECT * FROM adminlogin WHERE username="'.$username.'" AND password="'.md5($password).'"')->result_array();
        return $data;
    }
}
