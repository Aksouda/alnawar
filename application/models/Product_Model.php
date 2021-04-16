<?php
class Product_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    function getproduct($requestData, $flagfilter, $where)
    {
        $columns = array(
            // datatable column index  => database column name
            0 => 'id',
            1 => 'name',
            2 => 'draft',
            3 => 'draft',
            4 => 'price',
            5 => 'stock',
            6 => 'status',
            7 => 'created_at',
        );
        $flag_disp = $flagfilter;
        // getting total number records without any search
        //category items
        $sql = $this->db->query('SELECT product.id,product.name,category.name as cat_name FROM `product` JOIN product_category on product.id = product_category.product_id join category on product_category.category_id = category.id');

        //category items

        $this->db->select('*');
        $totalData = $this->db->get('product')->num_rows();
        $totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.

        $this->db->select('id, name, draft,price,stock,status,created_at');

        $this->db->from('product');
        if ($where !== null) {
            $this->db->where($where);
        }
        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $keywords = '%' . $requestData['search']['value'] . '%';
            //$this->db->where('status','1');
            $this->db->where("(name LIKE '$keywords' OR draft LIKE '$keywords' OR price LIKE '$keywords' OR stock LIKE '$keywords' OR stock LIKE '$keywords')");
        }
        $totalFiltered = $this->db->get()->num_rows();
        $this->db->select('id, name, draft,price,stock,status,created_at');
        $this->db->from('product');
        if ($where !== null) {
            $this->db->where($where);
        }
        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $keywords = '%' . $requestData['search']['value'] . '%';
            $this->db->where("(name LIKE '$keywords' OR draft LIKE '$keywords' OR price LIKE '$keywords' OR stock LIKE '$keywords' OR stock LIKE '$keywords')");
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

            $nestedData[] = '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline"><input type="checkbox" class="deleteRow checkboxes" value="' . $item['id'] . '"><span></span></label>';
            if ($item['name']) {
                $nestedData[] = $item["name"];
            } else {
                $nestedData[] = '---';
            }
            //$nestedData[] = $item["username"];
            if($item["draft"] !='')
            {
                if($item["draft"] == 0)
                {
                    $draft='<a class="label label-success"><b>PUBLISHED</b></a>';
                }
                else
                {
                    $draft='<a class="label label-default" ><b>DRAFT</b></a>';
                }
                $nestedData[] = $draft;
            }
            else
            {
                $nestedData[] = "---";
            }
            foreach ($sql->result_array() as $pro_cat) {
                if($pro_cat['id'] == $item["id"]){
                    $nestedData[] = $pro_cat['cat_name'];
                }
                elseif($pro_cat['id'] == ''){
                    $nestedData[] = '--';
                }
            }
            if($item["price"] !='')
            {
                $nestedData[] = $item["price"];
            }
            else
            {
                $nestedData[] = "---";
            }
            if($item["stock"] !='')
            {
                $nestedData[] = $item["stock"];
            }
            else
            {
                $nestedData[] = "---";
            }
            if($item["status"] !='')
            {
                if($item["status"] == 'READY STOCK')
                {
                    $status='<a class="label label-success" ><b>AVAILABLE</b></a>';
                }
               else if($item["status"] == 'SUSPEND')
                {
                    $status='<a class="label label-default" ><b>INACTIVE</b></a>';
                }
                else
                {
                    $status='<a class="label label-danger" ><b>OUT OF STOCK</b></a>';
                }
                $nestedData[] = $status;
            }
            else
            {
                $nestedData[] = "---";
            }
            if($item["created_at"] !='')
            {
                $nestedData[] = $item["created_at"];
            }
            else
            {
                $nestedData[] = "---";
            }
            //$nestedData[] = $item["email"];
            //$nestedData[] = $item["gender"];
            //$nestedData[] = $item["phone_number"];
            $id = $item['id'];

            //   $total_user_ratings = '----';



            $nestedData[] = '<div class="btn-group">
                                                            <button class="btn btn-xs red dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-right" role="menu">
                                                                <li>
                                                                    <a href="javascript:;" onclick="product_details('. $item["id"] .')" >
                                                                        <i class="glyphicon glyphicon-blackboard"></i> Details </a>
                                                                </li>
                                                                <li>
                                                                    <a class="table-link" href="'.base_url('Product/Product_view_data/'). $item["id"] .'">
                                                                        <i class="glyphicon glyphicon-edit"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a data-target="#uidemo-modals-alerts-delete-user" data-toggle="modal" class="table-link danger" href="javascript:void(0);"  onclick="delete_single_user_action(' . $item["id"] . ')">
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
    function delsingleproduct($data_id)
    {
        if (!empty($data_id)) {
            $this->db->where('id', $data_id);
            $this->db->delete('product');
        }
    }
    function delproduct($data_ids)
    {
        $data_id_array = explode(",", $data_ids);
        if (!empty($data_id_array)) {
            foreach ($data_id_array as $id) {
                $this->db->where('id', $id);
                $this->db->delete('product');
            }
        }
    }

}
