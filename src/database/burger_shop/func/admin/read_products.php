<?php
//DATABASE FUNCTIONS
include '../../db.php';


$q = '
        SELECT 
                name,
                category,
                picture,
                price
        FROM
                tbl_products;
';

$db = new Database();
$result = $db->read($q);

echo json_encode($result);
