<?php

/**
 * Created by PhpStorm.
 * User: tisyash
 * Date: 12/7/17
 * Time: 2:46 PM
 */
class Crop_my_image extends CI_Controller
{
    public function index()
    {
        $this->load->view('crop_image');
    }
    public function crop_and_move($func = null)
    {
        if($func == 'cat'){
            $frount_loc = './uploads/category/';
            $size_w = 675;
            $size_h = 580;
        }
        elseif ($func == 'pro'){
            $frount_loc = './uploads/product/';
            $size_w = 880;
            $size_h = 1001;
        }
        else{
            $frount_loc = './uploads/pic_crop/';
            $size_w = 500;
            $size_h = 600;
        }
        $up_name = 'uploads/tmp_send/' . $_POST['name'];
        $new_path = $frount_loc.'new_'.$_POST['name'];
        $sqare = array(
            'x'=>$_POST['x'],
            'y'=>$_POST['y'],
            'w'=>$_POST['w'],
            'h'=>$_POST['h']
        );
        $type = explode('.',$_POST['name'])[1];
        if($type == 'jpg' OR $type == 'jpeg' ) {
                $image = imagecreatefromjpeg($up_name);
                $crop = imagecreatetruecolor($size_w,$size_h);
                //imagecopy($crop, $image, 0, 0, $sqare['x'], $sqare['y'], $sqare['w'], $sqare['h']);
                imagecopyresampled($crop, $image, 0, 0, $sqare['x'], $sqare['y'], $size_w,$size_h, $sqare['w'], $sqare['h']);
                imagejpeg($crop, $new_path);
                echo $new_path;
            }
            elseif ($type == 'png'){
                $image = imagecreatefrompng($up_name);
                $crop = imagecreatetruecolor($size_w,$size_h);
                //imagecopy($crop, $image, 0, 0, $sqare['x'], $sqare['y'], $sqare['w'], $sqare['h']);
                imagecopyresampled($crop, $image, 0, 0, $sqare['x'], $sqare['y'], $size_w,$size_h, $sqare['w'], $sqare['h']);
                imagepng($crop, $new_path);
                echo $new_path;
            }
            else{
                echo $type;
            }
        unlink($up_name);
    }

    public function do_upload($func = null)
    {
        if($func != null){
            if($func == 'cat'){
                $name = time() . $_FILES['img']['name'];
                $tmp_name = $_FILES['img']['tmp_name'];
                move_uploaded_file($tmp_name, './uploads/tmp_send/' . $name);
                echo $name;
            }
            if($func == 'pro'){
                $name = time() . $_FILES['primary_image']['name'];
                $tmp_name = $_FILES['primary_image']['tmp_name'];
                move_uploaded_file($tmp_name, './uploads/tmp_send/' . $name);
                echo $name;
            }
        }
        else {
            $name = time() . $_FILES['fileinput']['name'];
            $tmp_name = $_FILES['fileinput']['tmp_name'];
            move_uploaded_file($tmp_name, './uploads/tmp_send/' . $name);
            echo $name;
        }
    }
}