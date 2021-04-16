    <?php

/**
 * Created by PhpStorm.
 * User: dell
 * Date: 22/6/17
 * Time: 10:05 AM
 */
class Questions_model extends CI_Model
{
    function __construct()
    {
        $this->load->database();
    }
    function add_data($data){
        $row = $this->db->insert('faq',$data);
        print_r($row);
    }
    function get_data(){
        $collams = array(
            1=>'question',
            2=>'description'
        );

        //search __- Search
        if(isset($_REQUEST['search']["value"])){
            if($_REQUEST['search']["value"] != '' ){
                $x = 0;
                foreach ($collams as $each){
                    if($x == 0){
                        $this->db->like($each, $_REQUEST['search']["value"]);
                    }else{
                        $this->db->or_like($each, $_REQUEST['search']["value"]);
                    }
                    $x++;
                }
            }
        }
        $ord_ = $_REQUEST['order'][0]['column'];
        //print_r($collams[$ord_]);
        //search __- Search
//        limit and Other Stop
        $this->db->limit(isset($_REQUEST['length'])?$_REQUEST['length']:10,isset($_REQUEST['start'])?$_REQUEST['start']:0);

        if(isset($_REQUEST['order'][0]['column'])){
            if($_REQUEST['order'][0]['column'] == 0){
                $this->db->order_by('faq_id','DESC');
            }else {
                $this->db->order_by($collams[$_REQUEST['order'][0]['column']], $_REQUEST['order'][0]['dir']);
            }
        }
//        limit and Other Stop
        $row = $this->db->get('faq');
        $data = $row->result_array();
        for($i=0;$i <$row->num_rows();$i++){
            $data[$i]['cheked'] = '<label class="mt-checkbox mt-checkbox-single mt-checkbox-outline">
                                        <input type="checkbox" class="Checkbox checkboxes" value="'. $data[$i]['faq_id'] .'" name="multy[]" id="multy"/>
                                        <span></span></label>';
            $data[$i]['Actions'] = '<div class="btn-group">
                                        <button class="btn btn-xs red dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="'. base_url('Questions/edit/') . $data[$i]['faq_id'] .'">
                                                    <i class="icon-docs"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a href="javascript:;" onclick="delete_review('. $data[$i]['faq_id'] .');">
                                                    <i class="icon-docs"></i> Delete</a>
                                            </li>
                                        </ul>
                                    </div>';

        }
        return $data;
    }
    function delete($ids){
        $this->db->where(['faq_id'=>$ids]);
        $this->db->delete('faq');
    }
    function get_sep_review($id){
        $this->db->where(['faq_id'=>$id]);
        $data = $this->db->get('faq');
        return $data;
    }
    function edit_review($new,$id){

        $this->db->where(['faq_id' => $id]);
        $this->db->update('faq',$new);
    }

}