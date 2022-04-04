<div class="modal fade" id="admin_appointment_upload" aria-hidden="true" style="backdrop-filter: blur(16px) saturate(132%); -webkit-backdrop-filter: blur(16px) saturate(132%); background-color: rgba(17, 25, 40, 0.02);">
    <div class=" modal-dialog">
        <div class="modal-content" style="border-radius: 5%;">
            <div class="modal-body text-black">
                <div class="container" style="border-radius: 5%; border: solid grey 5px;">
                    <h5 class="text-center mt-3 mb-6" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif; font-weight: bold;">UPLOAD</h5>
                    <p><small class="text-muted ms-2">Upload patient's laboratory results.</small></p>
                    <div class="row text-center">
                        <div class="col-12">
                            <img src="src/resources/img/upload.png" alt="">
                        </div>
                    </div>

                    <div class="row text-center mt-4 mb-4">
                        <div class="col-12">
                            <button class="text-white me-4" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">UPLOAD</button>
                            <button class="text-white" data-bs-dismiss="modal" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">BACK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









<div class="modal fade" id="view_patient" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content acc_info">
            <div class="modal-body ">
                <h5 class="h4 fw-bold text-black text-center" style="letter-spacing: 1px; font-family: 'Work Sans', sans-serif;">Patient Information</h5>

                <div class="container" style="background-color: #F9F9F9; border-radius: 20px;">
                    <div class="row mt-3">
                        <div class="col-lg-6 mt-4  col-sm-12">
                            <div class="acc_info">
                                <label for="lastname">Patient ID:</label>
                                <input type="text" placeholder="22334" required>

                                <label for="lastname">Last Name:</label>
                                <input type="text" placeholder="Sebastian" required>

                                <label for="firstname">First Name:</label>
                                <input type="text" placeholder="Baldong" required>

                                <label for="firstname"><small style="font-size: 13px !important;">Middle Name:</small></label>
                                <input type="text" placeholder="Ursilang" required>

                                <label>Sex:</label>
                                <label> <input type="radio" style="display: inline-block !important;"> Male</label>
                                <label> <input type="radio" style="display: inline-block !important;"> Female</label>

                            </div>
                        </div>

                        <div class="col-lg-6 mt-4 col-sm-12">

                            <div class="acc_info">
                                <label for="Addres">Addres:</label>
                                <input type="text" placeholder="22334" required>

                                <label for="Street">Street</label>
                                <input type="text" placeholder="Matabang" required>

                                <label for="Brgy">Brgy:</label>
                                <input type="text" placeholder="Tibo Brgy" required>

                                <label for="City">City</label>
                                <input type="text" placeholder="Taguig" required>


                                <label for="Province">Province</label>
                                <input type="text" placeholder="Laguna" required>

                                <label for="Contact">Contact No.</label>
                                <input type="text" placeholder="0231203012" required>

                            </div>
                        </div>


                        <div class="row text-center mt-4 mb-4">
                            <div class="col-12">
                                <button class="text-white me-4" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">DONE</button>
                                <button class="text-white" data-bs-dismiss="modal" style="background:red; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">DELETE</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>