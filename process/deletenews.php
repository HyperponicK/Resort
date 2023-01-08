<?php
require('../config/connect.php');

// print_r($_POST);


if(isset($_POST["nid"])){


    
    $nid = $_POST['nid'];
    $query = $mysqli->query("DELETE FROM `news` WHERE `n_id` ='$nid'");
     

    if($query){
                  
          
        echo "success";
    }else{
        echo "error";
    }

    
    
    
}
?>