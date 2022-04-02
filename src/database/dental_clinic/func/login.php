<?php
session_start();

//DATABASE FUNCTIONS
include '../db.php';

if(!empty($_POST)){


    $username = $_POST['username'];
    $password = $_POST['password'];
    $q = '
    
            SELECT 
                    *
            FROM
                tbl_users a
            LEFT JOIN
                tbl_profile b
            ON
                a.id = b.user_id
            WHERE
                uid ="'.$username.'" 
            AND
                pass = "'.$password.'";
    ';
    
    
    $db = new Database();
    $result = $db->read($q);

    if(count($result)>0){
        $_SESSION['access_level'] = $result[0]['user_access'];
        $_SESSION['user_id'] = $result[0]['id'];
        $_SESSION['username'] = $result[0]['f_name'];
        
        echo 1;

    }
    else{
        echo 0;
    }


}
