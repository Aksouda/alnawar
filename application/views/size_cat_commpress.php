<?php $div = rand(10,100); ?>
<div class="<?php echo $div; ?>" >
<?php
if(count($get_size) != 0){
    ?>
<div class="col-md-12">
    <div class="form-group form-md-line-input form-md-floating-label">
        <label for="form_control_"> Color:</label>
        <select class="form-control product_color edited" style="overflow: scroll;" id="product_color" name="product_color[]" onchange="product_colors(this);" required >
            <option value="null" >Select Color</option>
            <option value="#000000" style="background-color: black; color: white;">Black</option>
            <option value="#008000" style="background-color: rgba(255, 0, 0, 0.4);; color: white;">Multicolor</option>
            <option value="#FF0000" style="background-color: red; color: white;">Red</option>
            <option value="#FFFFFF" style="background-color: white; color: black;">White</option>
            <option value="#A52A2A" style="background-color: brown; color: white;">Brown</option>
            <option value="#808080" style="background-color: grey; color: white;">Grey</option>
            <option value="#FFC0CB" style="background-color: pink; color: white;">Pink</option>
            <option value="#0000FF" style="background-color: blue; color: white;">Blue</option>
            <option value="#4B0082" style="background-color: indigo; color: white;">Indigo</option>
            <option value="#800000" style="background-color: maroon; color: white;">Maroon</option>
            <option value="#EE82EE" style="background-color: violet; color: white;">Violet</option>
            <option value="#FFFF00" style="background-color: yellow; color: white;">Yellow</option>
            <option value="#000080" style="background-color: navy; color: white;">Navy</option>
            <option value="#008000" style="background-color: green; color: white;">Green</option>
            <option value="#90EE90" style="background-color: lightgreen; color: white;">LightGreen</option>
            <option value="#FFA500" style="background-color: orange; color: white;">Orange</option>
            <option value="#F5F5DC" style="background-color: beige; color: black;">Beige</option>
        </select>
        <input type="file" class="form-control" name="image[]" value="">
    </div>
    <script>
    $('#btnAdd-6').removeClass('hide');
</script>
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
                <input type="checkbox" name="cb_<?php echo $siz['size_id']; ?>[]" value="<?php echo $siz['size_id']; ?>">
            </div>
            <div class="col-lg-2"><br>
                <label><?php echo $siz['name']; ?></label>
            </div>
            <div class="col-lg-4"><br>
                <input type="number"class="stock_ke"  min="0" name="<?php echo $siz['size_id']; ?>[]" value="" placeholder="enter product stock">
            </div>
            <div class="col-lg-4"><br>
                <input type="number" name="price_<?php echo $siz['size_id']; ?>[]" min="0" value="" placeholder="Enter Product Price">
            </div>
        </div><br>
    </div>
<?php
}?><a class="remove<?php echo $div; ?> btn blue pull-right" > Remove </a>
    <script>
        $(".remove<?php echo $div; ?>").click(function() {
            $(this).parents('.<?php echo $div; ?>').remove();
        });
    </script>
</div>