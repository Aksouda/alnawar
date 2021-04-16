<?php
class WebService_Model extends CI_Model
{
    public $zone_name = CUSTOM_ZONE_NAME;

    function __construct()
    {
        parent::__construct();
    }


    function is_mail_exists($email)
    {
        $table='app_user';
        $this->db->select('*');
        $this->db->where('email',$email);
        $query=$this->db->get($table);
        $result=$query->num_rows();
        if($result > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function is_facebook_exits($facebook_id)
    {
        $table='app_user';
        $this->db->select('*');
        $this->db->where('facebook_id',$facebook_id);
        $query=$this->db->get($table);
        $result=$query->num_rows();
        if($result > 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function insert_user_details($name,$email,$phone_number,$password,$facebook_id,$isdevice,$status,$subscribe_offer,$user_id)
    {
        $table = 'app_user';
        $insert_data = array(
            'facebook_id' => $facebook_id,
            'name' => $name,
            'email'=>$email,
            'phone_number'=>$phone_number,
            'status'=>$status,
            'password' => md5($password),
	   'subscribe_offer'=>$subscribe_offer,
            'isdevice'=>$isdevice
        );
       // $this->db->insert($table, $insert_data);
        //$user_id = $this->db->insert_id();
$this->db->where('u_id',$user_id);
        $this->db->update('app_user',$insert_data);
        return $user_id;
       // echo $this->db->last_query();exit;

    }


}//--------------- END Class
