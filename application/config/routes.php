<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Front';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['users']='Users';
$route['manage_products']='manage_products';
$route['drivers']='Drivers';
$route['daily_earnings']='DailyDriverEarnings';
$route['view_user/(:num)']='Users/view_users/$1';
$route['view_driver/(:num)']='Drivers/view_driver/$1';
$route['view_booking/(:num)']='Bookings/view_booking/$1';
$route['web_service/(:any)']='WebService/$1';
$route['bookings']='Bookings';
$route['car_type']='Car_Type';
$route['calendar_view']='Calendar_view';
$route['new_booking']='Bookings/newbooking';
$route['delay_reasons']='Delay_Reasons';
$route['login']='Login';
$route['update_settings']='Settings/update_settings';
$route['fix_price_area']='Settings/fix_price_area';
$route['day_time']='Settings/day_time';
$route['update_web_commission']='Settings/update_web_commission';
$route['coupons']='Coupon';
$route['add_coupon']='Coupon/add_coupon';
$route['edit_coupon/(:num)']='Coupon/edit_coupon/$1';
$route['real_time_mapping']='Real_time_mapping';
$route['size']='Size';
$route['Add_size']='Add_Size';
$route['View_Size/(:num)']='Size/View_Size/$1';
$route['Tag']='Tag';
$route['Add_Tag']='Add_Tag';
$route['View_Tag/(:num)']='Tag/View_Tag/$i';
$route['Add_Brand']='Add_Brand';
$route['View_Brand/(:num)']='Brand/View_Brand/$i';
$route['Product']='Product';
$route['Add_Product']='Add_Product';
$route['Terms_And_Conditions']='Terms_And_Conditions';
$route['Contact_us']='Contact_us';
$route['Contact_us']='Contact_us';
$route['View_Product/(:num)']='Product/View_Product/$i';
