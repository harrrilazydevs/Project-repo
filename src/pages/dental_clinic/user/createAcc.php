<div class="page" id="page_createAcc">
    <div class="container pt-2" style="color: #A0A0A0;">
        <div class="row">
            <div class="col-lg-8">
                <span class="h3" style="letter-spacing: 2px; font-weight: bold;">CREATE ACCOUNT</span>
            </div>

            <div class="col-lg-4">
                <i class="fa-solid fa-gear h3 m-2" style="float: right;"></i>

            </div>
        </div>

    </div>

    <section class="mt-3" style="color: #A0A0A0;">
        <div class="container mb-4">
            <div class="row">
                <div class="col-7">
                    <p class="ms-4 ps-4" style="font-weight: bold;">Personal settings</p>
                    <div class="container" style=" border: 2px solid black; padding: 10px; border-radius: 12px;">
                        <form class="mb-1">
                            <label class="h5 createAcc_label" for="fname">First name:</label>
                            <input class="createAcc_Input" type="text" id="fname" name="fname">

                            <label class="h5 createAcc_label" for="mname">Middle Name:</label>
                            <input class="createAcc_Input" type="text" id="fname" name="mname">

                            <label class="h5 createAcc_label" for="lname">Last Name:</label>
                            <input class="createAcc_Input" type="text" id="fname" name="lname">

                            <label class="h5 createAcc_label" for="bdate">Birth Date:</label>
                            <input class="createAcc_Input" type="text" id="bdate">

                            <label class="h5 createAcc_label" for="age">Age:</label>
                            <input class="createAcc_Input" type="text" id="age">

                            <!-- GENDER INPUT AND LABEL -->
                            <label class="h5 createAcc_label">Gender: </label>
                            <input class="mt-3" type="radio" id="male" value="male" style="margin-left: 20% !important;">
                            <label class="h5" for="male">Male</label>

                            <input type="radio" id="female" value="female" style="margin-left: 20% !important;">
                            <label class="h5" for="female">Female</label>
                            <!-- GENDER INPUT AND LABEL -->

                            <label class="h5 createAcc_label" for="contact">Contact No:</label>
                            <input class="createAcc_Input" type="text" id="contact">

                            <label class="h5 createAcc_label" for="house">House No:</label>
                            <input class="createAcc_Input" type="text" id="house">

                            <label class="h5 createAcc_label" for="street">Street:</label>
                            <input class="createAcc_Input" type="text" id="strett">

                            <label class="h5 createAcc_label" for="Brgy">Brgy:</label>
                            <input class="createAcc_Input" type="text" id="Brgy">

                            <label class="h5 createAcc_label" for="City">City:</label>
                            <input class="createAcc_Input" type="text" id="City">

                            <label class="h5 createAcc_label" for="Province">Province:</label>
                            <input class="createAcc_Input" type="text" id="Province">

                        </form>
                    </div>
                </div>

                <div class="col-5">
                    <p style="font-weight: bold;">Account settings</p>
                    <div class="container" style=" border: 2px solid black; padding: 10px; border-radius: 12px;">
                        <form class="mb-1">
                            <label class="h5 mt-3 ms-2" for="fname">Username:</label>
                            <input class="accSetting_input" type="text" id="Username" name="Username">

                            <label class="h5 mt-3 ms-2 p" for="password">Password:</label>
                            <input class="accSetting_input" type="password" id="password">

                        </form>
                    </div>
                    <div class="mt-3 text-center">
                        <button data-bs-toggle="modal" data-bs-target="#createAcc" class="me-5" style="font-weight:bold; background:#80CEB8; border-radius:20px; width:120px; margin: 6px; border: none; height: 35px;">Create</button>
                        <button class="me-5" id="#" style="font-weight:bold; background:#F15050; border-radius:20px; width:120px; margin: 6px; border: none; height: 35px;">Cancel</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>