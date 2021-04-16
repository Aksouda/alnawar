<?php
class User_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function countUsers()
    {

        $table = 'userdetails';

//        $where_data = array(	// ----------------Array for check data exist ot not
//            'item_no'     => $data["item_no"]
//        );
        //$select_data = "*";

        $result = $this->db->get($table)->num_rows();
        return $result;

    }

    function getuser($requestData, $flagfilter, $where)
    {
        $columns = array(
            // datatable column index  => database column name
            0 => 'u_id',
            1 => 'image',
            //2 => 'username',
            2 => 'email',
            //3 => 'gender',
            3 => 'name',
            4 => 'phone_number',
            5 => 'status'
        );
        $flag_disp = $flagfilter;
        // getting total number records without any search
        $this->db->select('*');
        $totalData = $this->db->get('app_user')->num_rows();
        $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

        $this->db->select('u_id, image, name, email, phone_number, address, status, facebook_id, create_date');
        $this->db->from('app_user');
        if ($where !== null) {
            $this->db->where($where);
        }
        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $keywords = '%' . $requestData['search']['value'] . '%';
            //$this->db->where('status','1');
            $this->db->where("(name LIKE '$keywords' OR email LIKE '$keywords' OR phone_number LIKE '$keywords' OR address LIKE '$keywords')");
        }
        $totalFiltered = $this->db->get()->num_rows();
        $this->db->select('u_id, image, name, email, phone_number, address, status, facebook_id, create_date');
        $this->db->from('app_user');
        if ($where !== null) {
            $this->db->where($where);
        }
        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $keywords = '%' . $requestData['search']['value'] . '%';
            $this->db->where("(name LIKE '$keywords' OR email LIKE '$keywords' OR phone_number LIKE '$keywords' OR address LIKE '$keywords')");
        }
        //echo $columns[$requestData['order'][0]['column']];
        $this->db->order_by($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);
        $this->db->limit($requestData['length'], $requestData['start']);
        $resultarray = $this->db->get()->result_array();

        $data = array();
        $i = 1 + $requestData['start'];
        foreach ($resultarray as $item) {
            // preparing an array
            $nestedData = array();

                $nestedData[] = '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline"><input type="checkbox" class="deleteRow checkboxes" value="' . $item['u_id'] . '"><span></span></label>';
            if ($item['name']) {
                $nestedData[] = $item["name"];
            } else {
                $nestedData[] = 'GUEST USER';
            }
            //$nestedData[] = $item["username"];
            if($item["email"] !='')
            {
                $nestedData[] = $item["email"];
            }
            else
            {
                $nestedData[] = "---";
            }
            //$nestedData[] = $item["email"];
            //$nestedData[] = $item["gender"];
            if($item["phone_number"] !='')
            {
                $nestedData[] = $item["phone_number"];
            }
            else
            {
                $nestedData[] ='---';
            }
            //$nestedData[] = $item["phone_number"];
            $id = $item['u_id'];

             //   $total_user_ratings = '----';


           // $nestedData[] = $total_user_ratings;
            if ($item['status'] == '1') {
                $nestedData[] = '<span class="label label-success"><a href="javascript:void(0)" onclick="status(' . $item["u_id"] . ')"  style="color: white;">Active</a></span>';
            } else {
                $nestedData[] = '<span class="label label-default"><a href="javascript:void(0)" onclick="status(' . $item["u_id"] . ')"  style="color: white;" >Inactive</a></span></span>';
            }
            $nestedData[] = '<div class="btn-group">
                                                            <button class="btn btn-xs red dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                <li>
                                                                    <a class="table-link" href="javascript:void(0);" onclick="window.location.href=\'view_user/' . $item['u_id'] . '\'">
                                                                        <i class="icon-eye"></i> View </a>
                                                                </li>
                                                                <li>
                                                                    <a data-target="#uidemo-modals-alerts-delete-user" data-toggle="modal" class="table-link danger" href="javascript:void(0);"  onclick="delete_single_user(' . $item["u_id"] . ')">
                                                                   <i class="icon-trash"></i> Delete </a>
                                                                </li>
                                                                
                                                                
                                                            </ul>
                                                        </div>';

            $data[] = $nestedData;
            $i++;
        }

        $json_data = array(
            "draw" => intval($requestData['draw']),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
            "recordsTotal" => intval($totalData),  // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );

        return json_encode($json_data);  // send data as json format
    }

    function deluser($data_ids)
    {
        $data_id_array = explode(",", $data_ids);
        if (!empty($data_id_array)) {
            foreach ($data_id_array as $id) {
                $this->db->where('u_id', $id);
                $this->db->delete('app_user');
            }
        }
    }

    function delsingleuser($data_id)
    {
        if (!empty($data_id)) {
            $this->db->where('u_id', $data_id);
            $this->db->delete('app_user');
        }
    }

    function statususer($data_id)
    {
        if (!empty($data_id)) {
            $this->db->where('u_id', $data_id);
            $row = $this->db->get('app_user')->row();
            if ($row->status == '1')
            {
                $data = array(
                    'status' => '0'
                );
                $this->db->where('u_id', $data_id);
                $this->db->update('app_user', $data);
            }
            else {
                $data = array(
                    'status' => '1'
                );
                $this->db->where('u_id', $data_id);
                $this->db->update('app_user', $data);
            }
        }
    }

    function viewuser($id,$offset=0)

    {
        if (!empty($id)) {
            $result = $this->db->query("SELECT * FROM app_user WHERE u_id=$id")->result_array();
            return $result;
        }
    }
    function viewuserCount($id)

    {
        if (!empty($id)) {
            $result = $this->db->query('SELECT cd.cartype AS car_name,cd.icon,u.*,b.id AS bookingid,b.pickup_date_time,b.pickup_area,b.drop_area,b.status FROM bookingdetails b INNER JOIN userdetails u ON b.user_id=u.id INNER JOIN cabdetails cd ON b.taxi_id=cd.cab_id   WHERE b.user_id="' . $id . '"  GROUP BY b.id')->result_array();
            $count=count($result);
            return $count;
        }
    }
    function userDet($id)
    {
        $result=$this->db->query("SELECT * FROM userdetails WHERE id=".$id)->result_array();
        return $result;
    }

    function completed($id,$offset=0)

    {
        if (!empty($id)) {
            $result = $this->db->query('SELECT cd.cartype AS car_name,cd.icon,u.*,b.id AS bookingid,b.pickup_date_time,b.pickup_area,b.drop_area,b.status FROM bookingdetails b INNER JOIN userdetails u ON b.user_id=u.id INNER JOIN cabdetails cd ON b.taxi_id=cd.cab_id   WHERE b.user_id="' . $id . '" AND b.status="9"  GROUP BY b.id LIMIT '.$offset.',10')->result_array();
            return $result;
        }
    }
    function completedCount($id)

    {
        if (!empty($id)) {
            $result = $this->db->query('SELECT cd.cartype AS car_name,cd.icon,u.*,b.id AS bookingid,b.pickup_date_time,b.pickup_area,b.drop_area,b.status FROM bookingdetails b INNER JOIN userdetails u ON b.user_id=u.id INNER JOIN cabdetails cd ON b.taxi_id=cd.cab_id   WHERE b.user_id="' . $id . '" AND b.status="9"  GROUP BY b.id')->result_array();
            $count=count($result);
            return $count;
        }
    }
    function pending($id,$offset=0)

    {
        if (!empty($id)) {
            $result = $this->db->query('SELECT cd.cartype AS car_name,cd.icon,u.*,b.id AS bookingid,b.pickup_date_time,b.pickup_area,b.drop_area,b.status FROM bookingdetails b INNER JOIN userdetails u ON b.user_id=u.id INNER JOIN cabdetails cd ON b.taxi_id=cd.cab_id   WHERE b.user_id="' . $id . '" AND b.status IN ("1","2","3","7","8")  GROUP BY b.id LIMIT '.$offset.',10')->result_array();
            return $result;
        }
    }
    function pendingCount($id)

    {
        if (!empty($id)) {
            $result = $this->db->query('SELECT cd.cartype AS car_name,cd.icon,u.*,b.id AS bookingid,b.pickup_date_time,b.pickup_area,b.drop_area,b.status FROM bookingdetails b INNER JOIN userdetails u ON b.user_id=u.id INNER JOIN cabdetails cd ON b.taxi_id=cd.cab_id   WHERE b.user_id="' . $id . '" AND b.status IN ("1","2","3","7","8")  GROUP BY b.id')->result_array();
            $count=count($result);
            return $count;
        }
    }
    function cancelled($id,$offset=0)

    {
        if (!empty($id)) {
            $result = $this->db->query('SELECT cd.cartype AS car_name,cd.icon,u.*,b.id AS bookingid,b.pickup_date_time,b.pickup_area,b.drop_area,b.status FROM bookingdetails b INNER JOIN userdetails u ON b.user_id=u.id INNER JOIN cabdetails cd ON b.taxi_id=cd.cab_id   WHERE b.user_id="' . $id . '" AND b.status IN ("4","5","6")  GROUP BY b.id LIMIT '.$offset.',10')->result_array();
            return $result;
        }
    }
    function cancelledCount($id)

    {
        if (!empty($id)) {
            $result = $this->db->query('SELECT cd.cartype AS car_name,cd.icon,u.*,b.id AS bookingid,b.pickup_date_time,b.pickup_area,b.drop_area,b.status FROM bookingdetails b INNER JOIN userdetails u ON b.user_id=u.id INNER JOIN cabdetails cd ON b.taxi_id=cd.cab_id   WHERE b.user_id="' . $id . '" AND b.status IN ("4","5","6")  GROUP BY b.id')->result_array();
            $count=count($result);
            return $count;
        }
    }
    function ratings($id)
    {
        if (!empty($id)) {
            $result = $this->db->query('SELECT ur.*,dd.name AS driver,dd.image AS driverImage FROM user_rate ur INNER JOIN driver_details dd ON ur.driver_id=dd.id WHERE ur.user_id="' . $id . '"')->result_array();
            return $result;
        }
    }
    function transaction($id)
    {
        $result=$this->db->query('SELECT u.*,b.pickup_area,b.drop_area FROM user_transaction u LEFT JOIN bookingdetails b ON u.booking_id=b.id WHERE u.user_id="'.$id.'"')->result_array();
        return $result;
    }
    function changePassword($password,$id)
    {
        $data=array('password' => md5($password));
        $this->db->where('id',$id);
        $this->db->update('userdetails',$data);

    }

}