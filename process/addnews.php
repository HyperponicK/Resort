<?php
require('../config/connect.php');

// print_r($_POST);


if(!empty($_FILES['img']['name'])){


    $d_now = date('Y-m-d');
    $title = $_POST['title'];
    $detail = $_POST['detail'];

    $img_name = $_FILES['img']['name'];
    $tmp_name = $_FILES['img']['tmp_name'];

    $img_exlode = explode('.', $img_name);
    $img_ext = end($img_exlode);

    $extensions = ['png', 'jpeg', 'jpg'];

    if(in_array($img_ext, $extensions) == true){

 
       $t = time();

    
        $new_img_name = $t.".".$img_ext;

        $query = $mysqli->query("INSERT INTO `news` (`n_id`, `n_name`, `n_detail`, `n_date`, `n_img`) VALUES ('$t', '$title', '$detail', '$d_now', '$new_img_name');");
     

        if($query){
            $up = move_uploaded_file($tmp_name, "../imgnews/".$new_img_name);          
              
            echo "success";
        }else{
            echo "error";
        }

    }
    else{
        echo "กรุณาเลือกรูปเป็นไฟล์ JPG JPEG PNG";
    }     
}
?>