<?php
require('../config/connect.php');

// print_r($_POST);


    $userid = $_POST['m_id'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
 
    $tel = $_POST['tel'];
    $pass1 = $_POST['pass1'];



        

  

    if($pass1==''){
        $sql="UPDATE `member` SET `m_name` = '$fname', `m_lastname` = '$lname', `m_tel` = '$tel'   WHERE `member`.`m_id` = '$userid';";
    }else{
        $sql="UPDATE `member` SET `m_name` = '$fname', `m_lastname` = '$lname', `m_tel` = '$tel', `m_pass` = '$pass1' WHERE `member`.`m_id` = '$userid';";
    }


    
        $query = $mysqli->query($sql);

        if ($query) {
            echo "success";
        }else{
            echo "error";
        }









?>