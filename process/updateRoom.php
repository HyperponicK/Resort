<?php
require('../config/connect.php');

// print_r($_POST);

$r_id = $_POST['r_id'];
$r_name = $_POST['r_name'];
$room_type = $_POST['room_type'];
$r_price = $_POST['r_price'];
$room_level = $_POST['room_level'];
$room_status = $_POST['room_status'];


    $query = $mysqli->query("UPDATE `room` SET `r_name` = '$r_name', `r_type` = '$room_type', `r_level` = '$room_level', `r_price` = '$r_price', `r_status` = '$room_status' WHERE `room`.`r_id` = $r_id;");
     
    if($query){
          
        echo "success";
    }else{
        echo "error";
    }

?>