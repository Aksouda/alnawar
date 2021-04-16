<div class="modal-content">
    <div class="modal-header" style="background-color: #00bcd4" >
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title"><?php echo $data[0]['name']; ?></h4>
    </div>
    <div class="modal-body">
        <img class="img-responsive" src="<?php echo base_url('uploads/product/').$data[0]['image'];?>" >
        <hr class="hr" >
        <table class="table" >
            <tr>
                <td> Price </td>
                <td> <?php echo  $data[0]['price']; ?> </td>
            </tr>
            <tr>
                <td> Stock </td>
                <td><?php echo $data[0]['stock']; ?> </td>
            </tr>
        </table>
        <hr class="hr" >
        <table class="table" >
            <tr>
                <td> Category </td>
                <td> <span class="label label-success"><?php echo  $cat[0]['name'];?></span> </td>
            </tr>
            <tr>
                <td> Type </td>
                <td> <?php
                    if($data[0]['draft'] == 1){
                        echo '<a class="label label-default">Draft</a>';
                    }
                    else{
                        echo '<a class="label label-success">Publish</a>';
                    }
                    ?> </td>
            </tr>
            <tr>
                <td>Status</td>
                <td><?php
                    if($data[0]['status'] == 'READY STOCK') {
                        echo '<a class="label label-success">AVAILABLE</a>';
                    }
                    elseif ($data[0]['status'] == 'SUSPEND') {
                        echo  '<a class="label label-danger">SUSPEND</a>';
                    }
                    elseif ($data[0]['status'] == 'OUT OF STOCK'){
                        echo  '<a class="label label-default">OUT OF STOCK</a>';
                    }
                    ?></td>
            </tr>
        </table>
        <hr class="hr" >
        <table class="table" >
            <tr>
                <td> Created At </td>
                <td> <?php echo  $data[0]['created_at']; ?> </td>
            </tr>
            <tr>
                <td> Last Update </td>
                <td><?php echo isset($data[0]['last_update'])?$data[0]['last_update']:'-'; ?> </td>
            </tr>
        </table>
        <hr>
        <?php if(!empty($imgs)): ?>
        <div><b>Images</b></div>
        <span>
            <?php
            foreach ($imgs as $img){
                echo '<img class="laksjs" src="'.base_url('uploads/product/').$img['name'].'" >';
            }
            ?>
        </span>
        <?php endif; ?>
        <?php if(!empty($data[0]['description'])): ?>
        <hr>
        <div><b>Description</b></div>
        <span>
            <?php echo $data[0]['description']; ?>
        </span>
        <?php endif; ?>
        <style>
            .laksjs {
                height: 100px;
                width: 100px;
                padding: 10px;
            }
            .hr{
                border: 0.001px solid #5cd1db;
            }
        </style>

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
</div>