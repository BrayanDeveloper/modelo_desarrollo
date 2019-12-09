<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

  <!-- SideNav slide-out button -->
  <div class="float-left">
    <a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>
  </div>

  <!-- Breadcrumb -->
  <div class="breadcrumb-dn mr-auto">
  </div>

  <div class="d-flex change-mode">

    <!-- Navbar links -->
    <ul class="nav navbar-nav nav-flex-icons ml-auto">

      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle waves-effect" href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> <span class="clearfix d-none d-sm-inline-block">
            <?php echo $_SESSION['user']->name ." ". $_SESSION['user']->last_name; ?>
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="models/logout">Cerrar sesión</a>
          <a class="dropdown-item" href="profile">Mi perfil</a>
        </div>
      </li>

    </ul>
    <!-- Navbar links -->

  </div>

</nav>
<!-- Navbar -->