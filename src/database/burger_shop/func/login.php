<?php
//DATABASE FUNCTIONS
include '../db.php';
session_start();


$username = $_POST['username'];
$password = $_POST['password'];
$q = '

        SELECT 
                *
        FROM
            tbl_users
        WHERE
            username ="'.$username.'" 
        AND
            password = "'.$password.'";
';

$db = new Database();
$result = $db->read($q);
if(count($result)>0){
$_SESSION['access_level'] = $result[0]['access_level'];
$_SESSION['user_id'] = $result[0]['id'];
$_SESSION['username'] = $result[0]['name'];

header('location: index.php');
}


?>