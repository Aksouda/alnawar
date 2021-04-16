<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>

if($pageNo==0)
{
$pageNo=1;
}

$offset=($pageNo-1)*10;
$Data['filter1']=$this->users->completed($id,$offset);
$html = '<div class="mt-comments user-bookings">';
    if(!empty($Data['filter1']) && count($Data['filter1']) > 0 )
    {
    $count = count($Data['filter1']);
    $pages=ceil($count/10);
    foreach($Data['filter1'] as $booking)
    {

    $html .='<div class="mt-comment">
        <div class="mt-comment-img">
            <img src='.base_url('assets/ride.png').'
            height="30" width="30"/></div>
        <div class="mt-comment-body">
            <div class="mt-comment-info">
                <span class="mt-comment-author">Booking-id:'.$booking['bookingid'].'</span>
                <span class="mt-comment-date">'.date('d M,h:i a', strtotime($booking['pickup_date_time'])).'</span>
            </div>
            <div class="mt-comment-text">
                <div class="addresses">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6 col-md-12">
                            <div class="from-address">
                                <p class="job-address">
                                    <span>From -</span><i
                                            class="icon-pointer"></i>'.$booking['pickup_area'].'
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 col-md-12 v-seprator">
                            <div class="to-address">
                                <p class="job-address">
                                    <span>To -</span><i
                                            class="icon-pointer"></i>'.$booking['drop_area'].'
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-comment-details">';
                if ($booking["status"] == '1') {
                $nestedData = "<span class='mt-comment-status mt-comment-status-pending'>Pending</span>";
                } else if ($booking['status'] == '2') {
                $nestedData = "<span class='mt-comment-status mt-comment-status-pending'>Waiting</a></span>";
                } else if ($booking['status'] == '3') {
                $nestedData = "<span class='mt-comment-status mt-comment-status-accepted'>Accepted</a></span>";
                } else if ($booking['status'] == '4') {
                $nestedData = "<span class='mt-comment-status mt-comment-status-rejected'>User Cancelled</span>";
                } else if ($booking['status'] == '5') {
                $nestedData = "<span class='mt-comment-status mt-comment-status-rejected'>Driver Cancelled</span>";
                } else if ($booking['status'] == '6') {
                $nestedData = "<span class='mt-comment-status mt-comment-status-rejected'>Driver Unavailable</span>";
                } else if ($booking['status'] == '7') {
                $nestedData = "<span class='mt-comment-status mt-comment-status-arrived'>Driver Arrived</span>";
                } else if ($booking['status'] == '8') {
                $nestedData = "<span class='mt-comment-status mt-comment-status-ontrip'>On Trip</span>";
                } else if ($booking['status'] == '9') {
                $nestedData = "<span class='mt-comment-status mt-comment-status-approved'>Completed</span>";
                }
                $html .= $nestedData;
                $html .='<ul class="mt-comment-actions">
                    <!--
                    <li>
                        <a href="#">Quick Edit</a>
                    </li>
                    -->
                    <li>
                        <a href="#"><b>Read More</b></a>
                    </li>
                    <!--
                    <li>
                        <a href="#">Delete</a>
                    </li>
                    -->
                </ul>
            </div>
        </div>
    </div>';
    }
    for ($i=1;$i<=$pages;$i++)
    {
    $html .='<a data-page="'.$i.'"  class="filter1">'.$i.'</a>';
    }

    }
    else
    {
    $html = '<div class="mt-comment">
        <div class="mt-comment-body">
            <div class="mt-comment-details">
                <span> No records found for Completed</span>
            </div>
        </div></div>';
    }
    ?>
<?php
$html .='</div></div>';