<div class="offcanvas offcanvas-end" tabindex="-1" id="user_Mobile_Sidebar" style="background-color: #4DBDAC;">
    <div class="offcanvas-header">

        <div class="container mt-5 ms-3">
            <h6 class="text-white" style="font-weight: bold; font-size: 20px;">Hello,</h6>
            <h5 class="text-white" style="font-weight: bold;"><?php echo $_SESSION['username'];?>!</h5>

        </div>

        <div class="container mt-3 ps-5">
        <div class="text-end">
                <i class="fa-solid fa-user-gear icon_btn"></i>
            </div>
            <img src="src/resources/img/user.png" style="width: 100px; height: 100px; border-radius: 100%;">
        </div>

    </div>
    <div class="offcanvas-body  px-0">

        <div class="container">
            <div class="row ms-4">
                <div class="col-6">
                    <span class="h6 " style="font-weight: bold;">Reminders!</span>
                </div>
                <div class="col-6 pt-0">
                    <small class="mt-2" style="font-weight: bold; font-size: 12px; margin-left: 23% !important;">
                        <a href="#" class="text-white">View All <i class="fa-solid fa-chevron-right"></i></a>
                    </small>
                </div>
            </div>
        </div>

        <ul class="list-group ps-5" style="width: 200px;">
            <li class="list-group-item sidebar_dental  border-0 m-0 p-2"><i class="fa-solid  fa-envelope"></i> <span>Reminders</span></a></li>
            <li class="list-group-item sidebar_dental  border-0 m-0 p-2"><i class="fa-solid  fa-envelope"></i> <span>Reminders</span></a></li>
        </ul>
    </div>
</div>