<?php 
/**
* Category Model
*/
class Category extends CI_Model
{
	function __construct()
	{
		# code...
		$this->load->database();
	}
	public function category_list()
	{
		# code...
        $this->db->order_by('id','DESC');
		$data = $this->db->get('category');
		$row = $data->result_array();
		for ($i=0;$i<$data->num_rows();$i++){
		    $row[$i]['name'] = $row[$i]['name'].$this->cat_parent_and_child_dist($row[$i]['id']);
            $row[$i]['color'] = '<a style="background-color:'.$row[$i]['color'].';color:black;">'.$row[$i]['color'].'</a>';
            if($row[$i]['draft'] == 1){
                $row[$i]['draft'] = '<span class="label label-sm label-default"> Draft </span>';
            }else{
                $row[$i]['draft'] = '<span class="label label-sm label-success"> Publish </span>';
            }
            if($row[$i]['status'] == 1){
                $row[$i]['status'] = '<span id="status'.$row[$i]['id'].'" onclick="status_change('.$row[$i]['id'].');" class="label label-sm label-success"> Active </span>';
            }else{
                $row[$i]['status'] = '<span id="status'.$row[$i]['id'].'" onclick="status_change('.$row[$i]['id'].');" class="label label-sm label-default"> Inactive </span>';
            }
            $row[$i]['icon'] = '<img src="'.base_url("uploads/category/").$row[$i]['icon'].'" height="100px" onclick="img_view('.$row[$i]['id'].');" width="100px" />';
            $row[$i]['Action'] = '<div class="btn-group">
                                                            <button class="btn btn-xs red dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                                <i class="fa fa-angle-down"></i>
                                                            </button>
                                                            <ul class="dropdown-menu pull-left" role="menu">
                                                                <li>
                                                                    <a href="manage_cat/update/'.$row[$i]['id'].'">
                                                                        <i class="glyphicon glyphicon-edit"></i> Edit </a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:;" onclick="delete_cat('.$row[$i]['id'].');">
                                                                        <i class="glyphicon glyphicon-trash"></i> Delete</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    ';
            $row[$i]['cheked']= '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                                            <input type="checkbox" class="checkboxes Checkbox" name="multi[]" id="multi" value="'.$row[$i]['id'].'" />
                                                            <span></span>
                                                        </label>';
            $row[$i]['last_update'] = date('d-m-y', $row[$i]['last_update']);

        }
        return $row;
	}
	public function insert($tab,$data){
		$check = $this->db->insert($tab,$data);
		if($check){
			return $this->db->insert_id();
			}
		else{
			return 'failed';
			}
		}
	public function check_username($name){
		$check = $this->db->get_where('category',array('name'=>$name));
		$fa = $check->result_array();
		if(count($fa) > 0){
		    return 's' ;
        }
        else{
		    return 'f';
        }
		}
    public function category_data()
    {
        $data = $this->db->get('category');
        return $data;
    }
    public function delete($id)
    {
        $this->db->delete('category', array('id' => $id));
    }
    public function get_Sep_category($id){
	    $data = $this->db->get_where('category',array('id'=>$id));
	    return $data->result_array();
    }
    public function update_status($id,$on)
    {
        $data = array(
            'status' => $on,
        );
        $this->db->where('id', $id);
        $this->db->update('category', $data);
    }
    public function get_slider($id){
        $data = $this->db->get_where('slider_img',['category_id' => $id]);
        return $data -> result_array();
    }

    public function remove_slide($id)
    {
        $data = $this->db->delete('slider_img',['id'=>$id]);
    }

    public function update_cat($id,$data_update)
    {
        $data = $this->db->update('category', $data_update, array('id' => $id));
    }

    public function all_view()
    {
        $data = $this->db->get('category');
    }

    public function cat_parent_and_child_dist($id)
    {
        $data = $this->db->get_where('category',['id'=>$id])->row();
        $ya_Str = null;
        $x = 0;
        while(true){
            if($x == 5){
                break;
            }
            if(isset($data->parent_id)){
                if($data->parent_id != 0){
                    $data = $this->db->get_where('category',['id'=>$data->parent_id ])->row();
                    $ya_Str .= '<br><a class="label label-sm label-info">'.$data->name.'</a>';
                }
                else{
                    if($x == 0) {
                        $ya_Str .= '<br><a class="label label-sm label-success">Main</a>';
                    }
                    break;
                }
            }
            else{
                break;
            }
            $x++;
        }
        return $ya_Str;
    }

}
