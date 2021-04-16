<style>
    .modal .modal-dialog { width: 60%; }
</style>
<table class="table table-bordered">
    <tr>
        <td>Buyer Name :</td>
        <td><?php echo $data[0]['user_name']; ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $data[0]['email']; ?></td>
    </tr>
    <tr>
        <td>Phone</td>
        <td><?php echo $data[0]['mobile']; ?></td>
    </tr>
    <tr>
        <td>Address</td>
        <td><?php echo $data[0]['address1']; ?><br><?php echo $data[0]['address2']; ?></td>
    </tr>
    <tr>
        <td>Status</td>
        <td><a class="" ><?php
                $status_now = $this->db->get_where('order_product',['order_id'=> $data[0]['order_id']])->row()->status;
                switch ($status_now){
                    case '0':
                        echo '<span class="label label-default" >WAITING</span>';
                        break;
                    case "1":
                        echo  '<span class="label label-success" >PROCESSED</span>';
                        break;
                    case "2":
                        echo '<span class="label label-danger" >CANCEL</span>';
                        break;
                }
                ?></a></td>
    </tr>
    <tr>
        <td>Total Fees</td>
        <td><?php echo $data[0]['price'];?></td>
    </tr>
    <tr>
        <td>Order Date</td>
        <td><?php echo $data[0]['created_at'];?></td>
    </tr>
    <tr>
        <td>Last Update</td>
        <td><?php echo $data[0]['last_update'];?></td>
    </tr>
    <tr>
        <td>Comment</td>
        <td><?php echo $data[0]['comment'];?></td>
    </tr>
</table>
<h3>List Product Order :</h3>
<div id="cartlist" >
<table class="table table-bordered"  >
    <tr >
        <td>No.</td>
        <td>Product</td>
        <td>Product Item</td>
        <td>Amount</td>
        <td>Price Total</td>
    </tr>
    <?php
    $x = 0;
    $plus = 0;
    $rows = $cartlist->num_rows();
    $cartlist = $cartlist->result_array();
    while ($x < ($rows)){
            $qun = $cartlist[$x]['quantity'] != 0?$cartlist[$x]['quantity']:$cartlist[$x]['Text_quantity'];
            $item_total = $qun*$cartlist[$x]['price'];
        $plus = $plus +$item_total;
        ?>
        <tr>
            <td><?php echo $x;?></td>
            <td><?php echo $cartlist[$x]['name'];?></td>
            <td><?php echo $qun; ?></td>
            <td><?php echo $cartlist[$x]['price'];?></td>
            <td><?php echo $item_total.' '.$cur;?></td>
        </tr>
        <?php
        $x++;
    }
    ?>
    <tr>
        <td colspan="4">Total </td>
        <td><?php echo $plus . ' '.$cur; ?> </td>
    </tr>
    <tr>
        <td colspan="4">Tax (<?php echo tax_rate_order;?>%) </td>
        <td><?php echo ($plus*tax_rate_order/100) . ' '.$cur; ?> </td>
    </tr>
    <tr>
        <td colspan="4">Total After Tax</td>
        <td><?php echo (($plus*tax_rate_order/100)+$plus) . ' '.$cur; ?> </td>
    </tr>
</table>
</div>
<span style="color: #999999 !important; font-size: 16px;margin-top: 19px;" >* This tax may different with your current tax, this tax calculate when buyer submit order</span>
<div class="btn " style="background-color:yellow;width: 100%;" data-dismiss="modal" onclick="place_one(<?php echo $data[0]['order_id'];?>);">Process Order</div>