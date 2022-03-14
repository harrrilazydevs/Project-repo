<!-- LOGIN MODAL -->
<div class="modal" tabindex="-1" id="md_login">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="text-center py-3 text-center" style="border-bottom:3px solid black;">
                <span class="ms-5 h5 fw-bold"> Login </span>
                <i class="fa-solid fa-circle-xmark icon_btn pe-3 fa-xl" style="float:right; padding-top:12px;" data-bs-dismiss="modal"></i>
            </div>

            <div class="wrapper-login">

                <form action="#">
                    <div class="field mt-5">
                        <input type="text" required>
                        <label><i class="fa-solid fa-user"></i> Username</label>
                    </div>
                    <div class="field">
                        <input type="password" required>
                        <label><i class="fa-solid fa-lock"></i> Password</label>
                    </div>
                    <div class="content">

                        <div class="pass-link mt-3">
                            <a href="#" style="text-decoration: none;">Forgot password?</a>
                        </div>
                    </div>
                    <div class="field text-center">
                        <button id="btn_navbar_login" class="py-1 text-white" style="font-weight:bold; background:#F54646; border-radius:20px; width:120px; margin: 6px; border: 1px solid yellow;">Login</button>

                    </div>

                    <div class="signup-link">
                        Don't have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#signUpModal">Signup now</a>
                    </div>

                </form>
            </div>



        </div>

    </div>
</div>
<!-- LOGIN MODAL -->

<!-- SIGN UP MODAL -->
<div class="modal" id="signUpModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="text-center py-3 text-center" style="border-bottom:3px solid black;">
                <span class="ms-5 h5 fw-bold"> Sign Up </span>
                <i class="fa-solid fa-circle-xmark icon_btn pe-3 fa-xl" style="float:right; padding-top:12px;" data-bs-dismiss="modal"></i>
            </div>
            <div class="wrapper-login">

                <form action="#">
                    <div class="field mt-5">
                        <input type="text" required>
                        <label>Username</label>
                    </div>
                    <div class="field">
                        <input type="Full Name" required>
                        <label>Full Name</label>
                    </div>

                    <div class="field">
                        <input type="password" required>
                        <label>Password</label>
                    </div>

                    <div class="field">
                        <input type="Repeat Password" required>
                        <label>Repeat Password</label>
                    </div>

                    <div class="field text-center">
                        <button class="py-1 text-white" style="font-weight:bold; background:#F54646; border-radius:20px; width:120px; margin: 6px; border: 1px solid yellow;">Sign Up</button>

                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- SIGN UP MODAL -->

<!-- CHECK-OUT -->
<div class="modal" id="cartModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="text-center py-3 text-center" style="border-bottom:3px solid black;">
                <span class="ms-5 h5 fw-bold"> Check-out </span>
                <i class="fa-solid fa-circle-xmark icon_btn pe-3 fa-xl" style="float:right; padding-top:12px;" data-bs-dismiss="modal"></i>
            </div>

            <div class="wrapper-login">

                <div class="row">
                    <div class="col-7 mt-3">
                        <form action="#">
                            <div class="field">
                                <input type="Full Name" required>
                                <label>Full Name</label>
                            </div>

                            <div class="field">
                                <input type="Address" required>
                                <label>Address</label>
                            </div>

                            <div class="field">
                                <input type="Phone No." required>
                                <label>Phone No.</label>
                            </div>

                            <p class="ms-3 mt-3">Note to Rider:</p>
                            <textarea name="" id="" cols="30" rows="5" class="ms-3"></textarea>
                        </form>
                    </div>

                    <div class="col-5 mt-5">
                        <p>Payment Options:</p>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="gcashCheckbox">
                            <label class="form-check-label" for="gcashCheckbox">Pick up & Pay via Gcash</label>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="cashCheckbox">
                            <label class="form-check-label" for="cashCheckbox">Delivery via Cash on Delivery</label>
                        </div>

                        <p>Note:</p>

                        <div>
                            <label for="country">Location:</label>
                            <select id="country" name="country" class="form-control" style="width: 70% !important;">
                                <option value="Afghanistan">Muntinlupa</option>
                                <option value="Åland Islands">Åland Islands</option>
                            </select>
                        </div>

                        <div class="mt-3">
                            <p><small style="font-weight:bold;">List of orders: Lorem ipss</small></p>
                            <p><small style="font-weight:bold;">Total:____</small></p>
                        </div>

                        <button class="py-1 text-white" style="font-weight:bold; background:#F54646; border-radius:20px; width:120px; margin: 6px; border: 1px solid yellow;">Place order</button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- CHECL-OUT -->