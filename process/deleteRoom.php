<?php
require('../config/connect.php');

// print_r($_POST);


if(isset($_POST['rid'])){

    $rid = $_POST['rid'];


    $query = $mysqli->query("DELETE FROM `room` WHERE `room`.`r_id` = '$rid'");

    if($query){       
              
        echo "success";
    }else{
        echo "error";
    }       
}
?>