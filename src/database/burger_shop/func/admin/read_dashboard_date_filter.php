<?php
//DATABASE FUNCTIONS
include '../../db.php';


$q = '

        SELECT 
                distinct(order_date)
        FROM
                tbl_orders;
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);


?>