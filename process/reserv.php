<?php 

// print_r($_POST);


require('../config/connect.php');

if(isset($_POST['r_type'])){

    $uid = $_SESSION['userid'];


    $r_type = $_POST['r_type'];
    $d_start = $_POST['date1'];
    $d_end = $_POST['date2'];
    $level = $_POST['level'];
    $price = $_POST['price'];
    $bed = $_POST['bed'];

    $r_count = $_POST['r_count'];




    if($d_start >= $d_end){

        echo "วันที่ไม่ถูกต้อง";

    }else{

        $chDate = $mysqli->query("SELECT * FROM room WHERE r_type = '$r_type' AND r_level = '$level' AND r_id NOT IN (SELECT b_room FROM books INNER JOIN room ON books.b_room = room.r_id WHERE room.r_type = '$r_type' AND room.r_level = '$level' AND((b_st BETWEEN '$d_start' AND '$d_end') OR (b_end BETWEEN '$d_start' AND '$d_end') OR ('$d_start' BETWEEN b_st AND b_end) OR ('$d_end' BETWEEN b_st AND b_end))) AND r_status = '0'");


        if ($chDate->num_rows > 0) {

            $row = $chDate->fetch_assoc();

            $room_id = $row['r_id'];


            for($i = 0; $i <= count($r_count); $i++ ){

                $query = $mysqli->query("INSERT INTO `books` (`b_id`, `b_uid`, `b_room`, `b_bed`, `b_price`, `b_st`, `b_end`, `b_pay`, `b_status`) VALUES (NULL, '$uid', '$room_id', '$bed', '$price', '$d_start', '$d_end', '', '0');");

                if ($query) {

                        echo "success";

                } else {

                        echo "error";

                }

            }


            // $itemArray = array($row['r_id'] => array(
            //     'room_id'=> $row['r_id'], 
            //     'd_start'=> $d_start,  
            //     'd_end' => $d_end,
            //     'price' => $price)
            // );

            // $found = false;

            // if(!empty($_SESSION["cart_item"])) {


            //     foreach($_SESSION["cart_item"] as $key => $value) {

            //         if($row['r_id'] == $value['room_id']) {

            //             $found= true;
            //             // echo "จองห้องนี้ไว้แล้ว";
            //             break;
            //         }
            //     }

            //     if(!$found) {
            //         /** เพิ่มสินค้าตัวใหม่เข้าไปใน array */
            //         $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);

            //         echo "success";
            //     }


            // } else {
            //     $_SESSION["cart_item"] = $itemArray;

            //     echo "success";

            // }

        }else{
            echo "ห้องเต็ม";

        }
    }
    
}

?>