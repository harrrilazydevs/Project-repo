<?php
session_start();
$_SESSION['access_level'] = 'user';
$_SESSION['user_id'] ='';
$_SESSION['username'] = '';

header('location: ../../../../index.php');





?>