<?php
require('../config/connect.php');

if(isset($_POST['level'])){

    $type = $_POST['r_type'];
    $level = $_POST['level'];


    $result = $mysqli->query("SELECT * FROM `level` WHERE l_level = '$level' AND l_type = '$type'");

    if ($result->num_rows > 0) {

    $value = $result->fetch_assoc();

    echo $value['l_price'];

    // $data = [];

    // while($item = $result->fetch_object()){
    //     array_push($data, $item);

    // }

    // echo json_encode($data);

    }
}





?>