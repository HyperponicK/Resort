<?php
require('../config/connect.php');

// print_r($_POST);

$nid = $_POST['nid'];
$title = $_POST['title'];
$detail = $_POST['detail'];
$dates = date('Y-m-d');

$a = true;


if(!empty($_FILES['img']['name'])){

    $img_name = $_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];

    $img_exlode = explode('.', $img_name);
    $img_ext = end($img_exlode);

    $extensions = ['png', 'jpeg', 'jpg'];

    if(in_array($img_ext, $extensions) == true){

        $r = time();    
        $new_img_name = "r".$r.".".$img_ext;  

        $a = true;
        $up = move_uploaded_file($tmp_name, "../imgnews/".$new_img_name);          


        $sql = "UPDATE `news` SET `n_name` = '$title', `n_detail` = '$detail', `n_date` = '$dates', `n_img` = '$new_img_name' WHERE `news`.`n_id` = '$nid';";
    }
    else{
        echo "กรุณาเลือกรูปเป็นไฟล์ JPG JPEG PNG";

        $a = false;
    }  
}else{
    $sql = "UPDATE `news` SET `n_name` = '$title', `n_detail` = '$detail', `n_date` = '$dates' WHERE `news`.`n_id` = '$nid';";
   
    $a = true;

}

if($a){

    $query = $mysqli->query($sql);
     
    if($query){
          
        echo "success";
    }else{
        echo "error";
    }
}

?>