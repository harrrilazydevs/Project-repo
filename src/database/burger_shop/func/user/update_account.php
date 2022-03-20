<?php
//DATABASE FUNCTIONS
include '../../db.php';

$id = $_POST['id'];
$username = $_POST['username'];
$password = $_POST['password'];
$phone = $_POST['phone'];
$name = $_POST['name'];
$email = $_POST['email'];

$q = '

        UPDATE
            tbl_users
        SET
            username="'.$username.'",
            password="'.$password.'",
            phone="'.$phone.'",
            name="'.$name.'",
            email="'.$email.'"
        WHERE
            id= '.$id;


$db = new Database();
$result = $db->update($q);

echo json_encode($result);


?>