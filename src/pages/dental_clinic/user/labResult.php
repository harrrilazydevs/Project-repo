<div class="d-none page" id="page_laboratory_result" style="background-color: white;">
    <?php
    include 'side_bar_1.php';
    ?>
    <div class="lab_result">
        <!-------- MAIN GRID --------->
        <div class="container min-vh-100" style="color: #7B7A7A;">
            <!-- <div class="row title_dashboard">
                <div class="col-lg-12 col-sm-12 mt-sm-5 mb-sm-3">
                    <span class="h3 ms-lg-5" style="letter-spacing: 2px; font-weight: bold;">LABORATORY RESULT</span>
                    <i class="fa-solid fa-gear h3 setting_icon d-lg-none" style="float: right;" data-bs-toggle="offcanvas" data-bs-target="#user_Mobile_Sidebar" aria-controls="offcanvasRight"></i>

                </div>
            </div> -->

            <div class="row title_dashboard">
                <div class="col-lg-12 col-sm-12 mt-lg-3 mt-sm-5 mb-sm-3 mt-xl-5 mt-lg-5">
                    <span class="h2 ms-lg-5 fw-bold" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif;">LABORATORY RESULT</span>
                    <i class="fa-solid fa-gear h3 setting_icon d-lg-none" style="float: right;" data-bs-toggle="offcanvas" data-bs-target="#user_Mobile_Sidebar" aria-controls="offcanvasRight"></i>
                </div>
            </div>
            
            <div class="container mb-lg-2 mt-lg-3 p-5 pt-0">
                <div class="row">
                    <div class="col-lg-12 col-sm-12" >
                        <div class="shadow p-3 mb-5 " style="border: 2px solid black; padding: 10px; border-radius: 12px; box-shadow: 5px 7px #888888 !important;">
                            <img class="icon_btn" src="src/resources/img/labResult.png" style="width: 100px;" data-bs-toggle="modal" data-bs-target="#labResult">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-------- MAIN GRID --------->

        <!-------- NESTED GRID --------->
        <div>
            <?php include 'src/pages/dental_clinic/user/sidebarUser.php'; ?>
        </div>
        <!-------- NESTED GRID --------->
    </div>
</div>