<?php $div = rand(10,100); ?>
<div class="<?php echo $div; ?>" >
    <?php
    if(count($get_size) != 0){
    ?>
    <div class="col-md-12">
        <div class="form-group form-md-line-input form-md-floating-label">
            <label for="form_control"> Color:</label>
            <select class="form-control product_color edited" style="overflow: scroll;" id="product_color" name="product_color[]" onchange="product_colors(this.value);" requi#FF0000 >
                <option>Select Color</option>
                <option value="#000000" style="background-color: #000000; color: #FFFFFF;" <?php echo $color == '#000000'?'selected':'';?> >Black</option>
                <option value="#008000" style="background-color: rgba(255, 0, 0, 0.4);; color: #FFFFFF;" <?php echo $color == '#008000'?'selected':'';?> >Multicolor</option>
                <option value="#FF0000" style="background-color: #FF0000; color: #FFFFFF;" <?php echo $color == '#FF0000'?'selected':'';?> >Red</option>
                <option value="#FFFFFF" style="background-color: #FFFFFF; color: black;" <?php echo $color == '#FFFFFF'?'selected':'';?>>White</option>
                <option value="#A52A2A" style="background-color: brown; color: white;" <?php echo $color == '#A52A2A'?'selected':'';?> >Brown</option>
                <option value="#808080" style="background-color: grey; color: white;" <?php echo $color == '#808080'?'selected':'';?> >Grey</option>
                <option value="#FFC0CB" style="background-color: pink; color: white;" <?php echo $color == '#FFC0CB'?'selected':'';?> >Pink</option>
                <option value="#0000FF" style="background-color: blue; color: white;" <?php echo $color == '#0000FF'?'selected':'';?>>Blue</option>
                <option value="#4B0082" style="background-color: indigo; color: white;" <?php echo $color == '#4B0082'?'selected':'';?>>Indigo</option>
                <option value="#800000" style="background-color: maroon; color: white;" <?php echo $color == '#800000'?'selected':'';?> >Maroon</option>
                <option value="#EE82EE" style="background-color: violet; color: white;" <?php echo $color == '#EE82EE'?'selected':'';?>>Violet</option>
                <option value="#FFFF00" style="background-color: yellow; color: white;" <?php echo $color == '#FFFF00'?'selected':'';?> >Yellow</option>
                <option value="#000080" style="background-color: navy; color: white;" <?php echo $color == '#000080'?'selected':'';?>>Navy</option>
                <option value="#008000" style="background-color: green; color: white;" <?php echo $color == '#008000'?'selected':'';?>>Green</option>
                <option value="#90EE90" style="background-color: lightgreen; color: white;" <?php echo $color == '#90EE90'?'selected':'';?>>LightGreen</option>
                <option value="#FFA500" style="background-color: orange; color: white;" <?php echo $color == '#FFA500'?'selected':'';?> >Orange</option>
                <option value="#F5F5DC" style="background-color: beige; color: black;" <?php echo $color == '#F5F5DC'?'selected':'';?> >Beige</option>
            </select>
            <div class="col-md-6">
            <input type="file" class="form-control" name="image[]" value="">
            <input type="hidden" class="form-control" name="image_name_old[]" value="<?php echo $images_size; ?>">
            </div>
            <div class="col-md-6">
                <?php if($images_size != 'null'){ ?>
            <span class="glyphicon glyphicon-picture" onclick="immg_view_size_view('<?php echo base_url('uploads/product/size_image/').$images_size; ?>');"></span>
                <?php } ?>
            </div>
        </div>
        <?php
        }else{
            echo 'NO size For This Category ';
            echo '<script>$(\'#btnAdd-6\').addClass(\'hide\');</script>';
        }
        $x = 0;
        foreach ($get_size as $siz){
            ?>
            <div class="col-lg-12 col-md-12">
                <div>
                    <div class="col-lg-1"><br>
                        <input type="checkbox" name="cb_<?php echo $siz['size_id']; ?>[]" value="<?php echo $siz['size_id']; ?>" <?php echo in_array($siz['size_id'],$size_id_list)?'checked':''; ?> >
                    </div>
                    <div class="col-lg-2"><br>
                        <label><?php echo $siz['name']; ?></label>
                    </div>
                    <div class="col-lg-4"><br>
                        <input type="number" class="stock_ke" min="0" name="<?php echo $siz['size_id']; ?>[]" placeholder="enter product stock" value="<?php echo in_array($siz['size_id'],$size_id_list)?$pro_stock[$siz['size_id']]:''; ?>">
                    </div>
                    <div class="col-lg-4"><br>
                        <input type="number" name="price_<?php echo $siz['size_id']; ?>[]" min="0" value="<?php echo in_array($siz['size_id'],$size_id_list)?$pro_price[$siz['size_id']]:''; ?>" placeholder="Enter Product Price">
                    </div>
                </div><br>
            </div>
            <?php
        }?><a class="remove<?php echo $div; ?> btn blue pull-right" > Remove </a>
        <script>
            $(".remove<?php echo $div; ?>").click(function() {
                $('.delete_action').append("<input type='hidden' name='delete_ac[]' value='<?php echo $color; ?>' >");
                $(this).parents('.<?php echo $div; ?>').remove();
            });
        </script>
    </div>