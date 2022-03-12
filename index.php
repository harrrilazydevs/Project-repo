<?php

$_SESSION['theme'] = 'burger_machine';
$_SESSION['logo_path'] = 'src/resources/img/logo.png';
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
    <link rel="stylesheet" href="src/resources/styles/main.css">


    <!-- THEMES -->
    <link rel="stylesheet" href="src/resources/styles/burger_machine.css">
    <link rel="stylesheet" href="src/resources/styles/dental_clinic.css">

</head>

<body>



    <!-- CONTENTS -->
    <?php

    if ($_SESSION['theme'] == 'dental_clinic') {
        include_once 'src/pages/dental_clinic/user/navbar.php';
    }
    
    if ($_SESSION['theme'] == 'burger_machine' && $_SESSION['access_level'] == 'user') {
        include_once 'src/pages/burger_machine/user/navbar.php';
        include_once 'src/pages/burger_machine/user/dashboard.php';
        include_once 'src/pages/burger_machine/user/ordering.php';
        include_once 'src/pages/burger_machine/user/sidebar.php';
    }
    else if ($_SESSION['theme'] == 'burger_machine' && $_SESSION['access_level'] == 'admin') {
        include_once 'src/pages/burger_machine/admin/navbar.php';
    }
    


    ?>











    <script src="src/resources/lib/bootstrap/bs.js"></script>
    <script src="src/resources/lib/jquery/jquery.js"></script>

    <!-- THEMES -->

    <!-- BURGER MACHINE FUNCTIONS -->
    <!-- <script src="src/resources/lib/jquery/jquery.js"></script> -->


    <!-- DENTAL CLINIC FUNCTIONS -->
    <!-- <script src="src/resources/lib/jquery/.js"></script> -->

</body>

</html>