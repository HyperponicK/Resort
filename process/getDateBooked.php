<?php
require('../config/connect.php');

if(isset($_POST['room_id'])){

    $room_id = $_POST['room_id'];

    $result = $mysqli->query("SELECT * FROM `books` WHERE b_status = '0' AND b_room = '$room_id'");

    if ($result->num_rows > 0) {

    $data = [];

    while($item = $result->fetch_object()){
        array_push($data, $item);

    }

    echo json_encode($data);

    }
}





?>