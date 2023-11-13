<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-image">
          <img src="<?php echo base_url(); ?>/assets/img/avatar/<?php echo $this->session->userdata('logged_in_imagine_admin')->avatar; ?>" alt="profile">
          <span class="login-status online"></span>
          <!--change to offline or busy as needed-->
        </div>
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2"><?php echo $this->session->userdata('logged_in_imagine_admin')->username; ?></span>
          <span class="text-secondary text-small">Administrator</span>
        </div>
        <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('Admin/Dashboard') ?>">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-title">Master</span>
        <i class="menu-arrow"></i>
        <i class="mdi mdi-crosshairs-gps menu-icon"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Admin/Master') ?>">Master Admin</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('MasterBanner') ?>">Master Text Slider</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('MasterQuotes') ?>">Master Quotes</a></li>
          <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('MasterTestimoni') ?>">Master Testimoni</a></li>
        </ul>
      </div>
    </li>
  
  </ul>
</nav>