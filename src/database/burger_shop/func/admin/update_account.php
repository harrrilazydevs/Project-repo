<?php
//DATABASE FUNCTIONS
include '../../db.php';

$id = $_GET['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$access_level = $_POST['access_level'];

$q = '

        UPDATE
            tbl_users
        SET
            username="'.$username.'",
            password="'.$password.'",
            email="'.$email.'",
            phone="'.$phone.'",
            access_level="'.$access_level.'"
        WHERE
            id= '.$id;


$db = new Database();
$result = $db->update($q);

echo json_encode($result);


?>