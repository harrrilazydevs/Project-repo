<?php
//DATABASE FUNCTIONS
include '../../db.php';

$q = '
        SELECT 
                *
        FROM
            tbl_available_appointments
        WHERE
            date = "'.date('y-m-d').'"

';
$db = new Database();
$result = $db->read($q);

echo json_encode($result);
