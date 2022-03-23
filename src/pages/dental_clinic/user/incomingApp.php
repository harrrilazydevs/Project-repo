<div class="d-none page" id="incomingApp.php" style="background-color: white;">
    <div class="incoming_Appointment">
        <!-------- MAIN GRID --------->
        <div class="container min-vh-100" style="color: #7B7A7A;">
            <div class="row title_dashboard">
                <div class="col-lg-12 col-sm-12 mt-lg-5 mt-sm-5 mb-sm-3 text-center">
                    <span class="h3 ms-lg-5" style="letter-spacing: 3px; font-weight: bold;">INCOMING APPOINTMENTS</span>
                </div>
            </div>

            <div class="container mt-sm-5" >
                <div class="row">
                    <div class="col-lg-12 mx-auto">
                        <div class="table-responsive" style="border: 3px solid  #7B7A7A; border-radius: 15px; box-shadow: 5px 10px #888888;">
                            <table class="table table-fixed">
                                <thead class="text-center">
                                    <tr>
                                        <th class="col-2"><span class="h5" style="font-weight: bold; color: #80CEB8; font-size: 14px;">APPOINTMENT ID</span></th>
                                        <th class="col-2"><span class="h5" style="font-weight: bold; color: #80CEB8; font-size: 14px;">DATE</span></th>
                                        <th class="col-3"><span class="h5" style="font-weight: bold; color: #80CEB8; font-size: 14px;">TIME</span></th>
                                        <th class="col-2"><span class="h5" style="font-weight: bold; color: #80CEB8; font-size: 14px;">SERVICE</span></th>
                                        <th class="col-3"><span class="h5" style="font-weight: bold; color: #80CEB8; font-size: 14px;">DETAILS</span></th>
                                    </tr>
                                </thead>

                                <tbody class="text-center">
                                    <tr>
                                        <td class="col-2 dashboard_tr">01102022</td>
                                        <td class="col-2 dashboard_tr">01-19-2022</td>
                                        <td class="col-3 dashboard_tr">7:00 - 9:00 AM</td>
                                        <td class="col-2 dashboard_tr">Package 1</td>

                                        <td class="col-3 dashboard_tr">
                                            <button class="text-white"  data-bs-toggle="modal" data-bs-target="#incomingAppointment" style="background:#80CEB8; border-radius:5px; text-decoration: none; cursor: pointer; font-size: 12px;">View</button>
                                            <button class="text-white ms-lg-2" style="background: red; border-radius:5px; text-decoration: none; cursor: pointer; font-size: 12px;">Cancel</button>

                                        </td>
                                    </tr>


                                </tbody>

                            </table>
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