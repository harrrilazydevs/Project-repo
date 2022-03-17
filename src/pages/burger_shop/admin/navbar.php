<div class="burger_machine_nav shadow">

    <i class="fa-solid fa-bars icon_btn ps-3 pt-3 h5" data-bs-toggle="offcanvas" href="#burger_machine_sidebar" role="button"></i>

    <div  class="p-3 row mx-2" style="float:right">
    <div class="col-7 text-end">
    <div class="fw-bold mt-1">Welcome, <span> <?php echo $_SESSION['username'];?> </span></div>

    </div>
    <div class="col-5">

    <form action="src/database/burger_shop/func/logout.php">
    <button class="btn navbar_btn_logout shadow" type="submit">Log out</button>
    </form>

    </div>

    </div>

</div>