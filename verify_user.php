<?php
 $this->load->database();
$id=$_GET['id'];
$upd=array(
    'status'=>'1'
);
$this->db->where('u_id',$id);
$this->db->update('app_user',$upd);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Personalised Gifts | Thanks </title>
</head>

<body>
<p>
<div style="width:520px; margin:0px auto; text-align:center">
    <img src="<?php echo base_url();?>uploads/images/slImage.png" height="100" />
    <br />
    <br />
    <img src="<?php echo base_url(); ?>uploads/images/thumbsup.png" width="150px"/>
</div>
<h1 style="text-align:center;color:#060; font-size:55px;">Your account has been Activated.</h1>
<h3><div style="text-align:center; font-size:24px; color:#ee7f00;">Thank you for your registration.</div></h3>
</p>
</body>
</html>


