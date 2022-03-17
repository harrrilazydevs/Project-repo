<?php
//DATABASE FUNCTIONS
include '../../db.php';
$id = $_GET['id'];
$db = new Database();

$q = '
        SELECT 
                name,
                qty,
                price,
                ref_no
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


$q = '
        SELECT 
                payment_method,
                payment_details,
                payment,
                payment_date

        FROM
                tbl_payments
        WHERE
                order_ref_no ='.$id.';
';

$payment = $db->read($q);


echo json_encode([
        "data"=>$result,
        "total"=>$total,
        "payment"=>$payment,

]);
