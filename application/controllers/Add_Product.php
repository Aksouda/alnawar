<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);
class Add_Product extends CI_Controller
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
        $this->load->model('product_Model', 'product');
        $this->load->database();
        if ($this->session->userdata['loggedIn'] == TRUE) {
            //do something
        } else {
            redirect('login'); //if session is not there, redirect to login page
        }

    }

    public function index()
    {
        $this->load->view('Add_Product');
        if(isset($_REQUEST['save']))
        {
            //print_r($_REQUEST['tag_name']);exit;
            $product_name=$_REQUEST['product_name'];
            $price=$_REQUEST['price'];
            $stock=$_REQUEST['stock'];
            $product_status=$_REQUEST['product_status'];
            $isProductCustomizable=$_REQUEST['isProductCustomizable'];
            if($_FILES['primary_image'] !='')
            {
                $img_name = time() . $_FILES['primary_image']['name'];
                move_uploaded_file($_FILES['primary_image']['tmp_name'],'./uploads/product/'.$img_name);
            }
            else
            {
                $img_name='';
            }

            $product_description=$_REQUEST['product_description'];
            $brand_id=$_REQUEST['brand_id'];
            //$tag_name=$_REQUEST['tag_name'];
            $arr=$_REQUEST['tag_name'];
            $tag_name=implode(",",$arr);
            $product_color=$_REQUEST['product_color'];
            $draft=$_REQUEST['draft'];

            $data = array(
                'name' => $product_name,
                'price' => $price,
                'stock'=>$stock,
                'status'=>$product_status,
                'isProductCustomizable'=>$isProductCustomizable,
                'description'=>$product_description,
                'product_brand'=>$brand_id,
                'product_tag'=>$tag_name,
                'product_color'=>$product_color,
                'image'=>$img_name,
                'draft'=>$draft
            );

            $this->db->insert('product', $data);
            $product_id = $this->db->insert_id();
            if($_FILES['primary_image1'] !='')
            {
                $primary_image1=time() . $_FILES['primary_image1']['name'];
                move_uploaded_file($_FILES['primary_image1']['tmp_name'],'./uploads/product/'.$primary_image1);
                $data_img1 = array(
                'product_id'=>$product_id,
                    'name'=>$primary_image1
                );
                $this->db->insert('product_image', $data_img1);
            }


            if($_FILES['primary_image2'] !='')
            {
                $primary_image2=time() . $_FILES['primary_image2']['name'];
                move_uploaded_file($_FILES['primary_image2']['tmp_name'],'./uploads/product/'.$primary_image2);
                $data_img2 = array(
                    'product_id'=>$product_id,
                    'name'=>$primary_image2
                );
                $this->db->insert('product_image', $data_img2);
            }


            if($_FILES['primary_image3'] !='')
            {
                $primary_image3=time() . $_FILES['primary_image3']['name'];
                move_uploaded_file($_FILES['primary_image3']['tmp_name'],'./uploads/product/'.$primary_image3);
                $data_img3 = array(
                    'product_id'=>$product_id,
                    'name'=>$primary_image3
                );
                $this->db->insert('product_image', $data_img3);
            }

            if($_FILES['primary_image4'] !='')
            {
                $primary_image4=time().$_FILES['primary_image4']['name'];
                move_uploaded_file($_FILES['primary_image4']['tmp_name'],'./uploads/product/'.$primary_image4);

                $data_img4 = array(
                    'product_id'=>$product_id,
                    'name'=>$primary_image4
                );
                $this->db->insert('product_image', $data_img4);
            }
            $category_ids=$_REQUEST['category_ids'];
            $ids=count($category_ids);
            for($i=0;$i<$ids;$i++)
            {
                $data_cate=array(
                    'product_id'=>$product_id,
                    'category_id'=>$category_ids[$i]
                );
                $this->db->insert('product_category', $data_cate);
            }
            $query_size = $this->db->get('size');
            $num = $query_size->num_rows();
            for($j=0;$j<$num;$j++)
            {
                $size_id=$_REQUEST['size_arra_'.$j];
                $product_stock=$_REQUEST['size_stock_'.$j];
                if($size_id !='') {
                    $data_stock = array(
                        'product_id' => $product_id,
                        'size_id' => $size_id,
                        'product_stock' => $product_stock
                    );
                    $this->db->insert('product_size', $data_stock);
                }
            }
            $attribute_name=$_REQUEST['attribute_name'];

            for($k=0;$k<count($attribute_name);$k++)
            {
                $attribute_names=$_REQUEST['attribute_name'][$k];
                $attribute_value=$_REQUEST['attribute_value'][$k];
               // $attribute_stock=$_REQUEST['attribute_stock'][$k];
                $data_attribute = array(
                    'product_id' => $product_id,
                    'attribute_name' => $attribute_names,
                    'attribute_value' => $attribute_value
//                    'attribute_stock' => $attribute_stock
                );
                $this->db->insert('product_attribute', $data_attribute);
            }

            redirect(base_url('Product'));
        }
    }

 function same_name(){
        $name = $_POST['data'];
        $this->db->select('name');
        $data = $this->db->get_where('product',['name'=>$name])->result_array();
        if($name == $data[0]['name']){
            echo true;
        }
        else{
            echo false;
        }
    }

}
?>
