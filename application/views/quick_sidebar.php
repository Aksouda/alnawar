<?php
/*$query=mysql_query("SELECT * FROM `user_rate`");

while($row = mysql_fetch_array($query)) {
    echo "<br><br>";
    echo $row['user_id'];
    echo $row['driver_comment'];
    echo $row['driver_id'];
    echo $row['book_id'];
}*/
$con = mysqli_connect("localhost","root","", "markeeting");
?>
<div class="list-group scrollbar-macosx" id="activity_height">
    <?php
    date_default_timezone_set('Asia/Kolkata');
    $query_activity=mysqli_query($con,"SELECT * FROM `activity_stream` ORDER by create_date DESC LIMIT 10");
    $i=0;
    $nestedData='';
    $dataDriver=array();
    $dataUser=array();
    if(mysqli_num_rows($query_activity)>0) {

        $query_activity_users=mysqli_query($con,"SELECT a.*,b.status,b.pickup_area,b.drop_area,d.name,d.image FROM `activity_stream` a INNER JOIN userdetails d ON a.user_id=d.id  LEFT JOIN bookingdetails b ON a.booking_id=b.id WHERE a.user_id IS NOT NULL ORDER by create_date DESC LIMIT 10");
        $query_activity_drivers=mysqli_query($con,"SELECT a.*,b.status,b.pickup_area,b.drop_area,d.name,d.image FROM `activity_stream` a INNER JOIN driver_details d ON a.driver_id=d.id  LEFT JOIN bookingdetails b ON a.booking_id=b.id WHERE a.driver_id IS NOT NULL ORDER by create_date DESC LIMIT 10");
        if(mysqli_num_rows($query_activity_drivers)>0)
        {

            while($row=mysqli_fetch_assoc($query_activity_drivers))
            {
                $dataDriver[]=$row;
            }
        }
        if(mysqli_num_rows($query_activity_users)>0)
        {

            while($row=mysqli_fetch_assoc($query_activity_users))
            {
                $dataUser[]=$row;
            }
        }

    }


    ?>



<a href="javascript:;" class="page-quick-sidebar-toggler">
    <i class="icon-login"></i>
</a>
<div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
    <div class="page-quick-sidebar">
        <ul class="nav nav-tabs">
            <li class="active">
                <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab">Drivers
                    <span class="badge badge-danger">2</span>
                </a>
            </li>
            <li>
                <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Users
                    <span class="badge badge-success">7</span>
                </a>
            </li>

        </ul>
        <div class="tab-content">
            <div class="tab-pane active page-quick-sidebar-chat" id="quick_sidebar_tab_1">
                <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd"
                     data-wrapper-class="page-quick-sidebar-list">
                    <h3 class="list-heading"></h3>
                    <ul class="media-list list-items">
                        <?php foreach ($dataDriver as $data) {

                                                                                if ($data['status'] == '1') {
                                                                                    $nestedData = "<span class='mt-comment-status mt-comment-status-pending pendingColor'>Pending</span>";
                                                                                } else if ($data['status'] == '2') {
                                                                                    $nestedData = "<span class='mt-comment-status mt-comment-status-pending pendingColor'>Waiting</a></span>";
                                                                                } else if ($data['status'] == '3') {
                                                                                    $nestedData = "<span class='mt-comment-status mt-comment-status-accepted acceptedColor'>Accepted</a></span>";
                                                                                } else if ($data['status'] == '4') {
                                                                                    $nestedData = "<span class='mt-comment-status mt-comment-status-rejected cancelColor'>User Cancelled</span>";
                                                                                } else if ($data['status'] == '5') {
                                                                                    $nestedData = "<span class='mt-comment-status mt-comment-status-rejected cancelColor'>Driver Cancelled</span>";
                                                                                } else if ($data['status'] == '6') {
                                                                                    $nestedData = "<span class='mt-comment-status mt-comment-status-rejected cancelColor'>Driver Unavailable</span>";
                                                                                } else if ($data['status'] == '7') {
                                                                                    $nestedData = "<span class='mt-comment-status mt-comment-status-arrived arrivedColor'>Driver Arrived</span>";
                                                                                } else if ($data['status'] == '8') {
                                                                                    $nestedData = "<span class='mt-comment-status mt-comment-status-ontrip ontripColor'>On Trip</span>";
                                                                                } else if ($data['status'] == '9') {
                                                                                    $nestedData = "<span class='mt-comment-status mt-comment-status-approved completedColor'>Completed</span>";
                                                                                }
                            $datetime1 = new DateTime();
                            $datetime2 = new DateTime($data['create_date']);
                            $interval = $datetime1->diff($datetime2);
                            if($interval->format('%y') != 0)
                            {
                                $elapsed = $interval->format('%y years');
                            }
                            elseif($interval->format('%m') != 0 and $interval->format('%y') ==0)
                            {
                                $elapsed = $interval->format('%m months');
                            }
                            elseif($interval->format('%y') ==0 and $interval->format('%m') == 0 and $interval->format('%a') !=0)
                            {
                                $elapsed=$interval->format('%a days');
                            }
                            elseif($interval->format('%m') == 0 and $interval->format('%y') == 0 and $interval->format('%a') ==0 and $interval->format('%h') !=0)
                            {
                                $elapsed = $interval->format('%h hours');
                            }
                            elseif($interval->format('%m') == 0 and $interval->format('%y') == 0 and $interval->format('%a') ==0 and $interval->format('%h') ==0 and $interval->format('%i') !=0)
                            {
                                $elapsed = $interval->format('%i minutes');
                            }
                            elseif($interval->format('%m') == 0 and $interval->format('%y') == 0 and $interval->format('%a') ==0 and $interval->format('%h') ==0 and $interval->format('%i') ==0 and $interval->format('%s') !=0)
                            {
                                $elapsed = $interval->format('%S seconds');
                            }

                         ?>
                        <li class="media">
                            <div class="media-status">
                                <span class="badge badge-success"><?php echo $elapsed; ?> ago</span>
                            </div>
                            <?php $image=($data['image']!=NULL && $data['image']!='') ? "driverimages/".$data['image'] : 'upload/no-image-icon.png' ?>
                            <img class="media-object" src="<?php echo base_url("driverimages/".$data['image']); ?>" alt="...">
                            <div class="media-body">
                                <h4 class="media-heading"><?php echo  $data['name']; ?></h4>
                                <?php if($data["booking_id"]!=NULL) { ?>
                                <div class="media-heading-sub"><?php echo  "From: ".$data['pickup_area']." <br>To: ".$data['drop_area']; ?></div>
                                    <div class="media-heading-sub"><?php echo  $nestedData; ?></div>
                              <?php   } else
                                { ?>
                                    <div class="media-heading-sub"><?php echo  $data['socket_status']; ?></div>
                                <?php }?>

                            </div>
                        </li>
                        <?php } ?>

                    </ul>

                </div>
                <div class="page-quick-sidebar-item">
                    <div class="page-quick-sidebar-chat-user">
                        <div class="page-quick-sidebar-nav">
                            <a href="javascript:;" class="page-quick-sidebar-back-to-list">
                                <i class="icon-arrow-left"></i>Back</a>
                        </div>
                        <div class="page-quick-sidebar-chat-user-messages">
                            <div class="post out">
                                <img class="avatar" alt="" src="assets/layouts/layout/img/avatar3.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:15</span>
                                    <span class="body"> When could you send me the report ? </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="assets/layouts/layout/img/avatar2.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:15</span>
                                    <span class="body"> Its almost done. I will be sending it shortly </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="assets/layouts/layout/img/avatar3.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:15</span>
                                    <span class="body"> Alright. Thanks! :) </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="assets/layouts/layout/img/avatar2.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:16</span>
                                    <span class="body"> You are most welcome. Sorry for the delay. </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="assets/layouts/layout/img/avatar3.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:17</span>
                                    <span class="body"> No probs. Just take your time :) </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="assets/layouts/layout/img/avatar2.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:40</span>
                                    <span class="body"> Alright. I just emailed it to you. </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="assets/layouts/layout/img/avatar3.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:17</span>
                                    <span class="body"> Great! Thanks. Will check it right away. </span>
                                </div>
                            </div>
                            <div class="post in">
                                <img class="avatar" alt="" src="assets/layouts/layout/img/avatar2.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Ella Wong</a>
                                    <span class="datetime">20:40</span>
                                    <span class="body"> Please let me know if you have any comment. </span>
                                </div>
                            </div>
                            <div class="post out">
                                <img class="avatar" alt="" src="assets/layouts/layout/img/avatar3.jpg"/>
                                <div class="message">
                                    <span class="arrow"></span>
                                    <a href="javascript:;" class="name">Bob Nilson</a>
                                    <span class="datetime">20:17</span>
                                    <span class="body"> Sure. I will check and buzz you if anything needs to be corrected. </span>
                                </div>
                            </div>
                        </div>
                        <div class="page-quick-sidebar-chat-user-form">
                            <div class="input-group">
                                <input type="text" class="form-control"
                                       placeholder="Type a message here...">
                                <div class="input-group-btn">
                                    <button type="button" class="btn green">
                                        <i class="icon-paper-clip"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane page-quick-sidebar-chat" id="quick_sidebar_tab_2">
                <div class="page-quick-sidebar-chat-users" data-rail-color="#ddd"
                     data-wrapper-class="page-quick-sidebar-list">
                    <h3 class="list-heading"></h3>
                    <ul class="media-list list-items">
                        <?php foreach ($dataUser as $data) {

                            if ($data['status'] == '1') {
                                $nestedData = "<span class='mt-comment-status mt-comment-status-pending pendingColor'>Pending</span>";
                            } else if ($data['status'] == '2') {
                                $nestedData = "<span class='mt-comment-status mt-comment-status-pending pendingColor'>Waiting</a></span>";
                            } else if ($data['status'] == '3') {
                                $nestedData = "<span class='mt-comment-status mt-comment-status-accepted acceptedColor'>Accepted</a></span>";
                            } else if ($data['status'] == '4') {
                                $nestedData = "<span class='mt-comment-status mt-comment-status-rejected cancelColor'>User Cancelled</span>";
                            } else if ($data['status'] == '5') {
                                $nestedData = "<span class='mt-comment-status mt-comment-status-rejected cancelColor'>Driver Cancelled</span>";
                            } else if ($data['status'] == '6') {
                                $nestedData = "<span class='mt-comment-status mt-comment-status-rejected cancelColor'>Driver Unavailable</span>";
                            } else if ($data['status'] == '7') {
                                $nestedData = "<span class='mt-comment-status mt-comment-status-arrived arrivedColor'>Driver Arrived</span>";
                            } else if ($data['status'] == '8') {
                                $nestedData = "<span class='mt-comment-status mt-comment-status-ontrip ontripColor'>On Trip</span>";
                            } else if ($data['status'] == '9') {
                                $nestedData = "<span class='mt-comment-status mt-comment-status-approved completedColor'>Completed</span>";
                            }
                            $datetime1 = new DateTime();
                            $datetime2 = new DateTime($data['create_date']);
                            $interval = $datetime1->diff($datetime2);
                            if($interval->format('%y') != 0)
                            {
                                $elapsed = $interval->format('%y years');
                            }
                            elseif($interval->format('%m') != 0 and $interval->format('%y') ==0)
                            {
                                $elapsed = $interval->format('%m months');
                            }
                            elseif($interval->format('%y') ==0 and $interval->format('%m') == 0 and $interval->format('%a') !=0)
                            {
                                $elapsed=$interval->format('%a days');
                            }
                            elseif($interval->format('%m') == 0 and $interval->format('%y') == 0 and $interval->format('%a') ==0 and $interval->format('%h') !=0)
                            {
                                $elapsed = $interval->format('%h hours');
                            }
                            elseif($interval->format('%m') == 0 and $interval->format('%y') == 0 and $interval->format('%a') ==0 and $interval->format('%h') ==0 and $interval->format('%i') !=0)
                            {
                                $elapsed = $interval->format('%i minutes');
                            }
                            elseif($interval->format('%m') == 0 and $interval->format('%y') == 0 and $interval->format('%a') ==0 and $interval->format('%h') ==0 and $interval->format('%i') ==0 and $interval->format('%s') !=0)
                            {
                                $elapsed = $interval->format('%S seconds');
                            }

                            ?>
                            <li class="media">
                                <?php $image=($data['image']!=NULL && $data['image']!='') ? "user_image/".$data['image'] : 'upload/no-image-icon.png' ?>
                                <div class="media-status">
                                    <span class="badge badge-success"><?php echo $elapsed; ?> ago</span>
                                </div>
                                <img class="media-object" src="<?php echo base_url($image); ?>" alt="...">
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo  $data['name']; ?></h4>
                                    <?php if($data["booking_id"]!=NULL) { ?>
                                        <div class="media-heading-sub"><?php echo  "From: ".$data['pickup_area']." <br>To: ".$data['drop_area']; ?></div>
                                        <div class="media-heading-sub"><?php echo  $nestedData; ?></div>
                                    <?php   } else
                                    { ?>
                                        <div class="media-heading-sub"><?php echo  $data['socket_status']; ?></div>
                                    <?php }?>

                                </div>
                            </li>
                        <?php } ?>

                    </ul>

                </div>
            </div>
            <div class="tab-pane page-quick-sidebar-settings" id="quick_sidebar_tab_3">
                <div class="page-quick-sidebar-settings-list">
                    <h3 class="list-heading">General Settings</h3>
                    <ul class="list-items borderless">
                        <li> Enable Notifications
                            <input type="checkbox" class="make-switch" checked data-size="small"
                                   data-on-color="success" data-on-text="ON" data-off-color="default"
                                   data-off-text="OFF"></li>
                        <li> Allow Tracking
                            <input type="checkbox" class="make-switch" data-size="small"
                                   data-on-color="info" data-on-text="ON" data-off-color="default"
                                   data-off-text="OFF"></li>
                        <li> Log Errors
                            <input type="checkbox" class="make-switch" checked data-size="small"
                                   data-on-color="danger" data-on-text="ON" data-off-color="default"
                                   data-off-text="OFF"></li>
                        <li> Auto Sumbit Issues
                            <input type="checkbox" class="make-switch" data-size="small"
                                   data-on-color="warning" data-on-text="ON" data-off-color="default"
                                   data-off-text="OFF"></li>
                        <li> Enable SMS Alerts
                            <input type="checkbox" class="make-switch" checked data-size="small"
                                   data-on-color="success" data-on-text="ON" data-off-color="default"
                                   data-off-text="OFF"></li>
                    </ul>
                    <h3 class="list-heading">System Settings</h3>
                    <ul class="list-items borderless">
                        <li> Security Level
                            <select class="form-control input-inline input-sm input-small">
                                <option value="1">Normal</option>
                                <option value="2" selected>Medium</option>
                                <option value="e">High</option>
                            </select>
                        </li>
                        <li> Failed Email Attempts
                            <input class="form-control input-inline input-sm input-small" value="5"/></li>
                        <li> Secondary SMTP Port
                            <input class="form-control input-inline input-sm input-small" value="3560"/>
                        </li>
                        <li> Notify On System Error
                            <input type="checkbox" class="make-switch" checked data-size="small"
                                   data-on-color="danger" data-on-text="ON" data-off-color="default"
                                   data-off-text="OFF"></li>
                        <li> Notify On SMTP Error
                            <input type="checkbox" class="make-switch" checked data-size="small"
                                   data-on-color="warning" data-on-text="ON" data-off-color="default"
                                   data-off-text="OFF"></li>
                    </ul>
                    <div class="inner-content">
                        <button class="btn btn-success">
                            <i class="icon-settings"></i> Save Changes
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
