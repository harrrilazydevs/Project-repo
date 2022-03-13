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
    <div class="modal fade" id="signUpModal" tabindex="-1" aria-hidden="true">
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
