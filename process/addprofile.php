<?php
require('../config/connect.php');

print_r($_POST);


// if(isset($_POST['fname'])){

//     $fname = $_POST['fname'];
//     $lname = $_POST['lname'];
//     $tel = $_POST['tel'];
//     $email = $_POST['email'];
//     $pass1 = $_POST['pass1'];


//     $result = $mysqli->query("SELECT * FROM member WHERE m_email = '$email'");

//     if ($result->num_rows > 0) {
    
//         $query = $mysqli->query("INSERT INTO `member` (`m_id`, `m_name`, `m_lastname`, `m_tel`, `m_email`, `m_pass`) VALUES (NULL, '$fname', '$lname', '$tel', '$email', '$pass1');");

//         if ($query) {
//             echo "success";
//         }else{
//             echo "error";
//         }
//     }
//     else{
//         echo "อีเมลล์นี้ถูกใช้ไปแล้ว";
//     }  

    
// }
?>

