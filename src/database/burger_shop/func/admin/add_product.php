<?php
//DATABASE FUNCTIONS
include '../../db.php';

$dir = '../../../uploaded/' . basename($_FILES["picture"]["name"]);

$name = $_POST['name'];
$category = $_POST['category'];
$price = $_POST['price'];
$picture = $dir;

$q = '

        INSERT INTO
                    tbl_products(name,picture,price,category)
        VALUES  ("'.$name.'","'.$picture.'","'.$price.'","'.$category.'")    
          ';


$db = new Database();
$result = $db->update($q);

move_uploaded_file($_FILES["picture"]["tmp_name"], $dir)

?>