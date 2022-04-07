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

                    <form id="upload_form">
    <input type="text" hidden name="id" id="txt_upload_id">
    <input type="file" hidden name="file" id="txt_upload_file">
                    <div class="row text-center mt-4 mb-4">
                        <div class="col-12">
                            <button class="text-white me-4" id="btn_upload_document" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">UPLOAD</button>
                            <button class="text-white" data-bs-dismiss="modal" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">BACK</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="admin_edit_service" aria-hidden="true" style="backdrop-filter: blur(16px) saturate(132%); -webkit-backdrop-filter: blur(16px) saturate(132%); background-color: rgba(17, 25, 40, 0.02);">
    <div class=" modal-dialog">
        <div class="modal-content" style="border-radius: 5%;">
            <div class="modal-body text-black">
                <div class="container" style="border-radius: 5%; border: solid grey 5px;">
                    <h5 class="text-center mt-3 mb-6" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif; font-weight: bold;">Edit Service</h5>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Service</label>
                            <input type="text" class="form-control" id="txt_edit_service_name">

                            <label class="mt-2">Price</label>
                            <input type="text" class="form-control" id="txt_edit_service_price">

                            <label class="mt-2">Service category</label>
                            <select id="txt_edit_service_category" class="form-select">
                                <option value="X-ray">X-ray</option>
                                <option value="Laboratory">Laboratory</option>
                                <option value="Blood Chemistry">Blood Chemistry</option>
                                <option value="Ultrasound">Ultrasound</option>
                                <option value="Others">Others</option>
                            </select>

                            <label class="mt-2">Status</label>
                            <select id="txt_edit_service_status" class="form-select">
                                <option value="OK">OK</option>
                                <option value="UNAVAILABLE">UNAVAILABLE</option>
                            </select>
                        </div>
                    </div>

                    <div class="row text-center mt-4 mb-4">
                        <div class="col-12">
                            <button class="text-white me-4" id="btn_edit_service_save"  style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">SAVE</button>
                            <button class="text-white" data-bs-dismiss="modal" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">CANCEL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="admin_add_service" aria-hidden="true" style="backdrop-filter: blur(16px) saturate(132%); -webkit-backdrop-filter: blur(16px) saturate(132%); background-color: rgba(17, 25, 40, 0.02);">
    <div class=" modal-dialog">
        <div class="modal-content" style="border-radius: 5%;">
            <div class="modal-body text-black">
                <div class="container" style="border-radius: 5%; border: solid grey 5px;">
                    <h5 class="text-center mt-3 mb-6" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif; font-weight: bold;">Add Service</h5>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Service</label>
                            <input type="text" class="form-control" id="txt_add_service_name">

                            <label class="mt-2">Price</label>
                            <input type="text" class="form-control" id="txt_add_service_price">

                            <label class="mt-2">Service category</label>
                            <select id="txt_add_service_category" class="form-select">
                                <option value="X-ray">X-ray</option>
                                <option value="Laboratory">Laboratory</option>
                                <option value="Blood Chemistry">Blood Chemistry</option>
                                <option value="Ultrasound">Ultrasound</option>
                                <option value="Others">Others</option>
                            </select>

                            <label class="mt-2">Status</label>
                            <select id="txt_add_service_status" class="form-select">
                                <option value="OK">OK</option>
                                <option value="UNAVAILABLE">UNAVAILABLE</option>
                            </select>
                        </div>
                    </div>
                    <div class="row text-center mt-4 mb-4">
                        <div class="col-12">
                            <button class="text-white me-4" id="btn_add_service_save"  style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">SAVE</button>
                            <button class="text-white" data-bs-dismiss="modal" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">CANCEL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="admin_edit_package" aria-hidden="true" style="backdrop-filter: blur(16px) saturate(132%); -webkit-backdrop-filter: blur(16px) saturate(132%); background-color: rgba(17, 25, 40, 0.02);">
    <div class=" modal-dialog">
        <div class="modal-content" style="border-radius: 5%;">
            <div class="modal-body text-black">
                <div class="container" style="border-radius: 5%; border: solid grey 5px;">
                    <h5 class="text-center mt-3 mb-6" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif; font-weight: bold;">Edit Service</h5>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Package Name</label>
                            <input type="text" class="form-control" id="txt_edit_package_name">

                            <label class="mt-2">Price</label>
                            <input type="text" class="form-control" id="txt_edit_package_price">

                            <label class="mt-2">Package Availability</label>
                            <select id="txt_edit_package_status" class="form-select">
                                <option value="OK">Available</option>
                                <option value="UNAVAILABLE">Not Available</option>
                            </select>
                        </div>
                    </div>

                    <div class="row text-center mt-4 mb-4">
                        <div class="col-12">
                            <button class="text-white me-4" id="btn_edit_package_save"  style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">SAVE</button>
                            <button class="text-white" data-bs-dismiss="modal" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">CANCEL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="admin_add_package" aria-hidden="true" style="backdrop-filter: blur(16px) saturate(132%); -webkit-backdrop-filter: blur(16px) saturate(132%); background-color: rgba(17, 25, 40, 0.02);">
    <div class=" modal-dialog">
        <div class="modal-content" style="border-radius: 5%;">
            <div class="modal-body text-black">
                <div class="container" style="border-radius: 5%; border: solid grey 5px;">
                    <h5 class="text-center mt-3 mb-6" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif; font-weight: bold;">Add Service</h5>
                    <div class="row">
                        <div class="col-12">
                            <label for="">Package name</label>
                            <input type="text" class="form-control" id="txt_add_package_name">

                            <label class="mt-2">Price</label>
                            <input type="text" class="form-control" id="txt_add_package_price">

                            <label class="mt-2">Status</label>
                            <select id="txt_add_package_status" class="form-select">
                                <option value="OK">OK</option>
                                <option value="UNAVAILABLE">UNAVAILABLE</option>
                            </select>
                        </div>
                    </div>
                    <div class="row text-center mt-4 mb-4">
                        <div class="col-12">
                            <button class="text-white me-4" id="btn_add_package_save"  style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">SAVE</button>
                            <button class="text-white" data-bs-dismiss="modal" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">CANCEL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="admin_package_view_services" aria-hidden="true" style="backdrop-filter: blur(16px) saturate(132%); -webkit-backdrop-filter: blur(16px) saturate(132%); background-color: rgba(17, 25, 40, 0.02);">
    <div class=" modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 5%;">
            <div class="modal-bodytext-black">
                <div class="container" style="border-radius: 5%; border: solid grey 5px;">
                    <h5 class="text-center text-dark mt-3 mb-6" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif; font-weight: bold;">Package Details</h5>
                    <div class="row">
                        <div class="col-12  p-5 pb-2 ">
                            <div class="table-responsive" id="no-more-tables" style="max-height:45vh;border: 3px solid  #7B7A7A; border-radius: 15px; box-shadow: 2px 3px #888888;">
                                <table class="table table-hover" id="tbl_package_services">
                                    <thead class="text-center">
                                        <tr class="table_title">
                                            <th>SERVICE</th>
                                            <th width="20%">ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-center"></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center mt-4 mb-4">
                        <div class="col-12">
                            <button class="text-white me-2" id="btn_add_service_to_package"  style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">ADD</button>
                            <button class="text-white " data-bs-dismiss="modal" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="admin_package_add_services" aria-hidden="true" style="backdrop-filter: blur(16px) saturate(132%); -webkit-backdrop-filter: blur(16px) saturate(132%); background-color: rgba(17, 25, 40, 0.02);">
    <div class=" modal-dialog modal-lg">
        <div class="modal-content" style="border-radius: 5%;">
            <div class="modal-bodytext-black">
                <div class="container" style="border-radius: 5%; border: solid grey 5px;">
                    <h5 class="text-center text-dark mt-3 mb-6" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif; font-weight: bold;">Select a Service</h5>
                    <div class="row">
                        <div class="col-12  d-flex justify-content-around pt-3 p-5 pb-0">
                        <div class="search text-center" style="box-shadow: 2px 3px #888888; float: right !important;">
                                <span style="font-size: 1rem; padding-left: 1rem; color: #888888;"><i class="fa-solid fa-magnifying-glass"></i></span>
                                <input id="txt_search_appointment_history" type="search" placeholder="Search..." style="border: none; outline: none; ">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12  p-5 pt-3 pb-2 ">
                            
                            <div class="table-responsive" id="no-more-tables" style="max-height:45vh;border: 3px solid  #7B7A7A; border-radius: 15px; box-shadow: 2px 3px #888888;">
                                <table class="table table-hover" id="tbl_package_add_services">
                                    <thead >
                                        <tr class="table_title text-center">
                                            <th width="15%"></th>

                                            <th>SERVICE</th>
                                        </tr>
                                    </thead>
                                    <tbody></tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center mt-4 mb-4">
                        <div class="col-12">
                            <button class="text-white me-2" id="btn_add_service_to_package_save"  style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">ADD</button>
                            <button class="text-white " data-bs-dismiss="modal" style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">CLOSE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>











<div class="modal fade" id="admin_set_appointment" aria-hidden="true" style="backdrop-filter: blur(16px) saturate(132%); -webkit-backdrop-filter: blur(16px) saturate(132%); background-color: rgba(17, 25, 40, 0.02);">
    <div class=" modal-dialog">
        <div class="modal-content" style="border-radius: 5%;">
            <div class="modal-body text-black">
                <div class="container" style="border-radius: 5%; border: solid grey 5px;">
                    <h5 class="text-center mt-3 mb-6" style="letter-spacing: 2px; font-family: 'Work Sans', sans-serif; font-weight: bold;">
                    Confirm Appointment Status</h5>
                    <div class="row mt-3 ms-2">
                        <p id="txt_overview_line">Do you want to mark this appointment as "SHOW"?</p>
                    </div>
                    <div class="row text-center mt-2 mb-4">
                        <div class="col-12">
                            <button class="text-white me-4" id="btn_confirm_appointment_show"  style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">CONFIRM</button>
                            <button class="text-white" data-bs-dismiss="modal" style="background:red; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">CANCEL</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="md_msg_box" aria-hidden="true">
    <div class=" modal-dialog">
        <div class="modal-content" style="background-color: #80CEB8; border-radius: 5%;">
            <div class="modal-body text-black">
                <div class="container" style="border-radius: 5%; border: solid white;">
                    <div class="row  text-center">
                        <div class="col-12">
                            <i class="fa-solid fa-square-check h1 m-5 text-white" style="font-size: 100px;" id="icon_1"></i>
                            <i class="fa-solid fa-ban h1 m-5 text-white" style="font-size: 100px;" id="icon_2"></i>
                        </div>
                    </div>
                    <div class="row text-center align-items-center mb-5">
                        <div class="col-12">
                            <span class="h3 text-white" id="msg_body">
                                ACCOUNT SUCCESSFULLY CREATED!
                            </span>
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