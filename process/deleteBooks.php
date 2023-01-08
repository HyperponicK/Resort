<?php
require('../config/connect.php');

// print_r($_POST);


if(isset($_POST['bid'])){

    $bid = $_POST['bid'];


    $query = $mysqli->query("DELETE FROM `books` WHERE `b_id` = '$bid'");

    if($query){       
              
        echo "success";
    }else{
        echo "error";
    }       
}
?>