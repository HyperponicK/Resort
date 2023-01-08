<?php
require('../config/connect.php');

// print_r($_POST);




   
    $r_name = $_POST['r_name'];
    $room_type = $_POST['room_type'];
    $room_level = $_POST['room_level'];
    $r_price = $_POST['r_price'];

 

        $query = $mysqli->query("INSERT INTO `room` (`r_id`, `r_name`, `r_type`, `r_level`, `r_price`, `r_status`) VALUES (NULL, '$r_name', '$room_type', '$room_level', '$r_price', '0');");
     

        if($query){
                               
            echo "success";
        }else{
            echo "error";
        }

    


    
    

?>