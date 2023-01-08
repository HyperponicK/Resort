<?php
session_start();
// ติดต่อฐานข้อมูล

$host="localhost"; 

$username="6012231024";  

$password="1024";    

$database="6012231024";      

$mysqli = new mysqli( $host, $username, $password, $database );

if ($mysqli->connect_errno) {

    echo $mysqli->connect_error;

    exit;

}

$mysqli->set_charset('utf8');

?>