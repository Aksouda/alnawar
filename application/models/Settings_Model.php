<?php
class Settings_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    function update_settings()
    {
        $query1 = $this->db->query(" SELECT * FROM `settings` order by id DESC ")->row();

        return $query1;
    }
    function updateDetail($data)
    {
        $this->db->update('settings',$data);
        $this->db->where('id','1');
    }
    function getarea($requestData,$where)
    {
        $columns = array(
            // datatable column index  => database column name
            0 => 'area_id',
            1 => 'area_title',
            3 => 'area_range',
            4 => 'price',
            5 => 'car_type_name',
            6 => 'latitude',
            7 => 'longitude'

        );

        // getting total number records without any search
        $this->db->select('*');
        $totalData=$this->db->get('fix_price_area')->num_rows();
        $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

        $this->db->select('area_id,area_title, area_range,price, latitude,car_type_name,longitude');
        $this->db->from('fix_price_area');
        if ($where !== null) {
            $this->db->where($where);
        }
        if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $this->db->like('area_title',$requestData['search']['value'],'after');
            $this->db->or_like('area_range',$requestData['search']['value'],'after');
            $this->db->or_like('price',$requestData['search']['value'],'after');
            $this->db->or_like('car_type_name',$requestData['search']['value'],'after');
            $this->db->or_like('latitude',$requestData['search']['value'],'after');
            $this->db->or_like('longitude',$requestData['search']['value'],'after');
        }
        //$totalFiltered=$this->db->get()->num_rows();
        //echo $columns[$requestData['order'][0]['column']];
        $this->db->order_by($columns[$requestData['order'][0]['column']],$requestData['order'][0]['dir']);
        $this->db->limit($requestData['length'],$requestData['start']);
        $resultarray=$this->db->get()->result_array();

        $data = array();
        $i=1+$requestData['start'];
        foreach($resultarray as $item)
        {
            // preparing an array
            $nestedData=array();

            $nestedData[] = '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline"><input type="checkbox" class="deleteRow checkboxes" value="' . $item['area_id'] . '"><span></span></label>';
            $nestedData[] = $item["area_title"];
            $nestedData[] = $item["area_range"];
            $nestedData[] = $item["price"];
            $nestedData[] = $item["car_type_name"];
            $nestedData[] = $item["latitude"];
            $nestedData[] = $item["longitude"];
            $nestedData[] = '

			<div class="btn-group" style="position: relative;"><button class="btn btn-xs red dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
<i class="fa fa-angle-down"></i></button>
 <ul class="dropdown-menu pull-left" role="menu">
<li><a class="table-link" href="javascript:void(0);" onclick="reason_edit(' . $item["area_id"] . ')">
 <i class="icon-eye"></i> View </a>
</li><li> <a data-target="#uidemo-modals-alerts-delete-user" data-toggle="modal" class="table-link danger" href="javascript:void(0);" onclick="delete_single_area(' . $item["area_id"] . ')">
 <i class="icon-trash"></i> Delete </a> </li></ul></div>';

            $data[] = $nestedData;
            $i++;
        }

        $json_data = array(
            "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a numberonclick="('.$item["area_id"].')" as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
            "recordsTotal"    => intval( $totalData ),  // total number of records
            "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data"            => $data   // total data array
        );

        return json_encode($json_data);  // send data as json format
    }

    //Delete Area Data
    function delarea($data_ids)
    {
        $data_id_array = explode(",", $data_ids);
        if(!empty($data_id_array)) {
            foreach($data_id_array as $id) {
                $this->db->where('area_id',$id);
                $this->db->delete('fix_price_area');
            }
        }
    }

    // Delete single reason call
    function delsinglearea($data_id)
    {
        if(!empty($data_id)) {
            $this->db->where('area_id',$data_id);
            $this->db->delete('fix_price_area');
        }
    }
    function insertRecord($data)

    {
        $this->db->insert('fix_price_area',$data);
    }
    function getRecord($id)
    {
        $Data=$this->db->query('SELECT * FROM fix_price_area WHERE area_id='.$id)->result_object();
        return $Data;
    }
    function updateRecord($data,$id)
    {
        $this->db->where('area_id',$id);
        $this->db->update('fix_price_area',$data);

    }
    function gettimetype($requestData,$where)
    {
        $columns = array(
            // datatable column index  => database column name
            0 => 'tid',
            1 => 'day_start_time',
            2 => 'day_end_time'
        );

        // getting total number records without any search
        $this->db->select('*');
        $totalData=$this->db->get('time_detail')->num_rows();
        $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

        $this->db->select('tid, day_start_time, day_end_time');
        $this->db->from('time_detail');
        if ($where !== null) {
            $this->db->where($where);
        }
        if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $this->db->like('day_start_time',$requestData['search']['value'],'after');
            $this->db->or_like('day_end_time',$requestData['search']['value'],'after');
        }
        $totalFiltered=$this->db->get()->num_rows();
        $this->db->select('tid, day_start_time, day_end_time');
        $this->db->from('time_detail');
        if ($where !== null) {
            $this->db->where($where);
        }
        if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $this->db->like('day_start_time',$requestData['search']['value'],'after');
            $this->db->or_like('day_end_time',$requestData['search']['value'],'after');
        }
        //echo $columns[$requestData['order'][0]['column']];
        $this->db->order_by($columns[$requestData['order'][0]['column']],$requestData['order'][0]['dir']);
        $this->db->limit($requestData['length'],$requestData['start']);
        $resultarray=$this->db->get()->result_array();

        $data = array();
        $i=1+$requestData['start'];
        foreach($resultarray as $item)
        {
            // preparing an array
            $nestedData=array();

            //$nestedData[] = "<input type='checkbox'  class='deleteRow' value='".$item['tid']."'  />" ;
            $nestedData[] = $item["day_start_time"];
            $nestedData[] = $item["day_end_time"];

            $nestedData[] = '<div class="btn-group" style="position: relative;"><button class="btn btn-xs red dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
<i class="fa fa-angle-down"></i></button>
 <ul class="dropdown-menu pull-left" role="menu">
<li><a class="table-link" data-target="#uidemo-modals-alerts-add-new" data-toggle="modal" data-id="'.$item['tid'].'">
 <i class="icon-eye"></i> View </a>
</li></ul></div>';

            $data[] = $nestedData;
            $i++;
        }

        $json_data = array(
            "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
            "recordsTotal"    => intval( $totalData ),  // total number of records
            "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data"            => $data   // total data array
        );

        return json_encode($json_data);  // send data as json format
    }
    function daytimedata()
    {
        $data=$this->db->query('SELECT * FROM time_detail')->row();
        return $data;
    }
    function updateDaytime($data,$id)
    {
        $this->db->where('tid',$id);
        $this->db->update('time_detail',$data);
    }
    function getWebCommissionData()
    {
        $data=$this->db->query('SELECT * FROM settings')->row();
        return $data;
    }
    function updateWebCommission($data,$id)
    {

        $this->db->where('id',$id);
        $this->db->update('settings',$data);

    }

}