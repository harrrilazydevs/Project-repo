<div class="modal" tabindex="-1" id="md_account_settings">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="text-center py-3 text-center" style="border-bottom:3px solid black;">
        <span class="ms-5 h5 fw-bold"> My Account </span>
            <i class="fa-solid fa-circle-xmark icon_btn pe-3 fa-xl" style="float:right; padding-top:12px;"  data-bs-dismiss="modal"></i>
        </div>
      
        <div class="p-3 md_form">
            <h6 class="fw-bold text-muted mb-3">Account Settings</h6>

            <label>Username</label>
            <input type="text" id="txt_username" class="form-control form-control-sm">

            <label class="mt-2">Email</label>
            <input type="text" id="txt_email" class="form-control form-control-sm">

            <label class="mt-2">Password</label>
            <input type="text" id="txt_password" class="form-control form-control-sm">
            
            <label class="mt-2">Access</label>
            <select class="form-select form-select-sm" name="" id="sel_access_level">
                <option value="user">User</option>
                <option value="admin">Admin</option>
            </select>

            <div class="mt-2">
                <a id="btn_delete_account" class="icon_btn" >Delete account</a>
            </div>


            <div class="text-center mt-3">
                <button class="shadow" id="btn_update_account">Update</button>

            </div>



        </div>
      




    </div>
  </div>
</div>