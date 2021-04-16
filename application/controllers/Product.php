<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *        http://example.com/index.php/welcome
     *    - or -
     *        http://example.com/index.php/welcome/index
     *    - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        $this->load->model('Product_Model', 'product');
        $this->load->database();
        if ($this->session->userdata['loggedIn'] == TRUE) {
            //do something
        } else {
            redirect('login'); //if session is not there, redirect to login page
        }
    }

    public function index()
    {
        $this->load->view('Product');
    }
    public function get_product_data()
    {
        // storing  request (ie, get/post) global array to a variable
        $requestData= $_REQUEST;
        $filterData=$_POST['data_id'];
        if($filterData=='yes'){
            $flagfilter=$filterData;
        }
        else{
            $flagfilter='';
        }
        $user=$this->product->getproduct($requestData,$flagfilter,$where=null);
        echo $user;
    }
    public function delete_single_product_data()
    {
        $data_id = $_REQUEST['data_id'];
        $this->product->delsingleproduct($data_id);
    }
    public function delete_product_data()
    {
        $data_ids = $_REQUEST['data_ids'];
        $this->product->delproduct($data_ids);
    }
    public function View_Product()
    {
        $this->load->view('View_Product');
        if(isset($_REQUEST['save']))
        {
            $brand_name=$_REQUEST['brand_name'];
            $category_id=$_REQUEST['category_id'];
            $brand_id=$_REQUEST['brand_id'];
            $data = array(
                'brand_name' => $brand_name,
                'category_id' => $category_id
            );

            $this->db->where('brand_id', $brand_id);
            $this->db->update('brand', $data);
            redirect(base_url('Product'));
        }
    }
public function add_new_product()
    {
        //print_r($_POST);
        $this->load->model('Setting_model');
        $rows_cat = $this->Setting_model->cat_list();
        $data = $this->db->get('tag')->result_array();
        $this->load->view('add_new_product_view.php',array('rows_cat'=>$rows_cat,'tags'=>$data));
    }

    public function cat_size()
    {
        $cat = $_GET['cat'];
        $get_size = $this->db->get_where('size',['category_id'=>$cat])->result_array();
        $this->load->view('size_cat_commpress',array('get_size'=>$get_size));
    }
    public function submit_now()
    {
        $data = array(
            'name'=>$this->input->post("name"),
            'name_ar'=>$this->input->post("name_ar"),
            'price'=>$this->input->post('price'),
            'old_price'=>$this->input->post('oldprice'),
	        'product_color'=>$this->input->post('product_color_to_product'),
            'stock'=>$this->input->post('stock'),
            'image'=>time().$_FILES['new_primary_image']['name'],
            'description'=>$this->input->post('dis'),
            'draft'=>isset($_POST['draft'])?$_POST['draft']:0 ,
            'product_brand'=>isset($_POST['brand_id'])?$_POST['brand_id']:'null',
            'product_tag'=>isset($_POST['tag'])?implode(',',$_POST['tag']):'null',
            'status'=>$_POST['product_status'],
            'isProductCustomizable'=>$_POST['isProductCustomizable'],
            'product_code'=>$this->input->post('pro_code'),
        );

        // foreach($data as $val)
        // {
        //     echo $val."</br>";
        // }

        move_uploaded_file($_FILES['new_primary_image']['tmp_name'],'./uploads/product/'.time().$_FILES['new_primary_image']['name']);
        $this->db->insert('product',$data);
        //echo $this->db->last_query();exit;
        $id = $this->db->insert_id();
        for($i=0;$i<count($_POST['attribute_name']);$i++) {
            $this->db->insert('product_attribute',array('product_id'=>$id,'attribute_name'=>($_POST['attribute_name'][$i] != '')?$_POST['attribute_name'][$i]:'null','attribute_value'=>$_POST['attribute_value'][$i]));
        }
        for($i=0;$i<count($_FILES['primary_image_e']['name']);$i++){
            if($_FILES['primary_image_e']['name'][$i] != '') {
                $this->db->insert('product_image', array('product_id' => $id, 'name' => ($_FILES['primary_image_e']['name'][$i] != '') ? time() . $_FILES['primary_image_e']['name'][$i] : 'null'));
                move_uploaded_file($_FILES['primary_image_e']['tmp_name'][$i], './uploads/product/' . time() . $_FILES['primary_image_e']['name'][$i]);
            }
        }
        $this->db->insert('product_category',array('product_id'=>$id,'category_id'=>$_POST['cat'][0]));
        $x = 0;
        $get_size = $this->db->get_where('size',['category_id'=>$_POST['cat'][0]])->result_array();
        for($i=0;$i<($_POST['time_loop']+1);$i++){
            echo $_POST['product_color'][$x].'<br>';
            foreach ($get_size as $sz){
                if($_POST[$sz['size_id']][$x] != '') {
                    echo $sz['name'] . '=>' . $_POST[$sz['size_id']][$x] . '<br>';
                    $this->db->insert('product_size',array('product_id'=>$id,'category_id'=>$_POST['cat'][0],'size_id'=>$sz['size_id'],'product_stock'=>$_POST[$sz['size_id']][$x],'product_price'=>$_POST['price_'.$sz['size_id']][$x],'product_stock_color'=>$_POST['product_color'][$i],'image' => ($_FILES['image']['name'][$i] != '')?time().$_FILES['image']['name'][$i]:'null'));
                    move_uploaded_file($_FILES['image']['tmp_name'][$i],'./uploads/product/size_image/'.time().$_FILES['image']['name'][$i]);
                }
            }
            $x++;
        }
        redirect(base_url('Product'));
    }

    public function Product_view_data($id)
    {
        $this->load->model('Setting_model');
        $rows_cat = $this->Setting_model->cat_list();
        $tags = $this->db->get('tag')->result_array();
        $img = $this->db->get_where('product_image',array('product_id'=>$id));
        $data = $this->db->get_where('product',['id'=>$id])->row();
        $cat = $this->db->get_where('product_category',array('product_id'=>$id))->result_array()[0]['category_id'];
        $colors = $this->db->get_where('product_size',['product_id'=>$id])->result_array();
        //print_r($this->db->last_query());exit;
        $attr = $this->db->get_where('product_attribute',['product_id'=>$id])->result_array();
        $this->load->view('view_product_data_view',array('rows_cat'=>$rows_cat,'tags'=>$tags,'up_data'=>$data,'img'=>$img,'cat'=>$cat,'colors'=>$colors,'attr'=>$attr));
    }
    public function get_size_stock()
    {
        $cat = $_GET['cat'];
        $color = $_GET['color'];
        $pid = $_GET['pid'];
        $images_size = $_GET['image_of_size'];
        $data = $this->db->get_where('product_size',['product_id'=>$pid,'product_stock_color'=>$color]);
        $get_size = $this->db->get_where('size',['category_id'=>$cat])->result_array();
        $size_d = array();
        $pro_stock = array();
        $pro_price = array();
        foreach ($data->result_array() as $d){
            array_push($size_d,$d['size_id']);
            $pro_stock[$d['size_id']] = $d['product_stock'];
            $pro_price[$d['size_id']] = $d['product_price'];
        }
        $this->load->view('update_size_compress',array('get_size'=>$get_size,'data'=>$data,'color'=>$color,'size_id_list'=>$size_d,'product_stock'=>$pro_stock,'pro_stock'=>$pro_stock,'pro_price'=>$pro_price,'images_size'=>$images_size,'p_id_s'=>$pid));
    }

    public function Update_now($id)
    {
        //print_r($_POST);return false;

        if(isset($_POST['delete_ac'])){
        foreach ($_POST['delete_ac'] as $cl){
            $this->db->delete('product_size',array('product_id'=>$id,'product_stock_color'=>$cl));
        }
        }
        $data = array(
            'name'=>$this->input->post("name"),
            'name_ar'=>$this->input->post("name_ar"),
            'price'=>$this->input->post('price'),
            'old_price'=>$this->input->post('oldprice'),
            'product_color'=>$this->input->post('product_color_to_product'),
            'stock'=>$this->input->post('stock'),
            'image'=>time().$_FILES['new_primary_image']['name'],
            'description'=>$this->input->post('dis'),
            'draft'=>isset($_POST['draft'])?$_POST['draft']:0 ,
            'product_brand'=>isset($_POST['brand_id'])?$_POST['brand_id']:'null',
            'product_tag'=>isset($_POST['tag'])?implode(',',$_POST['tag']):'null',
            'status'=>$_POST['product_status'],
            'isProductCustomizable'=>$_POST['isProductCustomizable'],
            'product_code'=>$_POST['pro_code'],

        );
        if($_FILES['new_primary_image']['name'] != null){
            move_uploaded_file($_FILES['new_primary_image']['tmp_name'],'./uploads/product/'.time().$_FILES['new_primary_image']['name']);
        }
        else{
            unset($data['image']);
        }
        $Check_upload = 0;
        for($i=0;$i<4;$i++){
            $Check_upload = $_FILES['primary_image_e']['error'][$i] + $Check_upload;
        }
        if($Check_upload != 16){
            $imgs_data = $this->db->get_where('product_image',array('product_id' => $id))->result_array();
            foreach ($imgs_data as $img){
                unlink('./uploads/product/' . $img['name']);
            }
            $this->db->delete('product_image', array('product_id' => $id));
            for($i=0;$i<count($_FILES['primary_image_e']['name']);$i++){
                if($_FILES['primary_image_e']['name'][$i] != '') {
                    $this->db->insert('product_image', array('product_id' => $id, 'name' => ($_FILES['primary_image_e']['name'][$i] != '') ? time() . $_FILES['primary_image_e']['name'][$i] : 'null'));
                    move_uploaded_file($_FILES['primary_image_e']['tmp_name'][$i], './uploads/product/' . time() . $_FILES['primary_image_e']['name'][$i]);
                }
            }
        }
        $this->db->where(['id'=>$id]);
        $this->db->update('product',$data);
        $this->db->delete('product_category',array('product_id'=>$id));
        $this->db->insert('product_category',array('product_id'=>$id,'category_id'=>$_POST['cat'][0]));
        $get_size = $this->db->get_where('size',['category_id'=>$_POST['cat'][0]])->result_array();
        $this->db->delete('product_size',array('product_id'=>$id));
        for($i=0;$i<$i+5;$i++){
            if(!isset($_POST['product_color'][$i]) OR $_POST['product_color'][$i] == 'SELECT COLOR'){
                break;
            }
            $x = 0;
            foreach ($get_size as $sz){
                if($_POST[$sz['size_id']][$i] != '') {
                    echo $sz['name'] . '=>' . $_POST[$sz['size_id']][$i] . '<br>';
                    $img_name_ok = time() . $_FILES['image']['name'][$i];
                    if (isset($_POST['image_name_old'][$i])) {
                        if ($_POST['image_name_old'][$i] != null) {
                            $laks = $_POST['image_name_old'][$i];
                        } else {
                            $laks = 'null';
                        }
                    } else {
                        $laks = 'null';
                    }
                    if ($_POST[$sz['size_id']][$i] == '') {
                        $stock_evr = '';
                    } else {
                        $stock_evr = $_POST[$sz['size_id']][$i];
                    }
                    $this->db->insert('product_size', array('product_id' => $id, 'category_id' => $_POST['cat'][0], 'size_id' => $sz['size_id'], 'product_stock' => $stock_evr, 'product_price' => $_POST['price_' . $sz['size_id']][$i], 'product_stock_color' => $_POST['product_color'][$i], 'image' => ($_FILES['image']['name'][$i] != '') ? $img_name_ok : $laks));
                    //print_r($this->db->last_query());
                    echo '<br>';
                    echo $_POST['product_color'][$i] . '<br>';
                    move_uploaded_file($_FILES['image']['tmp_name'][$i], './uploads/product/size_image/' . time() . $_FILES['image']['name'][$i]);
                    $x++;
                }
            }
        }
        //attribute
        $this->db->delete('product_attribute',['product_id'=>$id]);
        for($i=0;$i<count($_POST['attribute_name']);$i++) {
            $this->db->insert('product_attribute',array('product_id'=>$id,'attribute_name'=>($_POST['attribute_name'][$i] != '')?$_POST['attribute_name'][$i]:'null','attribute_value'=>$_POST['attribute_value'][$i]));
        }
        redirect('Product');
    }

    public function Manage_product()
    {
        $this->load->view('Manage_Product_view');
    }

    public function get_pro_data()
    {
        $this->db->order_by('id','desc');
        $row = $this->db->get('product')->result_array();
        $this->db->select('product_category.product_id,category.name');
        $this->db->join('product_category ',' product_category.category_id = category.id');
        $cat = $this->db->get('category')->result_array();
        for ($i=0;$i < count($row);$i++){
            for($x=0;$x < count($cat);$x++){
                if($row[$i]['id'] == $cat[$x]['product_id']){
                    if($cat[$x]['name'] != '') {
                        $row[$i]['Category'] = $cat[$x]['name'];
                    }
                }
            }
            $publish_push =  $row[$i]['draft'] == 1?'<li>
<a href="javascript:;" onclick="publish_push('.$row[$i]['id'].');" >
<i class="glyphicon glyphicon-check"  ></i> Publish </a></li>':'';
            $row[$i]['Action'] = '<div class="btn-group" >
                                                            <button class="btn btn-xs red dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                <li>
                                                                    <a href="javascript:;" onclick="product_details('.$row[$i]['id'].')" >
                                                                        <i class="glyphicon glyphicon-blackboard"></i> Details </a>
                                                                </li>
                                                                <li>
                                                                    <a href="'.base_url('Product/Product_view_data/').$row[$i]['id'].'">
                                                                        <i class="glyphicon glyphicon-edit"></i> Edit </a>
                                                                </li>
                                                                '.$publish_push.'
                                                                <li>
                                                                    <a href="javascript:;" onclick="delete_this_product('.$row[$i]['id'].');">
                                                                        <i class="glyphicon glyphicon-trash"></i> Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    ';
            $row[$i]['cheked']= '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes Checkbox" name="multi[]" id="multi" value="'.$row[$i]['id'].'" />
                                                            <span></span>
                                                        </label>';
            if($row[$i]['draft'] == 1){
                $row[$i]['draft'] = '<a class="label label-default">Draft</a>';
            }
            else{
                $row[$i]['draft'] = '<a class="label label-success">Publish</a>';
            }
            if($row[$i]['status'] == 'READY STOCK') {
                $row[$i]['status'] = '<a class="label label-success">AVAILABLE</a>';
            }
            elseif ($row[$i]['status'] == 'SUSPEND') {
                $row[$i]['status'] = '<a class="label label-danger">SUSPEND</a>';
            }
            elseif ($row[$i]['status'] == 'OUT OF STOCK'){
                $row[$i]['status'] = '<a class="label label-default">OUT OF STOCK</a>';
            }
        }
        print_r(json_encode(array('data'=>$row)));
    }

    public function sep_pro_get()
    {
        $id = $_GET['id'];
        $data = $this->db->get_where('product',['id'=>$id])->result_array();
        $imgs = $this->db->get_where('product_image',['product_id'=>$id])->result_array();
        $this->db->select('product_category.product_id,category.name');
        $this->db->join('product_category ',' product_category.category_id = category.id');
        $cat = $this->db->get_where('category',['product_category.product_id'=>$id])->result_array();
        $this->load->view('model_View_all',array('data'=>$data,'cat'=>$cat,'imgs'=>$imgs));
    }

    public function publish_now()
    {
        $id = $_GET['id'];
        $this->db->where(array('id'=>$id));
        $this->db->update('product',array('draft'=>'0'));
        print_r($this->db->last_query());
    }

    public function delete_now($pro = null)
    {
        if(!is_null($pro)){
            $id = $pro;
        }else{
            $id = $_GET['id'];
        }
        //images unlink too
        $imgs = $this->db->get_where('product_image',['product_id'=>$id])->result_array();
        foreach ($imgs as $img){
            //unlink(base_url('uploads/product/').$img['name']);
            unlink('./uploads/product/'.$img['name']);
        }
        //unlink product image
        unlink('./uploads/product/'.$this->db->get_where('product',['id'=>$id])->result_array()[0]['image']);
        $this->db->delete('product',['id'=>$id]);
        $this->db->delete('product_category',['product_id'=>$id]);
        $this->db->delete('product_size',['product_id'=>$id]);
        $this->db->delete('product_image',['product_id'=>$id]);
        $this->db->delete('product_attribute',['product_id'=>$id]);
    }

    public function mul_del()
    {
        $mk_jing = explode(',',$_GET['id']);
        foreach ( $mk_jing as $item) {
            $this->delete_now($item);
        }
    }

    public function check_username()
    {
        $name = $_POST['name'];
        $data = $this->db->get_where('product',['name'=> $name])->num_rows();
        if($data != 0){
            echo 1;
        }
    }

    public function tga_meter()
    {
        $cat = $_GET['cat'];
        $data = $this->db->get_where('tag',['category_id'=>$cat])->result();
        $html = '';
        for ($i=0;$i<count($data);$i++){
            $html .= '<option value="'.$data[$i]->tag_id.'" >'.$data[$i]->tag_name.'</option>';
        }
        echo $html;
    }

}
?>
