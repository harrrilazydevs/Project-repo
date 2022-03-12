<div class="burger_machine_nav">

    <header class="header" id="header">
      <nav class="nav bd-container">
        <li href="#" class="nav__logo"> <img src="src/resources/img/logo.png" width="50">OTAKU</li>
        <div class="nav__menu mt-lg-3" id="nav-menu">
          <ul class="nav__list">
            <li class="nav__item"><a  href="#" class="nav__link">Home</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Contact</a></li>
            <li class="nav__item"><a href="#" class="nav__link">Carts</a></li>
          
          </ul>
        </div>

        <div class="nav__toggle">
          <i class="fa-solid fa-bars icon_btn ps-3 pb-45" data-bs-toggle="offcanvas" href="#burger_machine_sidebar" role="button"></i>

        </div>



      </nav>
    </header>

</div>

<div class="offcanvas offcanvas-start burger_machine_sidebar" tabindex="-1" id="burger_machine_sidebar" aria-labelledby="burger_machine_sidebarLabel">
    <div class="offcanvas-header">
        <img src="<?php echo $_SESSION['logo_path'] ?>" class="burger_machine_nav_logo" />
    </div>
    <div class="offcanvas-body burger_machine_sidebar px-0">

        <ul class="list-group list-group-flush" >
            <li class="list-group-item fs-6 align-center"><i class="fa-solid fa-fw fa-house pe-3"></i> Home</a></li>
            <li class="list-group-item fs-6 align-center"><i class="fa-solid fa-fw fa-house pe-3"></i> Contacts</a></li>
            <li class="list-group-item fs-6 align-center"><i class="fa-solid fa-fw fa-house pe-3"></i> Carts</a></li>

        </ul>
    </div>
</div>

