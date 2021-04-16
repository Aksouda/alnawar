<?php
class Tag_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function gettag($requestData, $flagfilter, $where)
    {
        $columns = array(
            // datatable column index  => database column name
            0 => 'tag_id',
            1 => 'tag_name',
            //2 => 'username',
            2 => 'category.name'
        );
        $flag_disp = $flagfilter;
        // getting total number records without any search
        $this->db->select('*');
        $totalData = $this->db->get('tag')->num_rows();
        $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

        $this->db->select('tag_id, tag_name, category_id, category.name');
        $this->db->join('category','tag.category_id=category.id');
        $this->db->from('tag');
        if ($where !== null) {
            $this->db->where($where);
        }
        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $keywords = '%' . $requestData['search']['value'] . '%';
            //$this->db->where('status','1');
            $this->db->where("(tag_name LIKE '$keywords' OR category.name LIKE '$keywords')");
        }
        $totalFiltered = $this->db->get()->num_rows();
        $this->db->select('tag_id, tag_name, category_id, category.name');
        $this->db->join('category','tag.category_id=category.id');
        $this->db->from('tag');
        if ($where !== null) {
            $this->db->where($where);
        }
        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $keywords = '%' . $requestData['search']['value'] . '%';
            $this->db->where("(tag_name LIKE '$keywords' OR category.name LIKE '$keywords' )");
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

            $nestedData[] = '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline"><input type="checkbox" class="deleteRow checkboxes" value="' . $item['tag_id'] . '"><span></span></label>';
            if ($item['tag_name']) {
                $nestedData[] = $item["tag_name"];
            } else {
                $nestedData[] = '---';
            }
            //$nestedData[] = $item["username"];
            if($item["name"] !='')
            {
                $nestedData[] = $item["name"];
            }
            else
            {
                $nestedData[] = "---";
            }
            //$nestedData[] = $item["email"];
            //$nestedData[] = $item["gender"];
            //$nestedData[] = $item["phone_number"];
            $id = $item['tag_id'];

            //   $total_user_ratings = '----';



            $nestedData[] = '<div class="btn-group">
                                                            <button class="btn btn-xs red dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                <li>
                                                                    <a class="table-link" href="javascript:void(0);" onclick="window.location.href=\'View_Tag/' . $item['tag_id'] . '\'">
                                                                        <i class="glyphicon glyphicon-edit"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a data-target="#uidemo-modals-alerts-delete-user" data-toggle="modal" class="table-link danger" href="javascript:void(0);"  onclick="delete_single_user(' . $item["tag_id"] . ')">
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
    function delsingletag($data_id)
    {
        if (!empty($data_id)) {
            $this->db->where('tag_id', $data_id);
            $this->db->delete('tag');
        }
    }
    function deltag($data_ids)
    {
        $data_id_array = explode(",", $data_ids);
        if (!empty($data_id_array)) {
            foreach ($data_id_array as $id) {
                $this->db->where(' 	tag_id', $id);
                $this->db->delete('tag');
            }
        }
    }

}