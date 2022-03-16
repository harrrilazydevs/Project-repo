<?php

$_SESSION['theme'] = 'burger_shop';
$_SESSION['logo_path'] = 'src/resources/img/otakulogo.png';
$_SESSION['access_level'] = 'user';
$_SESSION['username'] = 'Admin';
$_SESSION['user_id'] = '1';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>



    

        <?php


        if ($_SESSION['theme'] == 'dental_clinic') {
            echo 'Dental Clinic';
        }

        if ($_SESSION['theme'] == 'burger_shop') {
            echo 'Otaku Burger House';
        }

        ?>




    </title>
    <link rel="stylesheet" href="src/resources/lib/bootstrap/bs.css">
    <link rel="stylesheet" href="src/resources/lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="src/resources/lib/carousel/carousel.css">
    <link rel="stylesheet" href="src/resources/styles/main.css">


    <!-- THEMES -->
    <link rel="stylesheet" href="src/resources/styles/burger_shop.css">
    <link rel="stylesheet" href="src/resources/styles/burger_shop_kd.css">
    <link rel="stylesheet" href="src/resources/styles/dental_clinic.css">
    <script src="src/resources/lib/bootstrap/bs.js"></script>
    <script src="src/resources/lib/jquery/jquery.js"></script>
    <script src="src/resources/lib/carousel/carousel.js"></script>
    <script src="src/resources/lib/jsPdf/html2pdf.js"></script>

</head>

<body>

<input type="hidden" name="" id="txt_user_id" value="<?php echo $_SESSION['user_id'];?>">
<input type="hidden" name="" id="txt_user_access" value="<?php echo $_SESSION['access_level'];?>">




    <!-- CONTENTS -->
    <?php

    if ($_SESSION['theme'] == 'dental_clinic') {
        include_once 'src/pages/dental_clinic/user/navbar.php';
    }
    
    if ($_SESSION['theme'] == 'burger_shop' && $_SESSION['access_level'] == 'user') {
        //DATABASE FUNCTIONS
        include_once 'src/database/burger_shop/db.php';

        // PAGE FUNCTIONS
        include_once 'src/pages/burger_shop/user/navbar.php';
        include_once 'src/pages/burger_shop/user/sidebar.php';
        include_once 'src/pages/burger_shop/user/home.php';
        include_once 'src/pages/burger_shop/user/viewMenu.php';
        include_once 'src/pages/burger_shop/user/modals.php';

        echo '<script src="src/func/burger_shop/main.js"></script>';
        echo '<script src="src/func/burger_shop/user/home.js"></script>';
        echo '<script src="src/func/burger_shop/user/userPages.js"></script>';
        echo '<script src="src/func/burger_shop/user/viewMenu.js"></script>';



        
    }
    else if ($_SESSION['theme'] == 'burger_shop' && $_SESSION['access_level'] == 'admin') {

      


        // PAGE FUNCTIONS
        include_once 'src/pages/burger_shop/admin/navbar.php';
        include_once 'src/pages/burger_shop/admin/sidebar.php';
        include_once 'src/pages/burger_shop/admin/feedback.php';
        include_once 'src/pages/burger_shop/admin/order.php';
        include_once 'src/pages/burger_shop/admin/order_history.php';
        include_once 'src/pages/burger_shop/admin/inventory.php';
        include_once 'src/pages/burger_shop/admin/dashboard.php';
        include_once 'src/pages/burger_shop/admin/modals.php';

        echo '<script src="src/func/burger_shop/main.js"></script>';
        echo '<script src="src/func/burger_shop/admin/feedback.js"></script>';
        echo '<script src="src/func/burger_shop/admin/sidebar.js"></script>';
        echo '<script src="src/func/burger_shop/admin/order.js"></script>';
        echo '<script src="src/func/burger_shop/admin/order_history.js"></script>';
        echo '<script src="src/func/burger_shop/admin/dashboard.js"></script>';

    }
    


    ?>

    <!-- THEMES -->

    <!-- BURGER MACHINE FUNCTIONS -->
    <!-- <script src="src/resources/lib/jquery/jquery.js"></script> -->


    <!-- DENTAL CLINIC FUNCTIONS -->
    <!-- <script src="src/resources/lib/jquery/.js"></script> -->

</body>

</html>