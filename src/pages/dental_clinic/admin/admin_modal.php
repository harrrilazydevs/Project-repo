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
                            <button  id="btn_upload_document" class="text-white me-1 "  style="background:#80CEB8; border-radius:5px; border: none; cursor: pointer; font-size: 12px; width: 100px; height: 2rem;">UPLOAD</button>
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