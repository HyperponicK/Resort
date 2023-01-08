<?php
require('../config/connect.php');

// print_r($_POST);


if(isset($_POST['userid'])){

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $tel = $_POST['tel'];
    $pass1 = $_POST['pass1'];

    $userid = $_POST['userid'];

    $result = $mysqli->query("SELECT * FROM member WHERE m_id = '$userid' AND m_pass = '$pass1'");

    if ($result->num_rows > 0) {
    
        $query = $mysqli->query("UPDATE `member` SET `m_name` = '$fname', `m_lastname` = '$lname', `m_tel` = '$tel' WHERE `member`.`m_id` = '$userid';");

        if ($query) {
            echo "success";
        }else{
            echo "error";
        }
    }
    else{
        echo "รหัสผ่านไม่ถูกต้อง";
    }  

    
}





?>