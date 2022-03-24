<div class=" d-none page" id="page_11 page11.php" style="background-color: white;">
    <div class="dashboard_grid">

        <!-- <div class="text-black left" style="background-color: red;">
        </div> -->

        <!-------- MAIN GRID --------->
        <div class="container min-vh-100" style="color: #7B7A7A;">
            <div class="row title_dashboard">
                <div class="col-lg-12 col-sm-12 mt-lg-3 mt-sm-5 mb-sm-3">
                    <span class="h4 ms-lg-5" style="letter-spacing: 2px; font-weight: bold;">DASHBOARD</span>
                    <i class="fa-solid fa-gear h3 setting_icon d-lg-none" style="float: right;" data-bs-toggle="offcanvas" data-bs-target="#user_Mobile_Sidebar" aria-controls="offcanvasRight"></i>
                </div>
            </div>

            <div class="container intruction_container mt-lg-3 ms-lg-5 pt-2 pb-2 text-black dashboard" style="border: 3px solid  #7B7A7A; border-radius: 15px; width: 60%; box-shadow: 5px 10px #888888;">
                <h5 class="h5" style="letter-spacing: 2px; font-weight: bold; color: #7B7A7A;">Instruction</h5>
                <div class="row mb-2">
                    <div class="col-12" style="color: #FFC803">
                        <span class="h6" style="font-weight: bold;">
                            <small>
                                1. Select what type of service you want to proceed with.
                            </small>
                        </span>
                        <br>
                        <span class="h6" style="font-weight: bold;">
                            <small>
                                2. Choose the available appointment inside the table.
                            </small>
                        </span>
                        <br>
                        <span class="h6" style="font-weight: bold;">
                            <small>
                                3. Click the GET APPOINTMENT button to book.
                            </small>
                        </span>
                        <br>
                        <span class="h6" style="font-weight: bold;">
                            <small>
                                4. Select DONE to confirm.
                            </small>
                        </span>
                    </div>
                </div>
            </div>

            <!-------- SERVICES BTNS --------->
                <div class="container services_container mt-lg-5 ms-lg-5 pt-lg-2 mt-sm-5">
                    <h5 class="h5" style="letter-spacing: 2px; font-weight: bold;  color: #7B7A7A;">Services</h5>
                    <div class="row service">

                        <button class="services_btn text-white" data-bs-toggle="modal" data-bs-target="#laboratory">LABORATORY</button>
                        <button class="services_btn text-white">X-RAY</button>
                        <button class="services_btn text-white">PACKAGES</button>
                    </div>

                    <div class="row service">
                        <button class="services_btn text-white">BLOOD CHEMISTRY</button>
                        <button class="services_btn text-white">LABORATORY</button>
                        <button class="services_btn text-white">LABOR ATORY</button>
                    </div>
                </div>
            <!-------- SERVICES BTNS --------->

            <section class="p-5">
                <div class="container">
                    <div class="text-center mb-3">
                        <span class="h5" style="letter-spacing: 2px; font-weight: bold; color: #7B7A7A;">AVAILABLE APPOINTMENT</span>
                    </div>
                    <div class="table-responsive" id="no-more-tables" style="border: 3px solid  #7B7A7A; border-radius: 15px; box-shadow: 5px 10px #888888;">
                        <table class="table">
                            <thead class="text-center">
                                <tr class="table_title" style="font-weight: bold; color: #80CEB8; font-size: 14px;">
                                    <th>DATE</th>
                                    <th>SERVICES</th>
                                    <th>TIME</th>
                                    <th>SLOT</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td class="data-title" data-title="DATE"> <small class="h6 text-black">01102022</small></td>
                                    <td class="data-title" data-title="SERVICES"><small class="h6 text-black">01-19-2022</small></td>
                                    <td class="data-title" data-title="TIME"><small class="h6 text-black"> 7:00 - 9:00 AM</small></td>
                                    <td class="data-title" data-title="SLOT"><small class="h6 text-black">10</small></td>
                                    <td class="data-title" data-title="ACTION">
                                        <button class="text-white" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px;">Get Appointment</button>
                                    </td>
                                </tr>     
                                
                                <tr>
                                    <td class="data-title" data-title="DATE"> <small class="h6 text-black">01102022</small></td>
                                    <td class="data-title" data-title="SERVICES"><small class="h6 text-black">01-19-2022</small></td>
                                    <td class="data-title" data-title="TIME"><small class="h6 text-black"> 7:00 - 9:00 AM</small></td>
                                    <td class="data-title" data-title="SLOT"><small class="h6 text-black">10</small></td>
                                    <td class="data-title" data-title="ACTION">
                                        <button class="text-white" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px;">Get Appointment</button>
                                    </td>
                                </tr>      
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <!-------- MAIN GRID --------->

        <!-------- NESTED GRID --------->
        <div>
            <?php include 'src/pages/dental_clinic/user/sidebarUser.php'; ?>
        </div>
        <!-------- NESTED GRID --------->
    </div>
</div>