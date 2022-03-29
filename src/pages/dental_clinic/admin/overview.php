<div class="d-none page" id="page_overview" style="background-color: white;">
    <?php
     include 'admin_sidebar.php';
    ?>


    <section class=" min-vh-100" >

        <div class="container" style="color: #7B7A7A;">
            <div class="row overview_admin">
                <div class="col mt-lg-5 mt-xl-5 mt-sm-3">
                    <small class="h2 ms-lg-1 fw-bold" style="font-size: 15px; letter-spacing: 2px; font-family: 'Work Sans', sans-serif;">ADMIN</small>
                    <span class="h2 ms-lg-5 fw-bold" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif;"><br>OVERVIEW</span>
                </div>

                <img class="p-0 mt-lg-5 mt-xl-5 mt-sm-3 overview_admin_img" src="src/resources/img/user.png" style="width: 100px; height: 100px; border-radius: 100%; float: right;">

            </div>
        </div>

        <div class="container mt-lg-5 mt-xl-5">
            <div class="row  row-cols-3 d-flex justify-content-center mt-sm-5">
                <div class="col mb-3">
                    <div class="card text-white h-100" style="background-color: var(--bgc); box-shadow: 5px 10px #888888;">
                        <span class="ms-3 mt-4 pt-2" style="font-size: 12px; letter-spacing: 4px; color:white; -webkit-text-stroke-width: 1px;">Total profit</span>
                        <span class="ms-3 mt-2 mb-4" style="font-size: 35pt; color:white; -webkit-text-stroke-width: 1px;-webkit-text-stroke-color: #6A0F03;">₱ 20,000</span>
                    </div>
                </div>

                <div class="col mb-3">
                    <div class="card text-white h-100" style="background-color: var(--bgc); box-shadow: 5px 10px #888888;">
                        <span class="ms-3 mt-4 pt-2" style="font-size: 12px; letter-spacing: 4px; color:white; -webkit-text-stroke-width: 1px;">Unique Visitors</span>
                        <span class="ms-3 mt-2 mb-4" style="font-size: 35pt; color:white; -webkit-text-stroke-width: 1px;-webkit-text-stroke-color: #6A0F03;">₱ 50</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-3 pt-5">
            <div class="text-center mb-3">
                <span class="h6" style="letter-spacing: 2px; font-weight: bold; color: #000;">AVAILABLE APPOINTMENT</span>
            </div>
            <div class="table-responsive" id="no-more-tables" style="border: 3px solid  #7B7A7A; border-radius: 15px; box-shadow: 5px 10px #888888;">
                <table class="table">
                    <thead class="text-center">
                        <tr class="table_title">
                            <th>ID</th>
                            <th>PATIENT ID</th>
                            <th>NAME</th>
                            <th>DATE</th>
                            <th>TIME</th>
                            <th>SERVICE</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <td class="data-title" data-title="ID"> <small class="h6 text-black">01</small></td>
                            <td class="data-title" data-title="PATIENT ID"><small class="h6 text-black">01192022</small></td>
                            <td class="data-title" data-title="NAME"><small class="h6 text-black">Lloyd Berdugo</small></td>
                            <td class="data-title" data-title="DATE"><small class="h6 text-black">01-19-2022</small></td>
                            <td class="data-title" data-title="TIME"><small class="h6 text-black">7:00 - 9:00 AM</small></td>
                            <td class="data-title" data-title="SERVICE"><small class="h6 text-black">Drug Test</small></td>
                            <td class="data-title" data-title="DETAILS">
                                <button class="text-white" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px;">Show</button>
                                <button class="text-white ms-lg-2" style="background: red; border-radius:5px; text-decoration: none; cursor: pointer; font-size: 12px;  border: none;">No Show</button>
                            </td>
                        </tr>
                        

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>