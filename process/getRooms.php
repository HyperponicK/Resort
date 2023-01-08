<?php
require('../config/connect.php');


// print_r($_POST);


    $out = '';

    $room_type = $_POST['r_type'];
    $level = $_POST['level'];


    
    $d_start = $_POST['t-start'];
    $d_end = $_POST['t-end'];


    $_SESSION['chIn'] = $d_start;
    $_SESSION['chOut'] = $d_end;
    $_SESSION['level'] = $level;



    if($room_type == 0 && $level == 0){
        // $result = $mysqli->query("SELECT r_id,r_name,room_type.t_name FROM room INNER JOIN room_type ON room.r_type = room_type.t_id WHERE r_id NOT IN (SELECT b_room FROM books WHERE (b_st BETWEEN '$d_start' AND '$d_end') OR (b_end BETWEEN '$d_start' AND '$d_end') OR ('$d_start' BETWEEN b_st AND b_end) OR ('$d_end' BETWEEN b_st AND b_end)) GROUP BY r_type;");

        // $result = $mysqli->query("SELECT t_id,t_name,t_img FROM room_type WHERE t_id NOT IN (SELECT b_room_type FROM books WHERE (b_st BETWEEN '$d_start' AND '$d_end') OR (b_end BETWEEN '$d_start' AND '$d_end') OR ('$d_start' BETWEEN b_st AND b_end) OR ('$d_end' BETWEEN b_st AND b_end))");

        $result = $mysqli->query("SELECT COUNT(r_type),r_type,room_type.t_name,room_type.t_img,room_type.t_id,room_type.t_detail FROM room INNER JOIN room_type ON room.r_type = room_type.t_id WHERE r_id NOT IN (SELECT b_room FROM books WHERE (b_st BETWEEN '$d_start' AND '$d_end') OR (b_end BETWEEN '$d_start' AND '$d_end') OR ('$d_start' BETWEEN b_st AND b_end) OR ('$d_end' BETWEEN b_st AND b_end)) AND r_status = '0' GROUP BY r_type");
    
    }else if($room_type != 0 && $level == 0){

        $result = $mysqli->query("SELECT COUNT(r_type),r_type,room_type.t_name,room_type.t_img,room_type.t_id,room_type.t_detail FROM room INNER JOIN room_type ON room.r_type = room_type.t_id WHERE r_id NOT IN (SELECT b_room FROM books WHERE (b_st BETWEEN '$d_start' AND '$d_end') OR (b_end BETWEEN '$d_start' AND '$d_end') OR ('$d_start' BETWEEN b_st AND b_end) OR ('$d_end' BETWEEN b_st AND b_end)) AND r_type = '$room_type' AND r_status = '0' GROUP BY r_type");

    }
    else if($room_type == 0 && $level != 0){

        $result = $mysqli->query("SELECT COUNT(r_type),r_type,room_type.t_name,room_type.t_img,room_type.t_id,room_type.t_detail FROM room INNER JOIN room_type ON room.r_type = room_type.t_id WHERE r_id NOT IN (SELECT b_room FROM books WHERE (b_st BETWEEN '$d_start' AND '$d_end') OR (b_end BETWEEN '$d_start' AND '$d_end') OR ('$d_start' BETWEEN b_st AND b_end) OR ('$d_end' BETWEEN b_st AND b_end)) AND r_level = '$level' AND r_status = '0' GROUP BY r_type");

    }
    else{

        $result = $mysqli->query("SELECT COUNT(r_type),r_type,room_type.t_name,room_type.t_img,room_type.t_id,room_type.t_detail FROM room INNER JOIN room_type ON room.r_type = room_type.t_id WHERE r_id NOT IN (SELECT b_room FROM books WHERE (b_st BETWEEN '$d_start' AND '$d_end') OR (b_end BETWEEN '$d_start' AND '$d_end') OR ('$d_start' BETWEEN b_st AND b_end) OR ('$d_end' BETWEEN b_st AND b_end)) AND r_type = '$room_type' AND r_level = '$level' AND r_status = '0' GROUP BY r_type");
    }


    if ($result->num_rows > 0) {

    while($value = $result->fetch_assoc()){

        $out .= '<div class="col">
        <div class="card">
            <a href="reserve.php?room_type='.$value['t_id'].'&&count='.$value['COUNT(r_type)'].'">
                <img src="imgroom/'.$value['t_img'].'" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
                <a href="reserve.php?room_type='.$value['t_id'].'&&count='.$value['COUNT(r_type)'].'" class="text-decoration-none">
                    <h5 class="card-title">'.$value['t_name'].' ('.$value['COUNT(r_type)'].')</h5>
                </a>
                <p class="card-text overflow-hidden" style="max-height: 50px;">'.$value['t_detail'].'</p>

                <a href="reserve.php?room_type='.$value['t_id'].'&&count='.$value['COUNT(r_type)'].'" class="btn btn-primary">จองเลย</a>
            </div>
        </div>
    </div>'; 
   
    }   

    echo $out;   

    }
    else{
        echo "ไม่มี";
    }






?>