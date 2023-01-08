<?php
require('../config/connect.php');

// print_r($_POST);


if(isset($_POST["cid"])){


    
    $cid = $_POST['cid'];
    $query = $mysqli->query("DELETE FROM `member` WHERE `m_id` ='$cid'");
     

    if($query){
                  
          
        echo "success";
    }else{
        echo "error";
    }

    
    
    
}
?>