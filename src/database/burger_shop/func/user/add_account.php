<?php
//DATABASE FUNCTIONS
include '../../db.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$fullname = $_POST['fullname'];
$address = $_POST['address'];

$q = '

        INSERT INTO
          tbl_users(username,password,email,phone,name,address,access_level)
        VALUES  
          (
            "'.$username.'",
            "'.$password.'",
            "'.$email.'",
            "'.$phone.'",
            "'.$fullname.'",
            "'.$address.'",
            "user")    
          ';


$db = new Database();
$result = $db->update($q);

if(!empty($result)){
  echo '1';
}
else{
  echo '0';
}

?>