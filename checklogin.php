<?php

session_start();
$_SESSION['userid'] = '1';

header('location: index.php');

?>