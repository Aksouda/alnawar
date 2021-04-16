<?php
$host="localhost";
$username="root";
$password="";
$db="marketing";

// Create connection
$con=mysqli_connect("localhost","root","","marketing");
$rs=mysqli_query($con,"SELECT * FROM `order_product` WHERE order_id=1");
$result=mysqli_fetch_array($rs);
$order_no=$result['order_id'];
$order_date=$result['create_date'];
$rs_order=mysqli_query($con,"SELECT payment_type,sum(quantity*price) as total_price,user_id,user_name,pincode,city,state,mobile,address1,size_id,quantity,price,product_id FROM `order` where order_id=$order_no LIMIT 1");
$result_order=mysqli_fetch_array($rs_order);
$payment_type=$result_order['payment_type'];
$total_price=$result_order['total_price'];
$user_name=$result_order['user_name'];
$pincode=$result_order['pincode'];
$city=$result_order['city'];
$state=$result_order['state'];
$mobile=$result_order['mobile'];
$address=$result_order['address1'];
if($payment_type == 1)
{
  $payment="online payment";
}
else
{
  $payment="cash on delivery";
}
include('phpinvoice.php');
$invoice = new phpinvoice();
  /* Header Settings */
  $invoice->setLogo("http://173.230.133.9/markeeting/assets/pages/img/logo-big.png");
  $invoice->setColor("#AA3939");
  //$invoice->setType("Sale Invoice");
//  $invoice->setReference("INV-55033645");
  $invoice->setDate(date("d-m-Y", strtotime($order_date)));
  //$invoice->setDue(date('M dS ,Y',strtotime('+3 months')));
  $invoice->setTo(array("Order Number:","$order_no","Order Date","$order_date","Payment Method:","$payment Rs. $total_price"));
  $invoice->setFrom(array("$user_name","$address","$pincode $city","$state","$mobile","tismember1@gmail.com"));
  /* Adding Items in table */
$rs_order_detail=mysqli_query($con,"select * from `order` where order_id=1 order by id DESC");
if(mysqli_num_rows($rs_order_detail) > 0) {
  $i = 0;
  while ($row = mysqli_fetch_array($rs_order_detail))
  {
    $product_id = $row['product_id'];;
    $size_id = $row['size_id'];
    $qty = $row['quantity'];
    $price = $row['price'];
    $total = $qty * $price;
    $rs_product = mysqli_query($con, "SELECT * FROM `product` WHERE id=$product_id");
    $result_product = mysqli_fetch_array($rs_product);
    $product_name = $result_product['name'];
    $product_color = $result_product['product_color'];
    $rs_size = mysqli_query($con, "select * from size WHERE size_id=$size_id");
    $result_size = mysqli_fetch_array($rs_size);
    $size_name = $result_size['name'];

    $invoice->addItem("$product_name", "Color : $product_color , Size : $size_name", $qty, $price, $total);
    $i++;
  }
  //$invoice->addItem('LG 18.5" WLCD',"",10,0,230,0,2300);
  //$invoice->addItem("HP LaserJet 5200","",1,0,1100,0,1100);
  /* Add totals */
  $invoice->addTotal("Total", $total_price);
  //$invoice->addTotal("VAT 21%",1986.6);
  //$invoice->addTotal("Total due",11446.6,true);
  /* Set badge */
  // $invoice->addBadge("Invoice Copy");
  /* Add title */
  //$invoice->addTitle("Important Notice");
  /* Add Paragraph */
  //$invoice->addParagraph("No item will be replaced or refunded if you don't have the invoice with you. You can refund within 2 days of purchase.");
  /* Set footer note */
  // $invoice->setFooternote("My Company Name Here");
  /* Render */
  $invoice->render('billing_pdf/'.$order_no.'_billing'.'.pdf', 'f'); /* I => Display on browser, D => Force Download, F => local path save, S => return document path */
}
else
{
  echo "out";exit;
}
?>