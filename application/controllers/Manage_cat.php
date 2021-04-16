<?php
/**
* manage_cat controller
*/
class manage_cat extends CI_Controller
{
	public function index($page = 10)
	{
		# code...
        $this->load->model('category');
        $this->load->view('Category_list');
	}
	public function get_data_of_cat(){
	    $this->load->model('category');
        $data = $this->category->category_list();
        echo json_encode(array('data'=>$data));
    }
	
	public function add_category()
	{
		$this->load->model('category');
		$list = count($this->category->category_list());
		$row = $this->category->category_list();
		$this->load->view('add_category',array('list'=>$list,'row'=>$row));
		if(isset($_POST['submit'])){
				$img_name = $_POST['img_name'];
				if(isset($_POST['draft'])){
					$draft=1;
					}
					else
					{
						$draft=0;
					}
				if(isset($_POST['display'])){
					$display=1;
					}
					else
					{
						$display=0;
					}
				$insert_data = array(
				'name'=> $_POST['category_name'],
                'name_ar'=> $_POST['category_name_ar'],
				'color'=> '#'.$_POST['color'],
				'brief'=> $_POST['cat_de'],
				'parent_id'=> $_POST['perent'],
				'icon'=> $img_name,
				'priority'=>$_POST['priority'],
				'draft'=>$draft,
				'status'=>'1',
				'slider_display'=>$display,
				'created_at'=>time()
					);
				$check = $this->category->insert('category',$insert_data);
            if($_FILES['slider_img']['name'][0] != null){
                $x = 0;
                while($x < count($_FILES['slider_img']['name'])){
                        move_uploaded_file($_FILES['slider_img']['tmp_name'][$x],'./uploads/category_slider/'.time().$_FILES['slider_img']['name'][$x]);
                        echo $this->category->insert('slider_img',array('img'=>time().$_FILES['slider_img']['name'][$x],'category_id'=>$check));
                        $x++;
                    }
                }
                redirect(base_url('/index.php/Manage_cat'));
	        }
	
	}

    /**
     * @return object
     */
    public function check_username()
    {
        $this->load->model('Category');
        $data = $this->Category->check_username($_POST['name']);
        print_r($data);
    }

    public function delete()
    {
        $id = $_POST['id'];
            $this->load->model('category');
            $this->category->delete($id);
    }

    public function update($id)
    {
        $this->load->model('category');
        $row_parent_id = $this->category->category_list();
        $row = $this->category->get_sep_category($id);
        $slider = $this->category->get_slider($id);
        $list = count($this->category->category_list());
        $this->load->view('add_category',array('up_row'=>$row,'check_u'=>1,'list'=>$list,'row'=>$row_parent_id,'slider'=>$slider));
        if(isset($_POST['submit'])){
            if(isset($_POST['draft'])){
                $draft=1;
            }
            else
            {
                $draft=0;
            }
            if(isset($_POST['display'])){
                $display=1;
            }
            else
            {
                $display=0;
            }
            if(!$id) {
                $check = $this->category->insert('category', $insert_data);
            }
            else{
                if(!empty($_FILES['img']['name'])){
                    $img_name = $_POST['img_name'];
                    move_uploaded_file($_FILES['img']['tmp_name'],'./uploads/category/'.$img_name);
                }
                else{
                    $img_name = $row[0]['icon'];
                }
                if(isset($_POST['draft'])){
                    $draft=1;
                }
                else
                {
                    $draft=0;
                }
                if(isset($_POST['display'])){
                    $display=1;
                }
                else
                {
                    $display=0;
                }
                $data_update = array(
                    'name'=> $_POST['category_name'],
                    'name_ar'=> $_POST['category_name_ar'],
                    'color'=> '#'.$_POST['color'],
                    'brief'=> $_POST['cat_de'],
                    'parent_id'=> $_POST['perent'],
                    'icon'=> $img_name,
                    'priority'=>$_POST['priority'],
                    'draft'=>$draft,
                    'status'=>'1',
                    'slider_display'=>$display,
                    'last_update'=>time()
                );
                $check = $this->category->update_cat($id,$data_update);
                $check = $id;
            }
            if(isset($id)){$x = 0;}

            if(isset($_FILES['slider_img']['name'])){
                while($x < count($_FILES['slider_img']['name'])){
                    $move = move_uploaded_file($_FILES['slider_img']['tmp_name'][$x],'./uploads/category_slider/'.time().$_FILES['slider_img']['name'][$x]);
                    if($move) {
                        $this->category->insert('slider_img', array('img' => time() . $_FILES['slider_img']['name'][$x], 'category_id' => $check));
                    }$x++;
                }
            }
            redirect(base_url('/index.php/Manage_cat'));
        }
    }
    public function multi_delete(){
        if(isset($_POST)){
            $_POST['id'] = explode(',',$_POST['id']);
            $this->load->model('category');
            foreach ($_POST['id'] as $id){
                $this->category->delete($id);
            }
        }
    }

    public function get_image()
    {
        $id = $_POST['id'];
        $this->load->model('category');
        $data = $this->category->get_Sep_category($id);
        echo base_url('uploads/category/').$data[0]['icon'];
    }
    public function checkstatus()
    {
        $this->load->model('category');
        $data = $this->category->get_Sep_category($_POST['id']);
        if($data[0]['status'] == 1){
            $this->category->update_status($_POST['id'],0);
            echo 'Inactive';
        }
        else {
            $this->category->update_status($_POST['id'],1);
            echo 'Active';
        }
    }

    public function remove_slide()
    {
        echo $id = $_REQUEST['id'];
        $this->load->model('category');
        $this->category->remove_slide($id);
        echo 'ok';
    }

    public function view()
    {
        $this->load->model('category');
        $data = $this->category->category_data();
        $this->load->library('table');
        $this->load->view('all_view');
    }
    public function view_all_data()
    {
        $this->load->model('category');
        $data = $this->category->category_data();
        print_r(json_encode($data->result_array()));
    }
}
