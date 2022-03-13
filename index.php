<?php

$_SESSION['theme'] = 'burger_machine';
$_SESSION['logo_path'] = 'src/resources/img/otakulogo.png';
$_SESSION['access_level'] = 'admin';

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

        if ($_SESSION['theme'] == 'burger_machine') {
            echo 'Burger Machine';
        }

        ?>




    </title>
    <link rel="stylesheet" href="src/resources/lib/bootstrap/bs.css">
    <link rel="stylesheet" href="src/resources/lib/fontawesome/css/all.css">
    <link rel="stylesheet" href="src/resources/lib/carousel/carousel.css">
    <link rel="stylesheet" href="src/resources/styles/main.css">


    <!-- THEMES -->
    <link rel="stylesheet" href="src/resources/styles/burger_machine.css">
    <link rel="stylesheet" href="src/resources/styles/burger_machine_kd.css">
    <link rel="stylesheet" href="src/resources/styles/dental_clinic.css">

</head>

<body>



    <script src="src/resources/lib/bootstrap/bs.js"></script>
    <script src="src/resources/lib/jquery/jquery.js"></script>
    <script src="src/resources/lib/carousel/carousel.js"></script>

    <!-- CONTENTS -->
    <?php

    if ($_SESSION['theme'] == 'dental_clinic') {
        include_once 'src/pages/dental_clinic/user/navbar.php';
    }
    
    if ($_SESSION['theme'] == 'burger_machine' && $_SESSION['access_level'] == 'user') {
        //DATABASE FUNCTIONS
        include_once 'src/database/burger_machine/db.php';

        // PAGE FUNCTIONS
        include_once 'src/pages/burger_machine/user/navbar.php';
        include_once 'src/pages/burger_machine/user/dashboard.php';
        include_once 'src/pages/burger_machine/user/sidebar.php';
        include_once 'src/pages/burger_machine/user/ordering.php';
        include_once 'src/pages/burger_machine/user/home.php';
        include_once 'src/pages/burger_machine/user/viewMenu.php';

        echo '<script src="src/func/burger_machine/main.js"></script>';
        echo '<script src="src/func/burger_machine/user/userPages.js"></script>';
        echo '<script src="src/func/burger_machine/user/viewMenu.js"></script>';

        
    }
    else if ($_SESSION['theme'] == 'burger_machine' && $_SESSION['access_level'] == 'admin') {

      


        // PAGE FUNCTIONS
        include_once 'src/pages/burger_machine/admin/navbar.php';
        include_once 'src/pages/burger_machine/admin/sidebar.php';
        include_once 'src/pages/burger_machine/admin/feedback.php';
        include_once 'src/pages/burger_machine/admin/order.php';
        include_once 'src/pages/burger_machine/admin/inventory.php';

        echo '<script src="src/func/burger_machine/main.js"></script>';
        echo '<script src="src/func/burger_machine/admin/feedback.js"></script>';
        echo '<script src="src/func/burger_machine/admin/sidebar.js"></script>';

    }
    


    ?>

    <!-- THEMES -->

    <!-- BURGER MACHINE FUNCTIONS -->
    <!-- <script src="src/resources/lib/jquery/jquery.js"></script> -->


    <!-- DENTAL CLINIC FUNCTIONS -->
    <!-- <script src="src/resources/lib/jquery/.js"></script> -->

</body>

</html>