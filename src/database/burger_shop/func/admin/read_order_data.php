<?php
//DATABASE FUNCTIONS
include '../../db.php';
$id = $_GET['id'];
$db = new Database();

$q = '
        SELECT 
                name,
                qty,
                price
        FROM
                tbl_orders a
        INNER JOIN
                tbl_products b
        ON
            a.product_id = b.id
        WHERE
            ref_no ='.$id.';
';


$result = $db->read($q);


$q = '
        SELECT 
                (select sum(b.price)) as "total"
        FROM
                tbl_orders a
        INNER JOIN
                tbl_products b
        ON
            a.product_id = b.id
        WHERE
            ref_no ='.$id.';
';


$total = $db->read($q);



echo json_encode([
        "data"=>$result,
        "total"=>$total
]);


?>