<?php
class Size_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function getuser($requestData, $flagfilter, $where)
    {
        $columns = array(
            // datatable column index  => database column name
            0 => 'size_id',
            1 => 'name',
            //2 => 'username',
            2 => 'category_name'
        );
        $flag_disp = $flagfilter;
        // getting total number records without any search
        $this->db->select('*');
        $totalData = $this->db->get('size')->num_rows();
        $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

        $this->db->select('s.size_id, s.name, s.category_id,c.name as category_name');
        $this->db->from('size as s');
        $this->db->join('category as c','c.id=s.category_id','join');
        if ($where !== null) {
            $this->db->where($where);
        }
        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $keywords = '%' . $requestData['search']['value'] . '%';
            //$this->db->where('status','1');
            $this->db->where("(s.name LIKE '$keywords' OR c.name LIKE '$keywords')");
        }
        $totalFiltered = $this->db->get()->num_rows();
        $this->db->select('s.size_id, s.name, s.category_id,c.name as category_name');
        $this->db->from('size as s');
        $this->db->join('category as c','c.id=s.category_id','join');

        if ($where !== null) {
            $this->db->where($where);
        }
        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $keywords = '%' . $requestData['search']['value'] . '%';
            $this->db->where("(s.name LIKE '$keywords' OR c.name LIKE '$keywords' )");
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

            $nestedData[] = '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline"><input type="checkbox" class="deleteRow checkboxes" value="' . $item['size_id'] . '"><span></span></label>';
            if ($item['name']){
                $nestedData[] = $item["name"];
            } else {
                $nestedData[] = '---';
            }
            //$nestedData[] = $item["username"];
            if($item["category_name"] !='')
            {
                $nestedData[] = $item["category_name"];
            }
            else
            {
                $nestedData[] = "---";
            }
            //$nestedData[] = $item["email"];
            //$nestedData[] = $item["gender"];
            //$nestedData[] = $item["phone_number"];
            $id = $item['size_id'];

            //   $total_user_ratings = '----';



            $nestedData[] = '<div class="btn-group">
                                                            <button class="btn btn-xs red dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                <li>
                                                                    <a class="table-link" href="javascript:void(0);" onclick="window.location.href=\'View_Size/' . $item['size_id'] . '\'">
                                                                        <i class="icon-eye"></i> View </a>
                                                                </li>
                                                                <li>
                                                                    <a data-target="#uidemo-modals-alerts-delete-user" data-toggle="modal" class="table-link danger" href="javascript:void(0);"  onclick="delete_single_user(' . $item["size_id"] . ')">
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
    function delsinglesize($data_id)
    {
        if (!empty($data_id)) {
            $this->db->where('size_id', $data_id);
            $this->db->delete('size');
        }
    }
    function delsize($data_ids)
    {
        $data_id_array = explode(",", $data_ids);
        if (!empty($data_id_array)) {
            foreach ($data_id_array as $id) {
                $this->db->where('size_id', $id);
                $this->db->delete('size');
            }
        }
    }

}