<table class="table">
    <?php if($data[0]['name'] != '' ){  ?>
    <tr>
        <td>
            Product Name
        </td>
        <td>
            <?php echo $data[0]['name']; ?>
        </td>
    </tr>
    <?php } ?>
    <?php if($data[0]['isFormSelected'] == 1 ){  ?>
    <tr>
        <td>
            Engraving :
        </td>
        <td>
            <?php echo "Message Only" ?>
        </td>
    </tr>
    <?php } ?>
    <?php if($data[0]['isFormSelected'] == 2 ){  ?>
    <tr>
        <td>
            Engraving :
        </td>
        <td>
            <?php echo " Images (Free)" ?>
        </td>
    </tr>
    <?php } ?>
    <?php if($data[0]['isFormSelected'] == 3 ){  ?>
    <tr>
        <td>
            Engraving :
        </td>
        <td>
            <?php echo "Message and Image" ?>
        </td>
    </tr>
    <?php } ?>
    <?php if($data[0]['isFormSelected'] == 4 ){  ?>
    <tr>
        <td>
            Engraving :
        </td>
        <td>
            Extra Images
        </td>
    </tr>
    <?php } ?>
    <?php if($data[0]['isFormSelected'] == 5 ){  ?>
    <tr>
        <td>
            Engraving :
        </td>
        <td>
            Message on Both Sides
        </td>
    </tr>
    <?php } ?>
    <?php if($data[0]['quantity'] != '' ){ ?>
    <tr>
        <td>
            Quantity
        </td>
        <td>
            <?php echo $data[0]['quantity'] == 0?$data[0]['Text_quantity']:$data[0]['quantity']; ?>
        </td>
    </tr>
    <?php } ?>
    <?php if($data[0]['size_id'] > 0 ){ ?>
    <tr>
        <td>
            Size :-
        </td>
        <td>
            <?php
                $size_id = isset($this->db->get_where('size', ['size_id' => $data[0]['size_id']])->row()->name)?$this->db->get_where('size', ['size_id' => $data[0]['size_id']])->row()->name:'';
                echo isset($size_id) ? $size_id : 'No Size ';
            ?>
        </td>
    </tr>
    <?php } ?>
    <?php if($data[0]['color'] != '' ){ ?>
    <tr>
        <td>
            Color :-
        </td>
        <td>
            <?php
                echo '<b style="background-color:'.$data[0]['color'].';">'.$data[0]['color'].'</a>';
            ?>
        </td>
    </tr>
    <?php } ?>
    <?php if($data[0]['comment'] != '' ){ ?>
    <tr>
        <td>
            comment
        </td>
        <td>
            <?php echo $data[0]['comment']; ?>
        </td>
    </tr>
    <?php } ?>
    <?php if($data[0]['Text_line_instruction'] != '' ){ ?>
    <tr>
        <td>
            Text line instruction
        </td>
        <td>
            <?php echo $data[0]['Text_line_instruction']; ?>
        </td>
    </tr>
    <?php } ?>
    <?php if($data[0]['Text_comment'] != '' ){ ?>
    <tr>
        <td>
            Text comment
        </td>
        <td>
            <?php echo $data[0]['Text_comment']; ?>
        </td>
    </tr>
    <?php } ?>
    <?php if($data[0]['Text_1'] != '' ){ ?>
        <tr>
            <td>
                Front Side Text 1
            </td>
            <td>
                <?php echo $data[0]['Text_1']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Font_type_1'] != '' ){ ?>
        <tr>
            <td>
                Font Type 1
            </td>
            <td>
                <?php echo $data[0]['Font_type_1']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Text_2'] != '' ){ ?>
        <tr>
            <td>
                Front Side Text 2
            </td>
            <td>
                <?php echo $data[0]['Text_2']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Font_type_2'] != '' ){ ?>
        <tr>
            <td>
                Font Type 2
            </td>
            <td>
                <?php echo $data[0]['Font_type_2']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Text_3'] != '' ){ ?>
        <tr>
            <td>
                Front Side Text 3
            </td>
            <td>
                <?php echo $data[0]['Text_3']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Font_type_3'] != '' ){ ?>
        <tr>
            <td>
                Font Type 3
            </td>
            <td>
                <?php echo $data[0]['Font_type_3']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Text_4'] != '' ){ ?>
        <tr>
            <td>
                Front Side Text 4
            </td>
            <td>
                <?php echo $data[0]['Text_4']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Font_type_4'] != '' ){ ?>
        <tr>
            <td>
                Font Type 4
            </td>
            <td>
                <?php echo $data[0]['Font_type_4']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Text_5'] != '' ){ ?>
        <tr>
            <td>
                Front Side Text 5
            </td>
            <td>
                <?php echo $data[0]['Text_5']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Font_type_5'] != '' ){ ?>
        <tr>
            <td>
                Font Type 5
            </td>
            <td>
                <?php echo $data[0]['Font_type_5']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Text_6'] != '' ){ ?>
        <tr>
            <td>
                Front Side Text 6
            </td>
            <td>
                <?php echo $data[0]['Text_6']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Font_type_6'] != '' ){ ?>
        <tr>
            <td>
                Font Type 6
            </td>
            <td>
                <?php echo $data[0]['Font_type_6']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Text_7'] != '' ){ ?>
        <tr>
            <td>
                Front Side Text 7
            </td>
            <td>
                <?php echo $data[0]['Text_7']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Font_type_7'] != '' ){ ?>
        <tr>
            <td>
                Font Type 7
            </td>
            <td>
                <?php echo $data[0]['Font_type_7']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Text_8'] != '' ){ ?>
        <tr>
            <td>
                Front Side Text 8
            </td>
            <td>
                <?php echo $data[0]['Text_8']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['Font_type_8'] != '' ){ ?>
        <tr>
            <td>
                Font Type 8
            </td>
            <td>
                <?php echo $data[0]['Font_type_8']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Text_1'] != '' ){ ?>
        <tr>
            <td>
                Back Side Text 1
            </td>
            <td>
                <?php echo $data[0]['back_Text_1']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Font_type_1'] != '' ){ ?>
        <tr>
            <td>
                Back Font Type 1
            </td>
            <td>
                <?php echo $data[0]['back_Font_type_1']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Text_2'] != '' ){ ?>
        <tr>
            <td>
                Back Side Text 2
            </td>
            <td>
                <?php echo $data[0]['back_Text_2']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Font_type_2'] != '' ){ ?>
        <tr>
            <td>
                Back Font Type 2
            </td>
            <td>
                <?php echo $data[0]['back_Font_type_2']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Text_3'] != '' ){ ?>
        <tr>
            <td>
                Back Side Text 3
            </td>
            <td>
                <?php echo $data[0]['back_Text_3']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Font_type_3'] != '' ){ ?>
        <tr>
            <td>
                Back Font Type 3
            </td>
            <td>
                <?php echo $data[0]['back_Font_type_3']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Text_4'] != '' ){ ?>
        <tr>
            <td>
                Back Side Text 4
            </td>
            <td>
                <?php echo $data[0]['back_Text_4']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Font_type_4'] != '' ){ ?>
        <tr>
            <td>
                Back Font Type 4
            </td>
            <td>
                <?php echo $data[0]['back_Font_type_4']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Text_5'] != '' ){ ?>
        <tr>
            <td>
                Back Side Text 5
            </td>
            <td>
                <?php echo $data[0]['back_Text_5']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Font_type_5'] != '' ){ ?>
        <tr>
            <td>
                Back Font Type 5
            </td>
            <td>
                <?php echo $data[0]['back_Font_type_5']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Text_6'] != '' ){ ?>
        <tr>
            <td>
                Back Side Text 6
            </td>
            <td>
                <?php echo $data[0]['back_Text_6']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Font_type_6'] != '' ){ ?>
        <tr>
            <td>
                Back Font Type 6
            </td>
            <td>
                <?php echo $data[0]['back_Font_type_6']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Text_7'] != '' ){ ?>
        <tr>
            <td>
                Back Side Text 7
            </td>
            <td>
                <?php echo $data[0]['back_Text_7']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Font_type_7'] != '' ){ ?>
        <tr>
            <td>
                Back Font Type 7
            </td>
            <td>
                <?php echo $data[0]['back_Font_type_7']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Text_8'] != '' ){ ?>
        <tr>
            <td>
                Back Side Text 8
            </td>
            <td>
                <?php echo $data[0]['back_Text_8']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Font_type_8'] != '' ){ ?>
        <tr>
            <td>
                Back Font Type 8
            </td>
            <td>
                <?php echo $data[0]['back_Font_type_8']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Text_comment'] != '' ){ ?>
        <tr>
            <td>
                Back Text Comment
            </td>
            <td>
                <?php echo $data[0]['back_Text_comment']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['back_Text_line_instruction'] != '' ){ ?>
        <tr>
            <td>
                Back Text line instruction
            </td>
            <td>
                <?php echo $data[0]['back_Text_line_instruction']; ?>
            </td>
        </tr>
    <?php } ?>
    <?php /* if($data[0]['back_Text_quantity'] != '' ){ ?>
        <tr>
            <td>
                Back Text Quantity
            </td>
            <td>
                <?php echo $data[0]['back_Text_quantity']; ?>
            </td>
        </tr>
    <?php } */?>
    <?php if($data[0]['image_path'] != '' ){ ?>
        <tr>
            <td>
                Picture 1
            </td>
            <td>
                <a download="<?php echo $data[0]['image_path']; ?>" href="<?php echo base_url('uploads/order/'). $data[0]['image_path']; ?>" title="<?php echo $data[0]['image_path']; ?>">
                <img src="<?php echo base_url('uploads/order/'). $data[0]['image_path']; ?>" height="100" width="100">
                </a>
            </td>
        </tr>
    <?php } ?>
    <?php if($data[0]['image_2_image_path'] != '' ){ ?>
        <tr>
            <td>
                Picture 2
            </td>
            <td>
                <a download="<?php echo $data[0]['image_path']; ?>" href="<?php echo base_url('uploads/order/'). $data[0]['image_2_image_path']; ?>" title="<?php echo $data[0]['image_path']; ?>">
                <img src="<?php echo base_url('uploads/order/'). $data[0]['image_2_image_path']; ?>" height="100" width="100">
                </a>
            </td>
        </tr>
    <?php } ?>
</table>
