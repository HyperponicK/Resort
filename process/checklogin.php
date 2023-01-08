<?php
session_start();

if(isset($_SESSION['userid'])){
    echo "have";
}else{
    echo "not";
}
?>
